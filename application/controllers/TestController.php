<?php

namespace App\Controllers;

use App\Repositories\UserRepository;

class TestController
{
    private static $repository;

    /**
     * TestController constructor.
     * @param $repository
     */
    public function __construct(UserRepository $repository)
    {
        self::$repository = $repository;
    }

    public static function run()
    {
        echo self::$repository->all();
    }
}