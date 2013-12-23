<?php 
$f3 = \Base::instance();
$global_app_name = $f3->get('APP_NAME');

switch ($global_app_name) 
{
    case "site":
    
        $f3->config( $f3->get('PATH_ROOT').'apps/Site/config.ini');

     
    	$f3->route('GET /', '\Site\Controllers\Home->display');
    	$f3->route('GET /games', '\Site\Controllers\Games->display');
        $f3->route('GET /about', '\Site\Controllers\About->display');
        $f3->route('GET /games/vikings', '\Site\Controllers\Games->vikings');
        // TODO set some app-specific settings, if desired
        
        // append this app's UI folder to the path
        $ui = $f3->get('UI');
        $ui .= ";" . $f3->get('PATH_ROOT') . "apps/Site/Views/";
        $f3->set('UI', $ui);
        
        // append this app's template folder to the path
        $templates = $f3->get('TEMPLATES');
        $templates .= ";" . $f3->get('PATH_ROOT') . "apps/Site/Templates/";
        $f3->set('TEMPLATES', $templates);
        
        
        break;
}
?>