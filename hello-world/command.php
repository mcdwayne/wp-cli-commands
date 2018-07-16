<?php

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

/**
 * Says "Hello World" to new users
 *
 * @when before_wp_load
 */
$hello_world_command = function( $id = 0) {
	echo "I am a tiny princess \n"; 

     	/**
     	* Filters the array of tags for the given post.
     	*
     	* @since 2.3.0
     	*
     	* @see get_the_terms()
     	*
     	* @param array $terms An array of tags for the given post.
     	*/
    	return apply_filters( 'get_the_tags', get_the_terms( $id, 'post_tag' ) );

	WP_CLI::success( "Hello world." );
};
WP_CLI::add_command( 'hello-world', $hello_world_command );
