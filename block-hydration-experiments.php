<?php
/**
 * Plugin Name:       block-hydration-experiments
 * Version:           0.1.0
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Author:            Luis Herranz
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       block-hydration-experiments
 */

function block_hydration_experiments_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'block_hydration_experiments_init' );
