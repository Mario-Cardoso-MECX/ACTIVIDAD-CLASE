<?php

namespace App\Controllers\Usuario;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    private $view = 'usuario/login';

    private function load_data(){
        $data = array();
        // Cargue información global o específica
        $data['nombre_pagina'] = 'Login';
        $data['titulo_pagina'] = 'Inicio de Sesión';
        // Statement SQL u otras configuraciones
        return $data;
    } // end load_data

    private function create_view($name_view = '', $content = array()){
        return view($name_view, $content);
    } // end create_view

    public function index()
    {
        return $this->create_view($this->view, $this->load_data());
    } // end index
}
// end Login