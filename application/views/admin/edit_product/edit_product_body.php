<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" enctype="multipart/form-data" method="post" 
                      action="<?php echo base_url(); ?>index.php/admin/edit_product/<?php echo $product_details['id']; ?>">
                    <div class="box-body">
                        <?php if(isset($message_success)): ?>
                        <div class="alert alert-success">
                            <p><?php echo $message_success; ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if(isset($message_failed)): ?>
                        <div class="alert alert-danger">
                            <p><?php echo $message_failed; ?></p>
                        </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" class="form-control" id="product_name" 
                                   name="product_name" placeholder="Product Name" value="<?php echo $product_details['product_name']; ?>">
                            <?php echo form_error("product_name"); ?>
                        </div>
                        <div class="form-group">
                            <label for="produt_descrption">Product Description</label>
                            <textarea class="form-control" id="produt_descrption" 
                                      name="product_description" placeholder="Product Description"
                                      ><?php echo $product_details['product_description']; ?></textarea>
                            <?php echo form_error("product_description"); ?>
                        </div>
                        <div class="form-group">
                            <label for="product_unit">Product Unit</label>
                            <input type="text"  class="form-control" id="product_unit" 
                                   name="product_unit" placeholder="Product Unit" value="<?php echo $product_details['product_unit']; ?>">
                            <?php echo form_error("product_unit"); ?>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="featured_image">Featured Image</label><br>
                                    <img src="<?php echo base_url(); ?>uploads/<?php echo $product_details['featured_image']; ?>" 
                               class="img-rounded" alt="card view" width="250" height="auto"> 
                                    <input type="file" id="featured_image" name="featured_image">
                                    <p class="help-block">Change featured image.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="front_side">Front Side</label><br>
                                    <img src="<?php echo base_url(); ?>uploads/<?php echo $product_details['front_side']; ?>" 
                               class="img-rounded" alt="card view" width="250" height="auto"> 
                                    <input type="file" id="front_side" name="front_side">
                                    <p class="help-block">Change front side image.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="back_side">Back Side</label><br>
                                    <img src="<?php echo base_url(); ?>uploads/<?php echo $product_details['back_side']; ?>" 
                               class="img-rounded" alt="card view" width="250" height="auto"> 
                                    <input type="file" id="back_side" name="back_side">
                                    <p class="help-block">Change back side image.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                                for($i=1; $i<4; $i++): 
                                    $dimension_price = explode("-", $product_details['dimension_price_'.$i] );
                            ?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dimension_<?php echo $i; ?>" >Dimension <?php echo $i; ?></label>
                                    <input type="text" class="form-control" id="dimension_<?php echo $i; ?>" 
                                           name="dimension_<?php echo $i; ?>" placeholder="Dimension <?php echo $i; ?>" 
                                           value="<?php echo $dimension_price[0];  ?>">
                                    <?php echo form_error("dimension_".$i); ?>
                                </div>
                                <div class="form-group">
                                    <label for="price_<?php echo $i; ?>">Price <?php echo $i; ?></label>
                                    <input type="text" class="form-control" id="price_<?php echo $i; ?>" 
                                           name="price_<?php echo $i; ?>" placeholder="Price <?php echo $i; ?>"
                                           value="<?php echo $dimension_price[1]; ?>">
                                    <?php echo form_error("price_".$i); ?>
                                </div>
                            </div>
                            <?php endfor; ?>
                            
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div><!-- /.box -->
        </div>
    </div>
</section>
