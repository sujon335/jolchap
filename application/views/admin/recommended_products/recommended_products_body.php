<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Recommended Products Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">

                    <form role="form" enctype="multipart/form-data" method="post" 
                          action="<?php echo base_url(); ?>index.php/admin/add_recommended_product">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Product</label>
                                    <select class="form-control select2" name="product_id" style="width: 100%;">
                                        <option></option>
                                        <?php foreach ($products_all as $product): ?>
                                            <option value="<?php echo $product['id']; ?>"><?php echo $product['product_name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div><!-- /.form-group -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Product Name</th>
                            <th>Product Description</th>
                            <th>Product Unit</th>
                            <th>
                                Product Images
                            </th>
                            <th>Dimension - Price</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        if (isset($products)):
                            $i = 0;
                            foreach ($products as $product):
                                $i++;
                                ?>
                                <tr>
                                    <td><?php $i; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>index.php/admin/edit_product/<?php echo $product['id']; ?>">
                                            <?php echo $product['product_name']; ?>
                                        </a>
                                    </td>
                                    <td><?php echo $product['product_description']; ?></td>
                                    <td><?php echo $product['product_unit']; ?></td>
                                    <td><img src="<?php echo base_url(); ?>uploads/<?php echo $product['featured_image']; ?>" 
                                             class="img-rounded" alt="card view" width="100" height="auto"> 
                                        <img src="<?php echo base_url(); ?>uploads/<?php echo $product['front_side']; ?>" 
                                             class="img-rounded" alt="card view" width="100" height="auto"> 
                                        <img src="<?php echo base_url(); ?>uploads/<?php echo $product['back_side']; ?>" 
                                             class="img-rounded" alt="card view" width="100" height="auto"> </td>
                                    <td>
                                        <span class="badge bg-blug"><?php echo $product['dimension_price_1']; ?></span><br>
                                        <span class="badge bg-green"><?php echo $product['dimension_price_2']; ?></span><br>
                                        <span class="badge bg-red"><?php echo $product['dimension_price_3']; ?></span><br>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>index.php/admin/remove_recommended_product/<?php echo $product['product_id']; ?>"
                                           class="btn btn-danger" onclick="return confirm('Are you sure?')">Remove</a></td>
                                </tr> 
                                <?php
                            endforeach;
                        endif;
                        ?>

                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">

                </div>
            </div><!-- /.box -->

        </div>
    </div>
</section>
