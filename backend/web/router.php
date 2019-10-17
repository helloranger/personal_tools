<?php
return [
    [
        'class' => 'yii\rest\UrlRule',
        'controller' => ['user'],
        'extraPatterns' => [
            'PUT,PATCH users/<id>' => 'user/update',
        ]
    ]
];