<?php
require 'inc/data/products.php';
require 'inc/head.php';
if (empty($_SESSION['username'])){
    header("Location: /login.php");
    exit();
}
if (!empty($_COOKIE['cookie']))
{
    $product = unserialize($_COOKIE['cookie']);
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php if (!empty($_COOKIE['cookie'])) : ?>
            <?php foreach ($product as $id => $cookie) : ?>
                <div class="col-md-4">
                    <figure class="thumbnail text-center">
                        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie; ?>" class="img-responsive">
                        <figcaption class="caption">
                            <h3><?= $cookie; ?></h3>
                            <p><?= $cookie; ?></p>
                        </figcaption>
                    </figure>
                </div>
            <?php endforeach ?>
        <?php endif; ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
