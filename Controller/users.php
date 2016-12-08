<?php

namespace GB\Example;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use GB\API;
use Carbon_Fields\Container;
use Carbon_Fields\Field;

class Users_Controller extends API\Users
{
	public function register_meta_boxes()
	{
		Container::make( 'user_meta', 'Endereço' )
			->add_fields(
				array(
					Field::make( 'text', 'city_and_post', 'Cidade e código postal' ),
					Field::make( 'text', 'street', 'Rua' ),
				)
			);
	}
}
