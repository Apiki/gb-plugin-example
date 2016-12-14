<?php

namespace GB\Example\Model;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use GB\API\Model;

class User extends Model\User
{
	public $metas = array(
		'city_and_post'    => array(),
		'street'           => array(),
		'professional_exp' => array(
			'type' => 'complex',
		),
	);
}
