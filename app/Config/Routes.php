<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->resource('tiket', ['controller' => 'TiketController']);

 $routes->group('api', function ($routes) {
     $routes->resource('tiket', ['controller' => 'TiketController']);
 });
 
 $routes->get('/', 'Home::index');
 $routes->post('/registrasi', 'RegistrasiController::registrasi');
 $routes->post('/login', 'LoginController::login');