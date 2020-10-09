<?php
/**
 * 
 * @package BSAdmin
 */

 if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php') ) :
    require_once dirname( __FILE__ ) . '/vendor/autoload.php' ;
    
 endif;

 BSAdmin\Init::register_classes();