<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('index', 'Main::index');
$routes->get('id/(:num)', 'Main::zeme/$1');
$routes->get("data/(:num)", 'Main::data/$1');
$routes->get("obrazky/(:num)", 'Main::obrazky/$1');
$routes->get("prehled", 'Main::prehled');


