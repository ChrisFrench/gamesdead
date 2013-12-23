<?php 
namespace Site\Controllers;

class Projects extends Base 
{
    public function display($f3)
    {
    	echo $f3->get('PARAMS.name');

        \Base::instance()->set('pagetitle', 'Home');
        \Base::instance()->set('subtitle', '');
                
        $view = new \Dsc\Template;
        echo $view->render('projects/'.$f3->get('PARAMS.name').'/index.php');
    }

   
}
?> 