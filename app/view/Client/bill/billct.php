<section class="page-banner bg-image pt-130 pb-130" data-background="assets/images/banner/inner-banner.jpg">
    <div class="container">
        <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">Chi tiết đơn hàng</h2>
        <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
            <a href="index.html" class="primary-hover"><i class="fa-solid fa-house me-1"></i> Home <i class="fa-regular text-white fa-angle-right"></i></a>
            <span>Chi tiết đơn hàng</span>
        </div>
    </div>
</section>
<!-- Page banner area end here -->

<!-- Order details start here -->
<section class="order-details pt-130 pb-130">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <?php
                if (isset($bill) && is_array($bill)) {
                    extract($bill);
                }
                ?>
                <div class="order-details__left sub-bg">
                    <h3 class="mb-40">Thông tin người đặt hàng</h3>
                    <p><strong>Tên:</strong> <?= $bill['bill_name'] ?></p>
                    <p><strong>Email:</strong> <?= $bill['bill_email'] ?></p>
                    <p><strong>Địa chỉ:</strong> <?= $bill['bill_address'] ?></p>
                    <p><strong>Số điện thoại:</strong> <?= $bill['bill_tel'] ?></p>
                    <p><strong>Ngày đặt hàng:</strong> <?= $bill['ngaydathang'] ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="order-details__right sub-bg p-4">
                    <h3 class="mb-4">Hàng đặt mua</h3>
                    <ul class="list-group mb-3">
                        <?php
                        bill_chi_tiet($billct);
                        ?>
                    </ul>
                    <div class="payment-methods">
                        <h5>Phương thức thanh toán</h5>
                        <p><?= $bill['bill_pttt'] == 1 ? 'Thanh toán tiền mặt' : 'Thanh toán online' ?></p>
                    </div>
                    <div class="order-total">
                        <h5>Tổng đơn hàng</h5>
                        <p><?= number_format($bill['total']) ?> VND</p>
                    </div>
                    <a href="index.php?actt=dhct" type="button" class="btn btn-warning">Xem trạng thái đơn hàng</a>
                </div>
            </div>
        </div>
    </div>
</section>