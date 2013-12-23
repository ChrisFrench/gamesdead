<?php 
namespace Site\Controllers;

class Games extends Base 
{
    public function display($f3)
    {
    	

        \Base::instance()->set('pagetitle', 'Games');
        \Base::instance()->set('subtitle', '');
        \Base::instance()->set('bodyid', 'games');     	   
        $view = new \Dsc\Template;
        echo $view->render('games/default.php');
    }

    public function vikings($f3)
    {
    	

        \Base::instance()->set('pagetitle', 'Games - Vikings');
        \Base::instance()->set('subtitle', '');
        \Base::instance()->set('bodyid', 'games');     	   
        $view = new \Dsc\Template;
        echo $view->render('games/vikings.php');
    }

   
}
?> 