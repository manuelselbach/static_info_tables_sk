<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$initialize = function ($extKey) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $extKey . '/Configuration/TypoScript/Extbase/setup.txt">'
    );
};
$initialize(\Mselbach\StaticInfoTablesSk\Extension::EXTENSION_KEY);
unset($initialize);
