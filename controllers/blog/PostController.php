<?php

namespace app\controllers\blog;

use app\controllers\BaseController;


class PostController extends BaseController
{
    public function actionIndex()
    {
       return $this->render('test');
    }
}