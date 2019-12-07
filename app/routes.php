<?php
$routes = [];
$routes['/'] = function(){
    ob_start();
    include __DIR__ . '/view/index.php';
    return [200, ['Content-Type' => 'test/html'] , ob_get_clean()];
};

$routes['/phpinfo'] = function(){
    ob_start();
    phpinfo(); 
};

return $routes; 