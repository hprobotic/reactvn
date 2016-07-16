<?php
    use Packages\Form\Form;
    $form = new Form();
?>
<h2><?php echo $title; ?></h2>
<?php
$args = array(
   'public'   => true,
);
$listPostType = get_post_types($args); ?>
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
            <td width="150">From</td>
            <td>
                <?php 
                    echo $form->get_select_input(array(
                        'id' => 'post_from',
                        'name' => 'post_from',
                        'selected' => $post_type->post_from,
                        'options' => $listPostType
                    )); 
                ?>
                <?php echo $formValidator->getFieldErrors('post_from'); ?>
            </td>
        </tr>
        <tr>
            <td>To</td>
            <td>
                <?php 
                    echo $form->get_select_input(array(
                        'id' => 'post_to',
                        'name' => 'post_to',
                        'selected' => $post_type->post_to,
                        'options' => $listPostType
                    )); 
                ?>
                <?php echo $formValidator->getFieldErrors('post_to'); ?>
            </td>
        </tr>
    </table>
<input type="submit" class="button-primary" name="cpt_submit" value="<?php echo $name_submit_btn; ?>">
</form>