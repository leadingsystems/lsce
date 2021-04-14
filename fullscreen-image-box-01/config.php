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
            'inputType' => 'text',
            'eval' => [
                'tl_class' => 'w50'
            ]
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

        'textBrightnessOnImage' => [
            'label' => ['Texthelligkeit auf Bild'],
            'inputType' => 'select',
            'options' => [
                'bright' => 'hell',
                'dark' => 'dunkel'
            ],
            'eval' => [
                'tl_class' => 'w50'
            ]
        ]
    ]
];
