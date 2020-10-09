<?php

namespace BSAdmin;

final class Init
{
    public static function get_classes()
    {
        return [
            Setup\Setup::class,
            Setup\Enqueue::class,
            //Setup\Menus::class,
            //Woocommerce\Woocommerce::class,
        ];
    }

    public static function register_classes()
    {
        foreach ( self::get_classes() as $class ) {
			$service = self::instantiate( $class );
			if ( method_exists( $service, 'register') ) {
				$service->register();
			}
		}

    }

    private static function instantiate( $class )
	{
		return new $class();
	}
}