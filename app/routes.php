<?php
//$routesという配列を作成する
$routes = [
    //'/'がGETで送られた場合の処理
    'index' => ['GET', '/', function(){
        echo "<!DOCTYPE html>\n";
        echo "<title>test</title>\n";
        echo "<p>現在は" . h(date('Y年m月d日H時i分s秒')). "です</p>\n";
        echo "<ul><li><a href='/phpinfo.php'><code>phpinfo()</code></a></ul>\n";
        echo "<hr>\n";
        }
    ],
    //'/phpinfo'がGETで送られた場合の処理
    'phpinfo' => ['GET', '/phpinfo', function () {
    phpinfo();
    }],
    //"404"の場合
    '#404' => function () {
        http_response_code(404);
        echo "<p>404 Not Found</p>";
    },

];

return $routes;
