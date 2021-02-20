<?php

class Controller
{
    private $_f3;

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function order()
    {
        global $dataLayer;

        $this->_f3->set('options', $dataLayer->getSurveyOptions());

        $view = new Template();
        echo $view->render('views/survey.html');
    }
}