<?php

$arr_config = [
    'label' => ['Hero'],
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
            'label' => ['Überschrift'],
            'inputType' => 'inputUnit',
            'options' => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
            'eval' => [
                'maxlength' => 200,
                'tl_class' => 'w50 clr'
            ],
            'sql' => "varchar(255) NOT NULL default 'a:2:{s:5:\"value\";s:0:\"\";s:4:\"unit\";s:2:\"h2\";}'"
        ],
        'subheadline' => [
            'label' => ['Unterüberschrift'],
            'inputType' => 'textarea',
            'eval'  => [
                'rte'=>'tinyMCE',
                'style' => 'height: 200px',
                'tl_class' => 'clr long'
            ],
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

        'imageGroup' => [
            'label' => ['Bildeinstellungen'],
            'inputType' => 'group'
        ],
        'image' => [
            'label' => ['Bildauswahl'],
            'inputType' => 'fileTree',
            'eval' => [
                'fieldType' => 'radio',
                'filesOnly' => true,
                'extensions' => Contao\Config::get('validImageTypes'),
                'tl_class' => 'clr'
            ]
        ],
        'imageSize' => [
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
        'imageOption' => [
            'label' => ['Bildoption', 'Umstellen auf object-fit = cover'],
            'inputType' => 'checkbox',
            'eval' => [
                'tl_class' => 'w50 cbx m12'
            ]
        ]
    ]
];