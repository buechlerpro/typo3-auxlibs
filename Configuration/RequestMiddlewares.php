<?php


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
