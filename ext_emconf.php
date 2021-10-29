<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'pwa_manifest',
    'description' => 'This extension provides Web App Manifest configuration.',
    'state' => 'beta',
    'author' => 'Łukasz Uznański',
    'author_email' => 'extensions@macopedia.pl',
    'category' => 'fe',
    'internal' => '',
    'version' => '1.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-11.5.99',
            'frontend' => '9.5.0-11.5.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
