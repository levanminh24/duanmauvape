  
                                <div class="section-title mt-5 py-15 mb-30">
                                    <h2 class="text-capitalize primary-color mb-10">add a review</h2>
                                    <p class="mb-20">Your email address will not be published. Required fields are
                                        marked *
                                    </p>
                                    <div class="shop-single__rate-now">
                                        <p>Rate this product? *</p>
                                        <div class="star">
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                            <span><i class="fa-solid fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                               
                               <div class="comment-form">
                                    <form action="index.php?actt=addbinhluan" method="post">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <input type="hidden" class="w-100 mb-4 bor px-4 py-2" name="ngaybinhluan"
                                                  value="<?php echo date("Y-m-d")?>"  >
                                            </div>
                                            <div class="col-md-6">
                                            <?php if(isset($_SESSION['iduser'])):?>
                                                <input type="hidden" class="w-100 mb-4 bor px-4 py-2" name="iduser"
                                                value="<?php echo $_SESSION['iduser']?>"  >
                                                <?php endif ?>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="hidden" class="w-100 mb-4 bor px-4 py-2" name="idpro"
                                                 value="<?php echo $_GET['id']?>">
                                            </div>
                                        </div>
                                        <textarea class="w-100 mb-4 bor p-4" placeholder="Message" name="noidung"></textarea>
                                  
                                   
                                        <input class="btn btn-primary" type="submit" name="binhluan"></input>
                                   
                                    </form>
                                </div>




                                