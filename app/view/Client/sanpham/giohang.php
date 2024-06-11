<main>
    <form action="index.php?actt=billt" method="post">
    <!-- Page banner area start here -->
    <section class="page-banner bg-image pt-130 pb-130" data-background="assets/images/banner/inner-banner.jpg">
        <div class="container">
            <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">Cart Page</h2>
            <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                <a href="index.html" class="primary-hover"><i class="fa-solid fa-house me-1"></i> Home <i class="fa-regular text-white fa-angle-right"></i></a>
                <span>Cart</span>
            </div>
        </div>
    </section>
    <!-- Page banner area end here -->

    <!-- cart page area start here -->
    <section class="cart-page pt-130 pb-130">
        <div class="container">

            <div class="shopping-cart radius-10 bor sub-bg">

                <div class="column-labels py-3 px-4 d-flex justify-content-between align-items-center fw-bold text-white text-uppercase">
                    <label class="product-details">Sẩn phẩm</label>
                    <label class="product-quantity">Số lượng</label>
                    <label class="product-price">Giá</label>
                 
                    <label class="product-line-price">Tổng</label>
                    <label class="product-removal">Huỷ đơn hàng</label>
                </div>

                <?php
                $tong = 0;
                $i = 0;
                $img_path = "public/images/";
                foreach ($_SESSION['mycart'] as $cart) {
                    $hinh = $img_path . $cart[2];
                    $ttien = $cart[3] * $cart[4];
                    $tong += $ttien; 

                    echo '
    <div class="product p-4 bor-top bor-bottom d-flex justify-content-between align-items-center">
        <div class="product-details d-flex align-items-center">
            <img src="' . $hinh . '" alt="" height="80px">
            <span>' . $cart[1] . '</span>
        </div>
        <div class="product-quantity">
        <input type="number" value="' . $cart[4] . '" min="1">
        </div>
        <div class="product-price">
            <span>' . $cart[3] . '</span>
        </div>
        <div class="product-line-price">
            <span>' . $ttien . '</span>
        </div>
        <div class="product-removal">
            <a href="index.php?actt=delcart&idcart=' . $i . '"><input type="button" class="btn btn-danger" value="Huỷ"></a>
        </div>
    </div>';
                    $i += 1;
                }

                echo '
<div class="total-amount p-4 d-flex justify-content-end">
    <span>Tổng cộng: ' . $tong . ' VND</span>
</div>';
                ?>
              <div class="checkout-btn-container mb-2">
                        <button type="submit" class="btn btn-orange checkout-btn">Tiếp Tục Đặt hàng</button>
                    </div>

            </div>
            <!-- shopping-cart-mobile -->

        </div>



    </section>
    </form>
    <!-- cart page area end here -->
</main>
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
</style>

