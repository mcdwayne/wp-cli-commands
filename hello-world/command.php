<?php

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

/**
 * Says "Hello World" to new users
 *
 * @when before_wp_load
 */
$hello_world_command = function( $id ) {
	echo "I am a tiny princess \n"; 
echo 'Current PHP version : ' . phpversion();
	WP_CLI::success( "Hello world." );
};
WP_CLI::add_command( 'hello-world', $hello_world_command );
