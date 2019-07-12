<?php

/*
 * This file is part of the package buepro/auxlibs.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Third party libraries',
    'description' => 'Provides the following third party libraries: hashids',
    'category' => 'misc',
    'author' => 'Roman Büchler',
    'author_email' => 'rb@buechler.pro',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.1.5-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.99.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Buepro\\Auxlibs\\' => 'Classes'
        ],
    ],
];
