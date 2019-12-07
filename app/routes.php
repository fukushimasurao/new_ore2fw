<?php
$routes = [];
$routes['/'] = function(){
   include __DIR__ . '/view/index.php';
};
$routes['/phpinfo'] = function(){
    phpinfo(); 
};
return $routes; 