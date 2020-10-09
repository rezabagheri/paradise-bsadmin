<?php

namespace BSAdmin\Setup;

class Enqueue
{
    public function register()
    {
        add_action( 'wp_enqueue_scripts', [$this, 'addStyles'] );
        add_action( 'wp_enqueue_scripts', [$this, 'addScripts'] );
    }

    public function addStyles()
    {
        //wp_enqueue_style( "theme-css", get_template_directory_uri() . "/assets/css/style.css", [], "1.0", "all" );
        wp_enqueue_style( "theme-bootstrap", get_template_directory_uri() . "/vendor/twbs/bootstrap/dist/css/bootstrap.min.css", [], "5.0", "all" );
        //wp_enqueue_style( "theme-carosel", get_template_directory_uri() . "/assets/css/carousel.css", [], "1.0", "all" );
    }

    public function addScripts()
    {
        //wp_enqueue_script( "theme-scripts", get_template_directory_uri() . "/assets/js/scripts.js", [ 'jquery' ], "1.0", true );
        //wp_enqueue_script( "popper-scripts", get_template_directory_uri() . "/assets/js/popper.js", [ 'jquery' ], "1.0", true );
        wp_enqueue_script( "bootstrap-scripts", get_template_directory_uri() . "/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js", [ ], "5.0", true );
    }
}
