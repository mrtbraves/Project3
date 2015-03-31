<?php

//$autoLoader =  realpath(
//    __DIR__.'..'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php'
//
//);
//
//require $autoLoder;

require '../vendor/autoload.php';


// Load server specific configuration data.  Should
// check an environment variable load the appropriate
// server configuration file.


\Slim\Slim::registerAutoloader();



require 'config.php';



$app = new \Slim\Slim(

    $config['app']['slim-config']
);




$app->get('/login/', function () {


    $logincontroller = new \Controllers\AuthController();

    $logincontroller->action();
});

$app->post('/login/', function () {

    $logincontroller = new \Controllers\AuthController();

    $logincontroller->login();
});


$app->run();

