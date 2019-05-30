<?php

namespace app\controllers;




class MyController extends BaseController
{
    public function actionIndex($id = null)
    {
        if (!$id) $id = '1';
        $names = [
            'ivanov','petrov','some','word'
        ];
        $hi = "Hello World";
        return $this->render('index',compact('hi','names','id'));
    }

    public function actionBlogPost()
    {
        return $this->baseFunction();
    }



}