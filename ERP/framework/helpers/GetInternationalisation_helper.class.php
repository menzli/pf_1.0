<?php

// Helper définir le methode de l'internationalisation
class GetInternationalisation{

    public function __construct(){
    }

    public function displayText($message){
        $langueTo = 'fr'; // à initialisé selon la session
        $csvData = file_get_contents(dirname(__FILE__)."/../internationalisation/local_$langueTo.csv");
        $lines = explode(PHP_EOL, $csvData);
        $arrayCSV = array();
        foreach ($lines as $line) {
            $retrnLinge = str_getcsv($line);
            $arrayCSV[$retrnLinge[0]] = $retrnLinge[1];
        }
        $csvDataKey = array_keys($arrayCSV);
        if(in_array($message, $csvDataKey)){
            return $arrayCSV[$message];
        }else{
            return $message;
        }
    }
}