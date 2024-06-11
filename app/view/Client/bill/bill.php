<section class="page-banner bg-image pt-130 pb-130" data-background="assets/images/banner/inner-banner.jpg">
    <div class="container">
        <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">Checkout Page</h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
            <a href="index.html" class="primary-hover"><i class="fa-solid fa-house me-1"></i> Home <i
                    class="fa-regular text-white fa-angle-right"></i></a>
            <span>Checkout</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->
<form action="index.php?actt=billct" method="post" enctype="multipart/form-data">
<!-- Checkout area start here -->
<section class="checkout-area pt-130 pb-130">
    <div class="container">
       
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="checkout__item-left sub-bg">
                  
                        <?php 
                        // Set the timezone to Vietnam
                     
                        // Fetch user information
                        $tt = thongtin();
                        foreach($tt as $row):
                            extract($row);
                        ?>
                        <h3 class="mb-40">Thông tin người đặt hàng</h3>
                        <label class="mb-10" for="name">Tên của bạn *</label>
                        <input class="mb-20" id="name" name="name" type="text" value="<?=$user?>">
                        <label class="mb-10" for="email">Email *</label>
                        <input class="mb-20" id="email" name="email" type="email" value="<?=$email?>">
                        <label class="mb-10" for="streetAddress">Địa Chỉ *</label>
                        <input placeholder="1837 E Homer M Adams Pkwy" class="mb-10" id="streetAddress" type="text" name="address" value="<?=$address?>">
                        <label class="mb-10" for="phone">Số Điện Thoại *</label>
                        <input class="mb-20" id="phone" type="text" name="tel" value="<?=$tel?>">
                        
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="checkout__item-right sub-bg p-4">
                   
                        <h3 class="mb-4">Hàng đặt mua</h3>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="w-50"><strong>Sản phẩm</strong></div>
                                <div class="w-25 text-center"><strong>Số lượng</strong></div>
                                <div class="w-25 text-center"><strong>Thành tiền</strong></div>
                            </li>
                            <?php
                            $tong = 0;
                            foreach ($_SESSION['mycart'] as $cart) {
                                $ttien = $cart[3] * $cart[4];
                                $tong += $ttien;

                                echo '
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div class="w-50">' . $cart[1] . '</div>
                                        <div class="w-25 text-center">' . $cart[4] . '</div>
                                        <div class="w-25 text-center">' . number_format($cart[3]) . ' VND</div>
                                    </li>';
                            }
                            ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div class="w-50"><strong>Total</strong></div>
                                <div class="w-50 text-right"><strong><?php echo number_format($tong); ?> VND</strong></div>
                            </li>
                        </ul>

                        <div class="payment-methods">
                            <h5>Chọn phương thức thanh toán</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pttt" id="cashPayment" value="1" checked>
                                <label class="form-check-label" for="cashPayment">
                                    Thanh toán tiền mặt
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pttt" id="onlinePayment" value="2">
                                <label class="form-check-label" for="onlinePayment">
                                    Thanh toán online
                                </label>
                            </div>
                        </div>

                        <div class="checkout-btn-container">
                           

                            <button type="submit" name="dongydathang" class="btn btn-orange btn-lg btn-block">Đồng ý đặt hàng</button>
                           
                        </div>
                        </div>
    
                    </div>
                </div>
    
    </div>
</section>
</form>
<!-- Checkout area end here -->

            </div>
        </section>

        <style>
    .btn-orange {
        background-color: #ff6600; /* Màu cam */
        border-color: #ff6600;
        color: white;
    }

    .btn-orange:hover {
        background-color: #e65c00; /* Màu cam đậm hơn khi hover */
        border-color: #e65c00;
    }

    .payment-methods {
        margin-top: 20px;
    }

    .checkout-btn-container {
        margin-top: 20px;
    }

    .checkout-btn {
        width: 100%;
    }
</style>
