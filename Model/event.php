<?php

namespace GB\Example;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use GB\API;

class Event extends API\Post
{
	public $metas = array();

	const POST_TYPE = 'gb_event';
}
