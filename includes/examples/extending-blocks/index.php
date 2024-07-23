<?php



function dhe_add_context_to_list_blocks_metadata( $metadata ) {
	
	if ( isset( $metadata['name'] ) && 'core/list-item' === $metadata['name'] ) {
        $metadata['usesContext']   ??= [];
        $metadata['usesContext'][] = 'useIcon';
        $metadata['usesContext'][] = 'icon';
	}

    if ( isset( $metadata['name'] ) && 'core/list' === $metadata['name'] ) {
        $metadata['attributes']['useIcon'] = array(
            'type'    => 'boolean',
            'default' => 'false'
        );
        $metadata['attributes']['icon'] = array(
            'type'    => 'string',
            'default' => 'test'
        );

        $metadata['providesContext'] ??= [];
        $metadata['providesContext']['useIcon'] = 'useIcon';
        $metadata['providesContext']['icon']     = 'icon';
	}

	return $metadata;
}
add_filter( 'block_type_metadata', 'dhe_add_context_to_list_blocks_metadata' );


add_action( 'render_block_core/list-item', function( $block_content, $block, $instance ) {
    
    if ( ! isset( $instance->context ) ) {
        return $block_content;
    }

    $context = $instance->context;
    $useIcon = $context['useIcon'] ??= false;
    $icon    = $context['icon']    ??= '';

    if ( $useIcon && $icon ) {
        // Do whatever you want here...
        return $block_content . ' ' . $context['icon'];
    } 

    return $block_content;
}, 10, 3 );
