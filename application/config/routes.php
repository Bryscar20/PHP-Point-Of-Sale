<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
| 	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['scaffolding_trigger'] = 'scaffolding';
|
| This route lets you set a "secret" word that will trigger the
| scaffolding feature for added security. Note: Scaffolding must be
| enabled in the controller in which you intend to use it.   The reserved 
| routes must come before any wildcard or regular expression routes.
|
*/

// Define the default controller
$route['default_controller'] = "home";

// Define a route group for reports
$route['reports/(:any)'] = array(
  // Match summary reports with three parameters
  'summary_(:any)/(:num)/(:num)' => 'reports/$1/$2/$3',
  // Match detailed sales reports with three parameters
  'detailed_sales/(:num)/(:num)' => 'reports/$1/$2/$3',
  // Match specific reports with four parameters
  'specific_(:any)/(:num)/(:num)/(:num)' => 'reports/$1/$2/$3/$4',
  // Match any other report with no parameters
  '(:any)' => 'reports/date_input'
);

// Define a route for no access with one parameter
$route['no_access/(:name)'] = "no_access/index/$1";

// Define a route for scaffolding trigger with no parameter
$route['scaffolding_trigger'] = "";



/* End of file routes.php */
/* Location: ./application/config/routes.php */