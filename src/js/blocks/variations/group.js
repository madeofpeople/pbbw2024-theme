import { registerBlockVariation, getBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

const variations = [
    {},
];
variations.forEach( ( variation ) => {
    registerBlockVariation(
        'core/group',
        variation
    );
} );
