<?php

namespace GB\Example\Controller;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use GB\API\Controller\Taxonomy;
use GB\Example\Model\Environment;
use GB\Example\Model\Event;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class Environments extends Taxonomy
{
	public $name            = Environment::SLUG;
	public $capability_type = Environment::SLUG;
	public $object_type     = array( Event::POST_TYPE );
	public $messages        = array(
		'label'     => 'Ambiente',
		'plural'    => 'Ambientes',
		'is_female' => false,
	);

	public function register_meta_boxes()
	{
		Container::make( 'term_meta', 'Informações do Ambiente' )
			->show_on_taxonomy( $this->name )
			->add_fields(
				array(
					Field::make( 'map', 'address', 'Endereço' )
						->set_required( true ),
					Field::make( 'image', 'image', 'Imagem' ),
				)
			);
	}
}
