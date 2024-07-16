import { registerBlockVariation, getBlockType } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

const variations = [
    {
        name: 'donate',
        title: __( 'Donate', 'bpbw' ),
        description: __( 'Donate Link.', 'bpbw' ),
        category: 'media',
        icon: 'money-alt',
        keywords: [
            __( 'group', 'bpbw' ),
            __( 'link', 'bpbw' ),
            __( 'toutt', 'bpbw' )
        ],
        attributes: {
            className: 'donate-tout',
        },
        innerBlocks: [
            [
                'site-functionality/link-group',
                {
                    url: '#',
                    linkTarget: '_blank',
                    rel: '',
                    attributesForBlocks:{
                        title: '',
                        'data-vars-ga-label': '',
                        'data-vars-ga-category': ''
                    }
                },
                [
                    [
                        'core/group',
                        {
                            className: 'title__wrapper'
                        },
                        [
                            [
                                'core/heading',
                                {
                                    level: 4,
                                    className: 'tout__title',
                                    placeholder: __( 'Add Heading...', 'bpbw' )
                                },
                            ]
                        ]
                    ],
                    [
                        'core/image',
                        {
                            sizeSlug: 'large',
                            linkDestination: 'none',
                            className: 'link-group__image'
                        }
                    ]
                ],
            ]
        ],
        example : {
            attributes: {
                className: 'donate-tout',
            },
            innerBlocks: [
                {
                    name: 'site-functionality/link-group',
                    attributes: {
                        url: '#',
                        linkTarget: '_blank',
                        rel: '',
                        attributesForBlocks: {
                            title: '',
                            'data-vars-ga-label': '',
                            'data-vars-ga-category': ''
                        }
                    },
                    innerBlocks: [
                        {
                            name: 'core/group',
                            attributes: {
                                className: 'title__wrapper',
                            },
                            innerBlocks: [
                                {
                                    name: 'core/heading',
                                    attributes: {
                                        level: 4,
                                        className: 'tout__title',
                                        content: __( 'Donate to the Uru-eu-wau-wau Association', 'bpbw' ),
                                    },
                                }
                            ]
                        },
                        {
                            name: 'core/image',
                            attributes: {
                                className: 'tout__image',
                                sizeSlug: 'medium',
                                url: 'https://live.staticflickr.com/7271/6941148040_e7221059d9_b.jpg'
                            }
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
        'core/group',
        variation
    );
} );
