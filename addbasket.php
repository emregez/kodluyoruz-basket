<?php

require_once 'autoloadregister.php';

$app = new App\EcommerceApp();

if($_POST && isset($_POST['newitem'])){
    if(empty($_SESSION['basket'])){
        $_SESSION['basket'] = [];
    }
    $_SESSION['basket'][] = $_POST['newitem'];
}

header('Location:index.php');



?>