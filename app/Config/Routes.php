<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Routes for welcome
$routes->get('/', 'Home::index');
$routes->get('/welcome', 'Welcome::index');
$routes->get('/welcome/grettings', 'Welcome::greet');
$routes->get('/welcome/(:any)/(:any)', 'Welcome::test/$1/$2');

// Routes for blogs
$routes->get('/blogs', 'BlogController::index');
$routes->get('/view-filters', 'BlogController::viewFilters');

// Routes for data
$routes->get('/data', 'DataController::index');