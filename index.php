<?php
require 'inc/data/products.php';
require 'inc/head.php';

if (!empty($_GET['product_id']))
{
    $cookie_num = $_GET['product_id'];
    if (!empty($_COOKIE['cookie'])){
        $cookie_id = unserialize($_COOKIE['cookie']);
    }
    $cookie_id[$cookie_num] = $_GET["name"];
    $cookie_name = "cookie";

    setcookie($cookie_name, serialize($cookie_id), time() + (86400 * 30));
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?name=<?= $cookie['name']?>&product_id=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
