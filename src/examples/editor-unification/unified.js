/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
import { registerPlugin } from '@wordpress/plugins';
import {
	Modal,
	RadioControl,
	SelectControl,
	TextControl,
} from '@wordpress/components';
import { useState } from '@wordpress/element';
import { settings } from '@wordpress/icons';
import { PluginMoreMenuItem as PostEditorPluginMoreMenuItem } from '@wordpress/edit-post'; // Slot for the Post Editor
import { PluginMoreMenuItem as SiteEditorPluginMoreMenuItem } from '@wordpress/edit-site'; // Slot for the Site Editor
import { PluginMoreMenuItem as UnifiedPluginMoreMenuItem } from '@wordpress/editor'; // Slot for the unified Editor

/**
 * Adds a sidebar button in the Editor that toggles the demo Plugin Settings modal.
 */
function EditorUnificationUnifiedSlot() {
	const [ isModalOpen, setModalOpen ] = useState( false );
	const [ radioValue, setRadioValue ] = useState( null );
	const [ selectValue, setSelectValue ] = useState( null );

	return (
		<>
			{ UnifiedPluginMoreMenuItem ? (
				<UnifiedPluginMoreMenuItem
					icon={ settings }
					onClick={ () => setModalOpen( true ) }
					className="dhe-editor-unification-unified-button-6-6"
				>
					{ __(
						'Plugin Settings (Unified)',
						'developer-hours-examples'
					) }
				</UnifiedPluginMoreMenuItem>
			) : (
				<>
					<PostEditorPluginMoreMenuItem
						icon={ settings }
						onClick={ () => setModalOpen( true ) }
						className="dhe-editor-unification-unified-button"
					>
						{ __(
							'Plugin Settings (Post Editor)',
							'developer-hours-examples'
						) }
					</PostEditorPluginMoreMenuItem>
					<SiteEditorPluginMoreMenuItem
						icon={ settings }
						onClick={ () => setModalOpen( true ) }
						className="dhe-editor-unification-unified-button"
					>
						{ __(
							'Plugin Settings (Site Editor)',
							'developer-hours-examples'
						) }
					</SiteEditorPluginMoreMenuItem>
				</>
			) }
			{ isModalOpen && (
				<Modal
					className="dhe-editor-unification-modal-container"
					title={ __(
						'Manage Plugin Settings',
						'developer-hours-examples'
					) }
					onRequestClose={ () => setModalOpen( false ) }
					size="large"
				>
					<TextControl
						label={ __( 'Text Field', 'developer-hours-examples' ) }
						onChange={ ( newValue ) => console.log( newValue ) }
					/>
					<RadioControl
						label={ __(
							'Radio Field',
							'developer-hours-examples'
						) }
						selected={ radioValue }
						options={ [
							{
								label: __(
									'Option A',
									'developer-hours-examples'
								),
								value: 'a',
							},
							{
								label: __(
									'Option B',
									'developer-hours-examples'
								),
								value: 'b',
							},
							{
								label: __(
									'Option C',
									'developer-hours-examples'
								),
								value: 'c',
							},
						] }
						onChange={ ( newValue ) => {
							setRadioValue( newValue );
							console.log( newValue );
						} }
					/>
					<SelectControl
						label={ __(
							'Select Field',
							'developer-hours-examples'
						) }
						value={ selectValue }
						options={ [
							{
								disabled: true,
								label: __(
									'Select an Option',
									'developer-hours-examples'
								),
								value: '',
							},
							{
								label: __(
									'Option A',
									'developer-hours-examples'
								),
								value: 'a',
							},
							{
								label: __(
									'Option B',
									'developer-hours-examples'
								),
								value: 'b',
							},
							{
								label: __(
									'Option C',
									'developer-hours-examples'
								),
								value: 'c',
							},
						] }
						onChange={ ( newValue ) => {
							setSelectValue( newValue );
							console.log( newValue );
						} }
					/>
				</Modal>
			) }
		</>
	);
}

// Only register if the example is enabled.
if ( window.editorUnificationUnified ) {
	registerPlugin( 'dhe-editor-unification-unified-slot', {
		render: EditorUnificationUnifiedSlot,
	} );
}
