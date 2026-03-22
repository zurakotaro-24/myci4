<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/welcome', 'Welcome::index');
$routes->get('/welcome/grettings', 'Welcome::greet');
$routes->get('/welcome/(:any)/(:any)', 'Welcome::test/$1/$2');
