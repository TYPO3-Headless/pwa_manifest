<?php

declare(strict_types=1);

namespace FriendsOfTYPO3\PwaManifest\Service;

use TYPO3\CMS\Core\Configuration\Exception\ExtensionConfigurationExtensionNotConfiguredException;
use TYPO3\CMS\Core\Configuration\Exception\ExtensionConfigurationPathDoesNotExistException;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Http\ServerRequest;
use TYPO3\CMS\Core\Site\Entity\Site;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/***
 *
 * This file is part of the "pwa_manifest" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 *
 *  (c) 2019
 *
 ***/

/**
 * Settings service
 */
class ConfigurationService
{
    /**
     * @return string
     */
    public function provideConfiguration(): string
    {
        $siteConfiguration = $this->getSite()->getConfiguration();
        $settings = [
            'short_name' => $siteConfiguration['manifestShortName'] ?? '',
            'name' => $siteConfiguration['manifestName'] ?? '',
            'icons' => [
                [
                    'src' => $siteConfiguration['manifestSmallIconSource'] ?? '',
                    'type' => $siteConfiguration['manifestSmallIconType'] ?? '',
                    'sizes' => $siteConfiguration['manifestSmallIconSizes'] ?? '',
                ],
                [
                    'src' => $siteConfiguration['manifestBigIconSource'] ?? '',
                    'type' => $siteConfiguration['manifestBigIconType'] ?? '',
                    'sizes' => $siteConfiguration['manifestBigIconSizes'] ?? '',
                ]
            ],
            'start_url' => $siteConfiguration['manifestStartUrl'] ?? '',
            'background_color' => $siteConfiguration['manifestBackgroundColor'] ?? '',
            'display' => $siteConfiguration['manifestDisplay'] ?? '',
            'scope' => $siteConfiguration['manifestScope'] ?? '',
            'theme_color' => $siteConfiguration['manifestThemeColor'] ?? ''
        ];

        return json_encode($settings);
    }

    /**
     * @return ExtensionConfiguration
     */
    protected function getExtensionConfiguration(): ExtensionConfiguration
    {
        return GeneralUtility::makeInstance(ExtensionConfiguration::class);
    }

    /**
     * @return ServerRequest
     */
    protected function getServerRequest(): ServerRequest
    {
        return $GLOBALS['TYPO3_REQUEST'];
    }

    /**
     * @return Site
     */
    protected function getSite(): Site
    {
        return $this->getServerRequest()->getAttribute('site');
    }
}
