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
                'filesOnly' => true,
                'extensions' => implode(',', Contao\System::getContainer()->getParameter('contao.image.valid_extensions')),
                'isGallery' => true,
                'isSortable' => true,
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
            'options_callback' => static function () {
                return Contao\System::getContainer()->get('contao.image.sizes')->getOptionsForUser(Contao\BackendUser::getInstance());
            }
        ]
    ]
];