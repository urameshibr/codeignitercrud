<?php

use App\Repositories\UserRepository;
use App\Support\Response;

class Api_user_controller extends CI_Controller
{
    private $repository;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->model('user_model', 'model');
        $container = include APPPATH . 'config/container.php';
        $this->repository = $container['UserRepository'];
    }

    public function index()
    {
        $data = $this->repository->all();
        //$data = $this->model->all();
        Response::json(true, 200, 'Usuários foram carregados.', $data);
    }


    public function create()
    {
        $data['view'] = $this->view['create'];
        return $this->load->view('partials/template', $data);
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