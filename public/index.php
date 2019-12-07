<?php
require __DIR__ . '/../vendor/autoload.php';

$routes = require __DIR__ .'/../app/routes.php';
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$not_found = function (){
    return [404, ['Contentd-Type' => 'text/html'],"<h1>404 NotFound だよ</h1>"];
};

//URLに何かあれば$fに代入、なければ$not_found
//$aa = $bb ?? $cc; については、「Null 合体演算子」で検索
$f = $routes[$request_uri] ?? $not_found;

//returnされた[xxx, ['Contentd-Type' => 'xxx'],"xxx"]を代入
[$status, $headers, $body] = $f();
http_response_code($status);
foreach($headers as $name => $h){
    header("{name}:$h");
}
echo $body;