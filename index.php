<?php

declare(strict_types=1);

$base = __DIR__;

require_once($base . "/controller/product.php");
require_once($base . "/route.php");

$url = parse_url($_SERVER['REQUEST_URI']);
$key = array_search($url['path'], array_column($routes, 'url'));
print_r($url);
if ($key !== false && $routes[$key]['method'] === $_SERVER['REQUEST_METHOD']) {
    $args = [];

    var_dump($routes[$key]);

    if (isset($url['query'])) {
        parse_str($url['query'], $args);
    }

    $controllerName = $routes[$key]['class'];
    $methodName = $routes[$key]['function'];

    $func = [new $controllerName, $methodName];
    $func(...$args);
} else {
    echo '404: Page not found!';
}



// $product = new ProductController();
