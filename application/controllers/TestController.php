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

    public function run()
    {
        echo 'test controller';
    }

    public function test2()
    {
        echo 'teste 2 funcionando';
    }
}