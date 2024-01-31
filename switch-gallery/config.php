<?php

$arr_config = [
    'label' => ['Switch Gallery'],
    'types' => ['content', 'module'],
    'contentCategory' => 'LS',
    'moduleCategory' => 'miscellaneous',
    'wrapper' => [
        'type' => 'none'
    ],
    'standardFields' => ['cssID'],
    'fields' => [
        'image' => [
            'label' => ['Bilddatei(en)', ''],
            'inputType' => 'fileTree',
            'eval' => [
                'fieldType' => 'checkbox',
                'multiple' => true,
                'orderField' => 'orderSRC',
                'filesOnly' => true,
                'extensions' => Contao\Config::get('validImageTypes'),
                'isGallery' => true,
                'tl_class' => 'w50'
            ],
            'sql' => 'blob NULL',
            'load_callback' => [
                ['tl_content', 'setMultiSrcFlags']
            ]
        ],
        'size' => [
            'label' => ['Bildbreite und Bildhöhe', ''],
            'inputType' => 'imageSize',
            'reference' => &$GLOBALS['TL_LANG']['MSC'],
            'eval' => [
                'rgxp' => 'digit',
                'includeBlankOption' => true,
                'tl_class' => 'clr w50'
            ],
            'options' => Contao\System::getImageSizes()
        ]
    ]
];