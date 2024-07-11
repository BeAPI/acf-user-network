<?php
/*
 Plugin Name: Advanced Custom Fields: User Network
 Version: 1.0.1
 Plugin URI: http://www.beapi.fr
 Description: Add an ACF User Network list selector.
 Author: BE API Technical team
 Author URI: https://www.beapi.fr
 Domain Path: languages
 Text Domain: acf-user-network

 ----

 Copyright 2024 BE API Technical team (human@beapi.fr)

 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

define( 'ACF_USER_NETWORK_VER', '1.0.1' );
define( 'ACF_USER_NETWORK_URL', plugin_dir_url( __FILE__ ) );
define( 'ACF_USER_NETWORK_DIR', plugin_dir_path( __FILE__ ) );

class acf_field_user_network_plugin {

	/**
	 * Constructor.
	 *
	 * Load plugin's translation and register acf user network field.
	 *
	 * @since 1.0.0
	 */
	function __construct() {

		add_action( 'init', array( __CLASS__, 'load_translation' ), 1 );

		// Register ACF fields
		add_action( 'acf/include_field_types', array( __CLASS__, 'register_field_v5' ) );
	}

	/**
	 * Load plugin translation.
	 *
	 * @since 1.0.0
	 */
	public static function load_translation() {
		load_plugin_textdomain( 'acf-user-network', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}

	/**
	 * Register User Network field for ACF v5 or v5.6 depending on ACF version.
	 *
	 * @param $major
	 *
	 * @since 1.0.0
	 */
	public static function register_field_v5() {
		$version = 5;

		// Include the corresponding files
		include_once( sprintf( '%sfields/acf-base.php', ACF_USER_NETWORK_DIR ) );
		include_once( sprintf( '%sfields/acf-%s.php', ACF_USER_NETWORK_DIR, $version ) );

		/**
		 * Instantiate the corresponding class
		 * @see acf_field_user_network_56
		 * @see acf_field_user_network_5
		 */
		$klass = sprintf( 'acf_field_user_network_%s', $version );
		new $klass();
	}
}

/**
 * Init plugin.
 *
 * @since 1.0.0
 */
function acf_field_user_network() {
	new acf_field_user_network_plugin();
}

add_action( 'plugins_loaded', 'acf_field_user_network' );

