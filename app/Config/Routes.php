<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index', ['as' => 'home']);
$routes->get('/about-us', 'Company::about', ['as' => 'about']);
$routes->get('/careers', 'Company::careers', ['as' => 'careers']);
$routes->get('/services', 'Services::index', ['as' => 'services']);
$routes->get('/contact', 'Contact::index', ['as' => 'contact']);
$routes->get('/privacy-policy', 'Legal::privacy', ['as' => 'privacy']);
$routes->get('/terms-and-conditions', 'Legal::terms', ['as' => 'terms']);
$routes->post('/contact/send', 'Contact::send');

// XML sitemap for search engines
$routes->get('sitemap.xml', 'Sitemap::index');
