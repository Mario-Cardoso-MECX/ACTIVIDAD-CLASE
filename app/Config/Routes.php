<?php

use CodeIgniter\Router\RouteCollection;
use \App\Controllers\TestConnection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('test', 'Test::index');
$routes->get('/login', 'Usuario\Login::index', ['as' => '']);
$routes->get('/dashboard', 'Panel\Dashboard::index', ['as' => 'dashboard']);
$routes->get('/test-connection', [TestConnection::class, '::index']);
/*'test' Es la URL. Eso es lo que tú escribes en el navegador: http://localhost:8081/test

'Test::index' Eso significa: Usa el controlador Test Ejecuta el método index()
Aquí sí debe coincidir exactamente con el nombre de la clase.

*/