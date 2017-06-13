<?php

// Base Controller
class Controller extends GetLoader{

    // Base Controller has a property called $loader, it is an instance of Loader class(introduced later)
    protected $loader;
    protected $myecho;

    public function __construct(){
        $this->loader = new GetLoader();
        // Ici déclaration d'une nouvelle librairie ou un nouveau helper
        $this->loader->library('Mylib');
        $this->loader->helper('Myhelper'); // Exmple autre helper
        $this->loader->helper('GetInternationalisation'); // declaration helper
    }

    public function __echoo($message){
        $__echoVal = new GetInternationalisation();
        return $__echoVal->displayText($message);
    }

}