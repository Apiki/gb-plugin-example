<?php
/*
	Plugin Name: GB Plugin Example
	Plugin URI: http://apiki.com.br/
	Version: 0.1.0
	Author: Apiki WordPress
	Author URI: http://apiki.com.br/
	Text Domain: gb-plugin-example
	Domain Path: /languages
	License: GPL2
	Description: Exemplo de implementação utilizando a API.
*/
namespace GB\Example;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

if ( ! class_exists( 'GB\API\App' ) ) {
	return;
}

class App
{
	const PLUGIN_SLUG = 'gb-plugin-example';

	public static function uses( $location, $class_name = 'index' )
	{
		include "{$location}/{$class_name}.php";
	}

	public static function plugins_url( $path )
	{
		return plugins_url( $path, __FILE__ );
	}

	public static function plugin_dir_path( $path )
	{
		return plugin_dir_path( __FILE__ ) . $path;
	}

	public static function filemtime( $path )
	{
		return filemtime( self::plugin_dir_path( $path ) );
	}

	public static function load_textdomain()
	{
		load_plugin_textdomain( self::PLUGIN_SLUG, false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
	}
}

App::uses( 'Config', 'core' );

$core = new Core();

register_activation_hook( __FILE__, array( $core, 'activate' ) );
