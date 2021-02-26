<?php

require_once 'autoloadregister.php';

$app = new App\EcommerceApp();

if($_POST && isset($_POST['removeitem'])){
    if(isset($_SESSION['basket'])){
        $basket = $_SESSION['basket'];
        foreach($_SESSION['basket'] as $k => $i){
            if($i == $_POST['removeitem']){
                unset($basket[$k]);
                $_SESSION['basket'] = $basket;
                break;
            }
        }
    }
}

header('Location:index.php');



?>