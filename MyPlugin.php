<?php
/**
* Plugin Name: MyPlugin
* Plugin URI: https://#/
*  Description: My First Wp Plugin.
*  Version: 1.0.0
*  Author: Hossein Mahmoodkhah
*  Author URI: http://#/
* Text Domain: My
*  License: GPLv2 or later
*  Copyright 2011-2017  SnapCreek LLC
* 
*/

defined('ABSPATH') || exit ('Bilakh');
define('My_DIR', plugin_dir_path(__FILE__));
define('My_URL', plugin_dir_url(__FILE__));
define('My_CSS_URL', trailingslashit(My_URL.'assets/css' ));
define('My_JS_URL', trailingslashit(My_URL.'assets/js' ));
define('My_IMG_URL', trailingslashit(My_URL.'assets/img' ));
define('My_INC_DIR',trailingslashit(My_DIR.'includes' ));
define('MY_ADMIN_DIR', trailingslashit(MY_DIR."admin" ));

if(is_admin()){
// require MY_ADMIN_DIR.'page.php';
// require MY_ADMIN_DIR.'menu.php';
}

add_filter('filter_array', 'filter_array_function');

function filter_array_function($data)
{
    foreach($data as $item){
if($item % 2 !== 0 or $item % 2 == 1 ){
    unset($data[$item]);
}
    }
    return $data;
  
}

$data = apply_filters('filter_array', array(1,2,3,4,5,6,7,8,9));
var_dump ($data);
