<?php

require 'Router.php';

$router = new Router();
$router->get('/', function(){
    @include("views/main-page/index.php");
});

$router->get('/about', function(){
    @include("views/main-page/show.php");
});

$router->get('/app', function(){
    @include("views/main-page/allshow.php");
});


$router->listen();