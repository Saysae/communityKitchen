<?php

//Turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');
session_start();

$f3 = Base::instance();
$controller = new Controller($f3);


//Create an instance of the Base class
//:: is used to call a method within the static Base class within fat-free
$f3 = Base::instance();

//Define a default route
//
$f3->route('GET /', function() {

    $GLOBALS['controller']->home();
});


$f3->route('GET /menu', function() {

    $GLOBALS['controller']->menu();
});

$f3->route('GET /contact', function() {

    $GLOBALS['controller']->contact();
});

$f3->route('GET /form', function() {

    $GLOBALS['controller']->form();
});

$f3->route('GET|POST /summary', function() {

    $GLOBALS['controller']->summary();
});
//Run fat free
// -> is invoking the run() method in the fat-free
$f3->run();