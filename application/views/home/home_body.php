
        <section id="slider"><!--slider-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#slider-carousel" data-slide-to="1"></li>
                                <li data-target="#slider-carousel" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-6">
                                        <h1 style="color: #4B4B4B; font-style: arial;"><font face="arial"><b><span>Jolchap</span>BD</b></font></h1>
                                        <h2>Get Your Business Cart Today</h2>
                                        <p>Increase your professional connection with creative business card.</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo base_url(); ?>assets/images/banner/1.jpg" height="440" width="auto" class="girl img-responsive" alt="" />
                                        <img src="<?php echo base_url(); ?>assets/images/home/pricing.png"  class="pricing" alt="" />
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-6">
                                        <h1 style="color: #4B4B4B; font-style: arial;"><font face="arial"><b><span>Jolchap</span>BD</b></font></h1>
                                        <h2>Design Your Own Business Card</h2>
                                        <p>Business card design made easy by JalchapBD. Create lucrative business card in minutes. </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo base_url(); ?>assets/images/banner/2.png" height="440" width="auto"  class="girl img-responsive" alt="" />
                                        <img src="<?php echo base_url(); ?>assets/images/home/pricing.png"  class="pricing" alt="" />
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="col-sm-6">
                                        <h1 style="color: #4B4B4B; font-style: arial;"><font face="arial"><b><span>Jolchap</span>BD</b></font></h1>
                                        <h2>Print Your Business Card Online</h2>
                                        <p>Order great quality business card online. Save your precious time.</p>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="<?php echo base_url(); ?>assets/images/banner/3.jpg" height="440" width="auto"  class="girl img-responsive" alt="" />
                                        <img src="<?php echo base_url(); ?>assets/images/home/pricing.png" class="pricing" alt="" />
                                    </div>
                                </div>

                            </div>

                            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a href="<?php echo base_url(); ?>index.php/shop/view" class="btn btn-lg btn-block btn-primary"><b>Visit Card Shop</b></a>
                    </div>
                </div>
            </div>
        </section><!--/slider-->

        <section>
            <div class="container">
                <div class="row">

                    <div class="col-sm-12 ">
                       
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Features Items</h2>
                            <?php
                                if(isset($featured_products)):
                                    foreach ($featured_products as $product):
                            ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="<?php echo base_url(); ?>index.php/product_details/show/<?php echo $product['product_id']; ?>">
                                                <img src="<?php echo base_url(); ?>uploads/<?php echo $product['featured_image']; ?>"
                                                 height="232px" width="auto" alt="" />
                                            </a>
                                            <h2>$56</h2>
                                            <p><?php echo $product['product_name']; ?></p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-edit"></i>Customize</a>
                                        </div>
                                        
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php
                                endforeach;
                            endif;
                            ?>
                            
                            
                            
                            

                        </div><!--features_items-->

                        <div class="recommended_items" style=" padding-bottom: 20px;"><!--recommended_items-->
                           
                            <div class="row">
                                <div class="col-sm-4 col-centered">
                             <a href="<?php echo base_url(); ?>index.php/shop/view"
                                class="btn btn-lg btn-block btn-primary"><b>View More Cards</b></a>
                                </div>
                            </div>
                   

                        </div><!--/recommended_items-->

                    </div>
                </div>
            </div>
        </section>
