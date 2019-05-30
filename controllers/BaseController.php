<?php

namespace app\controllers;



use yii\web\Controller;

class BaseController extends Controller
{
    public function baseFunction()
    {
        return "testBaseController";
    }

    public function debug($arr)
    {
        echo "<pre>" .print_r($arr,true) ."</pre>";

    }
}