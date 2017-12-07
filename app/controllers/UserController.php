<?php


class UserController extends Controller {

    public function login(){
        $this->view('user/login');
    }

    public function register(){
        $this->view('user/register');
    }


}