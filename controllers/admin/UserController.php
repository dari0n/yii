<?php

namespace app\controllers\admin;



use app\controllers\BaseController;

class UserController extends BaseController
{
    public function actionIndex()
    {
       return $this->render('index');
    }



}