<?php

namespace GB\Example\Model;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use GB\API\Model;

class Nav_Menu extends Model\Post
{
	public $metas = array(
		'color' => array(),
	);

	const POST_TYPE = 'nav_menu_item';
}
