<?php

namespace GB\Example\Controller;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use GB\API\Post_Type;
use GB\Example\Model\Post;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

class Posts extends Post_Type
{
	public $is_register = false;
	public $name        = Post::POST_TYPE;

	public function register_meta_boxes()
	{
		$employees_labels = array(
			'plural_name'   => 'Imagens',
			'singular_name' => 'Imagem',
		);

		Container::make( 'post_meta', 'Custom Data' )
			->show_on_post_type( $this->name )
			->add_fields(
				array(
					Field::make( 'map', 'location' )->set_position( 37.423156, -122.084917, 14 ),
					Field::make( 'radio_image', 'custom_sidebar', 'Sidebar Customizada' )
						->add_options(
							array(
								''      => 'https://blog.apiki.com/wp-content/themes/Newspaper/images/panel/sidebar/sidebar-default.png',
								'left'  => 'https://blog.apiki.com/wp-content/themes/Newspaper/images/panel/sidebar/sidebar-left.png',
								'full'  => 'https://blog.apiki.com/wp-content/themes/Newspaper/images/panel/sidebar/sidebar-full.png',
								'right' => 'https://blog.apiki.com/wp-content/themes/Newspaper/images/panel/sidebar/sidebar-right.png',
							)
						),
					Field::make( 'complex', 'gallery', 'Galeria' )
						->setup_labels( $employees_labels )
						->set_layout( 'tabbed-horizontal' )
						->add_fields(
							array(
								Field::make( 'image', 'photo', '' )
							)
						),
				)
			);
	}
}
