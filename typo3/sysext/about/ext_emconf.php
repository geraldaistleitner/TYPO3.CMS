<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Help>About',
    'description' => 'Shows info about TYPO3, installed extensions and a separate module for available modules.',
    'category' => 'module',
    'state' => 'stable',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'version' => '10.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
