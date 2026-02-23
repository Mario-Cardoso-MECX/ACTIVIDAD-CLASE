<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    private $view = 'panel/dashboard';

    private function load_data(){
        $data = array();
        //Cargue información global o específica
        $data['nombre_pagina'] = 'AdminLTE 3';
        $data['titulo_pagina'] = 'AdminLTE 3 | Dashboard';
        //Statment SQL
        return $data;
    }// end load_data

    private function create_view($name_view = '', $content = array()){
        return view($name_view, $content);
    }//end create_view

    public function index()
    {
        return $this->create_view($this->view, $this->load_data());
    }//end index
}
//end Dashboard