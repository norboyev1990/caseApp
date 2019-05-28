<?php
/**
 * Created by PhpStorm.
 * User: AGC PROJECTS
 * Date: 28.05.2019
 * Time: 15:44
 */

namespace app\controllers;

use yii\rest\ActiveController;


class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';

}