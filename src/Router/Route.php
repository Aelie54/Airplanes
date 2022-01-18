<?php
namespace App\Router;

class Route{
    public function __constructeur($path, 
    $callable){
        $this->path = $path;
        $this->callable = $callable;
    }

    public function match($url){
        $url=trim($url, '/');
        $path = preg_replace('#:[\w]+)#', '(^\]+)', $this->path);
        var_dump($path); die;
    }

}