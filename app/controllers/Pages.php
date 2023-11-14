<?php

class Pages extends Controller{
    public function __construct(){
        echo 'Default Page is Loaded<br>';
    }

    public function index(){
        $data = ['title'=>'Welcome'];
        $this->view('pages/index', $data);
    }

}