<?php
class Core{

    protected $currentController = 'Pages';


    public function __construct(){
        $url = $this->getUrl();

        $controller = ucwords($url[0]); //extracts controller from url array and capitalises first letter.
        
        // checks if the controller exists, if Yes, assigns it to currentController
        if(file_exists('../app/controllers/'.$controller.'.php')){
            $this->currentController = $controller;
        };

        require_once '../app/controllers/'. $this->currentController. '.php';

        // Instatiate current controller
        new $this->currentController;
    }



    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }
}