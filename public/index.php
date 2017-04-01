<?php

try{
	// Kickstart the framework
	require '../vendor/autoload.php';
	$f3 = \Base::instance();
	$f3->set('DEBUG',1);

	if ((float)PCRE_VERSION<7.9)
		trigger_error('PCRE version is out of date');

	// Load configuration
	$f3->config('../app/configs/config.ini');
	$f3->config('../app/configs/routes.ini');
	$f3->set('LOGS','../logs/');
	$f3->set('LOCALES','../app/dict/');
	$f3->set('LANGUAGE','en');

	Resque::setBackend('lamfatfree_redis:6379');

	// https://laravel.com/docs/5.4/eloquent
	$capsule = new \Illuminate\Database\Capsule\Manager();
	$capsule->addConnection([
		'driver'    => 'mysql',
		'host'      => 'lamfatfree_mysql',
		'database'  => 'fatfree',
		'username'  => 'root',
		'password'  => 'root',
		'charset'   => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix'    => '',
	]);
	$capsule->setEventDispatcher(new \Illuminate\Events\Dispatcher(new Illuminate\Container\Container));
	$capsule->setAsGlobal();
	$capsule->bootEloquent();
	$f3->set('DB',$capsule);

	// first init , plz uncomment this
	// Phpq::up();

	$f3->run();
} catch(Exception $e) {
    // DO SOMETHING IF EXCEPTION
	dd($e);
}

