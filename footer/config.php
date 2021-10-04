<?php

$arr_config = [
    'label' => ['Footer'],
    'types' => ['content', 'module'],
    'contentCategory' => 'LS',
    'moduleCategory' => 'miscellaneous',
    'wrapper' => [
        'type' => 'none'
    ],
    'standardFields' => array('cssID'),
    'fields' => array(
        'boxes' => array(
            'label' => array('Textboxen'),
            'elementLabel' => '%s. Box',
            'inputType' => 'list',
            'minItems' => 1,
            'maxItems' => 4,
            'fields' => array(
                'footerColHeadlineUnit' => [
                    'label' => ['Überschrift'],
                    'inputType' => 'inputUnit',
                    'options' => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'),
                    'eval' => array('maxlength'=>200, 'tl_class'=>'w50 clr'),
                    'sql' => "varchar(255) NOT NULL default 'a:2:{s:5:\"value\";s:0:\"\";s:4:\"unit\";s:2:\"h2\";}'"
                ],
                'footerColText' => [
                    'label' => ['Inhalt'],
                    'inputType' => 'textarea',
                    'eval' => array('rte' => 'tinyMCE', 'style' => 'height: 220px', 'tl_class' => 'clr'),
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
                        'tl_class' => 'w50'
                    ]
                ],
                'footerColImageSize' => [
                    'label' => array('Bildbreite und Bildhöhe', ''),
                    'inputType' => 'imageSize',
                    'reference' => &$GLOBALS['TL_LANG']['MSC'],
                    'eval' => array('rgxp'=>'digit', 'includeBlankOption'=>true, 'tl_class'=>'w50'),
                    'options' => \System::getImageSizes()
                ],
                'footerColHyperlink' => [
                    'label' => ['Verlinkungen'],
                    'elementLabel' => '%s. Box',
                    'inputType' => 'list',
                    'fields' => array(
                        'hyperlinkText' => [
                            'label' => ['Link-Beschriftung'],
                            'inputType' => 'text',
                            'eval' => [
                                'tl_class' => 'w50 clr'
                            ]
                        ],

                        'hyperlinkHref' => [
                            'label' => ['Verlinkung'],
                            'inputType' => 'url',
                            'eval' => [
                                'tl_class' => 'w50'
                            ]
                        ],
                    ),
                ],
            ),
        ),
    ),
];
return $arr_config;