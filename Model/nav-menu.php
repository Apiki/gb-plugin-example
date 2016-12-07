<?php

namespace GB\Example;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use GB\API;

class NavMenu extends API\Post
{
	public $metas = array();

	const POST_TYPE = 'nav_menu_item';
}
