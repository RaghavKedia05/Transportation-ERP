<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Auth::login');

$routes->post('/authenticate', 'Auth::authenticate');

$routes->get('/dashboard', 'Admin::dashboard');

$routes->get('/transporters', 'Admin::transporters');
$routes->get('/vehicles', 'Admin::vehicles');
$routes->get('/drivers', 'Admin::drivers');