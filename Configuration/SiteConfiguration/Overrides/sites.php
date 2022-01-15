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
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts1Name'] = [
    'label' => 'Name (required)',
    'config' => [
        'type' => 'input',
        'placeholder' => 'View Subscriptions',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts1ShortName'] = [
    'label' => 'Short name',
    'config' => [
        'type' => 'input',
        'placeholder' => 'Subscriptions',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts1Description'] = [
    'label' => 'Description',
    'config' => [
        'type' => 'input',
        'placeholder' => 'View the list of podcasts you listen to',
        'size' => 50,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts1Url'] = [
    'label' => 'URL (required)',
    'description' => 'A URL is required for a Shortcut to have any function. This URL must exist within the scope of the web app manifest. If it is a relative URL, the base URL will be the URL of the web app manifest.',
    'config' => [
        'size' => 50,
        'eval' => 'trim',
        'renderType' => 'inputLink',
        'type' => 'input',
        'fieldControl' => [
            'linkPopup' => [
                'options' => [
                    'blindLinkOptions' => 'file,telephone,mail,spec,folder',],],
        ],
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts1IconSrc'] = [
    'label' => 'Icon source',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts1IconSizes'] = [
    'label' => 'Icon sizes',
    'config' => [
        'type' => 'input',
        'placeholder' => '192x192',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts2Name'] = [
    'label' => 'Name (required)',
    'config' => [
        'type' => 'input',
        'placeholder' => 'View Subscriptions',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts2ShortName'] = [
    'label' => 'Short name',
    'config' => [
        'type' => 'input',
        'placeholder' => 'Subscriptions',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts2Description'] = [
    'label' => 'Description',
    'config' => [
        'type' => 'input',
        'placeholder' => 'View the list of podcasts you listen to',
        'size' => 50,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts2Url'] = [
    'label' => 'URL (required)',
    'description' => 'A URL is required for a Shortcut to have any function. This URL must exist within the scope of the web app manifest. If it is a relative URL, the base URL will be the URL of the web app manifest.',
    'config' => [
        'size' => 50,
        'eval' => 'trim',
        'renderType' => 'inputLink',
        'type' => 'input',
        'fieldControl' => [
            'linkPopup' => [
                'options' => [
                    'blindLinkOptions' => 'file,telephone,mail,spec,folder',],],
        ],
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts2IconSrc'] = [
    'label' => 'Icon source',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts2IconSizes'] = [
    'label' => 'Icon sizes',
    'config' => [
        'type' => 'input',
        'placeholder' => '192x192',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts3Name'] = [
    'label' => 'Name (required)',
    'config' => [
        'type' => 'input',
        'placeholder' => 'View Subscriptions',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts3ShortName'] = [
    'label' => 'Short name',
    'config' => [
        'type' => 'input',
        'placeholder' => 'Subscriptions',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts3Description'] = [
    'label' => 'Description',
    'config' => [
        'type' => 'input',
        'placeholder' => 'View the list of podcasts you listen to',
        'size' => 50,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts3Url'] = [
    'label' => 'URL (required)',
    'description' => 'A URL is required for a Shortcut to have any function. This URL must exist within the scope of the web app manifest. If it is a relative URL, the base URL will be the URL of the web app manifest.',
    'config' => [
        'size' => 50,
        'eval' => 'trim',
        'renderType' => 'inputLink',
        'type' => 'input',
        'fieldControl' => [
            'linkPopup' => [
                'options' => [
                    'blindLinkOptions' => 'file,telephone,mail,spec,folder',],],
        ],
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts3IconSrc'] = [
    'label' => 'Icon source',
    'config' => [
        'type' => 'input',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['columns']['manifestShortcuts3IconSizes'] = [
    'label' => 'Icon sizes',
    'config' => [
        'type' => 'input',
        'placeholder' => '192x192',
        'size' => 20,
        'eval' => 'trim'
    ],
];
$GLOBALS['SiteConfiguration']['site']['palettes']['manifest']['showitem'] = 'manifestShortName, manifestName,--linebreak--, manifestStartUrl, manifestScope, --linebreak--,manifestDisplay';
$GLOBALS['SiteConfiguration']['site']['palettes']['manifestColors']['showitem'] = 'manifestBackgroundColor, manifestThemeColor';
$GLOBALS['SiteConfiguration']['site']['palettes']['manifestSmallIcon']['showitem'] = 'manifestSmallIconSource, manifestSmallIconType, manifestSmallIconSizes';
$GLOBALS['SiteConfiguration']['site']['palettes']['manifestBigIcon']['showitem'] = 'manifestBigIconSource, manifestBigIconType, manifestBigIconSizes';
$GLOBALS['SiteConfiguration']['site']['palettes']['manifestShortcuts1']['showitem'] = 'manifestShortcuts1Name,manifestShortcuts1ShortName,--linebreak--,manifestShortcuts1Description,--linebreak--,manifestShortcuts1Url,--linebreak--,manifestShortcuts1IconSrc,manifestShortcuts1IconSizes';
$GLOBALS['SiteConfiguration']['site']['palettes']['manifestShortcuts2']['showitem'] = 'manifestShortcuts2Name,manifestShortcuts2ShortName,--linebreak--,manifestShortcuts2Description,--linebreak--,manifestShortcuts2Url,--linebreak--,manifestShortcuts2IconSrc,manifestShortcuts2IconSizes';
$GLOBALS['SiteConfiguration']['site']['palettes']['manifestShortcuts3']['showitem'] = 'manifestShortcuts3Name,manifestShortcuts3ShortName,--linebreak--,manifestShortcuts3Description,--linebreak--,manifestShortcuts3Url,--linebreak--,manifestShortcuts3IconSrc,manifestShortcuts3IconSizes';

$GLOBALS['SiteConfiguration']['site']['types']['0']['showitem'] = str_replace(
    'base,',
    'base,
    --div--;Manifest;manifest,--palette--;Manifest;manifest,--palette--;Colors;manifestColors,--palette--;Manifest small icon;manifestSmallIcon,--palette--;Manifest big icon;manifestBigIcon,
    --div--;Manifest Shortcuts;manifest,--palette--;Manifest Shortcut 1;manifestShortcuts1,--palette--;Manifest Shortcut 2;manifestShortcuts2,--palette--;Manifest Shortcut 3;manifestShortcuts3,',
    $GLOBALS['SiteConfiguration']['site']['types']['0']['showitem']
);