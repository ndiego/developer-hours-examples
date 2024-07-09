<?php
/**
 * Plugin Name:         Developer Hours Examples
 * Description:         A collection of examples for WordPress Developer Hours.
 * Version:             0.1.0
 * Requires at least:   6.3
 * Requires PHP:        7.0
 * Author:              Nick Diego
 * Author URI:          https://www.nickdiego.com
 * License:             GPL-2.0-or-later
 * License URI:         https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:         developer-hours-examples
 * Domain Path:         /languages
 *
 * @package DeveloperHoursExamples
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue Editor assets.
 */
function dhe_enqueue_editor_scripts() {
	$asset_file = include plugin_dir_path( __FILE__ ) . 'build/index.asset.php';

    wp_enqueue_script(
        'developer-hours-examples-scripts',
        plugin_dir_url( __FILE__ ) . 'build/index.js',
        array_merge( $asset_file['dependencies'] ),
        $asset_file['version'],
        true // Print scripts in the footer. This is required for scripts to work correctly in the Site Editor.
    );


    wp_enqueue_style(
        'developer-hours-examples-styles',
        plugin_dir_url( __FILE__ ) . 'build/index.css',
        array(),
        $asset_file['version']
    );

    wp_set_script_translations(
        'developer-hours-examples-scripts',
        'developer-hours-examples',
        plugin_dir_path( __FILE__ ) . 'languages'
    );
}
add_action( 'enqueue_block_editor_assets', 'dhe_enqueue_editor_scripts' );

// Require plugin files.
include_once( plugin_dir_path( __FILE__ ) . 'includes/settings.php' );
include_once( plugin_dir_path( __FILE__ ) . 'includes/load-examples.php' );