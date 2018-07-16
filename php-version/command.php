<?php

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

/**
 * Displays the current PHP version this install is using
 *
 * @when before_wp_load
 */
$php_version_command = function() {
	echo 'Current PHP version : ' . phpversion()."\n"."\n";

};

WP_CLI::add_command( 'php-version', $php_version_command );
