<?php
namespace Packages\Form;

class FormValidator 
{
    public $validatorRules;
    public $errors;
    public $custom_validators;
    public $data;
    public $isValid;
	
    public function __construct() {
        $this->validatorRules = array();
        $this->errors = array();
        $this->custom_validators=array();
        $this->isValid = true;
        
        // check Request method
        if(strcmp($_SERVER['REQUEST_METHOD'],'POST')==0) {
            $this->data = $_POST;
        } else {
            $this->data = $_GET;
        }
    }
    
    /**
     * Set list rules for validation
     * @param Array $rules
     */
    public function setRules($rules) {
        $this->validatorRules = $rules; 
    }

    public function addValidation($variable,$validator,$error)
    {
            $validator_obj = new ValidatorObj();
            $validator_obj->variable_name = $variable;
            $validator_obj->validator_string = $validator;
            $validator_obj->error_string = $error;
            array_push($this->validator_array,$validator_obj);
    }
    
    /**
     * Get error for one field
     * @param String $fieldName
     * @param String $type
     * 
     * @return String
     */
    public function getFieldErrors($fieldName, $type = 'string') {
        if ($type == 'array') {
            return $this->errors[$fieldName];
        } else {
            return '<span class="error-text">'.implode(', ', (array) $this->errors[$fieldName]).'</span>';
        }
        
    }
    
    /**
     * Check valid form
     * 
     * @return Boolean
     */
    public function ValidateForm() {
       
        foreach ($this->validatorRules as $fieldName => $rules) {
            foreach ($rules as $ruleName => $message) {
                if (is_numeric($ruleName)) {
                    $this->checkFieldRule($fieldName, $message, '');
                } else {
                    $this->checkFieldRule($fieldName, $ruleName, $message);
                }
            }
        }
        
        return $this->isValid;
    }
    
    /**
     * get data base on field name
     * @param String $fieldName
     * @return String
     */
    private function getDataField($fieldName) {
        if (strpos($fieldName, '[') !== false) {
            preg_match("/(.*)\[/U", $fieldName, $pat_array);
            $element = array($pat_array[1]);
            preg_match_all ("/(\[(.*)\])/U", $fieldName, $pat_array);
            foreach ($pat_array[2] as $value) {
                $element[] = $value;
            }
        } else {
            $element = array($fieldName);
        }
        $data = null;
        $temp = $this->data;
        foreach ($element as $key) {
            if (isset($temp[$key])) {
                $temp = $temp[$key];
                $data = $temp;
            } else {
                $data = null;
                break;
            }
        }
        
        return $data;
    }


	function ValidateObject($validatorobj,$formvariables,&$error_string)
	{
		$bret = true;

		$splitted = explode("=",$validatorobj->validator_string);
		$command = $splitted[0];
		$command_value = '';

		if(isset($splitted[1]) && strlen($splitted[1])>0)
		{
			$command_value = $splitted[1];
		}

		$default_error_message="";
		
		$input_value ="";

		if(isset($formvariables[$validatorobj->variable_name]))
		{
		 $input_value = $formvariables[$validatorobj->variable_name];
		}

		$bret = $this->ValidateCommand($command,$command_value,$input_value,
									$default_error_message,
									$validatorobj->variable_name,
									$formvariables);

		
		if(false == $bret)
		{
			if(isset($validatorobj->error_string) &&
				strlen($validatorobj->error_string)>0)
			{
				$error_string = $validatorobj->error_string;
			}
			else
			{
				$error_string = $default_error_message;
			}

		}//if
		return $bret;
	}
    	
    public function validateReq($fieldName, $message) {
        $formValid = true;
        $data = $this->getDataField($fieldName);
        if (( $data == null) || strlen($data) <=0) {
            $formValid = false;
            if ($message == "") {
                $this->errors[$fieldName]['required'] = "Field ".$fieldName. " is required";
            } else {
                $this->errors[$fieldName]['required'] = $message;
            }
        }
        
        return $formValid;	
    }

    public function validateMaxLen($fieldName, $maxLen, $message)
    {
        $formValid = true;
        $data = $this->getDataField($fieldName);
        if ($data) {
            $input_length = strlen($data);
            if($input_length > $maxLen) {
                $formValid = false;
                $this->setMessageError($fieldName, 'maxlen', $message, "Please input length < ".$maxLen);
            }
        }

        return $formValid;
    }

	function validate_minlen($input_value,$min_len,$variable_name,&$default_error_message)
	{
		$bret = true;
		if(isset($input_value) )
		{
			$input_length = strlen($input_value);
			if($input_length < $min_len)
			{
				$bret=false;
				$default_error_message = sprintf(E_VAL_MINLEN_CHECK_FAILED,$min_len,$variable_name);
			}
		}
		return $bret;
	}

	function test_datatype($input_value,$reg_exp)
	{
		if(ereg($reg_exp,$input_value))
		{
			return false;
		}
		return true;
	}
        
        private function setMessageError($fieldName, $rule, $message, $defaultMesage) {
            if ($message == "") {
                $this->errors[$fieldName][$rule] = $defaultMesage;
            } else {
                $this->errors[$fieldName][$rule] = $message;
            }
        }
	public function validateEmail($fieldName, $message) 
	{
            $data = $this->getDataField($fieldName);
            $formValid = true;
            if (!eregi("^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$", $data)) {
                $formValid = false;
                $this->setMessageError($fieldName, 'email', $message, "Input to ".$fieldName. " must is email");
            }
            
            return $formValid;
	}

	function validate_for_numeric_input($input_value,&$validation_success)
	{
		
		$more_validations=true;
		$validation_success = true;
		if(strlen($input_value)>0)
		{
			
			if(false == is_numeric($input_value))
			{
				$validation_success = false;
				$more_validations=false;
			}
		}
		else
		{
			$more_validations=false;
		}
		return $more_validations;
	}

	function validate_lessthan($command_value,$input_value,
                $variable_name,&$default_error_message)
	{
		$bret = true;
		if(false == $this->validate_for_numeric_input($input_value,
                                    $bret))
		{
			return $bret;
		}
		if($bret)
		{
			$lessthan = doubleval($command_value);
			$float_inputval = doubleval($input_value);
			if($float_inputval >= $lessthan)
			{
				$default_error_message = sprintf(E_VAL_LESSTHAN_CHECK_FAILED,
										$lessthan,
										$variable_name);
				$bret = false;
			}//if
		}
		return $bret ;
	}

	function validate_greaterthan($command_value,$input_value,$variable_name,&$default_error_message)
	{
		$bret = true;
		if(false == $this->validate_for_numeric_input($input_value,$bret))
		{
			return $bret;
		}
		if($bret)
		{
			$greaterthan = doubleval($command_value);
			$float_inputval = doubleval($input_value);
			if($float_inputval <= $greaterthan)
			{
				$default_error_message = sprintf(E_VAL_GREATERTHAN_CHECK_FAILED,
										$greaterthan,
										$variable_name);
				$bret = false;
			}//if
		}
		return $bret ;
	}

    function validate_select($input_value,$command_value,&$default_error_message,$variable_name)
    {
	    $bret=false;
		if(is_array($input_value))
		{
			foreach($input_value as $value)
			{
				if($value == $command_value)
				{
					$bret=true;
					break;
				}
			}
		}
		else
		{
			if($command_value == $input_value)
			{
				$bret=true;
			}
		}
        if(false == $bret)
        {
            $default_error_message = sprintf(E_VAL_SHOULD_SEL_CHECK_FAILED,
                                            $command_value,$variable_name);
        }
	    return $bret;
    }

	function validate_dontselect($input_value,$command_value,&$default_error_message,$variable_name)
	{
	   $bret=true;
		if(is_array($input_value))
		{
			foreach($input_value as $value)
			{
				if($value == $command_value)
				{
					$bret=false;
					$default_error_message = sprintf(E_VAL_DONTSEL_CHECK_FAILED,$variable_name);
					break;
				}
			}
		}
		else
		{
			if($command_value == $input_value)
			{
				$bret=false;
				$default_error_message = sprintf(E_VAL_DONTSEL_CHECK_FAILED,$variable_name);
			}
		}
	  return $bret;
	}


    public function checkFieldRule($fieldName, $rule, $message) {
        $formValid = true;
        switch ($rule) {
            case 'required':
                $formValid = $this->validateReq($fieldName, $message);
                break;
            case 'email':
                $formValid = $this->validateEmail($fieldName, $message);
                break;
        }
        
        if (!$formValid) {
            $this->isValid = false;
        }
    }
    
    
    
    
	function ValidateCommand($command,$command_value,$input_value,&$default_error_message,$variable_name,$formvariables)
	{
		$bret=true;
		switch($command)
		{
			case 'req':
						{
							$bret = $this->validate_req($input_value, $default_error_message,$variable_name);
							break;
						}

			case 'maxlen':
						{
							$max_len = intval($command_value);
							$bret = $this->validate_maxlen($input_value,$max_len,$variable_name,
												$default_error_message);
							break;
						}

			case 'minlen':
						{
							$min_len = intval($command_value);
							$bret = $this->validate_minlen($input_value,$min_len,$variable_name,
											$default_error_message);
							break;
						}

			case 'alnum':
						{
							$bret= $this->test_datatype($input_value,"[^A-Za-z0-9]");
							if(false == $bret)
							{
								$default_error_message = sprintf(E_VAL_ALNUM_CHECK_FAILED,$variable_name);
							}
							break;
						}

			case 'alnum_s':
						{
							$bret= $this->test_datatype($input_value,"[^A-Za-z0-9 ]");
							if(false == $bret)
							{
								$default_error_message = sprintf(E_VAL_ALNUM_S_CHECK_FAILED,$variable_name);
							}
							break;
						}

			case 'num':
            case 'numeric':
						{
							$bret= $this->test_datatype($input_value,"[^0-9]");
							if(false == $bret)
							{
								$default_error_message = sprintf(E_VAL_NUM_CHECK_FAILED,$variable_name);
							}
							break;							
						}

			case 'alpha':
						{
							$bret= $this->test_datatype($input_value,"[^A-Za-z]");
							if(false == $bret)
							{
								$default_error_message = sprintf(E_VAL_ALPHA_CHECK_FAILED,$variable_name);
							}
							break;
						}
			case 'alpha_s':
						{
							$bret= $this->test_datatype($input_value,"[^A-Za-z ]");
							if(false == $bret)
							{
								$default_error_message = sprintf(E_VAL_ALPHA_S_CHECK_FAILED,$variable_name);
							}
							break;
						}
			case 'email':
						{
							if(isset($input_value) && strlen($input_value)>0)
							{
								$bret= $this->validate_email($input_value);
								if(false == $bret)
								{
									$default_error_message = E_VAL_EMAIL_CHECK_FAILED;
								}
							}
							break;
						}
			case "lt": 
			case "lessthan": 
						{
							$bret = $this->validate_lessthan($command_value,
													$input_value,
													$variable_name,
													$default_error_message);
							break;
						}
			case "gt": 
			case "greaterthan": 
						{
							$bret = $this->validate_greaterthan($command_value,
													$input_value,
													$variable_name,
													$default_error_message);
							break;
						}

			case "regexp":
						{
							if(isset($input_value) && strlen($input_value)>0)
							{
								if(!preg_match("$command_value",$input_value))
								{
									$bret=false;
									$default_error_message = sprintf(E_VAL_REGEXP_CHECK_FAILED,$variable_name);
								}
							}
							break;
						}
		  case "dontselect": 
		  case "dontselectchk":
          case "dontselectradio":
						{
							$bret = $this->validate_dontselect($input_value,
															   $command_value,
															   $default_error_message,
																$variable_name);
							 break;
						}//case

          case "shouldselchk":
          case "selectradio":
                      {
                            $bret = $this->validate_select($input_value,
							       $command_value,
							       $default_error_message,
								    $variable_name);
                            break;
                      }//case
		  case "selmin":
						{
							$min_count = intval($command_value);

							if(isset($input_value))
                            {
							    if($min_count > 1)
							    {
							        $bret = (count($input_value) >= $min_count )?true:false;
							    }
                                else
                                {
                                  $bret = true;
                                }
                            }
							else
							{
								$bret= false;
								$default_error_message = sprintf(E_VAL_SELMIN_CHECK_FAILED,$min_count,$variable_name);
							}

							break;
						}//case
		 case "selone":
						{
							if(false == isset($input_value)||
								strlen($input_value)<=0)
							{
								$bret= false;
								$default_error_message = sprintf(E_VAL_SELONE_CHECK_FAILED,$variable_name);
							}
							break;
						}
		 case "eqelmnt":
						{

							if(isset($formvariables[$command_value]) &&
							   strcmp($input_value,$formvariables[$command_value])==0 )
							{
								$bret=true;
							}
							else
							{
								$bret= false;
								$default_error_message = sprintf(E_VAL_EQELMNT_CHECK_FAILED,$variable_name,$command_value);
							}
						break;
						}
		  case "neelmnt":
						{
							if(isset($formvariables[$command_value]) &&
							   strcmp($input_value,$formvariables[$command_value]) !=0 )
							{
								$bret=true;
							}
							else
							{
								$bret= false;
								$default_error_message = sprintf(E_VAL_NEELMNT_CHECK_FAILED,$variable_name,$command_value);
							}
							break;
						}
		 
		}//switch
		return $bret;
	}//validdate command


}

