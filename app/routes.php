<?php
$routes = [];
$template = new \Oira\TemplateFactory(__DIR__ . '/view/');

$routes = [
    'index' => ['GET', '/', function () {
        echo "<!DOCTYPE html>\n";
        echo "<title>test</title>\n";
        echo "<p>現在は" . h(date('Y年m月d日H時i分s秒')). "です</p>\n";
        echo "<ul><li><a href='/phpinfo'><code>phpinfo()</code></a></ul>\n";
    }],
    'phpinfo' => ['GET', '/phpinfo', function () {
        phpinfo();
    }],
    '#404' => function () {
        http_response_code(404);
        echo "<p>404 Not Found</p>";
    },
];

return $routes;