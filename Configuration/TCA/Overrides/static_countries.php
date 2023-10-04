<?php

$initialize = function ($dataSetName) {
    $additionalFields = [
        'cn_short_en' => 'cn_short_sk',
    ];

    \Mselbach\StaticInfoTablesSk\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
};
$initialize('static_countries');
unset($initialize);
