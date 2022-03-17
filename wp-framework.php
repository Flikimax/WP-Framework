<?php
/*
@wordpress-plugin
Plugin Name:    		WP Framework
Plugin URI: 			https://github.com/Flikimax/wordpress-framework
Description:    		Framework mvc (modelo-vista-controlador) que ayuda a disminuir el tiempo de desarrollo de sistemas.
Version:        		0.3.7
Author: 				Flikimax
Author URI: 			https://flikimax.com
License: GPLv2 or later
*/

if (!defined('ABSPATH')) {
	exit;
}

define('WPFW_NAME', 'WP Framework');
define('WPFW_PATH', __DIR__);
define('WPFW_VERSION', '20220316');

if ( file_exists(__DIR__ . '/vendor/autoload.php') ) {
	# Se carga el autoload del Framework.
	require __DIR__ . '/vendor/autoload.php';

	# Se carga el Framework.
	new Fw\Framework(__FILE__, [
		'mode' => 'production',
		'autoload' => false
	]);
}
