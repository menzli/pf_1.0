<?php
// framework/core/Framework.class.php

class Framework {

    // Run my Framework
    public static function run() {
        //echo "run()";
        self::init();
        self::roots();
        self::path();
        self::autoload();
        self::dispatch();
    }

    // Initialization
    private static function init() {

        // Define path constants
        define("DS", DIRECTORY_SEPARATOR);
        define("ROOT", getcwd() . DS);
        define("APP_PATH", ROOT . 'application' . DS);
        define("FRAMEWORK_PATH", ROOT . "framework" . DS);
        define("PUBLIC_PATH", ROOT . "public" . DS);

        define("CONFIG_PATH", APP_PATH . "config" . DS);
        define("CONTROLLER_PATH", APP_PATH . "controllers" . DS);
        define("MODEL_PATH", APP_PATH . "models" . DS);
        define("VIEW_PATH", APP_PATH . "views" . DS);

        define("CORE_PATH", FRAMEWORK_PATH . "core" . DS);
        define('DB_PATH', FRAMEWORK_PATH . "database" . DS);
        define("LIB_PATH", FRAMEWORK_PATH . "libraries" . DS);
        define("HELPER_PATH", FRAMEWORK_PATH . "helpers" . DS);
        define("UPLOAD_PATH", PUBLIC_PATH . "uploads" . DS);
    }

    private static function roots() {
        $rootsVal = file_get_contents(dirname(__FILE__)."/../roots.xml");
        $xmlRoots = simplexml_load_string($rootsVal, "SimpleXMLElement", LIBXML_NOCDATA);
        $jsonRoots = json_encode($xmlRoots);
        $arrayRoots = json_decode($jsonRoots,TRUE);
        $pages = array_keys($arrayRoots);

        foreach ($_REQUEST as $requesUrlKey => $requesUrlVal){
            if(in_array($requesUrlKey, $pages)){
                // Define platform, controller, action, for example:
                // index.php?index
                define("SPACE", $arrayRoots[$requesUrlKey]["space"]); // home
                define("CONTROLLER", $arrayRoots[$requesUrlKey]["controller"]); //Index
                define("ACTION", $arrayRoots[$requesUrlKey]["action"]); //index
            }else{
                throw new Exception('page demandé non definie dans notre liste');
            }
        }
    }

    // Initialization
    private static function path() {
        define("CURR_CONTROLLER_PATH", CONTROLLER_PATH . SPACE . DS);
        define("CURR_VIEW_PATH", VIEW_PATH . SPACE . DS);
        // Load configuration file
        require CONFIG_PATH . "config.php";
        // Load core classes
        require CORE_PATH . "Controller.class.php";
        require CORE_PATH . "Loader.class.php";
        require DB_PATH . "Mysql.class.php";
        require CORE_PATH . "Model.class.php";
        // Start session
        session_start();
    }

    // Load configuration file
    private static function autoload() {
        spl_autoload_register(array(__CLASS__,'load'));
    }

    // Define a custom load method
    private static function load($classname){
        error_log('function load / ' . $classname);
        if (substr($classname, -10) == "Controller"){
            include CURR_CONTROLLER_PATH . "$classname.class.php";
        } elseif (substr($classname, -5) == "Model"){
            // Model
            include  MODEL_PATH . "$classname.class.php";
        }
    }

    // Routing and dispatching
    private static function dispatch(){
        // Instantiate the controller class and call its action method
        $controller_name = CONTROLLER . "Controller";
        $action_name = ACTION . "Action";
        error_log('okok -- ' . $controller_name);
        $controller = new $controller_name;
        $controller->$action_name();
    }
}