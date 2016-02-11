<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

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
				  <li><a href="<?php echo base_url(); ?>index.php/shop">Shop</a></li>
				  <li class="active">Wishlist</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Customize</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
                                            <?php 
                                                if(isset($my_wishlist)): 
                                                    foreach($my_wishlist as $product):
                                            ?>
						<tr>
							<td class="cart_product">
                                                            <a href=""><img src="<?php echo base_url(); ?>uploads/<?php echo $product['featured_image']; ?>" height="100" width="auto" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $product['product_name']; ?></a></h4>
								
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							
							<td class="cart_total">
                                                            <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/product_details/show/<?php echo $product['id']  ?>">Customize</a>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="<?php echo base_url(); ?>index.php/wishlist/delete/<?php echo $product['id']; ?>/1"><i class="fa fa-times"></i></a>
							</td>
						</tr>
                                                <?php
                                                        endforeach;
                                                    else:
                                                ?>
                                                <tr>
                                                    <td colspan="4"><p class="text-center">No item found</p></td>
                                                </tr>
                                                <?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
