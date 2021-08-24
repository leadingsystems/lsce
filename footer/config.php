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
                'footerColLabel' => [
                    'label' => ['Feld Überschrift 1'],
                    'inputType' => 'textarea',
                    'eval' => array('rte' => 'tinyMCE', 'style' => 'height: 220px', 'tl_class' => 'w50'),
                ],
                'text' => [
                    'label' => ['Feld Inhalt 1'],
                    'inputType' => 'text',
                    'eval' => array('rte' => 'tinyMCE', 'style' => 'height: 220px', 'tl_class' => 'w50'),
                ],
                'footerColIcons' => [
                    'label' => ['Icons', 'Nur in dem Feld, wo Icons angezeigt werden sollen'],
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
                'hyperlinkboxes' => [
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




