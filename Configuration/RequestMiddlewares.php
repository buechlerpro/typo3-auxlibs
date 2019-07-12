<?php

/*
 * This file is part of the package buepro/auxlibs.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

return [
    'backend' => [
        'buepro/auxlibs/requires' => [
            'target' => \Buepro\Auxlibs\Middleware\RequiresMiddleware::class,
            'before' => [
                'typo3/cms-core/normalized-params-attribute',
            ],
        ]
    ],
    'frontend' => [
        'buepro/auxlibs/requires' => [
            'target' => \Buepro\Auxlibs\Middleware\RequiresMiddleware::class,
            'before' => [
                'typo3/cms-frontend/timetracker',
            ],
        ]
    ]
];
