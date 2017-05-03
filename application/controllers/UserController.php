<?php


use App\Support\ViewLoader;

class User_controller extends CI_Controller
{
    use ViewLoader;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->model('user_model', 'model');
    }

    public function index()
    {
        return $this->loadView('user/index');
    }


    public function create()
    {
        $this->loadView('user/create');
    }

    public function edit($id)
    {
        var_dump($id);
    }

    public function show()
    {

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