<?php

class User_model extends CI_Model
{

    protected $table = 'users';

    public function __construct()
    {
        parent::__construct();
    }

    public function all()
    {
        return $data = $this->db->get($this->table)->result();
    }

    public function show($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->result();
    }

    public function __toString()
    {
        return json_encode($this);
    }
}