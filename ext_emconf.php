<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (sk)',
    'description' => '(sk) language pack for the Static Info Tables providing localized names for countries, 
                        currencies and so on.',
    'category' => 'misc',
    'shy' => 0,
    'version' => '6.2.0',
    'dependencies' => 'static_info_tables',
    'conflicts' => '',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'lockType' => '',
    'author' => 'Daniel Schlohmann',
    'author_email' => 'info@schlomania.com',
    'author_company' => 'schlomania WebDesign',
    'CGLcompliance' => '',
    'CGLcompliance_note' => '',
    'constraints' => [
        'depends' => [
            'static_info_tables' => '2.3.2-6.3.99',
            'php' => '5.3.0-5.6.7',
            'typo3' => '6.2.99-7.6.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'suggests' => [
    ],
];
