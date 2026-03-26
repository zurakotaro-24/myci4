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

// For creating routes with controller in each line.
// Routes for blogs
// Pages
// $routes->get('/blogs', 'BlogController::index');
// $routes->get('/blogs/create', 'BlogController::create');
// $routes->get('/blogs/edit/(:num)', 'BlogController::edit/$1');
// $routes->get('/blogs/view-filters', 'BlogController::viewFilters');

// // POST Requests
// $routes->post('/blogs/insert', 'BlogController::insert');
// $routes->post('/blogs/update/(:num)', 'BlogController::update/$1');


// Routes for blogs
// group('blogs') - each route inside the group starts with '/blogs'.
// get('create') - each route adds this route to the '/blogs', resulting in '/blogs/create'.
$routes->group('blogs', ['filter' => 'auth'], function($routes) {
    //Pages
    $routes->get('/', 'BlogController::index');
    $routes->get('create', 'BlogController::create');
    $routes->get('edit/(:num)', 'BlogController::edit/$1');
    $routes->get('view-filters', 'BlogController::viewFilters');

    // POST Requests
    $routes->post('insert', 'BlogController::insert');
    $routes->post('update/(:num)', 'BlogController::update/$1');

});

// Routes for users
$routes->get('/users', 'UserController::index');
$routes->get('/users-list', 'UserController::usersList');
$routes->get('/form', 'UserController::form');
$routes->post('/save-form', 'UserController::saveForm');

$routes->get('/user/login', 'UserController::loginForm');
$routes->get('/user/register', 'UserController::registerForm');
$routes->post('/user/login', 'UserController::loginAcc');
$routes->post('/user/register', 'UserController::registerAcc');
$routes->post('/user/logout', 'UserController::logoutAcc');

// Routes for welcome
$routes->get('/', 'Home::index');
$routes->get('/welcome', 'Welcome::index');
$routes->get('/welcome/grettings', 'Welcome::greet');
$routes->get('/welcome/(:any)/(:any)', 'Welcome::test/$1/$2');

// Routes for data
$routes->get('/data', 'DataController::index');
$routes->get('/anotherdata', 'DataController::anotherData');

// Routes for Custom Libraries
$routes->get('/custom', 'CustomLibController::index');

// Routes for Testing Helpers
$routes->get('/helper', 'TestHelperController::index');

// Routes for Testing Email 
$routes->get('/email-test', 'TestMailController::index');

// Route for error 404
$routes->set404Override(function()
{
    echo view('errors/error_page.php');
});
