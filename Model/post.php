<?php

namespace GB\Example;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use GB\API;

class Post extends API\Post
{
	public $metas = array(
		'location'       => array(),
		'custom_sidebar' => array(),
		'gallery'        => array(
			'type' => 'complex',
		),
	);

	const POST_TYPE = 'post';
}
