<?php

// Base Controller
class Controller{

    // Base Controller has a property called $loader, it is an instance of Loader class(introduced later)
    protected $loader;

    public function __construct(){
        $this->loader = new Loader();
        $this->loader->library('Mylib');
        new Mylib();
        $this->loader->helper('Myhelper');
        new Myhelper();
    }

}