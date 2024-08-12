<?php

/**
 * Adds a custom 'isDecorative' attribute to all Image blocks.
 *
 * This attribute indicates whether an image is decorative,
 * allowing developers to specify if an image should be ignored by
 * assistive technologies. The attribute is a boolean with a default value of `false`.
 *
 * @param array  $args       The original block type arguments.
 * @param string $block_type The name of the block type being registered.
 * @return array             Modified block type arguments.
 */
function dhe_add_is_decorative_attribute( $args, $block_name ) {

    // Only add the attribute to the Image block.
    if ( $block_name === 'core/image' ) {
        if ( ! isset( $args['attributes'] ) ) {
            $args['attributes'] = array();
        }

        $args['attributes']['isDecorative'] = array(
            'type'    => 'boolean',
            'default' => false,
        );
    }

    return $args;
}
add_filter( 'register_block_type_args', 'dhe_add_is_decorative_attribute', 10, 2 );

/**
 * Adds a role attribute and remove alt text on decorative Image blocks.
 *
 * @param string $block_content The original HTML content of the block.
 * @param array  $block         The block details, including attributes.
 * @return string               The modified block content with the decorative role applied, or the original content if not decorative.
 */
function dhe_add_decorative_role_to_image_block( $block_content, $block ) {

    $is_decorative = $block['attrs']['isDecorative'] ?? false;

    // Only apply the modifications if the image is decorative.
    if ( $is_decorative ) {

        // Modify the img attributes using the HTML API.
        $processor = new WP_HTML_Tag_Processor( $block_content );

        if ( $processor->next_tag( 'img' ) ) {
            $processor->set_attribute( 'alt', '' );
            $processor->set_attribute( 'role', 'presentation' );
        }

        return $processor->get_updated_html();
    }

    return $block_content;
}
add_filter( 'render_block_core/image', 'dhe_add_decorative_role_to_image_block', 10, 2 );