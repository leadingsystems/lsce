<?php

$arr_config = [
    'label' => ['Footer'],
    'types' => ['content', 'module'],
    'contentCategory' => 'LS',
    'moduleCategory' => 'miscellaneous',
    'wrapper' => [
        'type' => 'none'
    ],
    'standardFields' => ['cssID'],
    'fields' => [
        'layoutGroup' => [
            'label' => ['Layouteinstellung'],
            'inputType' => 'group'
        ],
        'layout' => [
            'label' => ['Ausrichtung der Spalten'],
            'inputType' => 'select',
            'options' => [
                'flex-layout-fix' => 'Spalten mit fester Breite ausrichten',
                'flex-layout-sb' => 'Spalten mit gleichmäßigem Zwischenraum ausrichten'
            ],
            'eval' => [
                'tl_class' => 'w50'
            ]
        ],
        'boxes' => [
            'label' => ['Textspalten'],
            'elementLabel' => '%s. Spalte',
            'inputType' => 'list',
            'minItems' => 1,
            'maxItems' => 4,
            'fields' => [
                'footerColHeadlineUnit' => [
                    'label' => ['Überschrift'],
                    'inputType' => 'inputUnit',
                    'options' => ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'],
                    'eval' => [
                        'maxlength' => 200,
                        'tl_class' => 'w50 clr'
                    ]
                ],
                'footerColText' => [
                    'label' => ['Inhalt'],
                    'inputType' => 'textarea',
                    'eval' => [
                        'rte' => 'tinyMCE',
                        'style' => 'height: 220px',
                        'tl_class' => 'clr'
                    ],
                ],
                'footerColImage' => [
                    'label' => ['Bilddatei(en)', 'Nur in dem Feld, wo Bilder angezeigt werden sollen'],
                    'inputType' => 'fileTree',
                    'eval' => [
                        'fieldType' => 'checkbox',
                        'multiple' => true,
                        'orderField' => 'orderSRC',
                        'filesOnly' => true,
                        'extensions' => Contao\Config::get('validImageTypes'),
                        'isGallery' => true,
                        'tl_class' => 'w50'
                    ]
                ],
                'footerColImageSize' => [
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
                'footerColHyperlink' => [
                    'label' => ['Verlinkungen'],
                    'elementLabel' => '%s. Link',
                    'inputType' => 'list',
                    'fields' => [
                        'hyperlinkHref' => [
                            'label' => ['Verlinkung'],
                            'inputType' => 'url',
                            'eval' => [
                                'tl_class' => 'w50 clr'
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
                            'label' => ['Link-Text'],
                            'inputType' => 'text',
                            'eval' => [
                                'tl_class' => 'w50 clr'
                            ]
                        ],
                        'hyperlinkTitle' => [
                            'label' => ['Link-Titel'],
                            'inputType' => 'text',
                            'eval' => [
                                'tl_class' => 'w50'
                            ]
                        ],
                    ],
                ],
            ],
        ],
    ],
];