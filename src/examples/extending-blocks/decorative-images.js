/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
import { addFilter } from '@wordpress/hooks';
import { InspectorControls } from '@wordpress/block-editor';
import {
	PanelBody,
	BaseControl,
	PanelRow,
	ToggleControl,
	ExternalLink,
} from '@wordpress/components';
import { Children, cloneElement } from '@wordpress/element';

/**
 * Filter the BlockEdit object and add the "Is Decorative" toggle to Image blocks.
 *
 * @since 0.1.0
 * @param {Object} BlockEdit
 */
function addImageInspectorControls( BlockEdit ) {
	return ( props ) => {
		if ( props.name !== 'core/image' ) {
			return <BlockEdit { ...props } />;
		}

		const { attributes, setAttributes } = props;
		const { isDecorative } = attributes;

		return (
			<>
				<BlockEdit { ...props } />
				<InspectorControls>
					<PanelBody
						title={ __(
							'Accessibility',
							'developer-hours-examples'
						) }
					>
						<PanelRow>
							<ToggleControl
								label={ __(
									'Image is decorative',
									'developer-hours-examples'
								) }
								checked={ isDecorative }
								onChange={ () => {
									setAttributes( {
										isDecorative: ! isDecorative,
									} );
								} }
								help={
									<>
										{ __(
											"Decorative images don't add information to the content of a page. ",
											'developer-hours-examples'
										) }
										<ExternalLink
											href={
												'https://www.w3.org/WAI/tutorials/images/decorative/'
											}
										>
											{ __(
												'Learn more.',
												'developer-hours-examples'
											) }
										</ExternalLink>
									</>
								}
							/>
						</PanelRow>
					</PanelBody>
				</InspectorControls>
			</>
		);
	};
}

addFilter(
	'editor.BlockEdit',
	'example/add-image-inspector-controls',
	addImageInspectorControls
);

/**
 * Add the attributes needed for decorative images.
 *
 * @since 0.1.0
 * @param {Object} settings
 */
function addAttributes( settings ) {
	if ( 'core/image' !== settings.name ) {
		return settings;
	}

	const imageAttributes = {
		isDecorative: {
			type: 'boolean',
			default: false,
		},
	};

	const newSettings = {
		...settings,
		attributes: {
			...settings.attributes,
			...imageAttributes,
		},
	};

	return newSettings;
}

addFilter(
	'blocks.registerBlockType',
	'enable-button-icons/add-attributes',
	addAttributes
);

/**
 * Adds the role attribute to img elements in the block's Save function for
 * accessibility purposes.
 *
 * This function iterates over the children of a given element and adds the
 * role="presentation" attribute to img elements if they are marked as decorative.
 *
 * @since 0.1.0
 * @param {Object} element    The React element to be modified.
 * @param {Object} blockType  The type of the block.
 * @param {Object} attributes The block attributes.
 * @return {Object} The modified React element with updated img roles.
 */
function addAccessibilityRoleToImages( element, blockType, attributes ) {
	const { name } = blockType;
	const { isDecorative } = attributes;

	const updateChildrenWithRole = ( children ) => {
		return Children.map( children, ( child ) => {
			// Check if the child is of type 'img'.
			if ( child?.type === 'img' ) {
				return cloneElement( child, { role: 'presentation' } );
			}

			// If the current child has children of its own, recurse over them.
			if ( child?.props?.children ) {
				return cloneElement( child, {
					children: updateChildrenWithRole( child.props.children ),
				} );
			}

			return child;
		} );
	};

	// Skip if element is undefined.
	if ( ! element ) {
		return;
	}

	// Apply the correct role to 'img' elements.
	if ( 'core/image' === name && isDecorative ) {
		return cloneElement( element, {
			children: updateChildrenWithRole( element.props.children ),
		} );
	}

	return element;
}

addFilter(
	'blocks.getSaveElement',
	'example/add-accessibility-role-to-images',
	addAccessibilityRoleToImages
);

function addAccessibilityRoleToImageBlocks( props, blockType, attributes ) {
	const { name } = blockType;
	const { isDecorative } = attributes;

	if ( 'core/image' === name && isDecorative ) {
		return {
			...props,
			role: 'presentation',
		};
	}

	return props;
}

addFilter(
	'blocks.getSaveContent.extraProps',
	'example/add-accessibility-role-to-image-blocks',
	addAccessibilityRoleToImageBlocks
);
