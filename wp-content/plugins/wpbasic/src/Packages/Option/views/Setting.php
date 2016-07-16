<?php
    use Packages\Form\Form;
    $form = new Form();
?>
<h2>Manage Setting</h2>

<form method="POST">
<h3>Setting admin bar</h3>
<table>
    <tr>
        <td width="200">Hide Admin Bar </td>
        <td>
            <?php 
                echo $form->get_check_input(array(
                    'id' => 'hide_bar',
                    'name' => 'admin_bar[hide_bar]',
                    'checked' => isset($data['admin_bar']['hide_bar'])
                )); 
            ?>
        </td>
    </tr>
    <tr>
        <td width="200">Remove wordpres logo</td>
        <td>
            <?php 
                echo $form->get_check_input(array(
                    'id' => 'remove_wp_logo',
                    'name' => 'admin_bar[remove_wp_logo]',
                    'checked' => isset($data['admin_bar']['remove_wp_logo'])
                )); 
            ?>
        </td>
    </tr>
    <tr>
        <td>Remove Comment</td>
        <td>
            <?php 
                echo $form->get_check_input(array(
                    'id' => 'remove_wp_comment',
                    'name' => 'admin_bar[remove_wp_comment]',
                    'checked' => isset($data['admin_bar']['remove_wp_comment'])
                )); 
            ?>
        </td>
    </tr>
    <tr>
        <td>Remove Update</td>
        <td>
            <?php 
                echo $form->get_check_input(array(
                    'id' => 'remove_wp_update',
                    'name' => 'admin_bar[remove_wp_update]',
                    'checked' => isset($data['admin_bar']['remove_wp_update'])
                )); 
            ?>
        </td>
    </tr>
</table>
<br />
<h3>Setting dashboard widgets</h3>
<table>
    <tr>
        <td width="200">Remove dashboard menu </td>
        <td>
            <?php 
                echo $form->get_check_input(array(
                    'id' => 'dashboard_menu',
                    'name' => 'dashboard[menu]',
                    'checked' => isset($data['dashboard']['menu'])
                )); 
            ?>
        </td>
    </tr>
    <tr>
        <td width="200">Remove dashboard quick press </td>
        <td>
            <?php 
                echo $form->get_check_input(array(
                    'id' => 'dashboard_activity',
                    'name' => 'dashboard[remove_dashboard_quick_press]',
                    'checked' => isset($data['dashboard']['remove_dashboard_quick_press'])
                )); 
            ?>
        </td>
    </tr>
    <tr>
        <td width="200">Remove dashboard news </td>
        <td>
            <?php 
                echo $form->get_check_input(array(
                    'id' => 'dashboard_news',
                    'name' => 'dashboard[remove_dashboard_news]',
                    'checked' => isset($data['dashboard']['remove_dashboard_news'])
                )); 
            ?>
        </td>
    </tr>
    <tr>
        <td width="200">Remove dashboard activity </td>
        <td>
            <?php 
                echo $form->get_check_input(array(
                    'id' => 'dashboard_activity',
                    'name' => 'dashboard[remove_dashboard_activity]',
                    'checked' => isset($data['dashboard']['remove_dashboard_activity'])
                )); 
            ?>
        </td>
    </tr>
    <tr>
        <td width="200">Remove dashboard right now </td>
        <td>
            <?php 
                echo $form->get_check_input(array(
                    'id' => 'dashboard_right_now',
                    'name' => 'dashboard[remove_dashboard_right_now]',
                    'checked' => isset($data['dashboard']['remove_dashboard_right_now'])
                )); 
            ?>
        </td>
    </tr>
</table>

<input type="submit" class="button-primary" name="cpt_submit" value="<?php echo __("Save change"); ?>">
</form>