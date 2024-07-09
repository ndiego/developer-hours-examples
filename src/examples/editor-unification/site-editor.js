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
import { PluginMoreMenuItem } from '@wordpress/edit-site'; // Slot for the Site Editor

/**
 * Adds a sidebar button in the Site Editor that toggles the demo Site Editor Settings modal.
 */
function EditorUnificationSiteEditorSlot() {
	const [ isModalOpen, setModalOpen ] = useState( false );
	const [ radioValue, setRadioValue ] = useState( null );
	const [ selectValue, setSelectValue ] = useState( null );

	return (
		<>
			<PluginMoreMenuItem
				icon={ settings }
				onClick={ () => setModalOpen( true ) }
				className="dhe-editor-unification-site-editor-button"
			>
				{ __( 'Site Editor Settings', 'developer-hours-examples' ) }
			</PluginMoreMenuItem>
			{ isModalOpen && (
				<Modal
					className="dhe-editor-unification-modal-container"
					title={ __(
						'Manage Site Editor Settings',
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
								label:  __(
									'Option A',
									'developer-hours-examples'
								),
								value: 'a',
							},
							{
								label:  __(
									'Option B',
									'developer-hours-examples'
								),
								value: 'b',
							},
							{
								label:  __(
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
								label:  __(
									'Select an Option',
									'developer-hours-examples'
								),
								value: '',
							},
							{
								label:  __(
									'Option A',
									'developer-hours-examples'
								),
								value: 'a',
							},
							{
								label:  __(
									'Option B',
									'developer-hours-examples'
								),
								value: 'b',
							},
							{
								label:  __(
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
if ( window.editorUnificationSiteEditor ) {
	registerPlugin( 'dhe-editor-unification-site-editor-slot', {
		render: EditorUnificationSiteEditorSlot,
	} );
}
