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
        $data['titulo_pagina'] = 'Usuarios';

        $breadcrumb = array(
            array(
                'href' => route_to("dashboard"),
                'titulo' => 'Usuarios',
            ),
            array(
                'href' => '#',
                'titulo' => 'Usuario Nuevo',
            )
        );
        $data['breadcrumb_panel'] = breadcrumb_panel($data['titulo_pagina'], $breadcrumb);

        //Statment SQL
        return $data;
    }// end load_data

    private function create_view($name_view = '', $content = array()){
        $content["menu_lateral"] = (crear_menu_panel());
        return view($name_view, $content);
    }//end create_view

    public function index()
    {
        return $this->create_view($this->view, $this->load_data());
    }//end index
}
//end Dashboard