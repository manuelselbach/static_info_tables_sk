<?php

$initialize = function ($dataSetName) {
    $additionalFields = [
        'tr_name_en' => 'tr_name_sk',
    ];

    \Mselbach\StaticInfoTablesSk\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
};
$initialize('static_territories');
unset($initialize);
