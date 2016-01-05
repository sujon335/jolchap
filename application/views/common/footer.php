<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


        <footer id="footer"><!--Footer-->
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="companyinfo">
                                <h2 style="color: #4B4B4B; text-transform: none;"><font face="arial"><b><span>Jolchap</span>BD</b></font></h2>
                                <p>Design your dream</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright © 2015 JolchapBD. All rights reserved.</p>
                        <p class="pull-left"><span><a href="#">Terms of Services</a></span></p>
                        <p class="pull-right">Designed by <span><a target="_blank" href="http://www.JolchapBd.com">JolchapBD Team</a></span></p>
                    </div>
                </div>
            </div>

        </footer><!--/Footer-->



        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollUp.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/price-range.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
        <script>
            $(".wishlist").click(function(){
                
            var list_id = "#li-"+this.id;
            var elementContent = this;
            if($(list_id).hasClass("active")){
                $.ajax({url: "<?php echo base_url(); ?>index.php/wishlist/delete/"+this.id, success: function(result){
                    //alert(result); 
                    if(result == "success"){
                        $(list_id).removeClass("active");
                        $(elementContent).html('<i class="fa fa-plus-square"></i>Add to Wishlist');
                    }
                }});
            }
            else{
                $.ajax({url: "<?php echo base_url(); ?>index.php/wishlist/add/"+this.id, success: function(result){
                    //alert(result);    
                    if(result == "success"){
                            $(list_id).addClass("active");
                            $(elementContent).html('<i class="fa fa-close"></i>Remove from Wishlist');
                    }
                }});
            }   
            });
        </script>
    </body>
</html>

