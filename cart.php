<?php require_once 'inc/head.php';
require_once 'inc/data/products.php';
if (isset($_COOKIE['cart'])) {
    $str = $_COOKIE['cart'];
    $cart = explode(',', $str);
};
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
            if(isset($cart)){
                foreach($cart as $key => $value) {
                    if($value != "") {?>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                        <figure class="thumbnail text-center">
                            <img src="assets/img/product-<?= $value; ?>.jpg" alt="<?= $catalog[$value]['name']; ?>" class="img-responsive">
                            <figcaption class="caption">
                                <h3><?= $catalog[$value]['name']; ?></h3>
                            </figcaption>
                        </figure>
                    </div>
                <?php }}}else{ echo '<h1>Your cart is empty !</h1>' ;}?>
    </div>
</section>
<?php require_once 'inc/foot.php'; ?>
