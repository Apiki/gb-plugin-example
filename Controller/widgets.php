<?php

namespace GB\Example;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use GB\API\Widget;

App::uses( 'Widget', 'events' );

class Widgets_Controller extends Widget
{
	public $available_widgets = array(
		'GB\Example\Events_Widget',
	);
}
