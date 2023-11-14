<?php
class Pages{
    public function __construct(){
        echo 'Pages is Loaded<br>';
    }
    public function image($id){
        // echo 'image_method<br>';
        echo $id;
    }
}