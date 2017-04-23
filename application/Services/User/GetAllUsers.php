<?php

namespace App\Services\User;

use CI_Model;

class GetAllUsers extends CI_Model
{
    public $table = 'users';

    public function run()
    {
        return $this->db->get('users')->result();
    }
}