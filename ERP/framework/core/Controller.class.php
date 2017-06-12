<?php

// Base Controller
class Controller{

    // Base Controller has a property called $loader, it is an instance of Loader class(introduced later)
    protected $loader;
    protected $myecho;

    public function __construct(){
        $this->loader = new Loader();
        // Ici déclaration d'une nouvelle librairie ou un nouveau helper
        $this->loader->library('Mylib');
        $this->loader->helper('Myhelper'); // Exmple autre helper
    }

    public function __echo($message){
        return $this->loader->helper('__echo', 'displayText', $message);
    }

}