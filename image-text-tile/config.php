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
                'extensions' => implode(',', Contao\System::getContainer()->getParameter('contao.image.valid_extensions')),
                'tl_class' => 'long clr'
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
            'options_callback' => static function () {
                return Contao\System::getContainer()->get('contao.image.sizes')->getOptionsForUser(Contao\BackendUser::getInstance());
            }
        ],
        'textfield' => [
            'label' => ['Text'],
            'inputType' => 'textarea',
            'eval'  => [
                'rte'=>'tinyMCE',
                'style' => 'height: 200px',
                'tl_class' => 'clr'
            ],
        ],
        'hyperlinkBoxes' => [
            'label' => ['Buttons'],
            'elementLabel' => '%s. Button',
            'inputType' => 'list',
            'fields' => [
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
                'hyperlinkClass' => [
                    'label' => ['Button-Klasse'],
                    'inputType' => 'text',
                    'eval' => [
                        'tl_class' => 'w50 clr'
                    ]
                ],
            ],
        ],
    ]
];
