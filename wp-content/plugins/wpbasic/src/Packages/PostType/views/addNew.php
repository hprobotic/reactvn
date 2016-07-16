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
<?php
    if (is_string($post_type->labels)) {
        $labels = unserialize($post_type->labels); 
    } else {
        $labels = $post_type->labels;
    }
?>
<form method="post">
    <table>
        <tr>
            <td width="150">Post Name</td>
            <td>
            <?php 
                echo $form->get_text_input(array(
                    'id' => 'post_name',
                    'name' => 'post_name',
                    'value' => $post_type->post_name
                )); 
            ?>
            <?php echo $formValidator->getFieldErrors('post_name'); ?>
            </td>
        </tr>
        <tr>
            <td>Menu Icon</td>
            <td>
                <?php 
                    echo $form->get_text_input(array(
                        'id' => 'menu_icon',
                        'name' => 'menu_icon',
                        'value' => $post_type->menu_icon
                    )); 
                ?>
            </td>
        </tr>
        <tr>
            <td>Supports</td>
            <td>
                <?php 
                    echo $form->get_list_checkbox(array(
                        'id' => 'supports',
                        'name' => 'supports',
                        'align' => 'vertical',
                        'options' => array(
                            'title' => 'Title',
                            'editor' => 'Editor - Content',
                            'author' => 'Author',
                            'thumbnail' => 'Thumbnail',
                            'excerpt' => 'Except'
                        ),
                        'selected' => (array) unserialize($post_type->supports)
                    )); 
                ?>
            </td>
        </tr>
    </table>



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
        'name' => 'labels[add_new]',
        'label' => 'Text add new',
        'value' => @$labels['add_new']
    )); 
?><br />

<?php 
    echo $form->get_text_input(array(
        'id' => 'labels_name',
        'name' => 'labels[add_new_item]',
        'label' => 'Text add new item',
        'value' => @$labels['add_new_item']
    )); 
?><br />

<?php 
    echo $form->get_text_input(array(
        'id' => 'labels_name',
        'name' => 'labels[edit_item]',
        'label' => 'Text edit item',
        'value' => @$labels['edit_item']
    )); 
?><br />

<?php 
    echo $form->get_text_input(array(
        'id' => 'labels_name',
        'name' => 'labels[new_item]',
        'label' => 'Text new item',
        'value' => @$labels['new_item']
    )); 
?><br />

<?php 
    echo $form->get_text_input(array(
        'id' => 'labels_name',
        'name' => 'labels[singular_name]',
        'label' => 'Text singular name',
        'value' => @$labels['singular_name']
    )); 
?>
<br />

<input type="submit" class="button-primary" name="cpt_submit" value="<?php echo $name_submit_btn; ?>">
</form>