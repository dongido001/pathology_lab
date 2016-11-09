<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/**
* Admin pages router
* @author: Onwuka Gideon <dongidomed@gmail.com> <dongido>
* @version: 1.0.0
*/
$route['admin'] = 'AccountController/admin';
$route['admin/patients'] = 'AccountController/admin_patients';
$route['admin/add_patient'] = 'AccountController/add_patient';
$route['admin/add_patient_process'] = 'AccountController/add_patient_process';
$route['admin/patient/delete/(:any)'] = 'AccountController/delete_patient/$1';

$route['admin/reports'] = 'AccountController/admin_view_reports';
$route['admin/add_report'] = 'AccountController/add_report';
$route['admin/add_report_process'] = 'AccountController/add_report_process';

$route['admin/edit_report/(:num)'] = 'AccountController/edit_report/$1';
$route['admin/test/delete/(:num)'] = 'AccountController/delete_patient_result/$1';
$route['admin/edit_report_process'] = 'AccountController/edit_report_process';


$route['admin/login'] = 'AuthController/admin_login';
$route['admin/process'] = 'AuthController/admin_login_process';


/**
* User pages router
* @author: Onwuka Gideon <dongidomed@gmail.com> <dongido>
* @version: 1.0.0
*/
$route['user'] = 'AccountController/user';
$route['user/reports'] = 'AccountController/user_report';
$route['user/report/pdf'] = 'AccountController/report';
$route['user/report/(:num)'] = 'AccountController/user_report_view/$1';
$route['user/login'] = 'AuthController/user_login';
$route['user/process'] = 'AuthController/user_login_process';



/**
* Others pages router
* @author: Onwuka Gideon <dongidomed@gmail.com> <dongido>
* @version: 1.0.0
*/

$route['logout'] = 'AuthController/logout';