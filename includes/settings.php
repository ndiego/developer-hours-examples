<?php
/**
 * Add the plugin settings page.
 *
 * @package DeveloperHoursExamples
 */

/**
 * Add a settings page under the "Settings" menu in the WordPress admin.
 */
function dhe_create_admin_menu_item() {
	add_options_page(
		__( 'Developer Hours examples', 'developer-hours-examples' ),
		__( 'Developer Hours', 'developer-hours-examples' ),
		'edit_posts',
		'developer-hours-examples',
		'dhe_render_settings_page'
	);
}
add_action( 'admin_menu', 'dhe_create_admin_menu_item' );

/**
 * The main entry point for the Editor curation examples page.
 */
function dhe_render_settings_page() {
	?>
	<div
		id="developer-hours-examples-editor"
		class="wrap"
	>
	<h1><?php echo __( 'Developer Hours Examples', 'developer-hours-examples' ); ?></h1>
	<p><?php echo __( 'A collection of examples for WordPress Developer Hours. Click on "View source code" to see how each work.', 'developer-hours-examples' ); ?></p>
	<form method="post" action="options.php">
		<?php settings_fields( 'developer-hours-examples' ); ?>
		<?php do_settings_sections( 'developer-hours-examples' ); ?>
		<?php submit_button(); ?>
	</form>
	</div>
	<?php
}

/**
 * Register the example settings.
 */
function dhe_register_settings() {

	add_settings_section(
		'dhe_editor_unification',
		__( 'Editor Unification & Extensibility', 'developer-hours-examples' ),
		function() { 
			echo sprintf(
				__( 'Slot fill examples from <a href="%s" target="_blank">	Developer Hours: Editor unification and extensibility in WordPress 6.6</a>.', 'developer-hours-examples' ),
				esc_url( 'https://www.meetup.com/learn-wordpress-online-workshops/events/301834541/' )
			); 
		},
		'developer-hours-examples'
	);

	add_settings_field(
		'dhe-editor-unification-post-editor-slot',
		__( 'Post Editor slot', 'developer-hours-examples' ),
		'dhe_display_example_field',
		'developer-hours-examples',
		'dhe_editor_unification',
		array(
			'label' => sprintf(
				__( 'Enable an example that uses slots from the <code>@wordpress/edit-post</code> package to display content in the Post Editor. <a href="%s" target="_blank">View source code</a>.', 'developer-hours-examples' ),
				esc_url( 'https://github.com/ndiego/developer-hours-examples/tree/main/src/examples/editor-unification/post-editor.js' )
			),
			'id'    => 'dhe-editor-unification-post-editor-slot',
		)
	);

	add_settings_field(
		'dhe-editor-unification-site-editor-slot',
		__( 'Site Editor slot', 'developer-hours-examples' ),
		'dhe_display_example_field',
		'developer-hours-examples',
		'dhe_editor_unification',
		array(
			'label' => sprintf(
				__( 'Enable an example that uses slots from the <code>@wordpress/edit-site</code> package to display content in the Site Editor. <a href="%s" target="_blank">View source code</a>.', 'developer-hours-examples' ),
				esc_url( 'https://github.com/ndiego/developer-hours-examples/tree/main/src/examples/editor-unification/site-editor.js' )
			),
			'id'    => 'dhe-editor-unification-site-editor-slot',
		)
	);

	add_settings_field(
		'dhe-editor-unification-unified-slot',
		__( 'Unified slot', 'developer-hours-examples' ),
		'dhe_display_example_field',
		'developer-hours-examples',
		'dhe_editor_unification',
		array(
			'label' => sprintf(
				__( 'Enable an example that uses slots from the <code>@wordpress/editor</code> package to display content in all editors and is backwards compatible. <a href="%s" target="_blank">View source code</a>.', 'developer-hours-examples' ),
				esc_url( 'https://github.com/ndiego/developer-hours-examples/tree/main/src/examples/editor-unification/unified.js' )
			),
			'id'    => 'dhe-editor-unification-unified-slot',
		)
	);

	add_settings_section(
		'dhe_patterns',
		__( 'Patterns', 'developer-hours-examples' ),
		function() { 
			echo sprintf(
				__( 'Pattern examples from <a href="%s" target="_blank">Developer Hours: Do you really need a custom block? Let’s explore alternatives</a>.', 'developer-hours-examples' ),
				esc_url( 'https://www.meetup.com/learn-wordpress-online-workshops/events/301860423/' )
			); 
		},
		'developer-hours-examples'
	);

	add_settings_field(
		'dhe-editor-unification-post-editor-slot',
		__( 'Patterns', 'developer-hours-examples' ),
		'dhe_display_example_field',
		'developer-hours-examples',
		'dhe_patterns',
		array(
			'label' => sprintf(
				__( 'Enable example patterns that showcase the used of block locking, <code>contentOnly</code>, and <code>allowedBlocks</code>. <a href="%s" target="_blank">View source code</a>.', 'developer-hours-examples' ),
				esc_url( 'https://github.com/ndiego/developer-hours-examples/tree/main/src/examples/patterns/index.php' )
			),
			'id'    => 'dhe-patterns',
		)
	);

	register_setting( 'developer-hours-examples', 'developer-hours-examples' );
}
add_action( 'admin_init', 'dhe_register_settings' );

/**
 * Display a checkbox field for a curation example.
 *
 * @param array $args ( $label, $id ).
 */
function dhe_display_example_field( $args ) {
	$options = get_option( 'developer-hours-examples' );
	$value   = isset( $options[ $args['id'] ] ) ? 1 : 0;
	?>
		<label for="<?php echo $args['id']; ?>">
			<input type="checkbox" name="<?php echo 'developer-hours-examples[' . $args['id'] . ']'; ?>" id="<?php echo $args['id']; ?>" value="1" <?php checked( 1, $value ); ?> />
			<?php echo $args['label']; ?>
		</label>
	<?php
}

/**
 * Checks whether the Gutenberg experiment is enabled.
 *
 * @param string $name The name of the experiment.
 *
 * @return bool True when the experiment is enabled.
 */
function dhe_is_example_enabled( $name ) {
	$examples = get_option( 'developer-hours-examples' );
	return ! empty( $examples[ $name ] );
}
