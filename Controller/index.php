<?php

namespace GB\Example;

if ( ! function_exists( 'add_action' ) ) {
	exit( 0 );
}

App::uses( 'Controller', 'posts' );
App::uses( 'Controller', 'events' );
App::uses( 'Controller', 'environments' );
App::uses( 'Controller', 'widgets' );
App::uses( 'Controller', 'nav-menus' );
App::uses( 'Controller', 'users' );
