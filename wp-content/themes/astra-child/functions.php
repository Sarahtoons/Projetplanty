<?php

// Enqueue des styles pour le thème enfant
function enqueue_child_theme_styles() {
    // Enqueue le style du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue le style du thème enfant
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles', 1);

// Filtrer les éléments du menu
function lien_menu_personnalise($items, $args) {
    // Vérifier si l'utilisateur est connecté
    if (is_user_logged_in()) {
        // Obtenez la liste des éléments du menu
        $menu_items = explode('</li>', $items);

        // Calculez l'indice du milieu
        $middle_index = floor(count($menu_items) / 2);

        // Créer l'élément "Admin"
        $admin_link = '<li class="lien-admin"><a class="hfe-menu-item" href="'.get_admin_url().'">Admin</a></li>';

        // Insérer l'élément "Admin" au milieu des éléments du menu
        array_splice($menu_items, $middle_index, 0, $admin_link);

        // Réassembler les éléments du menu
        $items = implode('</li>', $menu_items);
    }

    return $items;
}
add_filter('wp_nav_menu_items', 'lien_menu_personnalise', 10, 2);

?>
