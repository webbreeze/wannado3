<?php

defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'wb_custom', 'Configuration/TypoScript', 'Custom Extension - WebBreeze'
);