<?php
class Loader{

    // Load library classes
    public function library($lib){
        include LIB_PATH . "$lib.class.php";
        new $lib();
    }

    // loader helper functions. Naming conversion is xxx_helper.php;
    public function helper($helper, $message = NULL){
        include HELPER_PATH . "{$helper}_helper.class.php";
        ${$helper} = new $helper();
        return ${$helper}->displayText($message);
    }

}