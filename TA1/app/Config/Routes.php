<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/Home', 'Home::index');

$routes->get('/About', 'About::index');

$routes->get('/User', 'User::index');

$routes->get('/Customers', 'Customers::index');

