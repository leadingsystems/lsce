<?php

$arr_config = [
    'label' => ['Contentbox 02'],
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

        'textGroup' => [
            'label' => ['Text-Inhalt'],
            'inputType' => 'group'
        ],

        'text' => [
            'inputType' => 'standardField'
        ],

        'hyperlinkGroup' => [
            'label' => ['Verlinkung'],
            'inputType' => 'group'
        ],

        'hyperlinkText' => [
            'label' => ['Button-Beschriftung'],
            'inputType' => 'text',
            'eval' => [
                'tl_class' => 'w50'
            ]
        ],

        'hyperlinkHref' => [
            'label' => ['Button-Verlinkung'],
            'inputType' => 'url',
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
            'inputType' => 'standardField'
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
