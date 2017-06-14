<?php

// My debug
class debug{
    public function __construct(){
        //echo 'help - helper';
    }
    public function debug_message($message) {
        error_log($message);
    }
}