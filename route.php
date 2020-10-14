<?php
// echo 'https://pastebin.com/dAhxTEdW';
$routes = [
    [
        'method' => 'GET',
        'url' => '/myoop/',
        'class' => ProductController::class,
        'function' => 'index',
    ],
    [
        'method' => 'GET',
        'url' => '/myoop/product',
        'class' => ProductController::class,
        'function' => 'listView',
    ],
    [
        'method' => 'GET',
        'url' => '/myoop/product/add',
        'class' => ProductController::class,
        'function' => 'addView',
    ],
    [
        'method' => 'POST',
        'url' => '/myoop/product/add/submit',
        'class' => ProductController::class,
        'function' => 'add',
    ],
    [
        'method' => 'GET',
        'url' => '/myoop/product/update',
        'class' => ProductController::class,
        'function' => 'update',
    ],
    [
        'method' => 'GET',
        'url' => '/myoop/product/delete',
        'class' => ProductController::class,
        'function' => 'delete',
    ],
];
