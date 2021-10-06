<?php
$arr_config = [
    'label' => ['Bild mit Textkachel'],
    'types' => ['content', 'module'],
    'contentCategory' => 'LS',
    'moduleCategory' => 'miscellaneous',
    'wrapper' => [
        'type' => 'none'
    ],
    'standardFields' => ['cssID'],
    'fields' => [
        'orderImageText' => [
            'label' => ['Kachel Reihenfolge'],
            'inputType' => 'select',
            'options' => [
                'order-text-image' => 'Textkachel links, Bildkachel rechts',
                'order-image-text' => 'Bildkachel links, Textkachel rechts'
            ],
            'eval' => [
                'tl_class' => 'w50'
            ],
        ],

        'image' => [
            'label' => ['Bildauswahl'],
            'inputType' => 'fileTree',
            'eval' => [
                'fieldType' => 'radio',
                'filesOnly' => true,
                'extensions' => Contao\Config::get('validImageTypes'),
                'tl_class' => 'w50 clr'
            ]
        ],

        'textfield' => [
            'label' => ['Text'],
            'inputType' => 'textarea',
            'eval'  => array('rte'=>'tinyMCE', 'style' => 'height: 140px', 'tl_class' => 'w100 clr'),
        ],

        'hyperlinkboxes' => [
            'label' => ['Buttons'],
            'elementLabel' => '%s. Button',
            'inputType' => 'list',
            'fields' => array(
                'hyperlinkText' => [
                    'label' => ['Button-Text'],
                    'inputType' => 'text',
                    'eval' => [
                        'tl_class' => 'w50 clr'
                    ]
                ],

                'hyperlinkHref' => [
                    'label' => ['Link'],
                    'inputType' => 'url',
                    'eval' => [
                        'tl_class' => 'w50'
                    ]
                ],
            ),
        ],


    ]
];
