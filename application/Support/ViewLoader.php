<?php

namespace App\Support;

trait ViewLoader
{
    protected $template = 'partials/template';

    public function loadView($view, $data = [], $return = false)
    {
        $data['view'] = "{$view}.php";
        return $this->load->view('partials/template', $data, $return);
    }
}