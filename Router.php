<?php

class Router{

    public $server_uri = [];
    public $server_method;
    public $callback;
    public $matched = false;
    public $params = [];
    public $trim = '/\^$TravelTourismSystem';

    function __construct(){
        $uri = trim($_SERVER['REQUEST_URI'], $this->trim);
        $this->server_method = strtolower($_SERVER['REQUEST_METHOD']);
        $this->server_uri = explode('/', $uri);

        echo $uri;
    }
    
    
    public function get($uri, $callback){
        $this->match('get', $uri, $callback);
    }

    public function post($uri, $callback){
        $this->match('post', $uri, $callback);
    }

    public function put($uri, $callback){
        $this->match('post', $uri, $callback);
    }

    public function patch($uri, $callback){
        $this->match('patch', $uri, $callback);
    }

    public function delete($uri, $callback){
        $this->match('delete', $uri, $callback);
    }

    public function add($method, $uri, $callback){
        $this->match(strtolower($method), $uri, $callback);
    }

    private function match($method, $uri, $callback){
        if($this->matched){
            return;
        }
        $uri = trim($uri, $this->trim);
        $current_uri = explode('/', $uri);
        $uri_length = count($current_uri);

        if($method != $this->server_method){
            return;
        }

        if($uri_length != count($this->server_uri)){
            return;
        }

        $matched = true;

        for($i = 0; $i < $uri_length; $i++){
            if($current_uri[$i] == $this->server_uri[$i]){
                continue;
            }
            if(isset($current_uri[$i][0]) && $current_uri[$i][0] == ':'){
                $this->params[substr($current_uri[$i], 1)] = $this->server_uri[$i];
                continue;
            }
            $matched = false;
            break;
        }

        if($matched){
            $this->callback = $callback;
            $this->matched = true;
        }else{
            echo "<h1> 404 Found </h1>";
        }
    }

    public function listen(){
        if(!$this->matched){
            header("HTTP/1.1 404 Not Found");
            return;
        }

        call_user_func($this->callback, $this->params);
    }

}