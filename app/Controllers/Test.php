<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Test extends BaseController
{
    public function index(): string
    {
        return view('test');
    }
}
/*Se llama Test porque:
Es una clase
En PHP las clases empiezan con MAYÚSCULA (convención PSR)
*/