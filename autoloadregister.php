<?php

if (!isset($_SESSION)) session_start();

spl_autoload_register(function ($className) {

    $exploded = explode('\\',$className);

    $namespace = $exploded[0];
    if (count($exploded) === 1){
        $class = $exploded[0];
    } else {
        $class = $exploded[1];
    }

    if ($namespace === 'App'){
        include $class.'.php';
    } elseif ($namespace === 'Product' ){
        include 'Product' . DIRECTORY_SEPARATOR .$class.'.php';
    } elseif ($namespace=== 'Payment' ){
        include 'Payment' . DIRECTORY_SEPARATOR . $class.'.php';
    } else {
        include $class . '.php';
    }
});

?>