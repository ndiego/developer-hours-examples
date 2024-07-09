<?php
/**
 * Load all PHP curation examples.
 *
 * @package DeveloperHoursExamples
 */

if ( dhe_is_example_enabled( 'example' ) ) {
	//include_once( plugin_dir_path( __FILE__ ) . 'examples/example.php' );
}

/**
 * Sets a global JS variable used to trigger the availability of each example.
 */
function dhe_enable_js_examples() {

	if ( dhe_is_example_enabled( 'dhe-editor-unification-post-editor-slot' ) ) {
		wp_add_inline_script( 'wp-block-editor', 'window.editorUnificationPostEditor = true', 'before' );
	}

	if ( dhe_is_example_enabled( 'dhe-editor-unification-site-editor-slot' ) ) {
		wp_add_inline_script( 'wp-block-editor', 'window.editorUnificationSiteEditor = true', 'before' );
	}

	if ( dhe_is_example_enabled( 'dhe-editor-unification-unified-slot' ) ) {
		wp_add_inline_script( 'wp-block-editor', 'window.editorUnificationUnified = true', 'before' );
	}
}
add_action( 'admin_init', 'dhe_enable_js_examples' );