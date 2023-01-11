<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'pwa_manifest',
    'description' => 'This extension provides Web App Manifest configuration.',
    'state' => 'beta',
    'author' => 'Łukasz Uznański',
    'author_email' => 'extensions@macopedia.pl',
    'category' => 'fe',
    'internal' => '',
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-12.5.99',
            'frontend' => '12.0.0-12.5.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
