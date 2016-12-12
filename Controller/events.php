<?php

namespace GB\Example;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use GB\API\Post_Type;
use Carbon_Fields\Container;
use Carbon_Fields\Field;

App::uses( 'Model', 'event' );

class Events_Controller extends Post_Type
{
	public $name            = Event::POST_TYPE;
	public $capability_type = Event::POST_TYPE;
	public $messages        = array(
		'label'  => 'Evento',
		'plural' => 'Eventos',
	);

	public function register_meta_boxes()
	{

	}

	public function get_args_register_post_type()
	{
		return array(
			'menu_icon' => 'dashicons-calendar-alt',
			'rewrite'   => array( 'slug' => __( 'evento', App::SLUG ) ),
		);
	}
}
