<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Order For Shipping Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Order ID </th>
                            <th>Company Name</th>
                            <th>Email</th>
                            <th>
                                Name
                            </th>
                            <th>Address</th>
                            <th>Phone/Mobile</th>
                            <th>Message</th>
                            <th>Total</th>
                            <th>Date-time</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        if (isset($new_orders)):
                            $i = 0;
                            foreach ($new_orders as $order):
                                $i++;
                                ?>
                                <tr>
                                    <td><?php echo $page_number * $content_perpage + $i; ?></td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>index.php/admin_order/view_order_details/<?php echo $order['order_id']; ?>">
                                            <?php echo $order['order_id']; ?>
                                        </a>
                                    </td>
                                    <td><?php echo $order['company_name']; ?></td>
                                    <td><?php echo $order['email']; ?></td>
                                    <td><?php echo $order['first_name']." ".$order['middle_name']." ".$order['last_name']; ?></td>
                                    <td><?php echo $order['address1']."<br>".$order['address2']; ?></td>
                                    <td>Phone: <?php echo $order['phone']; ?><br>Mobile: <?php echo $order['mobile_phone']; ?></td>
                                    <td><?php echo $order['message']; ?></td>
                                    <td><?php echo $order['Total']; ?></td>
                                    <td><?php echo $order['datetime'];?></td>
                                    <td>
                                        <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/admin_order/move_order_to_delivered/<?php echo $order['order_id']; ?>">Product Has been Delivered</a>
                                        
                                    </td>
                                </tr> 
                                <?php
                            endforeach;
                        endif;
                        ?>

                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                       
                        <?php echo $this->pagination->create_links(); ?>
                    </ul>
                </div>
            </div><!-- /.box -->

        </div>
    </div>
</section>
