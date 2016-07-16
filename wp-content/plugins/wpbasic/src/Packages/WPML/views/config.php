<h2><?php echo __("Language Setting", "etypes"); ?></h2>
<form method="post">
<table>
    <tr>
        <td>Default Language</td>
        <td>
            <?php 
                echo $form->get_select_input(array(
                    'id' => 'defaultLanguage',
                    'name' => 'defaultLanguage',
                    'selected' => @$defaultLanguage,
                    'options' => $listLanguage
                )); 
            ?>
        </td>
    </tr>
</table>
    
<h2><?php echo __("Translate post type"); ?></h2>
<table>
    <tr>
        <td>Post Type</td>
        <td>
            <?php 
                echo $form->get_list_checkbox(array(
                    'id' => 'translatePostType',
                    'name' => 'translatePostType',
                    'selected' => (array) @$translatePostType,
                    'options' => $listPostType,
                    'align' => 'vertical'
                )); 
            ?>
        </td>
    </tr>
</table>

<h2><?php echo __("Translate Taxonomy"); ?></h2>
<table>
    <tr>
        <td>Taxonomy</td>
        <td>
            <?php  
                echo $form->get_list_checkbox(array(
                    'id' => 'translateTaxonomy',
                    'name' => 'translateTaxonomy',
                    'selected' => (array) @$translateTaxonomy,
                    'options' => $listTaxonomy,
                    'align' => 'vertical'
                )); 
            ?>
        </td>
    </tr>
</table>
    
<input type="submit" class="button-primary" name="cpt_submit" value="<?php echo __("Save Change", "etypes"); ?>">
</form>