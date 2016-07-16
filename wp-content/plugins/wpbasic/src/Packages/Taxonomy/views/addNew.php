<?php
    use Packages\Form\Form;
    $form = new Form();
?>
<h2><?php echo $title; ?></h2>
<style>
    label {
        width: 150px;
        display: inline-block;
    }
</style>
<?php $labels = unserialize($object->labels); ?>
<form method="post">
    <table>
        <tr>
            <td>Taxonomy Name</td>
            <td>
                <?php 
                    echo $form->get_text_input(array(
                        'id' => 'taxonomy',
                        'name' => 'taxonomy',
                        'value' => @$object->taxonomy
                    )); 
                ?>          
            </td>
        </tr>
        <tr>
            <td>Post Type</td>
            <td>
                <?php 
                    echo $form->get_list_checkbox(array(
                        'id' => 'object_type',
                        'name' => 'object_type',
                        'align' => 'vertical',
                        'selected' => (array) unserialize($object->object_type),
                        'options' => get_post_types(array('public' => true)),
                    )); 
                ?>
            </td>
        </tr>
    </table>

<br />
<?php $args = (array) unserialize($object->args); ?>
<h3>Options</h3>
 <table>
        <tr>
            <td>Hierarchical</td>
            <td>
                <?php 
                    echo $form->get_check_input(array(
                        'id' => 'args_hierarchical',
                        'name' => 'args[hierarchical]',
                        'align' => 'vertical',
                        'checked' => (isset($args['hierarchical']))? true : false,
                        'value' => 'on',
                    )); 
                ?>
            </td>
        </tr>
        <tr>
            <td>Show Admin Column</td>
            <td>
                <?php 
                    echo $form->get_check_input(array(
                        'id' => 'args_show_admin_column',
                        'name' => 'args[show_admin_column]',
                        'align' => 'vertical',
                        'checked' => (isset($args['show_admin_column']))? true : false,
                        'value' => 'on',
                    )); 
                ?>
            </td>
        </tr>
        
 </table>
<br />
<h3> Label </h3>

<?php 
    echo $form->get_text_input(array(
        'id' => 'labels_name',
        'name' => 'labels[name]',
        'label' => 'Name',
        'value' => @$labels['name']
    )); 
?><br />
<?php 
    echo $form->get_text_input(array(
        'id' => 'labels_name',
        'name' => 'labels[singular_name]',
        'label' => 'Text Singular Name',
        'value' => @$labels['singular_name']
    )); 
?><br />
<?php 
    echo $form->get_text_input(array(
        'id' => 'labels_name',
        'name' => 'labels[menu_name]',
        'label' => 'Text Menu name',
        'value' => @$labels['menu_name']
    )); 
?><br />
<?php 
    echo $form->get_text_input(array(
        'id' => 'labels_name',
        'name' => 'labels[all_items]',
        'label' => 'Text All item',
        'value' => @$labels['all_items']
    )); 
?><br />
<?php 
    echo $form->get_text_input(array(
        'id' => 'labels_name',
        'name' => 'labels[edit_item]',
        'label' => 'Text Edit item',
        'value' => @$labels['edit_item']
    )); 
?><br />
<?php 
    echo $form->get_text_input(array(
        'id' => 'labels_name',
        'name' => 'labels[view_item]',
        'label' => 'Text View name',
        'value' => @$labels['view_item']
    )); 
?><br />
<?php 
    echo $form->get_text_input(array(
        'id' => 'labels_name',
        'name' => 'labels[update_item]',
        'label' => 'Text update Item',
        'value' => @$labels['update_item']
    )); 
?><br />
<?php 
    echo $form->get_text_input(array(
        'id' => 'labels_name',
        'name' => 'labels[add_new_item]',
        'label' => 'Text Add new item',
        'value' => @$labels['add_new_item']
    )); 
?><br />

<input type="submit" class="button-primary" name="cpt_submit" value="<?php echo $name_submit_btn; ?>">
</form>