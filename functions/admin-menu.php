<?php

function edit_admin_menus() {
    global $menu;
    global $submenu;

    $menu[5][0] = 'Notícias';
    $submenu['edit.php'][5][0] = 'Todas as Notícias';
    $submenu['edit.php'][10][0] = 'Adicionar Notícia';

    remove_menu_page('edit-comments.php');
    remove_menu_page('tools.php');
    remove_menu_page('admin.php?page=wp-google-maps-menu');


}
add_action( 'admin_menu', 'edit_admin_menus' );


function custom_menu_order($menu_ord) {


    if (!$menu_ord) return true;

    return array(
        'index.php', // Dashboard
        'separator1', // First separator
        'edit.php', // Posts
        'edit.php?post_type=evento',
        'edit.php?post_type=producao',
        'edit.php?post_type=dissertacao',
        'edit.php?post_type=selecao',
        'separator1', // First separator'
        'separator1', // First separator'
        'edit.php?post_type=revista',
        'edit.php?post_type=corpo_docente',
        'edit.php?post_type=ementa',
        'edit.php?post_type=slide_fotos',
        'separator3', // First separator
        'edit.php?post_type=page', // Pages
        'separator1', // First separator
        'upload.php', // Media
        'separator2', // Second separator
        'themes.php', // Appearance
        'plugins.php', // Plugins
        'users.php', // Users

        'options-general.php', // Settings
        'separator-last', // Last separator
    );
}
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');



// disable default dashboard widgets
function remove_dashboard_widgets() {

 global $wp_meta_boxes;

 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
 unset($wp_meta_boxes['dashboard']['normal']['core']['logincust_subscribe_widget']);
 unset($wp_meta_boxes['dashboard']['normal']['core']['themeisle']);
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);


}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');


// disable default dashboard widgets
function disable_default_dashboard_widgets() {

   // disable default dashboard widgets
   //remove_meta_box('dashboard_right_now', 'dashboard', 'core');

   remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
   remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
   remove_meta_box('dashboard_plugins', 'dashboard', 'core');

   remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
   remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
   remove_meta_box('dashboard_primary', 'dashboard', 'core');
   remove_meta_box('dashboard_secondary', 'dashboard', 'core');

   // disable Simple:Press dashboard widget
   remove_meta_box('sf_announce', 'dashboard', 'normal');
}
add_action('admin_menu', 'disable_default_dashboard_widgets');


// Desabilita notificacoes para todos usuarios, exceto admin
function hide_update_notice_to_all_but_admin_users()
{
    if (!current_user_can('update_core')) {
        remove_action( 'admin_notices', 'update_nag', 3 );
    }
}
add_action( 'admin_head', 'hide_update_notice_to_all_but_admin_users', 1 );




 ?>
