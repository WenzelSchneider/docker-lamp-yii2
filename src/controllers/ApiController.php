<?php

namespace app\controllers;
use yii\rest\Controller;
use app\models\Users;
use app\models\Avatars;
use app\models\Messages;


class ApiController extends Controller
{
    public function actionIndex()
    {
        $data[] = ['lol', [1, 12, 13, 'papa'], 2, 3, 'mama'];
        return $data;
    }

}
