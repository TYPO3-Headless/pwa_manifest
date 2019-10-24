<?php

declare(strict_types = 1);

namespace FriendsOfTYPO3\PwaManifest\Service;

use TYPO3\CMS\Core\Configuration\Exception\ExtensionConfigurationExtensionNotConfiguredException;
use TYPO3\CMS\Core\Configuration\Exception\ExtensionConfigurationPathDoesNotExistException;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
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
        $settings = [];
        try {
            $settings = $this->getExtensionConfiguration()->get('pwa_manifest', 'manifest');
        } catch (ExtensionConfigurationExtensionNotConfiguredException $e) {
        } catch (ExtensionConfigurationPathDoesNotExistException $e) {
        }

        return json_encode($settings);
    }

    /**
     * @return ExtensionConfiguration
     */
    protected function getExtensionConfiguration(): ExtensionConfiguration
    {
        return GeneralUtility::makeInstance(ExtensionConfiguration::class);
    }
}
