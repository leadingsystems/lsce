<?php
$arr_config = [
    'label' => ['Überschrift erweitert'],
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
    ]
];