<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Auth::login');
$routes->post('/login', 'Auth::authenticate');

$routes->get('/dashboard', 'DashboardController::index');

$routes->get('/companies', 'DashboardController::companies');
$routes->get('/subscriptions', 'DashboardController::subscriptions');
$routes->get('/purchased', 'DashboardController::purchased');
