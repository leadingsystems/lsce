<?php

$arr_config = [
    'label' => ['Contentbox'],
    'types' => ['content', 'module'],
    'contentCategory' => 'LS',
    'moduleCategory' => 'miscellaneous',
    'wrapper' => [
        'type' => 'none'
    ],
    'standardFields' => ['cssID'],
    'fields' => [
        'headlineGroup' => [
            'label' => ['Überschrift'],
            'inputType' => 'group'
        ],

        'headline' => [
            'inputType' => 'standardField'
        ],

        'textGroup' => [
            'label' => ['Text-Inhalt'],
            'inputType' => 'group'
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

        'hyperlinkBoxes' => [
            'label' => ['Buttons'],
            'elementLabel' => '%s. Button',
            'inputType' => 'list',
            'fields' => [
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
                        'tl_class' => 'w50'
                    ]
                ],
            ],
        ],

        'imageGroup' => [
            'label' => ['Bild'],
            'inputType' => 'group'
        ],

        'image' => [
            'label' => ['Bildauswahl'],
            'inputType' => 'fileTree',
            'eval' => [
                'fieldType' => 'radio',
                'filesOnly' => true,
                'extensions' => Contao\Config::get('validImageTypes')
            ]
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
            'options' => Contao\System::getImageSizes()
        ],

        'positionGroup' => [
            'label' => ['Positionierung'],
            'inputType' => 'group'
        ],

        'imagePositionHorizontally' => [
            'label' => ['Bildposition horizontal'],
            'inputType' => 'select',
            'options' => [
                'left' => 'links',
                'right' => 'rechts'
            ],
            'eval' => [
                'tl_class' => 'w50'
            ]
        ],

        'imagePositionVertically' => [
            'label' => ['Bildposition vertikal (bei einspaltiger Darstellung)'],
            'inputType' => 'select',
            'options' => [
                'top' => 'oben',
                'bottom' => 'unten'
            ],
            'eval' => [
                'tl_class' => 'w50'
            ]
        ],

        'imageToMiddle' => [
            'label' => ['Bild bis zur Mitte'],
            'inputType' => 'checkbox',
            'eval' => [
                'tl_class' => 'w50 m12'
            ]
        ]
    ]
];