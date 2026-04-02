<?php
/**
 * MU Health Check
 *
 * Exposes a /_health endpoint for uptime monitoring.
 *
 * @package MU_Health_Check
 *
 * Plugin Name: MU – Health Check
 * Plugin URI: https://www.marshall.edu
 * Description: Exposes a /_health endpoint for uptime monitoring.
 * Version: 1.0.0
 * Author: Christopher McComas
 * Author URI: https://www.marshall.edu
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action(
	'init',
	function () {
		// phpcs:ignore WordPress.Security.ValidatedSanitizedInput
		if ( ! isset( $_SERVER['REQUEST_URI'] ) || '/_health' !== $_SERVER['REQUEST_URI'] ) {
			return;
		}

		global $wpdb;
		// phpcs:ignore WordPress.DB.DirectDatabaseQuery
		$db_ok = $wpdb->query( 'SELECT 1' );

		header( 'Content-Type: application/json' );

		if ( false === $db_ok ) {
			status_header( 500 );
			echo wp_json_encode(
				array(
					'status' => 'error',
					'db'     => false,
				)
			);
		} else {
			status_header( 200 );
			echo wp_json_encode(
				array(
					'status' => 'ok',
					'db'     => true,
				)
			);
		}

		exit;
	}
);
