<?php

    require_once('vendor/autoload.php');

    //Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $f3 = Base::instance();
    $f3->set('DEBUG', 3);
    $dataLayer = new DataLayer();
    $controller = new Controller($f3);


    //Default Route
    $f3->route('GET /', function() {
        $view = new Template();
        echo $view->render('views/home.html');
    });

    //Survey Route
    $f3->route('GET /survey', function($f3) {

        global $controller;
        $controller->order();
    });

//Run fat free
$f3->run();