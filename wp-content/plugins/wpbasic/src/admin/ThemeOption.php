<?php

class ThemeOption 
{
      /**
     * Constructor will create the menu item
     */
    public function __construct()
    {
        add_action( 'admin_menu', array($this, 'add_menu_theme_option' ));
    }
    
    /**
     * Menu item will allow us to load the page to display the table
     */
    public function add_menu_theme_option()
    {
        add_submenu_page( 'themes.php', __('Theme Option',  'veoliapro'), __('Theme Option',  'peugeot'), 'manage_options', 'theme-veoliapro-option', array($this, 'edit') );
    }
    
    public function edit() {
//        if ($_SERVER['REQUEST_METHOD'] == "POST") {
//            update_option('peugeot_theme_footer', $_POST['footerContent']);
//            update_option('peugeot_theme_linkYoutube', $_POST['linkYoutube']);
//            update_option('peugeot_theme_linkFacebook', $_POST['linkFacebook']);
//            update_option('peugeot_theme_linkTwitter', $_POST['linkTwitter']);
//           // update_option('peugeot_theme_link_social', $_POST['linksocial']);
//        }
//        $footerContent = stripslashes(get_option('peugeot_theme_footer'));
//        View::render('ThemeOption/themeOption', array(
//           'footerContent' => $footerContent,
//           'linkYoutube' => get_option('peugeot_theme_linkYoutube'),
//           'linkFacebook' => get_option('peugeot_theme_linkFacebook'),
//           'linkTwitter' => get_option('peugeot_theme_linkTwitter'),
//        ));
         
    }
}

new ThemeOption();
