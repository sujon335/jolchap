
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-9" style=" padding-right: 5px;">
                <div class="left-sidebar">

                    <div class="row">

                        <div class="category-tab shop-details-tab"><!--category-tab-->
                            <div class="row">
                                <ul class="nav nav-tabs" style="padding-left: 10px;">
                                    <li class="active"><a href="#details" data-toggle="tab">Front Side</a></li>
                                    <li><a href="#companyprofile" data-toggle="tab">Back Side</a></li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="details" >
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="brands_products"><!--brands_products-->
                                                <h2>Front Texts</h2>
                                                <div class="brands-name">
                                                    <form>
                                                        <div class="form-group">
                                                            <input  type="text"
                                                                    class="form-control" id="front_text_1" 
                                                                    placeholder="Enter Text Here">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                   class="form-control" id="front_text_1" 
                                                                   placeholder="Enter Text Here">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                   class="form-control" id="front_text_1" 
                                                                   placeholder="Enter Text Here">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                   class="form-control" id="front_text_1" 
                                                                   placeholder="Enter Text Here">
                                                        </div>


                                                    </form>
                                                </div>
                                            </div><!--/brands_products-->
                                        </div>
                                        <div class="col-md-8">
                                            <div class="view-product">
                                                <img src="<?php echo base_url(); ?>uploads/<?php echo $product_details['front_side']; ?>" alt="" />
                                                <h3>ZOOM</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="companyprofile" >
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="brands_products"><!--brands_products-->
                                                <h2>Front Texts</h2>
                                                <div class="brands-name">
                                                    <form>
                                                        <div class="form-group">
                                                            <input  type="text"
                                                                    class="form-control" id="front_text_1" 
                                                                    placeholder="Enter Text Here">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                   class="form-control" id="front_text_1" 
                                                                   placeholder="Enter Text Here">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                   class="form-control" id="front_text_1" 
                                                                   placeholder="Enter Text Here">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                   class="form-control" id="front_text_1" 
                                                                   placeholder="Enter Text Here">
                                                        </div>


                                                    </form>
                                                </div>
                                            </div><!--/brands_products-->
                                        </div>
                                        <div class="col-md-8">
                                            <div class="view-product">
                                                <img src="<?php echo base_url(); ?>uploads/<?php echo $product_details['back_side']; ?>" alt="" />
                                                <h3>ZOOM</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!--/category-tab-->

                    </div>




                </div>
            </div>

            <div class="col-md-3" style=" padding-left: 5px;">
                <div class="product-image-wrapper"><!--product-details-->


                    <div class="single-products" style=" padding: 10px;"><!--/product-information-->
                        <p><b>Name: </b><?php echo $product_details['product_name']; ?></p>
                        <p><b>Description: </b><?php echo $product_details['product_description']; ?></p>
                        <div class="form-inline" style="margin-bottom: 5px;">
                            <div class="form-group">
                                <label>Dimension:</label> 
                                <select class="form-control">
                                    <option>3x5</option>
                                    <option>4x6</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-inline" style="margin-bottom: 5px;">
                            <div class="form-group">
                                <label>Paper:</label> 
                                <select class="form-control">
                                    <option>Paper 1</option>
                                    <option>Paper 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-inline" style="margin-bottom: 5px;">
                            <div class="form-group">
                                <label>Lamination:</label> 
                                <select class="form-control">
                                    <option>Matt</option>
                                    <option>Glossy</option>
                                    <option>None</option>
                                </select>
                            </div>
                        </div>
                        <p><b>Cards in Unit:</b> 1000</p>
                        <p><b>Unit Price:</b> 800 tk</p>
                        <a class="btn btn-block btn-success" href="<?php echo base_url(); ?>index.php/login">Save Design</a>
                    </div><!--/product-information-->

                </div><!--/product-details-->


            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 padding-right">
                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">recommended items</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                            <?php
                                $i = 0;
                                $limit = count($recommended_products);
                                foreach ($recommended_products as $product):
                                    $i++;
                            ?>
                            <?php if ($i == 1): ?>
                                <div class="item active">
                            <?php elseif ($i%3 == 1):?>                   
                                <div class="item">
                            <?php endif; ?>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <a href="<?php echo base_url(); ?>index.php/product_details/show/<?php echo $product['product_id']; ?>">
                                                        <img src="<?php echo base_url(); ?>uploads/<?php echo $product['featured_image']; ?>" alt="" />
                                                    </a>
                                                    <h2><?php $data = explode("-", $product['dimension_price_1']); echo $data[1]; ?></h2>
                                                    <p><?php echo $product['product_name']; ?></p>
                                                    
                                                    <a href="<?php echo base_url(); ?>index.php/product_details/show/<?php echo $product['product_id']; ?>"
                                                       class="btn btn-default add-to-cart"><i class="fa fa-edit"></i>Customize</a>
                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php if($i%3 == 0 || ($i>3 && $i==$limit)): ?>
                                </div>
                            <?php endif; ?>
                                
                            <?php
                                endforeach; 
                            ?>


                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>			
                    </div>
                </div><!--/recommended_items-->
            </div>
        </div>

    </div>
</section>
