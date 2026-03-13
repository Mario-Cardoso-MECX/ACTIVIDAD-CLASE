<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Database\Exceptions\DatabaseException;

class TestConnection extends BaseController
{
    public function index(): void
    {
        $db = \Config\Database::connect();
        try{
            $db->initialize();
            echo "Conexión exitosa a la base de datos.";
            echo "<br>Base de datos: " . $db->getDatabase();
        }catch(DatabaseException $e)
        {
            echo "Error al conectar a la base de datos: " . $e->getMessage();
        }
        catch(\Exception $e)
        {
            echo "Error inseperado " . $e->getMessage();
        }
    }
}