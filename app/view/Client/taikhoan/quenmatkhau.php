<section class="login-area pt-130 pb-130">
            <div class="container">
                <div class="login__item">
                    <div class="row g-4">
                        <div class="col-xxl-8">
                            <div class="login__image">
                                <img src="assets/images/login/login-image1.jpg" alt="image">
                                <div class="btn-wrp">
                                    <a class="active" href="index.php?actt=dangnhap">sign in</a>
                                    <a href="index.php?actt=dangky">create account</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="login__content">
                                <h2 class="text-white mb-65">Quên mật khẩu</h2>
                                <div class="form-area login__form">
                                    <form action="" method="post">
                                        <input type="email" placeholder="nhập email" name="email">
                                        <input class="mt-30" type="text" placeholder="nhập tên đăng nhập" name="user">
                                        <button class="mt-30" name="laymk">Gửi</button>
                                      
                                    </form>
                                    <?php echo '<h2 style="color:red"> '.$err.' </h2>' ?>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Login are