<?php

use CodeIgniter\Router\RouteCollection;
use \App\Controllers\TestConnection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('test', 'Test::index');
$routes->get('/login', 'Usuario\InicioSesion::index', ['as' => '']);
$routes->get('/dashboard', 'Panel\Dashboard::index', ['as' => 'dashboard']);
$routes->get('/test-connection', [TestConnection::class, '::index']);
$routes->get('/inicio-sesion', 'Usuario\InicioSesion::index');
$routes->post('/inicio-sesion', 'Usuario\InicioSesion::iniciarSesion');
/*'test' Es la URL. Eso es lo que tú escribes en el navegador: http://localhost:8081/test

'Test::index' Eso significa: Usa el controlador Test Ejecuta el método index()
Aquí sí debe coincidir exactamente con el nombre de la clase.

*/