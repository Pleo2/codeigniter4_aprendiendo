<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 /**
  * -----------------------------------------------------------------------------------------
 * Default Route Configuration
 * -----------------------------------------------------------------------------------------
 * This section sets up the default routing for the application, directing requests to the Home controller.
  */
$routes->get('/', 'Home::index');
$routes->get('/helloworld', 'Home::helloWorld');

/**
 * -----------------------------------------------------------------------------------------
 * OtpAuth Routes
 * -----------------------------------------------------------------------------------------
 * This section defines routes for the OtpAuth controller, which handles OTP generation and related functionalities.
 */
$routes->get('/otpauth', 'OtpAuth::index');
$routes->get('/otpauth/(:num)', 'OtpAuth::helloworld/$1');
$routes->get('/otpauth/catname/(:alpha)/(:num)', 'OtpAuth::catname/$1/$2');
/** 
 * -----------------------------------------------------------------------------------------
 * Regex Route Example
 * -----------------------------------------------------------------------------------------
 * words or letters and you can use regex to match specific patterns
 * This route uses a regex to match any combination of letters, numbers, underscores, or hyphens after '/otpauth/regex/'
 * The matched value is passed as a parameter to the 'regex' method of the OtpAuth controller
 */
$routes->get('/otpauth/regex/([a-zA-Z0-9_-]+)', 'OtpAuth::regex/$1');
$routes->get('/otpauth/generateOtp', 'OtpAuth::generateOtp');

/**
 * -----------------------------------------------------------------------------------------
 * Product Routes
 * -----------------------------------------------------------------------------------------
 * This section defines routes for product-related functionalities.
 */
$routes->view('/products/(:num)', 'list_products');


/** 
 * -----------------------------------------------------------------------------------------
 * groping routes
 * -----------------------------------------------------------------------------------------
 * This section groups routes under a common prefix 'otpauth' and applies the 'auth' filter to all routes in this group.
 * The 'auth' filter is applied to all routes in this group, ensuring that authentication is required for access.
 */