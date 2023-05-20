<?php

add_theme_support( 'post-thumbnails' );
	
add_image_size( 'img-slider-bfb', 432, 202 ); 


function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

/* Add custom class to link in menu */
function _namespace_modify_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu', '_namespace_modify_menuclass');

// submenu
function custom_submenu_class($classes, $args, $depth) {
    $classes[] = 'dropdown-menu'; // Tambahkan class CSS submenu di sini
    return $classes;
}
add_filter('nav_menu_submenu_css_class', 'custom_submenu_class', 10, 3);

// submenu link
function custom_submenu_link_attributes($atts, $item, $args, $depth) {
    if (in_array('menu-item-has-children', $item->classes)) {
        $atts['data-bs-toggle'] = 'dropdown'; // Ganti dengan atribut kustom dan nilainya sesuai kebutuhan Anda
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'custom_submenu_link_attributes', 10, 4);

function custom_submenu_walker($output, $item, $depth, $args) {
    if (in_array('menu-item-has-children', $item->classes)) {
        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $output .= '<a' . $attributes . '>';
    } else {
        $output .= '<a href="' . esc_url($item->url) . '">';
    }

    $output .= apply_filters('the_title', $item->title, $item->ID);
    $output .= '</a>';

    return $output;
}
