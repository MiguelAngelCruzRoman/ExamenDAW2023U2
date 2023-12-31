<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


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
$routes->get('mascotas/adoptar/(:num)','MascotasController::adoptar/$1');
$routes->get('mascotas/buscar','MascotasController::buscar');
$routes->get('mascotas/informacion/(:num)','MascotasController::informacion/$1');

$routes->post('mascotas/agregar','MascotasController::agregar');
$routes->post('mascotas/informacion','MascotasController::informacion');
$routes->post('mascotas/insert','MascotasController::insert');
$routes->post('mascotas/update','MascotasController::update');
$routes->post('mascotas/updateAdopcion','MascotasController::updateAdopcion');
//-----------------------------------------------------------------------------------------------------


//-----------------------------------------------------------------------------------------------------
// Rutas para las razas
//-----------------------------------------------------------------------------------------------------
$routes->get('razas/mostrar','RazasController::mostrar');
$routes->get('razas/agregar','RazasController::agregar');
$routes->get('razas/delete/(:num)','RazasController::delete/$1');
$routes->get('razas/editar/(:num)','RazasController::editar/$1');
$routes->get('razas/buscar','RazasController::buscar');

$routes->post('razas/agregar','RazasController::agregar');
$routes->post('razas/insert','RazasController::insert');
$routes->post('razas/update','RazasController::update');
//-----------------------------------------------------------------------------------------------------


//-----------------------------------------------------------------------------------------------------
// Rutas para las dietas
//-----------------------------------------------------------------------------------------------------
$routes->get('dietas/mostrar','DietasController::mostrar');
$routes->get('dietas/agregar','DietasController::agregar');
$routes->get('dietas/delete/(:num)','DietasController::delete/$1');
$routes->get('dietas/editar/(:num)','DietasController::editar/$1');
$routes->get('dietas/buscar','DietasController::buscar');

$routes->post('dietas/agregar','DietasController::agregar');
$routes->post('dietas/insert','DietasController::insert');
$routes->post('dietas/update','DietasController::update');
//-----------------------------------------------------------------------------------------------------


//-----------------------------------------------------------------------------------------------------
// Rutas para los usuarios
//-----------------------------------------------------------------------------------------------------
$routes->get('usuario/mascotas','UsuariosController::mascotas');
$routes->get('usuario/perros','UsuariosController::perros');
$routes->get('usuario/gatos','UsuariosController::gatos');

$routes->get('/', 'UsuariosController::index');
$routes->get('admin', 'MascotasController::mostrarAdoptadas');
$routes->get('admin/graficas', 'MascotasController::graficas');
$routes->get('admin/perros','MascotasController::perros');
$routes->get('admin/gatos','MascotasController::gatos');