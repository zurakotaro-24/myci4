<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Uses $routes->add(), which accepts any methods. (GET, POST, PUT, etc.).
// $myroutes = [];
// $myroutes['user'] = 'UserController::index';
// $myroutes['register'] = 'UserController::register';
// $myroutes['login'] = 'UserController::login';
// $routes->map($myroutes);

// Routes for users
$routes->get('/users', 'UserController::index');


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

// Route for error 404
$routes->set404Override(function()
{
    echo view('errors/error_page.php');
});
