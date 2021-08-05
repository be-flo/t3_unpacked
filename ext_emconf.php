<?php

/**
 * Extension Manager/Repository config file for ext "t3_unpacked".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'T3 Unpacked',
    'description' => 'TYPO3 Extension to extract zip files in the file list',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'BeFlo\\T3Unpacked\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Florian Peters',
    'author_email' => 'info@t3tech.de',
    'author_company' => 'Be Flo',
    'version' => '1.0.0',
];