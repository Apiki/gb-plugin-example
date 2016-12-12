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

use GB\API;

class App extends API\App
{
	const SLUG = 'gb-plugin-example';
	const PATH = 'gb-plugin-example';
}

App::uses( 'Config', 'core' );

$core = new Core();

register_activation_hook( __FILE__, array( $core, 'activate' ) );
