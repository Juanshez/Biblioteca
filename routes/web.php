<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function ()
{
	return str_random(32);
});

$router->get('/Biblioteca/Libros','LibrosController@Mostrarlibros');
$router->get('/Biblioteca/Mostrar_prestamos','LibrosController@MostrarPrestamos');
$router->get('/Biblioteca/Ingresar_Libros','LibrosController@Ingresarlibros');
$router->post('/Biblioteca/Prestamo_libro','LibrosController@RegistrarPrestamoLibros');
$router->post('/Biblioteca/Ingresar_socios','LibrosController@RegistrarSocio');