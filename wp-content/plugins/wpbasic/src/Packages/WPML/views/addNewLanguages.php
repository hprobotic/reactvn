<?php
    use Packages\Form\Form;
    $form = new Form();
?>
<h2><?php echo $title; ?></h2>
<form method="post">
    <table>
        <tr>
            <td width="150">Language Name</td>
            <td>
            <?php 
                echo $form->get_text_input(array(
                    'id' => 'english_name',
                    'name' => 'english_name',
                    'value' => @$object->english_name
                )); 
            ?>
            <?php echo $formValidator->getFieldErrors('english_name'); ?>
            </td>
        </tr>
        <tr>
            <td width="150">Language Code</td>
            <td>
            <?php 
                echo $form->get_text_input(array(
                    'id' => 'code',
                    'name' => 'code',
                    'value' => @$object->code
                )); 
            ?>
            <?php echo $formValidator->getFieldErrors('code'); ?>
            </td>
        </tr>
        <tr>
            <td width="150">Active</td>
            <td>
            <?php 
                echo $form->get_check_input(array(
                    'id' => 'active',
                    'name' => 'active',
                    'value' => @$object->active
                )); 
            ?>
            <?php echo $formValidator->getFieldErrors('active'); ?>
            </td>
        </tr>
    </table>
    <input type="submit" class="button-primary" name="cpt_submit" value="<?php echo $name_submit_btn; ?>">
</form>