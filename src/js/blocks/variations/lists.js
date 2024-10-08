import { registerBlockVariation } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

const variations = [
    {
        name: 'list',
        title: __( 'Basic List', 'bpbw' ),
        description: __( 'Display a basic list.', 'bpbw' ),
        isDefault: true,
        icon: 'editor-ul',
        attributes: {
            className: 'basic',
            placeholder: __( 'Add list items ...', 'bpbw' )
        },
        example: {
            attributes: {
                className: 'basic',
            },
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
        isActive: ( blockAttributes, variationAttributes ) =>
            blockAttributes.className === variationAttributes.className
    },
    {
        name: 'bullet-list-columns',
        title: __( 'Columned Bullet List', 'bpbw' ),
        description: __( 'A list displayed in 2 columns.', 'bpbw' ),
        attributes: {
            className: 'bullet-list-columns',
            placeholder: __( 'Add list items ...', 'bpbw' )
        },
        icon: 'columns',
        scope: [
            'transform'
        ],
        isActive: ( blockAttributes, variationAttributes ) =>
            blockAttributes.className === variationAttributes.className
    },
    {
        name: 'bullet-list',
        title: __( 'Bullet List', 'bpbw' ),
        description: __( 'A regular list, with fancy bullets.', 'bpbw' ),
        icon: 'list-view',
        attributes: {
            className: 'bullet-list',
            placeholder: __( 'Add list items ...', 'bpbw' )
        },
        scope: [
            'transform'
        ],
        isActive: ( blockAttributes, variationAttributes ) =>
            blockAttributes.className === variationAttributes.className
    },
    {
        name: 'icon-list',
        title: __( 'Icon List', 'bpbw' ),
        description: __( 'A regular with icon.', 'bpbw' ),
        icon: 'star-filled',
        attributes: {
            className: 'icon-list',
            placeholder: __( 'Add list items ...', 'bpbw' )
        },
        scope: [
            'transform'
        ],
        isActive: ( blockAttributes, variationAttributes ) =>
            blockAttributes.className === variationAttributes.className
    }
];

variations.forEach( ( variation ) => {
    registerBlockVariation(
        'core/list',
        variation
    );
} );
