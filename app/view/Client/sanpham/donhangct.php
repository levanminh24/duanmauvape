<section class="cart-page pt-130 pb-130 mt-130">
    <div class="container">
        <div class="shopping-cart radius-10 bor sub-bg">
            <div class="column-labels py-3 px-4 d-flex justify-content-between align-items-center fw-bold text-white text-uppercase">
                <div class="column-label">Hình</div>
                <div class="column-label"> id Sản phẩm</div>
                <div class="column-label">Số lượng</div>
                <div class="column-label">Ngày đặt hàng</div>
                <div class="column-label">Tổng</div>
                <div class="column-label">Trạng thái</div>
                <div class="column-label">Hủy đơn hàng</div>
            </div>

            <?php
            $img_path = "public/images/";
            if (is_array($listbill) && count($listbill) > 0) {
                foreach ($listbill as $bill) {
                    extract($bill);
                    $hinh = $img_path . $img;
                    $ttdh = get_ttdh($bill['bill_status']);
                    $countsp = loadall_cart_count($bill['id']);

                    echo '
                    <div class="product p-4 bor-top bor-bottom d-flex justify-content-between align-items-center">
                        <div class="product-image">
                            <img src="' . $hinh . '" alt="Product Image" height="80px">
                        </div>
                        <div class="product-name">
                            <span>' . $bill['id'] . '</span>
                        </div>
                        <div class="product-quantity">
                            <span>' . $countsp . '</span>
                        </div>
                        <div class="product-date">
                            <span>' . $bill['ngaydathang'] . '</span>
                        </div>
                        <div class="product-total">
                            <span>' . number_format($bill['total'], 0, ',', '.') . ' VND</span>
                        </div>
                        <div class="product-status">
                            <span>' . $ttdh . '</span>
                        </div>
                        <div class="product-removal">
                            <button class="btn btn-danger"><a href="index.php?actt=huy" class="nav nav-link active">huỷ</a></button>
                        </div>
                    </div>';
                }
            } else {
                echo "<p class='text-center py-5'>Không có đơn hàng nào.</p>";
            }
            ?>
           
        </div>
    </div>
</section>
<style>
    .cart-page {
        background-color: #f8f9fa;
    }
    .shopping-cart {
        background-color: black;
        padding: 20px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
    }
    .column-labels {
        background-color: #343a40;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
    }
    .column-labels .column-label {
        flex: 1;
        text-align: center;
    }
    .product {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        padding: 15px;
        background-color: black;
        border-radius: 5px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }
    .product div {
        flex: 1;
        text-align: center;
    }
    .product-image img {
        display: block;
        margin: 0 auto;
    }
    .product-name {
        text-align: left;
        padding-left: 10px;
    }
    .product-quantity, .product-date, .product-total, .product-status, .product-removal {
        text-align: center;
    }
    .product-removal button {
        padding: 5px 10px;
        font-size: 14px;
    }
    .checkout-btn-container {
        margin-top: 20px;
    }
    .checkout-btn {
        background-color: #ff6700;
        border: none;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
    }
</style>
