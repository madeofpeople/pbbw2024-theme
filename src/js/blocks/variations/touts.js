import { registerBlockVariation, getBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

const variations = [
    {
        name: 'testimonial',
        title: __( 'Testimonial', 'bpbw' ),
        description: __('Large quote with background image.', 'bpbw'),
        category: 'media',
        icon: 'format-quote',
        keywords: [
            __( 'quote', 'bpbw' ),
            __( 'blockquote', 'bpbw' ),
            __( 'callout', 'bpbw' )
        ],
        attributes: {
            className: 'testimonial',
        },
        innerBlocks: [
            [
                'core/cover',
                {
                    isParallax: true,
                    dimRatio: 0,
                    url: 'https://images.unsplash.com/photo-1437149853762-a9c0fe22c9d0',
                    backgroundColor: 'rgba(128, 173, 108, 0.25)'
                },
                [
                    [
                        'core/group',
                        {
                            className: 'tout__content'
                        },
                        [
                            [
                                'core/quote',
                                {
                                    className: 'content',
                                    textColor: 'white'
                                },
                            ]
                        ]
                    ]
                ],
            ]
        ],
        example: {
            attributes: {},
            innerBlocks: [
                {
                    name: 'core/cover',
                    attributes: {
                        isParallax: true,
                        dimRatio: 0,
                        url: 'https://images.unsplash.com/photo-1437149853762-a9c0fe22c9d0',
                        backgroundColor: 'rgba(128, 173, 108, 0.25)'
                    },
                    innerBlocks: [
                        {
                            name: 'core/quote',
                            attributes: {
                                className: 'content',
                                citation: __( 'Bitaté Uru-eu-wau-wau', 'bpbw' )
                            },
                            innerBlocks: [
                                {
                                    name: 'core/paragraph',
                                    attributes: {
                                        content: __( '“historically, our existence has been marginalized and erased. through this film we\'re changing that.”', 'bpbw' ),
                                    },
                                },
                            ],

                        }
                    ]
                }
            ]
        },
        scope: [
            'block',
            'inserter',
            'transform'
        ],
    },
];
variations.forEach( ( variation ) => {
    registerBlockVariation(
        'site-functionality/tout',
        variation
    );
} );
