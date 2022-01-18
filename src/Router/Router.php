<?php
namespace App\Router;
use App\Router\RouterException;

class Router{
    private $url;
    private $routes=[];

    public function __construct($url){
        $this->url = $url;
    }

    public function get($path, $callable){
        $route = new Route($path, $callable);
        $this->routes['GET'] = $route;
    }

    public function post($path, $callable){
        $route = new Route($path, $callable);
        $this->routes['POST'] = $route;
    }

    public function run(){
    // echo '<pre>';// echo print_r($this->routes);// echo '<pre>';

        if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){

            throw new RouterException('REQUEST _METHOD does not exist');

        }

        foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
            if ($route->match($this->url)){
                return $route->call();
            }
        }

        throw new RouterException('No matching routes');

    }

}