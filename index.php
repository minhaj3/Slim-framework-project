<?php

require 'vendor/autoload.php';
date_default_timezone_set('Asia/Kolkata');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Slim\Views\PhpRenderer;

/*$log = new Logger('name');
$log->pushHandler(new StreamHandler('app.txt',Logger::WARNING));

$log->addWarning('its working!');
*/
$configuration = ['settings' => ['displayErrorDetails'=>true,],];
$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);
$container = $app->getContainer();
/*$container['renderer'] = new PhpRenderer("templates/");*/
$container['view'] = function ($c) {
	$view = new \Slim\Views\Twig('templates',['cache'=>'cache/twig','debug'=>true]);

	$view->addExtension(new Slim\Views\TwigExtension(
		$c['router'],
		$c['request']->getUri()
		));

	return $view;

};

$app->get('/',function($req,$res,$args){
	return $this->view->render($res,"about.twig",$args);
	/*echo "Hello, this is home page";*/
})->setName('home');

/*$app->get('/hello/{name}',function($req,$res,$args){
	return $res->write("Hello ".$args['name']);
});*/

/*$app->get('/',function($req,$res,$args){
	return $this->renderer->render($res,"index.html",$args);
	//echo "Hello, this is home page";
});*/

$app->get('/contact',function($req,$res,$args){
	return $this->view->render($res,"contact.twig",$args);
})->setName('contact');

$app->post('/contact',function($req,$res,$args){
	$name = $req->getParsedBody('name');
	$email = $req->getParsedBody('email');
	$msg = $req->getParsedBody('msg');
	if(!empty($name) && !empty($email) && !empty($msg)){
		$cleanName = filter_var($name,FILTER_SANITISE_STRING);
		$cleanEmail = filter_var($email,FILTER_SANITISE_EMAIL);
		$cleanMsg = filter_var($msg,FILTER_SANITISE_STRING);
		return $res->withStatus('301')->withHeader('Location','/');
	}
	else {
		return $res->withHeader('Location','/contact');
	}
	
});

$app->run();