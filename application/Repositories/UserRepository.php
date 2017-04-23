<?php

namespace App\Repositories;

use App\Repositories\Contracts\UserContract;
use App\Services\User\GetAllUsers;
use App\Support\Response;

class UserRepository implements UserContract
{
    public function all()
    {
        $methods = get_class_methods(UserRepository::class);
        Response::json('',200,'',$methods);
        //return GetAllUsers::run();
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function store($data)
    {
        // TODO: Implement store() method.
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function test()
    {
        return 'repository funciona';
    }
}