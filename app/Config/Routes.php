<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'ClientController::home');
$routes->get('/how', 'ClientController::how');
$routes->get('/contact', 'ClientController::contact');
$routes->get('/service/check', 'ClientController::check');

$routes->group('user', ['filter' => 'login'], function($routes){
    $routes->get('/', 'UserController::user');
    $routes->get('profile', 'UserController::profile');
    $routes->get('service', 'UserController::service');
    $routes->get('service/details/(:any)', 'UserController::service_view/$1');
    $routes->get('service/cancel/(:any)', 'UserController::service_cancel/$1');
    $routes->get('service/repair', 'UserController::service_repair');
    $routes->get('service/painting', 'UserController::service_painting');
    $routes->post('service/store', 'UserController::service_store');
}); 

$routes->group('admin', ['filter' => 'login'], function($routes){
    $routes->get('/', 'AdminController::admin');
    $routes->get('user', 'AdminController::user');
    $routes->get('user/view/(:any)', 'AdminController::user_view/$1');
    $routes->get('service', 'AdminController::service');
    $routes->post('service/proses', 'AdminController::service_proses');
    $routes->get('service/view/(:any)', 'AdminController::service_view/$1');
    $routes->get('antrian', 'AdminController::antrian');
    $routes->get('antrian/view/(:any)', 'AdminController::antrian_view/$1');
});

$routes->group('api',function($routes){
    $routes->resource('services');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
