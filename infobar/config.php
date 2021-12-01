<?php

$arr_config = [
    'label' => ['Infobar'],
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
            'label' => ['Elementkonfiguation'],
            'inputType' => 'group'
        ],

        'mode' => [
            'label' => ['Darstellungsvariante'],
            'inputType' => 'select',
            'options' => [
                'normal' => 'Normal',
                'invert' => 'Invertiert'
            ],
            'eval' => [
                'tl_class' => 'w50'
            ]
        ],

        'boxes' => [
            'label' => ['Infoeinträge'],
            'elementLabel' => '%s. Info',
            'inputType' => 'list',
            'fields' => [
                'text' => [
                    'label' => ['Inhalt'],
                    'inputType' => 'textarea',
                    'eval' => [
                        'rte' => 'tinyMCE',
                        'style' => 'height: 220px',
                        'tl_class' => 'clr'
                    ]
                ]
            ]
        ]
    ]
];
