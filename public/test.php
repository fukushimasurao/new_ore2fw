<?php

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$not_found = function (){
    return [404, ['Contentd-Type' => 'text/html'],"<h1>404 NotFoundaaa</h1>"];
};
$f = $routes[$request_uri] ?? $not_found;

//returnされた[xxx, ['Contentd-Type' => 'xxx'],"xxx"]を代入
[$status, $headers, $body] = $f();
http_response_code($status);
foreach($headers as $name => $h){
    header("{name}:$h");
}
// echo $body;