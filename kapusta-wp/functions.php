<?php
    add_action( 'wp_enqueue_scripts', 'kapusta_scripts' );

    function kapusta_scripts() {
        wp_enqueue_style( 'kapusta-styles', get_stylesheet_uri() );
        wp_enqueue_script( 'slick-script', get_template_directory_uri( ) . '/assets/js/slick.min.js', array(), null, true);
        wp_enqueue_script( 'kapusta-script', get_template_directory_uri( ) . '/assets/js/script.js', array(), null, true);
    };
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumnails' );
    add_theme_support( 'menus' );

    add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
    function filter_nav_menu_link_attributes($atts, $item, $args){
        if ($args->menu === 'Main'){
            $atts['class'] = 'menu__item';

            if ($item->current) {
                $atts['class'] .=  ' menu__item-active';
            }
        };

        return $atts;

    }
?>