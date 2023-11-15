<?php

class Pages extends Controller{
    public function __construct(){
        echo 'Default Page is Loaded<br>';
        $this->model('Page'); // for connecting to database

    }

    public function index(){

        $data = ['title'=>'Welcome'];
        $this->view('pages/index', $data);
    }

    public function about(){
        $data = ['title'=>'About'];
        $this->view('pages/index', $data);
    }

}