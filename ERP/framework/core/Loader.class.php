<?php
class Loader{

    // Load library classes
    public function library($lib){
        include LIB_PATH . "$lib.class.php";
        new $lib();
    }

    // loader helper functions. Naming conversion is xxx_helper.php;
    public function helper($helper, $function = NULL, $message = NULL){
        include HELPER_PATH . "{$helper}_helper.class.php";
        ${$helper} = new $helper();
        if (!is_null($function)){
            return ${$helper}->{$function}($message);
        }
    }

}