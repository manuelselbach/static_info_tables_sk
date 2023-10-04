<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (sk)',
    'description' => '(sk) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
    'category' => 'misc',
    'version' => '11.5.1',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => true,
    'lockType' => '',
    'author' => 'Manuel Selbach',
    'author_email' => 'manuel_selbach@yahoo.de',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'static_info_tables' => '11.5.0-11.5.99',
            'php' => '7.4.0-0.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
