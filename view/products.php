
<h3>Ürünler</h3>
<div class="product_container">


<?php

foreach($products as $product){
    ?>

    <form action="addbasket.php" method="post" class="product">
        <h4><?php echo $product->getName($product->getProductId());?></h4>
        <hr />
        <span><?php echo $product->getPrice(). ' '. $product->getCurrency(); ?></span>
        <input value="<?= $product->getProductId() ?>" name="newitem" type="hidden">
        <button type="submit">Sepete Ekle</button>
    </form>

<?php } ?>


</div>