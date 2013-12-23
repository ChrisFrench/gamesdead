<?php
$app = require('../vendor/bcosca/fatfree/lib/base.php');

$app->set('PATH_ROOT', __dir__ . '/../');
$app->set('AUTOLOAD',
        $app->get('PATH_ROOT') . 'lib/;' .
        $app->get('PATH_ROOT') . 'apps/;'
);

require $app->get('PATH_ROOT') . 'vendor/autoload.php';

$app->set('APP_NAME', 'site');
if (strpos(strtolower($app->get('URI')), $app->get('BASE') . '/admin') !== false) {
    $app->set('APP_NAME', 'admin');
}

// common config
$app->config( $app->get('PATH_ROOT') . 'config/common.config.ini');

// app-specific settings go in the app's config files 
//$app->config( $app->get('PATH_ROOT') . 'config/' . $app->get('APP_NAME') . '.config.ini');
//$app->config( $app->get('PATH_ROOT') . 'config/' . $app->get('APP_NAME') . '.maps.ini');
//$app->config( $app->get('PATH_ROOT') . 'config/' . $app->get('APP_NAME') . '.routes.ini');

$logger = new \Log( $app->get('application.logfile') );
\Registry::set('logger', $logger);

if ($app->get('DEBUG')) {
    ini_set('display_errors',1);
}

// bootstap each mini-app
$custom = $app->get('PATH_ROOT').'apps/Custom/';

\Dsc\Apps::instance()->bootstrap(null, array($custom ));

$app->run();

?>
