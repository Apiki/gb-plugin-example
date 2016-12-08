<?php

namespace GB\Example;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use GB\API;

class User extends API\User
{
	public $metas = array(
		'city_and_post'    => array(),
		'street'           => array(),
		'professional_exp' => array(
			'type' => 'complex',
		),
	);
}
