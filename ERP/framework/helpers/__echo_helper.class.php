<?php

// Helper définir le methode de l'internationalisation
class __echo{

    public function __construct(){
    }

    public function displayText($message){
        $langueTo = 'fr'; // à initialisé selon la session
        $csvData = file_get_contents(dirname(__FILE__)."/../internationalisation/local_$langueTo.csv");
        $lines = explode(PHP_EOL, $csvData);
        $array = array();
        foreach ($lines as $line) {
            $retrnLinge = str_getcsv($line);
            $array[$retrnLinge[0]] = $retrnLinge[1];
        }
        $csvDataKey = array_keys($array);
        if(in_array($message, $csvDataKey)){
            return $array[$message];
        }else{
            return $message;
        }
    }
}