import { registerBlockVariation } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

const variations = [
    {
        name: 'paragraph',
        title: __( 'Paragraph', 'bpbw' ),
        description: __( 'A standard paragraph.', 'bpbw' ),
        isDefault: true,
        category: 'text',
        keywords: [
            __( 'intro', 'bpbw' ),
            __( 'paragraph', 'bpbw' ),
            __( 'sentence', 'bpbw' )
        ],
        icon: 'editor-alignleft',
        attributes: {
            className: 'ptag',
            placeholder: __( 'Add content...', 'bpbw' )
        },
        example: {
            attributes: {
                content: __( 'This is a bock for displaying the opening paragraph, the big idea, the tl;dr.', 'bpbw' )
            },
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
    },
    {
        name: 'lede',
        title: __( 'Lede', 'bpbw' ),
        description: __( 'Add opening sentence or paragraph.', 'bpbw' ),
        icon: 'editor-justify',
        attributes: {
            className: 'lede',
            placeholder: __( 'Add content...', 'bpbw' )
        },
        scope: [
            'transform'
        ],
    }
];

variations.forEach( ( variation ) => {
    registerBlockVariation(
        'core/paragraph',
        variation
    );
} );
