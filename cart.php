<?php require 'inc/data/products.php';
session_start()
?>

<section class="cookies container-fluid">
    <div class="row">
        <?php
        foreach ($_SESSION['product_id'] as $product) {
            echo $catalog[$product]['name']."<br>";
        }
        ?>
    </div>
</section>

