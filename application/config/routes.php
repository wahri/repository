<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 	= 'home';
$route['404_override'] 			= 'home';
$route['translate_uri_dashes'] 	= TRUE;

$route['admin'] 				= 'admin/home';
$route['team'] 					= 'team/home';
$route['member'] 				= 'member/home';

/* End of file routes.php */
/* Location: ./application/config/routes.php */
