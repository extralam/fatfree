<?php

try{
	// Kickstart the framework
	$f3=require('../lib/base.php');

	$f3->set('DEBUG',1);

	if ((float)PCRE_VERSION<7.9)
		trigger_error('PCRE version is out of date');

	// Load configuration
	$f3->config('../app/configs/config.ini');
	$f3->config('../app/configs/routes.ini');
	$f3->set('LOCALES','../app/dict/');
	$f3->set('LANGUAGE','en');

	// https://laravel.com/docs/5.4/eloquent
	$capsule = new Illuminate\Database\Capsule\Manager();
	$capsule->addConnection([
		'driver'    => 'mysql',
		'host'      => '127.0.0.1',
		'database'  => 'database',
		'username'  => 'username',
		'password'  => 'password',
		'charset'   => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix'    => '',
	]);
	$capsule->setEventDispatcher(new Illuminate\Events\Dispatcher(new Illuminate\Container\Container));
	$capsule->setAsGlobal();
	$capsule->bootEloquent();
	$f3->set('DB',$capsule);

	$f3->run();
} catch(Exception $e) {
    // DO SOMETHING IF EXCEPTION
	dd($e);
}

