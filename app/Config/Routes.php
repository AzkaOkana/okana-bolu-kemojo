<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('menu/detail/(:num)', 'MenuController::detail/$1');

// Auth Routes (Login, Register, Logout)
$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::loginProcess');
$routes->get('register', 'AuthController::register');
$routes->post('register', 'AuthController::registerProcess');
$routes->get('logout', 'AuthController::logout');

// Group Admin Menu (Diproteksi Filter 'admin')
$routes->group('admin/menu', ['filter' => 'admin'], static function ($routes) {
    $routes->get('/', 'MenuController::adminIndex');
    $routes->get('create', 'MenuController::create');
    $routes->post('store', 'MenuController::store');
    $routes->get('edit/(:num)', 'MenuController::edit/$1');
    $routes->post('update/(:num)', 'MenuController::update/$1');
    $routes->get('delete/(:num)', 'MenuController::delete/$1');
    $routes->post('delete/(:num)', 'MenuController::delete/$1');
    $routes->post('update-hero', 'MenuController::updateHero');
    $routes->get('set-hero/(:num)', 'MenuController::setAsHero/$1');
});
