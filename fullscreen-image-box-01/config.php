<?php

$arr_config = [
    'label' => ['Fullscreen Image Box 01'],
    'types' => ['content', 'module'],
    'contentCategory' => 'LS',
    'moduleCategory' => 'miscellaneous',
    'wrapper' => [
        'type' => 'none'
    ],
    'standardFields' => array('cssID'),
    'fields' => [
        'headlineGroup' => [
            'label' => ['Überschrift'],
            'inputType' => 'group'
        ],

        'headline' => [
            'inputType' => 'standardField'
        ],

        'subheadline' => [
            'label' => ['Unterüberschrift'],
            'inputType' => 'inputUnit',
            'options' => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
            'eval' => [
                'tl_class' => 'w50'
            ]
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
            ],
        ],

        'textBrightnessOnImage' => [
            'label' => ['Texthintergrund auf Bild'],
            'inputType' => 'select',
            'options' => [
                'bright' => 'hell',
                'dark' => 'dunkel'
            ],
            'eval' => [
                'tl_class' => 'w50'
            ]
        ],

        'hyperlinkGroup' => [
            'label' => ['Verlinkung'],
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
                'tl_class' => 'w50'
            ]
        ],
        'hyperlinkTitle' => [
            'label' => ['Button-Titel'],
            'inputType' => 'text',
            'eval' => [
                'tl_class' => 'w50'
            ]
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
            'options' => \System::getImageSizes()
        ]
    ]
];
