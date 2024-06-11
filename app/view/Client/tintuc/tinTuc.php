
<section class="page-banner bg-image pt-130 pb-130" data-background="assets/images/banner/inner-banner.jpg">
            <div class="container">
                <h2 class="wow fadeInUp mb-15" data-wow-duration="1.1s" data-wow-delay=".1s">Blog List</h2>
                <div class="breadcrumb-list wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".3s">
                    <a href="index.html" class="primary-hover"><i class="fa-solid fa-house me-1"></i> Home <i
                            class="fa-regular text-white fa-angle-right"></i></a>
                    <span>Blog List</span>
                </div>
            </div>
        </section>
        <!-- Page banner area end here -->

        <!-- Blog area start here -->
        <section class="blog blog-list pt-130 pb-130">
            <div class="container-fluid pl-65 pr-65">
                <div class="row g-4 justify-content-center">
                    <?php foreach($showTinTuc as $tintuc){
                        extract($tintuc);
                        ?>
                     
                    <div class="col-xxl-6">
                        <div class="blog__item-left">
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <div class="blog__item-left-content">
                                     
                                        <h3><a href="blog-single.html"><?=$tieude?></a></h3>
                                        <p><?=$noidung?></p>
                                        <span class="blog__item-left-content-info">By <strong class="me-3"><?=$tacgia?></strong><?=$ngaydang?></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="image">
                                        <img class="radius-10" src="public/images/<?=$img?>" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <?php
                    }
                    ?>
                   
                    
                   
                </div>
            </div>
           
        </section>