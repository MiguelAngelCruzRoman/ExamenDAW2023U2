<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//-----------------------------------------------------------------------------------------------------
// Rutas para los adoptadores
//-----------------------------------------------------------------------------------------------------
$routes->get('adoptador/mostrar','AdoptadorController::mostrar');
$routes->get('adoptador/agregar','AdoptadorController::agregar');
$routes->get('adoptador/delete/(:num)','AdoptadorController::delete/$1');
$routes->get('adoptador/editar/(:num)','AdoptadorController::editar/$1');
$routes->get('adoptador/buscar','AdoptadorController::buscar');

$routes->post('adoptador/agregar','AdoptadorController::agregar');
$routes->post('adoptador/insert','AdoptadorController::insert');
$routes->post('adoptador/update','AdoptadorController::update');
//-----------------------------------------------------------------------------------------------------


//-----------------------------------------------------------------------------------------------------
// Rutas para las mascotas
//-----------------------------------------------------------------------------------------------------
$routes->get('mascotas/mostrar','MascotasController::mostrar');
$routes->get('mascotas/agregar','MascotasController::agregar');
$routes->get('mascotas/delete/(:num)','MascotasController::delete/$1');
$routes->get('mascotas/editar/(:num)','MascotasController::editar/$1');
$routes->get('mascotas/buscar','MascotasController::buscar');

$routes->post('mascotas/agregar','MascotasController::agregar');
$routes->post('mascotas/insert','MascotasController::insert');
$routes->post('mascotas/update','MascotasController::update');
//-----------------------------------------------------------------------------------------------------
