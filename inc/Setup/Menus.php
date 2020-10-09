<?php

namespace BSAdmin\Setup;

class Menus
{
    public function register()
    {
        add_action( 'after_setup_theme', [$this, 'registerNavMenus' ] );
        add_filter("nav_menu_css_class", [$this , "addLiClass"], 1, 3 );
        add_filter("nav_menu_link_attributes", [$this , "addLinkAttributes"], 1, 3 );
    }

    public function registerNavMenus()
    {
        register_nav_menus(
            [
                'primary_menu' => 'Primary Menu',
                'footer_menu' => 'Footer Menu'
            ]
        );
    }

    public function addLiClass( $classes, $item, $args )
    {
        $classes[] = "nav-item";
        return $classes;
    }

    public function  addLinkAttributes( $classes, $item, $args )
    {
        $classes['class'] = "nav-link";

        return $classes;
    }
}
