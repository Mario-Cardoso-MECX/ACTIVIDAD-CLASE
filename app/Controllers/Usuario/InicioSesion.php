<?php

namespace App\Controllers\Usuario;

use App\Controllers\BaseController;

class InicioSesion extends BaseController
{
    public function index() : string
    {
        // Apuntamos a la vista login.php que ya tienes en tu carpeta app/Views/usuario/
        return view("usuario/login");
    }

    public function iniciarSesion() {
        // En Postman usaremos 'correo' y 'password'
        $correo = $this->request->getPost('correo');
        $password = $this->request->getPost('password');

        // 1. (verificar que no lleguen vacíos)
        if ($correo == null || $password == null) {
            return $this->response->setJSON([
                'status' => 'error',
                'error' => 'Email y contraseña son requeridos.'
            ]);
        }

        // 2. Conexión a TU base de datos para verificar que el usuario exista
        $db = \Config\Database::connect();
        $usuario = $db->table('usuarios')
                      ->where('correo_usuario', $correo)
                      // Encriptamos lo que llega de postman para compararlo con la BD
                      ->where('password_usuario', hash('sha256', $password)) 
                      ->get()
                      ->getRow();

        // 3. Respuesta final
        if ($usuario) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Inicio de sesión exitoso.',
                'bienvenido' => $usuario->nombre_usuario
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'error' => 'Correo o contraseña incorrectos.'
            ]);
        }
    }
}