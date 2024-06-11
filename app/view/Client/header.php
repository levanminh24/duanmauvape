<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from gramentheme.com/html/odor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2024 14:10:21 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lê Minh Vape Store </title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- All min css -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
   
</head>

<body>
    <!-- Header area start here -->
    <div class="top__header pt-30 pb-30">
        <div class="container">
            <div class="top__wrapper">
                <a href="index.php" class="main__logo">
                    <img src="assets/images/logo/logo.svg" alt="logo__image">
                </a>
                <div class="search__wrp">
                    <input placeholder="Search for" aria-label="Search">
                    <button><i class="fa-solid fa-search"></i></button>
                </div>
                <div class="col-md-4 ali_center">
                        <ul class="login-header">
                            <li>
                                <a href="index.php?actt=giohang">
                                    <span>
                                    <i class="fa-regular fa-cart-shopping"></i>
                                    </span>
                                    giỏ hàng
                                </a>
                            </li>
                            <li>
                                <a href="index.php?actt=donhangcuatoi">
                                   
                                    Đơn hàng của tôi
                                </a>
                            </li>
                            <div class="tai-khoan-container">
    <a href="#" class="tai-khoan">
        <span><i class="fa-regular fa-user"></i></span>
        Tài khoản
    </a>
    <ul class="tai-khoan-dropdown">
        <?php
        // echo $_SESSION['user'];
        // echo $_SESSION['role'];
        if (empty($_SESSION['user'])) { ?>
            <li>
                <a href="index.php?actt=dangnhap" id="taikhoan">
                    đăng nhập
                </a>
            </li>
        <?php } else { ?>
            <li>
                <a href="index.php?actt=dangxuat" id="taikhoan">
                    Đăng xuất
                </a>
            </li>
            <li>
                <a href="index.php?actt=doimatkhau" id="taikhoan">
                    Đổi mật khẩu
                </a>
            </li>
           
        <?php }
        if (isset($_SESSION['role']) && $_SESSION['role'] == 1) { ?>
            <li>
                <a href="app/view/admin/?act=listdm" id="taikhoan">
                    Truy cập Cpanel
                </a>
            </li>
        <?php } ?>
    </ul>
</div>

                        </ul>
                    </div>
            </div>
        </div>
    </div>
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="main-menu">
                    <li>
                        <a href="index.php">Home </a>
                        
                    </li>
                                        <li>
                        <a href=""> Sản Phẩm <i class="fa-regular fa-angle-down"></i></a>
                        <ul class = "sub-menu">
                                                <?php
                                                 $listdm = loadAllDm();
                                                    foreach ($listdm as $dm) {
                                                        extract($dm);
                                                        echo '<li class = "subtwohober"><a href="index.php?actt=spdanhmuc&id='.$id.'">'.$name.'</a></li>';
                                                    }
                                                ?>
                                            </ul>
                    </li>
                  
                    <li>
                        <a href="index.php?actt=hot">Giới Thiệu</i></a>
                       
                    </li>
                    <li>
                        <a href="index.php?actt=tintuc">Tin Tức </i></a>
                       
                    </li>
                    <li>
                        <a href="contact.html">Liên Hệ</a>
                    </li>
                </ul>
                <div class="shipping__item d-none d-sm-flex align-items-center">
                    <div class="menu__right d-flex align-items-center">
                        <div class="thumb">
                            <img src="assets/images/flag/picking.png" alt="image">
                        </div>
                       
                    </div>
                    <div class="menu__right d-flex align-items-center">
                        <div class="thumb">
                            <img src="assets/images/flag/shipping.png" alt="image">
                        </div>
                        <div class="content">
                            <p>
                                Free Shipping <br> on order <strong>over $100</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end here -->

    <!-- Preloader area start -->
    <!-- <div class="loading">
        <span class="text-capitalize">L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </div> -->

    <!-- <div id="preloader">
    </div> -->
    <!-- Preloader area end -->

    <!-- Mouse cursor area start here -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Mouse cursor area end here -->

    <main>

        <!-- Banner area start here -->
       
        <!-- Banner area end here -->

        <!-- Category area start here -->
     <style>
        .tai-khoan-container {
    position: relative;
    display: inline-block;
}

.tai-khoan {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: white;
}

.tai-khoan-dropdown {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    list-style: none;
    padding: 0;
    margin: 0;
}

.tai-khoan-dropdown li {
    padding: 12px 16px;
}

.tai-khoan-dropdown li a {
    color: black;
    text-decoration: none;
    display: block;
}

.tai-khoan-dropdown li a:hover {
    background-color: #f1f1f1;
}

.tai-khoan-container:hover .tai-khoan-dropdown {
    display: block;
}

     </style>