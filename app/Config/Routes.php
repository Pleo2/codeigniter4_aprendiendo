<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/helloworld', 'Home::helloWorld');
$routes->get('/otpauth', 'OtpAuth::index');
$routes->get('/otpauth/helloworld', 'OtpAuth::helloworld');
$routes->get('/otpauth/generateOtp', 'OtpAuth::generateOtp');

