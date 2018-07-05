<?php
defined('TYPO3_MODE') || die();

$initialize = function ($dataSetName) {
    $additionalFields = [
        'cu_name_en'     => 'cu_name_sk',
        'cu_sub_name_en' => 'cu_sub_name_sk',
    ];

    \Mselbach\StaticInfoTablesSk\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
};
$initialize('static_currencies');
unset($initialize);