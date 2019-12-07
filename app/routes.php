<?php
$routes = [];
$template = new \Oira\TemplateFactory(__DIR__ . '/view/');

$routes['/'] = function () use ($template) {
    return [200, ['Content-Type' => 'text/html'], 
    $template->create('index', [
        'name' => 'てすとまん',
        'route' => 'ルートからのテスト'
    ])];
};
$routes['/phpinfo'] = function(){
    ob_start();
    phpinfo(); 
};
// $routes['/testtest'] = function(){
//     echo "testtestああｑｗせｄｒｆｔｇ"; 
// };
return $routes;