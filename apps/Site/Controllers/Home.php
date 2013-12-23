<?php 
namespace Site\Controllers;

class Home extends Base 
{
    public function display()
    {
        \Base::instance()->set('pagetitle', 'Home');
        \Base::instance()->set('subtitle', '');
                
        $view = new \Dsc\Template;
        echo $view->render('home/default.php');
    }
}
?> 