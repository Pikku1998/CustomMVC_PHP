<?php

class Pages extends Controller{
    private $postModel;
    public function __construct(){
        echo 'Default Page is Loaded<br>';
        $this->postModel = $this->model('Post');

    }

    public function index(){
        $users = $this->postModel->getUsers();
        $data = [
            'title'=>'Welcome',
            'users'=>$users];
        $this->view('pages/index', $data);
    }

    public function about(){
        $data = ['title'=>'About'];
        $this->view('pages/index', $data);
    }

}