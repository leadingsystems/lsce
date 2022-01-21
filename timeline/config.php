<?php

$arr_config = [
    'label' => ['Timeline'],
    'types' => ['content','module'],
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
            'label' => ['Zeiteinträge'],
            'elementLabel' => '%s. Zeiteintrag',
            'inputType' => 'list',
            'fields' => [
                'direction' => [
                    'label' => ['Ausrichtung'],
                    'inputType' => 'select',
                    'options' => [
                        'left' => 'Links',
                        'right' => 'Rechts'
                    ],
                    'eval' => [
                        'tl_class' => 'w50'
                    ]
                ],

                'time' => [
                    'label' => ['Zeitraum'],
                    'inputType' => 'text',
                    'eval' => [
                        'tl_class' => 'w50 clr'
                    ]
                ],

                'text' => [
                    'label' => ['Text'],
                    'inputType' => 'textarea',
                    'eval'  => [
                        'rte'=>'tinyMCE',
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

                'linkGroup' => [
                    'label' => ['Link'],
                    'inputType' => 'group'
                ],

                'hyperlinkHref' => [
                    'label' => ['Button-Verlinkung'],
                    'inputType' => 'url',
                    'eval' => [
                        'tl_class' => 'w50'
                    ]
                ],
                'hyperlinkNewWindow' => [
                    'label' => $GLOBALS['TL_LANG']['MSC']['target'],
                    'inputType' => 'checkbox',
                    'eval' => [
                        'tl_class' => 'w50 cbx m12'
                    ]
                ],
                'hyperlinkText' => [
                    'label' => ['Button-Beschriftung'],
                    'inputType' => 'text',
                    'eval' => [
                        'tl_class' => 'w50 clr'
                    ]
                ],
                'hyperlinkTitle' => [
                    'label' => ['Button-Titel'],
                    'inputType' => 'text',
                    'eval' => [
                        'tl_class' => 'w50'
                    ]
                ],
                'hyperlinkClass' => [
                    'label' => ['Button-Klasse'],
                    'inputType' => 'text',
                    'eval' => [
                        'tl_class' => 'w50 clr'
                    ]
                ],
            ]
        ]
    ]
];