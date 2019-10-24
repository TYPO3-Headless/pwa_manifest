<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {
    /**
     * Default TypoScript for Manifest
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'pwa_manifest',
        'Configuration/TypoScript',
        'PWA Manifest'
    );
});
