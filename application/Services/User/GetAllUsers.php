<?php

namespace App\Services\User;

abstract class GetAllUsers
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