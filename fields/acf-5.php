<?php class acf_field_user_network_5 extends acf_field_user_network {

	function __construct() {
		// do not delete!
		parent::__construct();
	}

	/**
	 * Enqueue assets for the user network field in admin
	 *
	 * @since 1.0.0
	 */
	function input_admin_enqueue_scripts() {
		// The suffix.
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG === true ? '' : '.min';

		// Scripts.
		wp_register_script( 'acf-input-user-network', ACF_USER_NETWORK_URL . 'assets/js/input-5' . $suffix . '.js', array(
			'jquery',
			'select2',
			'acf-input'
		), ACF_USER_NETWORK_VER );

		// Enqueuing.
		wp_enqueue_script( 'acf-input-user-network' );

		parent::input_admin_enqueue_scripts();
	}
}