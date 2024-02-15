<?php

require 'Router.php';

$router = new Router();
$router->get('/', function(){
    @include("views/home.php");
});

$router->get('/about', function(){
   echo "About";
});

$router->post('/create', function(){
    echo "Create";
});


$router->get('/user/:id', function($params){
    
    echo $params['id'];
});


$router->listen();