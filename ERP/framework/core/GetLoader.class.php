<?php
class GetLoader{

    public $help;
    // Load library classes
    public function library($lib){
        include LIB_PATH . "$lib.class.php";
        new $lib();
    }

    // loader helper functions. Naming conversion is xxx_helper.php;
    public function helper($helper){
        include HELPER_PATH . "{$helper}_helper.class.php";
    }

}