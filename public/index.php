<?php
require __DIR__ . '/../vendor/autoload.php';

// echo "this is test \n";
// echo h(date('Y/m/d'));
if ($_SERVER['REQUEST_URI'] === '/') {
    echo "<!DOCTYPE html>\n";
    echo "<title>test</title>\n";
    echo "this is test \n";
    echo "h(date('Y/m/d'))";
    exit;
}
http_response_code(404);
echo "<p>404 Not Found</p>";