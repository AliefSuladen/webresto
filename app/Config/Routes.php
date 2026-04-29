<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('login', 'Auth::login');
$routes->post('login/process', 'Auth::processLogin');
$routes->get('admin/dashboard', 'Admin::dashboard');
$routes->get('logout', 'Auth::logout');

$routes->get('register', 'Auth::register');
$routes->post('register-process', 'Auth::processRegister');

$routes->get('restoran', 'Restoran::index');
$routes->get('restoran/create', 'Restoran::create');
$routes->post('restoran/store', 'Restoran::store');
$routes->get('restoran/edit/(:num)', 'Restoran::edit/$1');
$routes->post('restoran/update/(:num)', 'Restoran::update/$1');
$routes->get('restoran/delete/(:num)', 'Restoran::delete/$1');
