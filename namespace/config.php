<?php


spl_autoload_register(function($nameClass){

$dirClass="class";
$fileName=$dirClass . DIRECTORY_SEPARATOR .$nameClass.".php";

var_dump($fileName);

if(file_exists($fileName)){

require_once($fileName);
}


});

?>