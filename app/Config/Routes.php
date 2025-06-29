<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/register', 'Auth::pageRegister');
$routes->post('/register', 'Auth::register');
$routes->get('/login', 'Auth::pageLogin');
$routes->post('/login', 'Auth::login');
