<?php

namespace GB\Example\Model;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use GB\API\Term;

class Environment extends Term
{
	public $metas = array();

	const SLUG = 'gb_environment';
}
