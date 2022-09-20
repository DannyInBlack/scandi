<?php 

spl_autoload_register('myLoader');

function myLoader($classname){
    $path = "../";
    $extension = ".php";
    $fullPath = $path.$classname.$extension;

    str_replace("\\", '/', $fullPath);
    
    include_once $fullPath;

}


?>