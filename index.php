<?php

    require_once('vendor/autoload.php');

    $f3 = Base::instance();
    $f3->set('DEBUG', 3);

    //Default Route
    $f3->route('GET /', function() {
        $view = new Template();
        echo $view->render('views/home.html');
    });

//Run fat free
$f3->run();