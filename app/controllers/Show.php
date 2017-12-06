<?php


class Show{

    public function __construct(){
//        echo  "this is show class";
    }


    public function __call($name, $arguments){
       header('Location:/');
    }
}