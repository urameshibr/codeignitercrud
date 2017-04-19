<?php

class User extends CI_Controller
{
    private $view = [
      'index' => 'user/index.php',
      'create' => 'user/create.php',
      'edit' => 'user/edit.php'
    ];

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('html');
    }

    public function index()
    {
        $data['view'] = $this->view['index'];
        return $this->load->view('partials/template', $data);
    }

    public function create()
    {
        echo 'user create';
    }

    public function edit($id)
    {
        $a = [1, 2, 3, 4, 5];
        $r = json_encode($a);
        var_dump($r);
    }

    public function show()
    {
        echo 'user show';
    }

    public function store()
    {
        echo 'user store';
    }

    public function update()
    {
        echo 'user update';
    }

    public function destroy($id, $name = null)
    {
        echo 'user destroy <br>';
        echo $id . '<br>';
        echo $name;
    }

    public function test()
    {
        echo 'user test';
    }
}