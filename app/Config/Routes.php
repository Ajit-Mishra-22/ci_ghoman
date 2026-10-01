<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('/contact', 'Contact::index', ['as' => 'contact']);
$routes->post('/contact/send', 'Contact::send');

// XML sitemap for search engines
$routes->get('sitemap.xml', 'Sitemap::index');
