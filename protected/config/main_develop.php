<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Yii Brasil',

	// preloading 'log' component
	'preload'=>array('log'),

	'aliases' => array(
		'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'),
	),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.auth.*',
		'application.modules.auth.components.*',
		'bootstrap.helpers.TbHtml'
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'admin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'generatorPaths' => array('bootstrap.gii'),
		),

		'auth' => array(
			'strictMode' => true, // when enabled authorization items cannot be assigned children of the same type.
			'userClass' => 'Users', // the name of the user model class.
			'userIdColumn' => 'id', // the name of the user id column.
			'userNameColumn' => 'username', // the name of the user name column.
			'defaultLayout' => 'application.modules.auth.views.layouts.main', // the layout used by the module.
			'viewDir' => null, // the path to view files to use with this module.
		),

		'dashboard',
	),

	// application components
	'components'=>array(
		'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',   
        ),

        'authManager' => array(
			'class'=>'CDbAuthManager',
            'connectionID'=>'db',
			'behaviors' => array(
				'auth' => array(
					'class' => 'auth.components.AuthBehavior',
				),
			),
        ),

		'user' => array(
			'class' => 'auth.components.AuthWebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),


		// uncomment the following to use a MySQL database

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=yiibrasil',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
