<?php /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ ?>

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Checkout</li>
            </ol>
        </div><!--/breadcrums-->


        <form id="form1" method="post" action="<?php echo base_url(); ?>/index.php/checkout/save_order">
        <div class="shopper-informations">

            <div class="row">

                <div class="col-sm-5 clearfix">
                    <div class="bill-to">
                        <p>Bill To</p>
                        <div class="form-one">
                               <input name="company" type="text" placeholder="Company Name">
                                <input name="email" type="text" placeholder="Email">
                                <input name="title" type="text" placeholder="Title">
                                <input name="first_name" type="text" placeholder="First Name ">
                                <input name="middle_name" type="text" placeholder="Middle Name">
                                <input name="last_name" type="text" placeholder="Last Name ">
                                <input name="address1" type="text" placeholder="Address 1 ">
                                <input name="adress2" type="text" placeholder="Address 2">
                            
                        </div>
                        <div class="form-two">
                              <input name="zip" type="text" placeholder="Zip / Postal Code ">
                                <select name="country">
                                    <option>-- Country --</option>
                                    <option>United States</option>
                                    <option>Bangladesh</option>
                                    <option>UK</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Ucrane</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>
                                <select name="state">
                                    <option>-- State / Province / Region --</option>
                                    <option>United States</option>
                                    <option>Bangladesh</option>
                                    <option>UK</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Ucrane</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>                                
                                <input name="phone" type="text" placeholder="Phone ">
                                <input name="mobile_phone"type="text" placeholder="Mobile Phone *">
                                <input name="fax" type="text" placeholder="Fax">
                           
                        </div>

                    </div>

                </div>
             
                    <div class="col-sm-4">
                        <div class="order-message">
                            <p>Additional Note</p>
                            <textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>

                        </div>
                    </div>
                
            </div>

        </div>
        <div class="review-payment">
             <button type="submit" class="btn btn-lg btn-primary">Place Order</button>
         </div>
         </form>
        
        <div class="review-payment">
            <h2>Review & Payment</h2>
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

                    <?php
                    if (isset($design)) {
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
                                <?php echo $row->quantity; ?>
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
        <div class="payment-options">
            <span>
                <label><input type="checkbox"> Direct Bank Transfer</label>
            </span>
            <span>
                <label><input type="checkbox"> Check Payment</label>
            </span>
            <span>
                <label><input type="checkbox"> Paypal</label>
            </span>
        </div>
    </div>
</section> <!--/#cart_items-->


<script>
    $(document).ready(function(){
        $("#order_save").click(function(){
            $( "#form1" ).submit();
            $( "#form2" ).submit();
            $( "#form3" ).submit();
            alert("form_sunmitted");
        });
    });

</script>

