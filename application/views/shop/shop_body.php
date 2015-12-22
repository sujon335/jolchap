<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<section id="advertisement">
    <div class="container">
        <img src="<?php echo base_url(); ?>assets/images/shop/advertisement.jpg" alt="" />
    </div>
</section>

<section>
    <div class="container">
        <div class="row-fluid">
            

            <div class="col-sm-12 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Item List</h2>



                    <div class="row">
                        <?php foreach($products as $product): ?>
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="<?php echo base_url(); ?>index.php/product_details/show/<?php echo $product['id']; ?>">
                                            <img src="<?php echo base_url(); ?>uploads/<?php echo 
                                        $product['featured_image']; ?>" height="232px" width="auto" alt="" />
                                        </a>
                                        <h2><?php $data = explode("-", $product['dimension_price_1']); echo $data[1]; ?></h2>
                                        <p><?php echo $product['product_name']; ?></p>
                                        <a href="<?php echo base_url(); ?>index.php/product_details/show/<?php echo $product['id']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-edit"></i>Customize</a>
                                    </div>

                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

















                    <div class="row-fluid">
                       
                        <div class="col-md-4 col-md-offset-4">
                            <ul class="pagination">
                                <!--
                                <li class="active"><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                                <li><a href="">&raquo;</a></li>
                                -->
                                 <?php echo $this->pagination->create_links(); ?>
                            </ul>
                        </div>
                    </div>
                </div><!--fe ̰atures_items-->
            </div>
        </div>
    </div>
</section>
