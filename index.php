<?php

require_once 'autoloadregister.php';

$app = new App\EcommerceApp();

$rawProducts = $app->product->getProductList();

$products = [];

foreach($rawProducts as $product){
    $product = (object)$product;
    switch($product->category){
        case 'cellphone':
            $products[] = new \Product\CellPhone($product);
            break;
        case 'animalFood':
            if ($product->subCategory==='dog'){
                $products[] = new \Product\DogFood($product);
            } elseif ($product->subCategory==='cat'){
                $products[] = new \Product\CatFood($product);
            }
            break;
    }
}

include('view/basket.php');
include('view/products.php');

/**
 * TODO: Ürünleri listele
 * TODO : Sepete Ekle
 * TODO : Sepeti Listele & Update & Delete İşlemleri
 * TODO : Ürün Detay Sayfası
 */

?>

<style>
    .product_container {
        display: flex;
        flex-direction: row;
        margin-top: 150px;
    }
    .product {
        flex:1;
        border:#ccc solid 1px;
        padding:15px;
        margin:15px;
    }
</style>
