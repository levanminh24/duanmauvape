<section class="product-area pt-130 pb-130 mt-130">
    <div class="container">
        <div class="product__wrp pb-30 mb-65 bor-bottom d-flex flex-wrap align-items-center justify-content-xl-between justify-content-center">
            <div class="section-header d-flex align-items-center wow fadeInUp" data-wow-delay=".1s">
                <span class="title-icon mr-10"></span>
                <h2>Sản phẩm hiện đang có</h2>
            </div>
            <ul class="nav nav-pills mt-4 mt-xl-0">
                <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
                    <a href="#top-ratting" data-bs-toggle="tab" class="nav-link px-4 bor-left bor-right">
                        top rating
                    </a>
                </li>
                <li class="nav-item wow fadeInUp" data-wow-delay=".3s">
                    <a href="#featured-products" data-bs-toggle="tab" class="nav-link ps-4">
                        featured products
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content">

            <div id="latest-item" class="tab-pane fade show active">
                <div class="row g-4">
                    <?php
                    $count = 0;
                    $iddm = $_GET['id'];
                    $allDm = loadSpTheoDm($iddm);
                    foreach ($allDm as $row) {
                        extract($row);
                      
                    ?>
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="product__item bor mt-5">
                                <a href="index.php?actt=ctsp&id=<?= $idsp ?>" class="wishlist"><i class="fa-regular fa-heart"></i></a>
                                <a href="index.php?actt=ctsp&id=<?= $idsp ?>" class="product__image pt-20 d-block">
                                <img src="public/images/<?=$img?>" alt="">
                                   
                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href=""><?= $name ?></a></h4>
                                    <del>$74.50</del><span class="primary-color ml-10"><?= $price ?>$</span>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <form action="index.php?actt=addtocart" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="hidden" name="name" value="<?= $name ?>">
    <input type="hidden" name="img" value="<?= $img ?>">
    <input type="hidden" name="price" value="<?= $price ?>">
    <input type="submit" name="addtocart" value=" Thêm vào giỏ hàng" class="product__cart d-block bor-top primary-hover w-100">
      
    
</form>
                            </div>
                        </div>
                        <?php
                        $count++;
                        if ($count % 4 == 0) {
                            echo '</div><div class="row g-4">';
                        }
                        ?>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
</section>