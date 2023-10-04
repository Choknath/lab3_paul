<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// user
$routes->get('/', 'Home::index');
$routes->get('/Product', 'Home::Product');
$routes->get('/Productpage', 'Home::Productpage');
$routes->get('/about', 'Home::about');
$routes->get('/howitwork', 'Home::how');
$routes->get('/min','Admincontrol::min');
$routes->get('/table','Admincontrol::Table');

