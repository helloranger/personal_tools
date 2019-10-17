<?php
$params = array_merge(
    require __DIR__ . '/../../../../../common/config/params.php',
    require __DIR__ . '/../../../../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);
$router = require __DIR__ . '/../web/router.php';
return [
    'id' => 'app-v1',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'v1\controllers',
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend-paper-note-v1',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser'
            ]
        ],
        'modules' => [
            'v1' => [
                'class' => 'backend\modules\paper_note\Module'
            ]
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'enableSession' => false,
//            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'backend-paper-note-v1',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'class' => 'yii\rest\UrlRule',
                'controller' => ['v1/user']
            ]
        ],
    ],
    'params' => $params,
];

