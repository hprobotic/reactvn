<?php
namespace Packages\Form;

class Form {
    /**
     * Return a populated <select> input.
     *
     * @since 1.0
     *
     * @param array $args Arguments to use with the <select> input.
     *
     * @return string $value Complete <select> input with options and selected attribute.
     */
    public function get_select_input( $args = array() ) {
        
            $value = $this->get_label($args);
            $multiple = "";
            if (isset($args['multiple']) && ($args['multiple'])) {
                $multiple = ' multiple ';
            }
            $value .= '<select id="' . $args['id'] . '" name="' . $args['name'] . '"'. $multiple.'>';
            if ( !empty( $args['options'] ) && is_array( $args['options'] ) ) {
                foreach( $args['options'] as $key => $valueOption ) {
                    $result = '';
                    if ( isset($args['selected'] )  && $args['selected'] == $key) {
                            $result = ' selected="selected"';
                    }

                    $value .= '<option value="' . $key . '"' . $result . '>' . $valueOption . '</option>';
                }
            }
            $value .= '</select>';

            return $value;
    }

    /**
     * Return a text input.
     *
     * @since 1.0
     *
     * @param array $args Arguments to use with the text input.
     *
     * @return string Complete text <input> with proper attributes.
     */
    public function get_text_input( $args = array() ) {
        
            $value = $this->get_label($args);
            
            $value .= '<input type="text" id="' . $args['id'] . '" name="' . $args['name'] . '" value="' . $args['value'] . '"';

            $value .= ' />';


            return $value;
    }

    /**
     * Return a <textarea> input.
     *
     * @since 1.0
     *
     * @param array $args Arguments to use with the textarea input.
     *
     * @return string $value Complete <textarea> input with proper attributes.
     */
    public function get_textarea_input( $args = array() ) {
            $defaults = $this->get_default_input_parameters(
                array(
                    'rows' => '',
                    'cols' => '',
                )
            );
            $args = wp_parse_args( $args, $defaults );

            
            $value = '<textarea id="' . $args['name'] . '" name="' . $args['namearray'] . '[' . $args['name'] . ']" rows="' . $args['rows'] . '" cols="' . $args['cols'] . '">' . $args['textvalue'] . '</textarea>';

            return $value;
    }

    /**
     * Return a checkbox <input>.
     *
     * @since 1.0
     *
     * @param array $args Arguments to use with the checkbox input.
     *
     * @return string $value Complete checkbox <input> with proper attributes.
     */
    public function get_check_input( $args = array() ) {

        $value = $this->get_label($args);
        $checked = '';
        if ( isset( $args['checked'] ) && 'false' == $args['checked'] ) {
            $checked = 'checked="checked"';
        }
        if (isset($args['namearray'])) {
            $name = $args['namearray'].'[]';
        } else {
            $name = $args['name'];
        }
        
        $value .= '<input type="checkbox" id="' . $args['id'] . '" name="' . $name . '" value="' . $args['value'] . '" '.$checked.'/>';


        return $value;
    }
    
    
    public function get_list_checkbox( $args = array() ) {
        $value = $this->get_label($args);
        if ( !empty( $args['options'] ) && is_array( $args['options'] ) ) {
            foreach( $args['options'] as $key => $valueOption ) {
                $checked = '';
                if ( isset($args['selected'] )  && in_array($key, $args['selected'])) {
                        $checked = ' checked="checked" ';
                }
                // display
                if (isset($args['align']) && ($args['align'] == 'vertical')) {
                    $break = "<br />";
                } else {
                    $break = "";
                }
                $value .= ' <input type="checkbox" name="' . $args['name'] . '[]" value="' . $key . '" '.$checked.'/> '.$valueOption. $break;
            }
        }
        
        return $value;
    }
    
    public function get_label($args = array()) {
        if (isset($args['label'])) {
            $value = '<label for="'.$args['id'].'">'.$args['label'].'</label>';
            return $value;
        } else {
            return '';
        }
    }
}
