<?php
require __DIR__ . '/../vendor/autoload.php';

// echo "this is test \n";
// echo h(date('Y/m/d'));
if ($_SERVER['REQUEST_URI'] === '/') {
    echo "<!DOCTYPE html>\n";
    echo "<title>test</title>\n";
    echo "<p>現在は" . h(date('Y年m月d日H時i分s秒')). "です</p>\n";
    echo "<ul><li><a href='/phpinfo.php'><code>phpinfo()</code></a></ul>\n";
    echo "<hr>\n";
    exit;
}elseif(!$_SERVER['REQUEST_URI'] === '/'){
    http_response_code(404);
echo "<p>404 Not Found</p>";

}
