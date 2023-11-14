<?php

class Pages extends Controller{
    public function __construct(){
        echo 'Pages is Loaded<br>';
    }

    public function index(){

    }
    public function image(){
        $this->view('image');
    }
}