<?php

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'PMJD',
   'language'=>'pt-br',

	'preload'=>array('log','kint'),

	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	'components'=>array(
		'user'=>array(
			'allowAutoLogin'=>true,
		),
		'kint'=>array(
			'class'=>'ext.kint.kint',
		),
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'login' => '/index.php/site/login',
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			'connectionString' => 'mysql:host=mysql.joaodourado.ba.gov.br;dbname=joaodourado',
			'emulatePrepare' => true,
			'username' => 'joaodourado',
			'password' => 'joaodouradobd',
			'charset' => 'utf8',
		),
		//Descomente para localhost
		/*'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=pmjd',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),*/
		
		'errorHandler'=>array(
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
	),

	'params'=>array(
		'adminEmail'=>'flavia.t.barreto@gmail.com',
	),
);
