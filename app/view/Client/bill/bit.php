<section class="page-banner bg-image pt-130 pb-130" style="background-image: url('assets/images/banner/inner-banner.jpg');">
    <div class="container">
        <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">Checkout Page</h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
            <a href="index.html" class="primary-hover"><i class="fa-solid fa-house me-1"></i> Home <i class="fa-regular text-white fa-angle-right"></i></a>
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
            <div class="col-lg-4">
                <div class="checkout__item-left sub-bg p-4">
                    <?php if (isset($bill) && is_array($bill)) { extract($bill); } ?>
                    <h3 class="mb-4">Thông tin người đặt hàng</h3>
                    <div class="mb-3">
                        <label for="name" class="form-label">Tên của bạn *</label>
                        <input id="name" name="bill_name" type="text" class="form-control" value="<?=$bill['bill_name']?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input id="email" name="bill_email" type="email" class="form-control" value="<?=$bill_email?>">
                    </div>
                    <div class="mb-3">
                        <label for="streetAddress" class="form-label">Địa Chỉ *</label>
                        <input id="streetAddress" type="text" name="bill_address" class="form-control" value="<?=$bill_address?>">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Số Điện Thoại *</label>
                        <input id="phone" type="text" name="bill_tel" class="form-control" value="<?=$bill_tel?>">
                    </div>
                    <div class="mb-3">
                        <label for="orderDate" class="form-label">Ngày đặt hàng</label>
                        <input id="orderDate" name="ngaydathang" type="text" class="form-control" value="<?=$bill['ngaydathang']?>" readonly>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="checkout__item-right sub-bg p-4">
                    <h3 class="mb-4">Hàng đặt mua</h3>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Hình ảnh</strong>
                            <strong>Sản phẩm</strong>
                            <strong>Số lượng</strong>
                            <strong>Giá</strong>
                            <strong>Thành tiền</strong>
                        </li>
                        <?php
                          bill_chi_tiet($billct);
                        ?>
                    </ul>
                    <div class="payment-methods mb-3">
                        <h5>Phương thức thanh toán</h5>
                        <p><?=$bill['bill_pttt'] == 1 ? 'Thanh toán tiền mặt' : 'Thanh toán online'?></p>
                    </div>
                    <div class="order-total mb-3">
                        <h5>Tổng đơn hàng</h5>
                        <p><?=number_format($bill['total'])?> VND</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</form>
<a href="index.php?actt=donhangcuatoi">Xem trạng thái đơn hàng</a>
<!-- Checkout area end here -->

<style>
    .btn-orange {
        background-color: #ff6600;
        border-color: #ff6600;
        color: white;
    }

    .btn-orange:hover {
        background-color: #e65c00;
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

    .product-details img {
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .checkout__item-left, .checkout__item-right {
    
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .checkout__item-left {
        min-height: 100%;
    }

    .checkout__item-right {
        min-height: 100%;
    }
</style>
