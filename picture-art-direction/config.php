<?php

$arr_config = [
    'label' => ['Picture Art Direction'],
    'types' => ['content', 'module'],
    'contentCategory' => 'LS',
    'wrapper' => [
        'type' => 'none'
    ],
    'standardFields' => ['cssID'],
    'fields' => [
        'fallbackImage' => [
            'label' => ['Fallback Bild'],
            'inputType' => 'fileTree',
            'eval' => [
                'fieldType' => 'radio',
                'filesOnly' => true,
                'extensions' => Contao\Config::get('validImageTypes')
            ]
        ],
        'boxes' => [
            'label' => ['Media Queries'],
            'elementLabel' => '%s. Media Query',
            'inputType' => 'list',
            'fields' => [
                'mediaQuery' => [
                    'label' => ['Media Query', 'Hier können Sie festlegen, wann das Bild verwendet wird, z.B. (max-width: 600px)'],
                    'inputType' => 'text'
                ],
                'imageElements' => [
                    'label' => ['Bild'],
                    'elementLabel' => '%s. Bild',
                    'inputType' =>  'list',
                    'fields' => [
                        'image' => [
                            'label' => ['Bilddatei', ''],
                            'inputType' => 'fileTree',
                            'eval' => [
                                'fieldType' => 'radio',
                                'filesOnly' => true,
                                'extensions' => Contao\Config::get('validImageTypes'),
                                'tl_class' => 'clr w50'
                            ]
                        ],
                        'density' => [
                            'label' => ['Pixeldichte/Skalierungsfaktor', 'Hier können Sie die Pixeldichte (z.B. 1x, 1.5x, 2x) oder die Breitenbeschreibungen (z.B. 100w, 200w) definieren.'],
                            'inputType' => 'text',
                            'eval' => [
                                'tl_class' => 'w50'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];