<?php 
namespace Site\Controllers;

class Games extends Base 
{
    public function display($f3)
    {
    	echo $f3->get('PARAMS.name');

        \Base::instance()->set('pagetitle', 'Games');
        \Base::instance()->set('subtitle', '');
        \Base::instance()->set('bodyid', 'games');     	   
        $view = new \Dsc\Template;
        echo $view->render('games/default.php');
    }

   
}
?> 