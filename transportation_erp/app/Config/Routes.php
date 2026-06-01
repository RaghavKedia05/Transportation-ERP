<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Admin::dashboard');

$routes->get('/dashboard', 'Admin::dashboard');
$routes->get('/transporters', 'Admin::transporters');
$routes->get('/vehicles', 'Admin::vehicles');
$routes->get('/drivers', 'Admin::drivers');