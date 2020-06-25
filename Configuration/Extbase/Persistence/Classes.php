<?php
declare(strict_types=1);

return [
    \SJBR\StaticInfoTables\Domain\Model\Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameSk' => [
                'fieldName' => 'cn_short_sk',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\CountryZone::class => [
        'tableName' => 'static_country_zones',
        'properties' => [
            'nameSk' => [
                'fieldName' => 'zn_name_sk',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Currency::class => [
        'tableName' => 'static_currencies',
        'properties' => [
            'nameSk' => [
                'fieldName' => 'cu_name_sk',
            ],
            'subdivisionNameSk' => [
                'fieldName' => 'cu_sub_name_sk',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Language::class => [
        'tableName' => 'static_languages',
        'properties' => [
            'nameSk' => [
                'fieldName' => 'lg_name_sk',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Territory::class => [
        'tableName' => 'static_territories',
        'properties' => [
            'nameSk' => [
                'fieldName' => 'tr_name_sk',
            ],
        ],
    ],
];
