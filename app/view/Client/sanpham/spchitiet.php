<?php 
  $idsp = $_GET['id'];
  $ctsp = chiTietSanPham($idsp);
  foreach($ctsp as $row) :
    extract($row)?>

<section class="page-banner bg-image pt-130 pb-130" data-background="assets/images/banner/inner-banner.jpg">
            <div class="container">
                <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">Shop Details</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                    <a href="index.html" class="primary-hover"><i class="fa-solid fa-house me-1"></i> Home <i
                            class="fa-regular text-white fa-angle-right"></i></a>
                    <a href="shop.html" class="primary-hover"> shop <i
                            class="fa-regular text-white fa-angle-right"></i></a>
                    <span>Shop Details</span>
                </div>
            </div>
        </section>
<section class="shop-single pt-130 pb-130">
            <div class="container">
                <!-- product-details area start here -->
                <div class="product-details-single pb-40">
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="image img">
                                <div class="swiper shop-single-slide">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                        <img src="public/images/<?=$img?>" alt="">
                                        </div>
                                       
                                    </div>
                                </div>
                           
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="content h24">
                                <h3 class="pb-2 primary-color"><?php echo $name_sp?></h3>
                                <div class="star primary-color pb-2">
                                    <span><i class="fa-solid fa-star sm-font"></i></span>
                                    <span><i class="fa-solid fa-star sm-font"></i></span>
                                    <span><i class="fa-solid fa-star sm-font"></i></span>
                                    <span><i class="fa-solid fa-star sm-font"></i></span>
                                    <span><i class="fa-solid fa-star-half-stroke sm-font"></i></span>
                                </div>
                                <h2 class="pb-3"><?php echo $price?>$</h2>
                                <h4 class="pb-2 primary-color">Product Description</h4>
                                <p class="text-justify mb-10"><?=$mota?></p>
                              
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="details-area">
                                        
                                       
                                        
                                        <div class="cart-wrp py-4">
                                            <div class="cart-quantity">
                                                <form id='myform' method='POST' class='quantity' action="index.php?actt=addtocart">
                                                    <input type='button' value='-' class='qtyminus minus'>
                                                    <input type='text' name='quantity' value='1' class='qty'>
                                                    <input type='button' value='+' class='qtyplus plus'>
                                           
                                            </div>
                                          
                                        </div>
                                      
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="hidden" name="name" value="<?= $name ?>">
    <input type="hidden" name="img" value="<?= $img ?>">
    <input type="hidden" name="price" value="<?= $price ?>">
    <input type="submit" name="addtocart" value=" Thêm vào giỏ hàng" class="product__cart d-block bor-top primary-hover w-100">
      
    
</form>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product-details area end here -->

                <!-- description review area start here -->
                <div class="shop-singe-tab">
                    <ul class="nav nav-pills mb-4 bor-top bor-bottom py-2">
                       
                        <li class="nav-item">
                            <a href="#review" data-bs-toggle="tab" class="nav-link">
                                <h4 class="text-uppercase">Bình luận</h4>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">

                    <div class="abmin d-flex flex-wrap flex-md-nowrap align-items-center pb-4">
    <div class="container">
        <?php
        $idsp = $_GET['id'];
        $ctm = loadAllBinhLuan($idsp);
        foreach($ctm as $row):
            extract($row);
        ?>
            <div class="content position-relative p-4 mb-3 border">
                <div class="head-wrp pb-1 d-flex justify-content-between">
                    <a href="#0" class="text-decoration-none">
                        <h4 class="text-capitalize text-primary">
                            <?=$username?>
                            <span class="small ms-2 fw-normal text-muted"><?= $ngaybinhluan?></span>
                        </h4>
                    </a>
                    <div class="star text-primary">
                        <span><i class="fa-solid fa-star small"></i></span>
                        <span><i class="fa-solid fa-star small"></i></span>
                        <span><i class="fa-solid fa-star small"></i></span>
                        <span><i class="fa-solid fa-star small"></i></span>
                        <span><i class="fa-solid fa-star-half-stroke small"></i></span>
                    </div>
                </div>
                <p class="text-justify"><?=$noidung?></p>
            </div>
        <?php endforeach ?>
    </div>
</div>
<?php include "app/view/Client/binhluan/binhluan.php" ?>

                </div>
            </div>
            <!-- description review area end here -->
        </section>