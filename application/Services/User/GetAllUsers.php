<?php

namespace App\Services\User;

use CI_Model;

abstract class GetAllUsers extends \CI_Loader
{
    public static $table = 'users';
    public static $model;
    public function prepare()
    {
        self::$model = $this->model('user_model');
    }

    public static function run()
    {
        return self::$model->get();
    }
}