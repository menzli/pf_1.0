<?php

// Base Controller
class Controller{

    // Base Controller has a property called $loader, it is an instance of Loader class(introduced later)
    protected $loader;

    public function __construct(){
        $this->loader = new Loader();
        // Ici déclaration d'une nouvelle librairie ou un nouveau helper
        $this->loader->library('Mylib');
        //new Mylib();
        //$this->loader->helper('Myhelper'); // TODO
        //new Myhelper();
        $u = $this->loader->helper('__echo', 'messageVal');
        var_dump($u);
    }

}