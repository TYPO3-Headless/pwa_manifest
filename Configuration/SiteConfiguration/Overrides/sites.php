<?php
/**
 * Manifest configuration
 */
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortName'] = [
    'label' => 'Short name',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestName'] = [
    'label' => 'Name',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestStartUrl'] = [
    'label' => 'Start URL',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestBackgroundColor'] = [
    'label' => 'Background color',
    'config' => [
        'type' => 'input',
        'renderType' => 'colorpicker',
        'size' => 20
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestDisplay'] = [
    'label' => 'Display',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            ['Standalone', 'standalone'],
            ['Fullscreen', 'fullscreen'],
            ['Minimal UI', 'minimal-ui'],
            ['Browser', 'browser']
        ]
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestScope'] = [
    'label' => 'Scope',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestThemeColor'] = [
    'label' => 'Theme color',
    'config' => [
        'type' => 'input',
        'renderType' => 'colorpicker',
        'size' => 20,
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestSmallIconSource'] = [
    'label' => 'Small icon source',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestSmallIconType'] = [
    'label' => 'Small icon type',
    'config' => [
        'type' => 'input',
        'placeholder' => 'image/png',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestSmallIconSizes'] = [
    'label' => 'Small icon sizes',
    'config' => [
        'type' => 'input',
        'placeholder' => '192x192',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestBigIconSource'] = [
    'label' => 'Big icon source',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestBigIconType'] = [
    'label' => 'Small big type',
    'config' => [
        'type' => 'input',
        'placeholder' => 'image/png',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestBigIconSizes'] = [
    'label' => 'Big icon sizes',
    'config' => [
        'type' => 'input',
        'placeholder' => '512x512',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['palettes']['manifest']['showitem'] = 'manifestShortName, manifestName,--linebreak--, manifestStartUrl, manifestScope, --linebreak--,manifestDisplay';
$GLOBALS['SiteConfiguration']['site']['palettes']['manifestColors']['showitem'] = 'manifestBackgroundColor, manifestThemeColor';
$GLOBALS['SiteConfiguration']['site']['palettes']['manifestSmallIcon']['showitem'] = 'manifestSmallIconSource, manifestSmallIconType, manifestSmallIconSizes';
$GLOBALS['SiteConfiguration']['site']['palettes']['manifestBigIcon']['showitem'] = 'manifestBigIconSource, manifestBigIconType, manifestBigIconSizes';

$GLOBALS['SiteConfiguration']['site']['types']['0']['showitem'] = '--palette--;;default,--palette--;;base,
                --div--;Manifest;manifest,--palette--;Manifest;manifest,--palette--;Colors;manifestColors,--palette--;Manifest small icon;manifestSmallIcon,--palette--;Manifest big icon;manifestBigIcon,
                --div--;LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.languages, languages,
                --div--;LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.errorHandling, errorHandling,
                --div--;LLL:EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf:site.tab.routes, routes';
