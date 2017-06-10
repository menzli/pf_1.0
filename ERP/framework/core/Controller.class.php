<?php

// Base Controller
class Controller{

    // Base Controller has a property called $loader, it is an instance of Loader class(introduced later)
    protected $loader;

    public function __construct(){
        error_log(' loader pour quoi ?');
        $this->loader = new Loader();
    }

}