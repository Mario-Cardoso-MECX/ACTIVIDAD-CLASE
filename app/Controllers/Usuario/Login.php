<?php

namespace App\Controllers\Usuario;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index(): string
    {
        return view('usuario/login');
    }
}
