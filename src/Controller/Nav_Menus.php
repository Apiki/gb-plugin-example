<?php

namespace GB\Example\Controller;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use GB\API\Controller\Post_Type;
use GB\Example\Model\Nav_Menu;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class Nav_Menus extends Post_Type
{
	public $is_register = false;
	public $name        = Nav_Menu::POST_TYPE;

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
