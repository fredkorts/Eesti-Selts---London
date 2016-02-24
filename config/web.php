<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'BPw8TRA4p8B19XuXmIqlPS__cWEUU7zJ',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
		'urlManager' => [
			'class' => 'yii\web\UrlManager',
			'enablePrettyUrl' => true,
            'showScriptName' => true,
            'enableStrictParsing' => false,
            'rules' => [
				'/' => 'menu/home',
				//'login' 			=> 'site/login',
				'user/login' 		=> 'user/security/login',
				'user/register' 	=> 'user/registration/register',
				'user/resend' 		=> 'user/registration/resend',
				'user/confirm' 		=> 'user/registration/confirm',
				'user/logout' 		=> 'user/security/logout',
				'user/request' 		=> 'user/recovery/request',
				'user/reset' 		=> 'user/recovery/reset',
				'user/profile' 		=> 'user/settings/profile',
				'user/account' 		=> 'user/settings/account',
				'user/networks' 	=> 'user/settings/networks',
				'user/show' 		=> 'user/profile/show',
                'admin' 			=> 'site/admin',
				
				'<controller:\w+>/view/<id:\d+>/<slug>' => '<controller>/plain-view',
				'<controller:\w+>/docview/<id:\d+>/<slug>' => '<controller>/doc-view',
				'<controller:\w+>/<id:\d+>/<slug>' => '<controller>/view',
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>/<id:\d+>/<pageName>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ],
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
		'assetManager' => [
			'bundles' => [
				'yii\web\JqueryAsset' => [ // NOTE (20.01.2016 Caupo): Disableb bootstrapi.
					'js'=>[]
				],
				'yii\bootstrap\BootstrapPluginAsset' => [ // NOTE (20.01.2016 Caupo): Disableb bootstrapi.
					'js'=>[]
				],
				'yii\bootstrap\BootstrapAsset' => [ // NOTE (20.01.2016 Caupo): Disableb bootstrapi.
					'css' => [],
				],

			],
		],
        'db' => require(__DIR__ . '/db.php'),
		'authManager' => [
						   'class' => 'yii\rbac\DbManager',
						   'defaultRoles' => ['guest'],
		 ],
    ],
	'modules' => [
		'user' => [
			'class' => 'dektrium\user\Module',
			'enableUnconfirmedLogin' => true,
		],
		 'rbac' => [
			'class' => 'dektrium\rbac\Module',
		],
	],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
