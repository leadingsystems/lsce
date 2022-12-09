<?php

$arr_config = [
    'label' => ['Contentbox Modal'],
    'types' => ['content', 'module'],
    'contentCategory' => 'LS',
    'moduleCategory' => 'miscellaneous',
    'wrapper' => [
        'type' => 'none'
    ],
    'standardFields' => ['cssID'],
    'fields' => [
        'imageGroup' => [
            'label' => ['Bildgröße'],
            'inputType' => 'group'
        ],

        'size' => [
            'label' => ['Bildbreite und Bildhöhe', ''],
            'inputType' => 'imageSize',
            'reference' => &$GLOBALS['TL_LANG']['MSC'],
            'eval' => [
                'rgxp' => 'digit',
                'includeBlankOption' => true,
                'tl_class' => 'w50'
            ],
            'options' => \System::getImageSizes()
        ],

        'boxes' => [
            'label' => ['Teaserboxen'],
            'elementLabel' => '%s Teaserbox',
            'inputType' => 'list',
            'minItems' => 1,
            'fields' => [

                'headline' => [
                    'label' => ['Überschrift'],
                    'inputType' => 'inputUnit',
                    'options' => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
                    'eval' => [
                        'maxlength' => 200,
                        'tl_class' => 'w50 clr'
                    ]
                ],

                'text' => [
                    'label' => ['Text'],
                    'inputType' => 'textarea',
                    'eval' => [
                        'rte' => 'tinyMCE',
                        'style' => 'height: 200px',
                        'tl_class' => 'clr'
                    ]
                ],

                'image' => [
                    'label' => ['Bildauswahl'],
                    'inputType' => 'fileTree',
                    'eval' => [
                        'fieldType' => 'radio',
                        'filesOnly' => true,
                        'extensions' => Contao\Config::get('validImageTypes'),
                        'tl_class' => 'w50'
                    ]
                ],

//                'hyperlinkHref' => [
//                    'label' => ['Button-Verlinkung'],
//                    'inputType' => 'url',
//                    'eval' => [
//                        'tl_class' => 'clr w50'
//                    ]
//                ],
//                'hyperlinkNewWindow' => [
//                    'label' => $GLOBALS['TL_LANG']['MSC']['target'],
//                    'inputType' => 'checkbox',
//                    'eval' => [
//                        'tl_class' => 'w50 cbx m12'
//                    ]
//                ],
                'modalGroup' => [
                    'label' => ['Modalbox'],
                    'inputType' => 'group'
                ],
                'summaryLink' => [
                    'label' => ['Modal Link'],
                    'inputType' => 'text',
                    'eval' => [
                        'tl_class' => 'w50 clr'
                    ]
                ],
                'summaryDetail' => [
                    'label' => ['Modal Content'],
                    'inputType' => 'textarea',
                    'eval' => [
                        'rte' => 'tinyMCE',
                        'style' => 'height: 200px',
                        'tl_class' => 'clr'
                    ]
                ]
            ]
        ]
    ]
];