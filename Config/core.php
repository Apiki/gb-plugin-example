<?php

namespace GB\Example;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

use GB\API\Loader;

App::uses( 'Controller' );
App::uses( 'Helper' );

class Core extends Loader
{
	const SLUG = 'gb-plugin-example';
	/**
	 * Namespace
	 *
	 * @since 1.1
	 * @var string
	 */
	public $namespace = 'GB\Example';

	/**
	 * Pages Enqueue Media
	 *
	 * @since 1.1
	 * @var array
	 */
	public $pages_enqueue_media = array(
		'post.php',
		'post-new.php',
		'themes.php',
		'edit-tags.php',
	);

	public function initialize()
	{
		add_action( 'init', array( &$this, 'load_textdomain' ) );

		$controllers = array(
			'Posts',
			'Events',
			'Environments',
			'Widgets',
			'NavMenus',
			'Users',
		);

		$this->load_controllers( $controllers );
	}

	public function load_textdomain()
	{
		load_plugin_textdomain( App::SLUG, false, App::plugin_dir_path( 'languages' ) );
	}

	public function activate()
	{
		$controllers = array(
			'Events',
			'Environments',
		);

		$this->load_controllers( $controllers, true );
	}
	/*
	public function scripts_admin()
	{
		$this->load_wp_media();

		wp_enqueue_script(
			'admin-script-' . App::SLUG,
			App::plugins_url( '/assets/javascripts/built.js' ),
			array( 'jquery', 'admin-script-apiki-wp-api' ),
			App::filemtime( 'assets/javascripts/built.js' ),
			true
		);
	}

	public function styles_admin()
	{
		wp_enqueue_style(
			'admin-style-' . App::SLUG,
			App::plugins_url( 'assets/stylesheets/style.css' ),
			array( 'admin-css-apiki-wp-api' ),
			App::filemtime( 'assets/stylesheets/style.css' )
		);
	}*/
}
