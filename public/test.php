<?php

$routes = [
    'index' => ['GET', '/', function(){
        echo "functionだよ";
        }
        ]
];

foreach ($routes as [$method, $path, $f]) {
    if (empty($path)) { //URLのパスがない場合
        $map[$path] = [];
    }
    $map[$path][$method] = $f;
}

echo '<pre>';
var_dump($map);
echo '</pre>';