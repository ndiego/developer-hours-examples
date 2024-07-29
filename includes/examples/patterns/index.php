<?php

/**
 * Register a simple Card block pattern.
 */
function dhe_register_pattern_basic() {
	// Fetch image URL.
	$image_url = plugin_dir_url( __FILE__ ) . 'images/rafting.jpeg';

	// Define the translated text.
	$card_heading     = __( 'Card heading (Basic)', 'developer-hours-examples' );
	$card_description = __( 'Card description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'developer-hours-examples' );
	$learn_more       = __( 'Learn more', 'developer-hours-examples' );

	// Define the block pattern content with placeholders.
	$pattern_content = '
		<!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"blockGap":"0"}},"backgroundColor":"white","borderColor":"contrast-3","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-contrast-3-border-color has-white-background-color has-background" style="border-width:1px;border-radius:8px">
		<!-- wp:image {"id":24,"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"7px","topRight":"7px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
		<figure class="wp-block-image size-full has-custom-border">
		<img src="%s" alt="" class="wp-image-24" style="border-top-left-radius:7px;border-top-right-radius:7px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:3/2;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:group {"metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
		<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"1.5rem"}},"fontFamily":"body"} -->
		<h2 class="wp-block-heading has-body-font-family" style="font-size:1.5rem;font-style:normal;font-weight:500">%s</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"metadata":{"name":"Description"},"fontSize":"small"} -->
		<p class="has-small-font-size">%s</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"metadata":{"name":"Call to action"}} -->
		<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">%s</a></div>
		<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	';

	// Register the block pattern.
	register_block_pattern(
		'developer-hours-examples/card',
		array(
			'title'       => __( 'Card', 'developer-hours-examples' ),
			'description' => _x( 'A simple card design.', 'Block pattern description', 'developer-hours-examples' ),
			'categories'  => array( 'developer-hours' ),
			'content'     => sprintf(
				$pattern_content,
				esc_url( $image_url ),
				esc_html( $card_heading ),
				esc_html( $card_description ),
				esc_html( $learn_more )
			),
		)
	);
}

/**
 * Register a simple Card block pattern with locked content.
 */
function dhe_register_pattern_locked() {
	// Fetch image URL.
	$image_url = plugin_dir_url( __FILE__ ) . 'images/hiking-desert.jpeg';

	// Define the translated text.
	$card_heading     = __( 'Card heading (Locked)', 'developer-hours-examples' );
	$card_description = __( 'Card description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'developer-hours-examples' );
	$learn_more       = __( 'Learn more', 'developer-hours-examples' );

	// Define the block pattern content with placeholders.
	$pattern_content = '
		<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"blockGap":"0"}},"backgroundColor":"white","borderColor":"contrast-3","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-contrast-3-border-color has-white-background-color has-background" style="border-width:1px;border-radius:8px">
		<!-- wp:image {"id":24,"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"7px","topRight":"7px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
		<figure class="wp-block-image size-full has-custom-border">
		<img src="%s" alt="" class="wp-image-24" style="border-top-left-radius:7px;border-top-right-radius:7px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:3/2;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:group {"metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
		<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"1.5rem"}},"fontFamily":"body"} -->
		<h2 class="wp-block-heading has-body-font-family" style="font-size:1.5rem;font-style:normal;font-weight:500">%s</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"metadata":{"name":"Description"},"fontSize":"small"} -->
		<p class="has-small-font-size">%s</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"metadata":{"name":"Call to action"}} -->
		<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">%s</a></div>
		<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	';

	// Register the block pattern.
	register_block_pattern(
		'developer-hours-examples/card-locked',
		array(
			'title'       => __( 'Card (Locked)', 'developer-hours-examples' ),
			'description' => _x( 'A simple card design with locked content.', 'Block pattern description', 'developer-hours-examples' ),
			'categories'  => array( 'developer-hours' ),
			'content'     => sprintf(
				$pattern_content,
				esc_url( $image_url ),
				esc_html( $card_heading ),
				esc_html( $card_description ),
				esc_html( $learn_more )
			),
		)
	);
}

/**
 * Register a simple Card block pattern.
 */
function dhe_register_pattern_allowed_blocks() {
	// Fetch image URL.
	$image_url = plugin_dir_url( __FILE__ ) . 'images/hiking-mountain-peak.jpg';

	// Define the translated text.
	$card_heading     = __( 'Card heading (Allowed Blocks)', 'developer-hours-examples' );
	$card_description = __( 'Card description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'developer-hours-examples' );
	$learn_more       = __( 'Learn more', 'developer-hours-examples' );

	// Define the block pattern content with placeholders.
	$pattern_content = '
		<!-- wp:group {"style":{"border":{"radius":"8px","width":"1px"},"spacing":{"blockGap":"0"}},"backgroundColor":"white","borderColor":"contrast-3","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-contrast-3-border-color has-white-background-color has-background" style="border-width:1px;border-radius:8px">
		<!-- wp:image {"lock":{"move":true,"remove":true},"id":24,"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"7px","topRight":"7px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
		<figure class="wp-block-image size-full has-custom-border">
		<img src="%s" alt="" class="wp-image-24" style="border-top-left-radius:7px;border-top-right-radius:7px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:3/2;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:group {"allowedBlocks":["core/paragraph","core/list"],"lock":{"move":true,"remove":true},"metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
		<!-- wp:heading {"lock":{"move":true,"remove":true},"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"1.5rem"}},"fontFamily":"body"} -->
		<h2 class="wp-block-heading has-body-font-family" style="font-size:1.5rem;font-style:normal;font-weight:500">%s</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"lock":{"move":true,"remove":false},"metadata":{"name":"Description"},"fontSize":"small"} -->
		<p class="has-small-font-size">%s</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"lock":{"move":true,"remove":true},"metadata":{"name":"Call to action"}} -->		<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">%s</a></div>
		<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	';

	// Register the block pattern.
	register_block_pattern(
		'developer-hours-examples/card-allowed-blocks',
		array(
			'title'       => __( 'Card (Allowed Blocks)', 'developer-hours-examples' ),
			'description' => _x( 'A simple card design with locked content and specific allowed blocks enabled.', 'Block pattern description', 'developer-hours-examples' ),
			'categories'  => array( 'developer-hours' ),
			'content'     => sprintf(
				$pattern_content,
				esc_url( $image_url ),
				esc_html( $card_heading ),
				esc_html( $card_description ),
				esc_html( $learn_more )
			),
		)
	);
}

/**
 * Register a simple Card block pattern with content-only editing enabled.
 */
function dhe_register_pattern_content_only() {
	// Fetch image URL.
	$image_url = plugin_dir_url( __FILE__ ) . 'images/hiking-forest.jpeg';

	// Define the translated text.
	$card_heading     = __( 'Card heading (Content Only)', 'developer-hours-examples' );
	$card_description = __( 'Card description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'developer-hours-examples' );
	$learn_more       = __( 'Learn more', 'developer-hours-examples' );

	// Define the block pattern content with placeholders.
	$pattern_content = '
		<!-- wp:group {"templateLock":"contentOnly","style":{"border":{"radius":"8px","width":"1px"},"spacing":{"blockGap":"0"}},"backgroundColor":"white","borderColor":"contrast-3","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-contrast-3-border-color has-white-background-color has-background" style="border-width:1px;border-radius:8px">
		<!-- wp:image {"id":24,"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"7px","topRight":"7px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
		<figure class="wp-block-image size-full has-custom-border">
		<img src="%s" alt="" class="wp-image-24" style="border-top-left-radius:7px;border-top-right-radius:7px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:3/2;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:group {"metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
		<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"1.5rem"}},"fontFamily":"body"} -->
		<h2 class="wp-block-heading has-body-font-family" style="font-size:1.5rem;font-style:normal;font-weight:500">%s</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"metadata":{"name":"Description"},"fontSize":"small"} -->
		<p class="has-small-font-size">%s</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"metadata":{"name":"Call to action"}} -->
		<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">%s</a></div>
		<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	';

	// Register the block pattern.
	register_block_pattern(
		'developer-hours-examples/card-content-only',
		array(
			'title'       => __( 'Card (Content Only)', 'developer-hours-examples' ),
			'description' => _x( 'A simple card design with content-only editing enabled.', 'Block pattern description', 'developer-hours-examples' ),
			'categories'  => array( 'developer-hours' ),
			'content'     => sprintf(
				$pattern_content,
				esc_url( $image_url ),
				esc_html( $card_heading ),
				esc_html( $card_description ),
				esc_html( $learn_more )
			),
		)
	);
}

/**
 * Register a simple Card block pattern with content-only editing enabled and a custom block.
 */
function dhe_register_pattern_content_only_custom() {
	// Fetch image URL.
	$image_url = plugin_dir_url( __FILE__ ) . 'images/mountain-biking.jpeg';

	// Define the translated text.
	$card_heading     = __( 'Card heading (Content Only - Custom)', 'developer-hours-examples' );
	$card_description = __( 'Card description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'developer-hours-examples' );
	$learn_more       = __( 'Learn more', 'developer-hours-examples' );

	// Define the block pattern content with placeholders.
	$pattern_content = '
		<!-- wp:group {"templateLock":"contentOnly","style":{"border":{"radius":"8px","width":"1px"},"spacing":{"blockGap":"0"}},"backgroundColor":"white","borderColor":"contrast-3","layout":{"type":"constrained"}} -->
		<div class="wp-block-group has-border-color has-contrast-3-border-color has-white-background-color has-background" style="border-width:1px;border-radius:8px">
		<!-- wp:image {"id":24,"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"7px","topRight":"7px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
		<figure class="wp-block-image size-full has-custom-border">
		<img src="%s" alt="" class="wp-image-24" style="border-top-left-radius:7px;border-top-right-radius:7px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:3/2;object-fit:cover"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:group {"metadata":{"name":"Content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} -->
		<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"1.5rem"}},"fontFamily":"body"} -->
		<h2 class="wp-block-heading has-body-font-family" style="font-size:1.5rem;font-style:normal;font-weight:500">%s</h2>
		<!-- /wp:heading -->

		<!-- wp:outermost/icon-block {"iconName":"","width":"28px","metadata":{"name":"Icon"}} -->
		<div class="wp-block-outermost-icon-block"><div class="icon-container" style="width:28px"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6"><path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" /></svg></div></div>
		<!-- /wp:outermost/icon-block --></div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"metadata":{"name":"Description"},"fontSize":"small"} -->
		<p class="has-small-font-size">%s</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"metadata":{"name":"Call to action"}} -->
		<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">%s</a></div>
		<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	';

	// Register the block pattern.
	register_block_pattern(
		'developer-hours-examples/card-content-only-custom',
		array(
			'title'       => __( 'Card (Content Only - Custom)', 'developer-hours-examples' ),
			'description' => _x( 'A simple card design with content-only editing enabled and a custom block.', 'Block pattern description', 'developer-hours-examples' ),
			'categories'  => array( 'test' ),
			'content'     => sprintf(
				$pattern_content,
				esc_url( $image_url ),
				esc_html( $card_heading ),
				esc_html( $card_description ),
				esc_html( $learn_more )
			),
		)
	);
}

function dhe_register_patterns() {

	dhe_register_pattern_basic();
	dhe_register_pattern_locked();
	dhe_register_pattern_allowed_blocks();
	dhe_register_pattern_content_only();
	dhe_register_pattern_content_only_custom();

	register_block_pattern_category(
		'developer-hours',
		array(
			'label' => __( 'Developer Hours', 'developer-hours-examples' ),
		)
	);
}
add_action( 'init', 'dhe_register_patterns', 0 );