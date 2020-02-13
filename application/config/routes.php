<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'Login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['api-login-form']['POST'] = 'Login/checklogin';

//Add Product
$route['api-view-typeproduct']['GET'] = 'Product/loadviewtypeproduct';
$route['api-view-unitproduct']['GET'] = 'Product/loadviewunitproduct';
$route['api-view-product']['GET'] = 'Product/loadviewproduct';
