<?php

//Turn on error reporting
ini_set('display_error', 1);
error_reporting(E_ALL);
session_start();
//Require the autoload file
require_once('vendor/autoload.php');
require_once('model/data.php');

//Create an instance of the Base class
//:: is used to call a method within the static Base class within fat-free
$f3 = Base::instance();

//Define a default route
//
$f3->route('GET /', function() {


    $view = new Template();
    echo $view->render('views/home.html');
});


$f3->route('GET /menu', function($f3) {

    $f3->set('afganiMenu', Data::getMenuAfgani());
    $f3->set('chineseMenu', Data::getMenuChinese());
    $f3->set('iraqiMenu', Data::getMenuIraqi());
    $f3->set('nigerianMenu', Data::getMenuNigerian());




    $view = new Template();
    echo $view->render('views/menu.html');
});

$f3->route('GET|POST /summary', function($f3) {

    $view = new Template();
    echo $view->render('views/summary.html');
});

$f3->route('GET /contact', function($f3) {


    $view = new Template();
    echo $view->render('views/contact.html');
});


//Run fat free
// -> is invoking the run() method in the fat-free
$f3->run();