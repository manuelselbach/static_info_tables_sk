<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (sk)',
    'description' => '(sk) language pack for the Static Info Tables providing localized names for countries, 
                        currencies and so on.',
    'category' => 'misc',
    'version' => '6.3.0',
    'priority' => '',
    'loadOrder' => '',
    'module' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'lockType' => '',
    'author' => 'Manuel Selbach',
    'author_email' => 'manuel_selbach@yahoo.de',
    'author_company' => '',
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
    ]
];