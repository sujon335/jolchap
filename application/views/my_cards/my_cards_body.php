<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>index.php/shop">Account</a></li>
                <li class="active">My Cards</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($design)) {
                        foreach ($design as $row) {
 ?>
                            <tr>
                                <td class="cart_product">
                                    <a href=""><img src="<?php echo base_url(); ?>uploads/<?php echo $row->front_side; ?>" height="100" width="auto" alt=""></a>
                                    <br/><br/><a class="btn btn-success" onclick="get_text(<?php echo $row->design_id; ?>);" data-toggle="modal" data-target="#d-<?php echo $row->design_id; ?>">View Design</a>
                                </td>
                                <td class="cart_description">
                                    <p>Dimension: <?php echo $row->dimension; ?></p>
                                    <p>Paper: <?php echo $row->paper; ?></p>
                                    <p>Lamination: <?php echo $row->lamination; ?></p>
                                </td>
                                <td class="cart_price">
                                    <p>$59</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href=""> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
                                        <a class="cart_quantity_down" href=""> - </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">$59</p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href=""><i class="fa fa-remove"></i></a>
                                </td>
                            </tr>

 <div id="d-<?php echo $row->design_id; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <div id="myNicPanel" >
                                <div class="view-product" id="frontcard" style="position:relative">
                                    <img src="<?php echo base_url(); ?>uploads/<?php echo $row->front_side; ?>" alt="" />

                    

                                    <h3>ZOOM</h3>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>


                    <?php }
                    } ?>
                </tbody>
            </table>
           

        </div>
    </div>
</section> <!--/#cart_items-->

<script type="text/javascript">


function get_text(id) {
                        

                        jQuery.ajax({
                            type: "POST",
                            url: "<?php echo base_url(); ?>" + "index.php/myCards/get_card_text_data",
                data:  {design_id: id},
                success: function(data) {
                    alert('success : '+data);
                    $.each(data, function (key, item) {
                        // Add a list item for the product.
                      
                    });                  
                }
            });

        }

</script>