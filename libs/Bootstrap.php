<?php

class  Bootstrap{
    public function __construct(){

        $url = rtrim($_GET['url']);
        $url = explode('/',$url);

        $url1 = ucfirst($url[0]);

        if (!empty($url[0])) {
            if (isset($url[1])) {
                $controller = new $url1;
                $str = (string)$url[1];
                $controller->$str();
            }elseif (file_exists('app/controllers/' . $url[0] . '.php')){
                header('Location:/');
            }
            else {
                $controller = new $url1;
            }
        }
    }
}

