<?php

// Base Controller
class Controller{

    // Base Controller has a property called $loader, it is an instance of Loader class(introduced later)
    protected $loader;

    public function __construct(){
        error_log(' loader pour quoi ?');
        $this->loader = new Loader();
    }


    public function redirect($url,$message,$wait = 0){
        debug('ok ok ');
        if ($wait == 0){
            header("Location:$url");
        } else {
            include CURR_VIEW_PATH . "message.html";
        }
        exit;
    }

}