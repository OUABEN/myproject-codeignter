<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



$routes->get('/', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::registerSubmit');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::loginSubmit');
$routes->get('/logout', 'Auth::logout');
$routes->get('/dashboard', 'Auth::dashboard', ['filter' => 'auth']);  // Apply auth filter to dashboard
$routes->get('/voiture', 'Voiture::index');


$routes->get('/voiture', 'Voiture::index');
$routes->get('/voiture/create', 'Voiture::create');
$routes->post('/voiture/store', 'Voiture::store');
$routes->get('/voiture/show/(:any)', 'Voiture::show/$1');
$routes->get('/voiture/delete/(:any)', 'Voiture::delete/$1');

$routes->get('/voiture/table', 'Voiture::table');




$routes->get('/client', 'Client::form');               // Show the client form
$routes->get('/client/table', 'Client::table');         // Show the table of clients
$routes->post('/client/SaveClient', 'Client::SaveClient'); // Save a new client
//$routes->get('/client/edit/(:num)', 'Client::edit/$1');  // Edit a client by ID
//$routes->post('/client/update/(:num)', 'Client::updateClient/$1'); // Update a client by ID
$routes->get('client/edit/(:num)', 'Client::edit/$1'); // Edit a client by ID
$routes->post('client/updateClient/(:num)', 'Client::updateClient/$1'); // Update a client by ID
$routes->get('/client/delete/(:num)', 'Client::deleteClient/$1'); // Delete a client by ID


