<?php
require __DIR__ . '/../vendor/autoload.php';


//$_SERVER['REQUEST_METHOD']でGETなのかPOSTなのか確認
$request_method = $_SERVER['REQUEST_METHOD'];
//'REQUEST_URI'...ページにアクセスするために指定された URI。例えば、 '/index.html'
//parse_url...URL の様々な構成要素のうち特定できるものに関して 連想配列にして返します。
//$request_uriはxxx.com/hogehoge?aaa の'hogehoge'部分を示す。
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//追加↓
$routes = require __DIR__ . '/../app/routes.php';

//$routesの内容を$mapに格納。
$map = [];

//$routes配列の中身は、[method,urlのパス、表示内容。]
foreach ($routes as [$method, $path, $f]) {
    if (empty($path)) { //URLのパスがない場合
        $map[$path] = [];
    }
    $map[$path][$method] = $f;
}


if (isset($map[$request_uri][$request_method])) {
    $map[$request_uri][$request_method]();
    //→もし[$request_uri][$request_method]が入っていれば、routesのfunctionを表示
    } else {
        http_response_code(404);
        echo "<p>404 Not Foundだぞ</p>";
    }
