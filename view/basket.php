<style>
    .basketItem {
        border: 1px solid lightgrey;;
        padding: 5px;
        margin: 5px;
        text-align: right;
    }

    .basket {
        width : 20%;
        right: 0;
        position: absolute;
        height: 150px;
        overflow: auto;
        text-align: center;
    }

</style>

<div class="basket">
    Sepet
    <hr>
    <?php
    $totalPrice = 0;
    if (isset($_SESSION['basket'])) {
        foreach ($_SESSION['basket'] as $item) {
            $getItem = Db::get($item);
            $totalPrice+=$getItem['price'];
            ?>

            <div class="basketItem">
                <span class="basketItemName"><?= $getItem['name'] ?></span> |
                <span class="basketItemPrice"><?= $getItem['price'] ?> <?= $getItem['currency'] ?></span>
                <form action="removebasket.php" method="post">
                    <input type="hidden" name="removeitem" value="<?= $item ?>">
                    <button type="submit">Sepetten Çıkar</button>
                </form>
            </div>
        <?php }
    }
    ?>
    <hr>
    Toplam : <?= $totalPrice ?> TRY
</div>
