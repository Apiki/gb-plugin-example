<?php

namespace GB\Example;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use GB\API\Post_Type;
use Carbon_Fields\Container;
use Carbon_Fields\Field;

App::uses( 'Model', 'nav-menu' );

class NavMenus_Controller extends Post_Type
{
	public $is_register = false;
	public $name        = NavMenu::POST_TYPE;

	public function register_meta_boxes()
	{
		Container::make( 'nav_menu', 'Menu Settings' )
			->add_fields(
				array(
					Field::make( 'color', 'color', 'Cor' ),
				)
			);
	}
}
