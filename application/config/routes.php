<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| ------------------------------------------------------------------------- 
*/
$route['default_controller'] = 'web';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['Cart'] = "Web/Cart";
$route['product/(:any)/(:any)'] = "Web/productsDetailed/$1/$2";