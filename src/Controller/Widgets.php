<?php

namespace GB\Example\Controller;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use GB\API\Controller;

class Widgets extends Controller\Widgets
{
	public $available_widgets = array(
		'GB\Example\Widget\Events',
	);
}
