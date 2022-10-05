<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// application components
	'components'=>array(

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

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
	'commandMap'=>array(

        'migrate'=>array(

            'class'=>'system.cli.commands.MigrateCommand',

            'migrationPath'=>'application.migrations',
			// 'migrationPath'=>'protected.migrations',

            // 'migrationTable'=>'tbl_migration',

            'connectionID'=>'db',

            // 'templateFile'=>'application.migrations.template',

        ),
    ),
);
