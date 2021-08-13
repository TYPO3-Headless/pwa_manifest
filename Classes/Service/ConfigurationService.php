<?php

declare(strict_types=1);

namespace FriendsOfTYPO3\PwaManifest\Service;

use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Http\ServerRequest;
use TYPO3\CMS\Core\Site\Entity\Site;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;

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
            'theme_color' => $siteConfiguration['manifestThemeColor'] ?? '',
            'shortcuts' => $this->getShortcutsConfiguration($siteConfiguration)
        ];

        return json_encode($settings);
    }

    protected function getShortcutsConfiguration(array $siteConfiguration): array
    {
        $contentObject = GeneralUtility::makeInstance(ContentObjectRenderer::class);
        $shortcuts = [];
        for ($i = 1; $i <= 3; $i++) {
            if (
                ($siteConfiguration["manifestShortcuts{$i}Name"] ?? '') !== '' &&
                ($siteConfiguration["manifestShortcuts{$i}Url"] ?? '') !== ''
            ) {
                $shortcuts[] = \array_filter([
                    'name' => $siteConfiguration["manifestShortcuts{$i}Name"] ?? '',
                    'short_name' => $siteConfiguration["manifestShortcuts{$i}ShortName"] ?? '',
                    'description' => $siteConfiguration["manifestShortcuts{$i}Description"] ?? '',
                    'url' => $contentObject->typoLink_URL(['parameter' => $siteConfiguration["manifestShortcuts{$i}Url"] ?? '', 'forceAbsoluteUrl' => true]),
                    'icons' => \array_filter([
                        'src' => $siteConfiguration["manifestShortcuts{$i}IconSrc"] ?? '',
                        'sizes' => $siteConfiguration["manifestShortcuts{$i}IconSizes"] ?? ''
                    ])
                ]);
            }
        }

        return $shortcuts;
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
