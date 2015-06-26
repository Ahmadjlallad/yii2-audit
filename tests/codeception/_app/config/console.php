<?php

return [
    'id' => 'yii2-audit-console',
    'basePath' => dirname(__DIR__),
    'aliases' => [
        '@vendor' => VENDOR_DIR,
        '@bedezign/yii2/audit' => realpath(__DIR__ . '../../../../src'),
    ],
    'components' => [
        'cache' => null,
        'db' => require __DIR__ . '/db.php',
        'log' => [
            'traceLevel' => getenv('YII_TRACE_LEVEL'),
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning', 'info'],
                    'logFile' => '@app/runtime/logs/console.log',
                    'dirMode' => 0777
                ],
            ],
        ],
    ],
    'modules' => [
        'audit' => [
            'class' => 'bedezign\yii2\audit\Audit',
        ],
    ],
];