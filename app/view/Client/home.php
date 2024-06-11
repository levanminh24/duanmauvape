<section class="banner-two">
            <div class="banner-two__shape-left d-none d-lg-block wow bounceInLeft" data-wow-duration="1s"
                data-wow-delay=".5s">
                <img src="assets/images/shape/vape1.png" alt="shape">
            </div>
            <div class="banner-two__shape-right d-none d-lg-block wow bounceInRight" data-wow-duration="1s"
                data-wow-delay=".1s">
                <img class="sway_Y__animation " src="assets/images/shape/vape2.png" alt="shape">
            </div>
            <div class="swiper banner-two__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-bg" data-background="assets/images/banner/banner-two-image1.jpg"></div>
                        <div class="container">
                            <div class="banner-two__content">
                                <h4 data-animation="fadeInUp" data-delay="1s"><img src="assets/images/icon/fire.svg"
                                        alt="icon"> GET <span class="primary-color">25% OFF</span> NOW</h4>
                                <h1 data-animation="fadeInUp" data-delay="1.3s">Find everything <br>
                                    for <span class="primary-color">vaping</span></h1>
                                <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s">Sell globally in minutes
                                    with localized currencies languages, and <br> experie in
                                    every
                                    market. only a variety of vaping
                                    products</p>
                                <div class="banner-two__info mt-30" data-animation="fadeInUp" data-delay="1.7s">
                                    <span class="mb-10">Starting Price</span>
                                    <h3>$99.00</h3>
                                </div>
                                <div class="btn-wrp mt-65">
                                    <a href="shop.html" class="btn-one" data-animation="fadeInUp"
                                        data-delay="1.8s"><span>Shop
                                            Now</span></a>
                                    <a class="btn-one-light ml-20" href="shop-single.html" data-animation="fadeInUp"
                                        data-delay="1.9s"><span>View Details</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-bg" data-background="assets/images/banner/banner-two-image2.jpg"></div>
                        <div class="container">
                            <div class="banner-two__content">
                                <h4 data-animation="fadeInUp" data-delay="1s"><img src="assets/images/icon/fire.svg"
                                        alt="icon"> GET <span class="primary-color">25% OFF</span> NOW</h4>
                                <h1 data-animation="fadeInUp" data-delay="1.3s">Find everything <br>
                                    for <span class="primary-color">vaping</span></h1>
                                <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s">Sell globally in minutes
                                    with localized currencies languages, and <br> experie in
                                    every
                                    market. only a variety of vaping
                                    products</p>
                                <div class="banner-two__info mt-30" data-animation="fadeInUp" data-delay="1.7s">
                                    <span class="mb-10">Starting Price</span>
                                    <h3>$99.00</h3>
                                </div>
                                <div class="btn-wrp mt-65">
                                    <a href="shop.html" class="btn-one" data-animation="fadeInUp"
                                        data-delay="1.8s"><span>Shop
                                            Now</span></a>
                                    <a class="btn-one-light ml-20" href="shop-single.html" data-animation="fadeInUp"
                                        data-delay="1.9s"><span>View
                                            Details</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-bg" data-background="assets/images/banner/banner-two-image3.jpg"></div>
                        <div class="container">
                            <div class="banner-two__content">
                                <h4 data-animation="fadeInUp" data-delay="1s"><img src="assets/images/icon/fire.svg"
                                        alt="icon"> GET <span class="primary-color">25% OFF</span> NOW</h4>
                                <h1 data-animation="fadeInUp" data-delay="1.3s">Find everything <br>
                                    for <span class="primary-color">vaping</span></h1>
                                <p class="mt-40" data-animation="fadeInUp" data-delay="1.5s">Sell globally in minutes
                                    with localized currencies languages, and <br> experie in
                                    every
                                    market. only a variety of vaping
                                    products</p>
                                <div class="banner-two__info mt-30" data-animation="fadeInUp" data-delay="1.7s">
                                    <span class="mb-10">Starting Price</span>
                                    <h3>$99.00</h3>
                                </div>
                                <div class="btn-wrp mt-65">
                                    <a href="shop.html" class="btn-one" data-animation="fadeInUp"
                                        data-delay="1.8s"><span>Shop
                                            Now</span></a>
                                    <a class="btn-one-light ml-20" href="shop-single.html" data-animation="fadeInUp"
                                        data-delay="1.9s"><span>View
                                            Details</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-two__arry-btn">
                <button class="arry-prev mb-15 banner-two__arry-prev"><i class="fa-light fa-chevron-left"></i></button>
                <button class="arry-next active banner-two__arry-next"><i
                        class="fa-light fa-chevron-right"></i></button>
            </div>
        </section>


<section class="product-area pt-40 pb-30 mt-40">
    <div class="container">
        <div class="product__wrp pb-10 mb-4 bor-bottom d-flex flex-wrap align-items-center justify-content-xl-between justify-content-center">
            <div class="section-header d-flex align-items-center wow fadeInUp" data-wow-delay=".1s">
                <span class="title-icon mr-10"></span>
                <h2>Sản Phẩm Top Lượt Xem</h2>
            </div>
           
        </div>
        <div class="tab-content">
            <div id="latest-item" class="tab-pane fade show active">
                <div class="row g-4">
                    <?php
                    $count = 0;

                    $sphot = loadAllSpAds();
                    foreach ($sphot as $sp) {
                        extract($sp);
                        
                    ?>
                        <div class="col-xxl-3 col-xl-4 col-md-6">

                            <div class="product__item bor mt-5">
          
                                <a href="index.php?actt=ctsp&id=<?= $idsp ?>" class="product__image pt-20 d-block">

                                    <img src="public/images/<?= $img ?>" alt="">

                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href=""><?= $name ?></a></h4>
                                    <del>$74.50</del><span class="primary-color ml-10"><?= $price ?>vn</span>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <a href="index.php?actt=ctsp&id=<?= $id ?>" class="primary-hover">Xem chi tiết</a>
                                    
                        
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
<section class="product-area pt-40 pb-30 mt-3">
    <div class="container">
        <div class="product__wrp pb-30 mb-65 bor-bottom d-flex flex-wrap align-items-center justify-content-xl-between justify-content-center">
            <div class="section-header d-flex align-items-center wow fadeInUp" data-wow-delay=".1s">
                <span class="title-icon mr-10"></span>
                <h2>Sản phẩm Mới</h2>
            </div>
           
        </div>
        <div class="tab-content">
            <div id="latest-item" class="tab-pane fade show active">
                <div class="row g-4">
                    <?php
                    $count = 0;

                    foreach ($spnew as $sp) {
                        extract($sp);


                    ?>
                        <div class="col-xxl-3 col-xl-4 col-md-6">

                            <div class="product__item bor mt-5">

                                <a href="index.php?actt=ctsp&id=<?= $idsp ?>" class="product__image pt-20 d-block">

                                    <img src="public/images/<?= $img ?>" alt="">

                                </a>
                                <div class="product__content">
                                    <h4 class="mb-15"><a class="primary-hover" href=""><?= $name ?></a></h4>
                                    <del>$74.50</del><span class="primary-color ml-10"><?= $price ?></span>
                                    <div class="star mt-20">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <a href="index.php?actt=ctsp&id=<?= $id ?>" class="primary-hover">Xem chi tiết</a>
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