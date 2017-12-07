<?php


class Show{



    public function __construct(){
//        echo  "this is show class";
    }


    public function index(){
        echo  "hello this is index";
    }


    public function __call($name, $arguments){
       header('Location:/');
    }
}