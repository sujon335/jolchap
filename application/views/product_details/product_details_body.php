
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
                                                        <input  name="logo_resize" id="logo_resize" min="5" max="1000" value="30" type="range">
                                                        </div>
                                       
                                                        
                                                        <button id="font_plus"  style="background: none; color: transparent;">
                                                            <img    src="<?php echo base_url(); ?>assets/images/fontplus.png"   style="width: 50px; height: 50px;"></img>
                                                       </button>
                                                        
                                                        <button id="font_minus"  style="background: none; color: transparent;"> <img   src="<?php echo base_url(); ?>assets/images/fontminus.png" style="width: 50px; height: 50px;"></img></button>
                                                        <br/><br/>
                                                        <div class="form-group">
                                                        <select  selected="selected" class="font_family wbfd_front_multiple_selected_font form-control" id="font_select" data-id="1" style="width: 150px;">
                                                            <option value="selectFont">Select Font</option>
                                                            <option style="font-family:Agency FB;" value="Agency FB">Agency FB</option>
                                                            <option style="font-family:Adobe Devanagari;" value="Adobe Devanagari">Adobe Devanagari</option>
                                                            <option style="font-family:Aharoni; " value="Aharoni">Aharoni</option>
                                                            <option style="font-family:Algerian;" value="Algerian">Algerian</option>
                                                            <option style="font-family:Andalus;" value="Andalus">Andalus</option>
                                                            <option style="font-family:Angsana New;" value="Angsana New">Angsana New</option>
                                                            <option style="font-family:Arial;" value="Arial">Arial</option>
                                                            <option style="font-family:Aparajita;" value="Aparajita">Aparajita</option>
                                                            <option style="font-family:Arial Rounded MT Bold;" value="Arial Rounded MT Bold">Arial Rounded MT Bold</option>
                                                            <option style="font-family:Arabic Typesetting;" value="Arabic Typesetting">Arabic Typesetting</option>
                                                            <option style="font-family:DaunPenh;" value="DaunPenh">DaunPenh</option>
                                                            <option style="font-family:David;" value="David">David</option>
                                                            <option style="font-family:DFKai-SB;" value="DFKai-SB">DFKai-SB</option>
                                                            <option style="font-family:Dialog;" value="Dialog">Dialog</option>
                                                            <option style="font-family:Calibri;" value="Calibri">Calibri</option>
                                                            <option style="font-family:Cambria;" value="Cambria">Cambria</option>
                                                            <option style="font-family:Century;" value="Century">Century</option>
                                                            <option style="font-family:KaiTi;" value="KaiTi">KaiTi</option>
                                                            <option style="font-family:Kalinga;" value="Kalinga">Kalinga</option>
                                                            <option style="font-family:Khmer UI;" value="Khmer UI">Khmer UI</option>
                                                            <option style="font-family:KodchiangUPC_;" value="KodchiangUPC_">KodchiangUPC_</option>
                                                            <option style="font-family:Kartika;" value="Kartika">Kartika</option>
                                                            <option style="font-family:Kristen ITC;" value="Kristen ITC">Kristen ITC</option>
                                                            <option style="font-family:Kunstler Script;" value="Kunstler Script">Kunstler Script</option>
                                                            <option style="font-family:Kalpurush;" value="Kalpurush">Kalpurush</option>
                                                            <option style="font-family:Latha;" value="Latha">Latha</option>
                                                            <option style="font-family:Levenim MT;" value="Levenim MT">Levenim MT</option>
                                                            <option style="font-family:LilyUPC;" value="LilyUPC">LilyUPC</option>
                                                            <option style="font-family:Leelawadee;" value="Leelawadee">Leelawadee</option>
                                                            <option style="font-family:Lucida Fax;" value="Lucida Fax">Lucida Fax</option>
                                                            <option style="font-family:Magneto;" value="Magneto">Magneto</option>
                                                            <option style="font-family:Mangal;" value="Mangal">Mangal</option>
                                                            <option style="font-family:Marlett;" value="Marlett">Marlett</option>
                                                            <option style="font-family:Meiryo;" value="Meiryo">Meiryo</option>
                                                            <option style="font-family:Narkisim;" value="Narkisim">Narkisim</option>
                                                            <option style="font-family:NSimSun;" value="NSimSun">NSimSun</option>
                                                            <option style="font-family:Nyala;" value="Nyala">Nyala</option>
                                                            <option style="font-family:opensans-bold;" value="opensans-bold">Opensans-bold</option>
                                                            <option style="font-family:opensans-bolditalic;" value="opensans-bolditalic">Opensans-bolditalic</option>
                                                            <option style="font-family:opensans-extrabold;" value="opensans-extrabold">Opensans-extrabold</option>
                                                            <option style="font-family:opensans-extrabolditalic;" value="opensans-extrabolditalic">Opensans-extrabolditalic</option>
                                                            <option style="font-family:opensans-italic;" value="opensans-italic">Opensans-italic</option>
                                                            <option style="font-family:opensans-light;" value="opensans-light">Opensans-light</option>
                                                            <option style="font-family:opensans-regular;" value="opensans-regular">Opensans-regular</option>
                                                            <option style="font-family:opensans-semibold;" value="opensans-semibold">Opensans-semibold</option>
                                                            <option style="font-family:nexa bold.otf;" value="nexa bold.otf">Nexa bold.otf</option>
                                                            <option style="font-family:opensans-semibolditalic;" value="opensans-semibolditalic">Opensans-semibolditalic</option>
                                                            <option style="font-family:opensans-lightitalic;" value="opensans-lightitalic">Opensans-lightitalic</option>
                                                            <option style="font-family:prime regular.otf;" value="prime regular.otf">Prime regular.otf</option>
                                                            <option style="font-family:roboto-blackitalic;" value="roboto-blackitalic">Roboto-blackitalic</option>
                                                            <option style="font-family:roboto-bold;" value="roboto-bold">Roboto-bold</option>
                                                            <option style="font-family:roboto-bolditalic;" value="roboto-bolditalic">Roboto-bolditalic</option>
                                                            <option style="font-family:prime light.otf;" value="prime light.otf">Prime light.otf</option>
                                                            <option style="font-family:roboto-thinitalic;" value="roboto-thinitalic">Roboto-thinitalic</option>
                                                            <option style="font-family:roboto-italic;" value="roboto-italic">Roboto-italic</option>
                                                            <option style="font-family:robotocondensed-bold;" value="robotocondensed-bold">Robotocondensed-bold</option>
                                                            <option style="font-family:roboto-mediumitalic;" value="roboto-mediumitalic">Roboto-mediumitalic</option>
                                                            <option style="font-family:robotocondensed-bolditalic;" value="robotocondensed-bolditalic">Robotocondensed-bolditalic</option>
                                                            <option style="font-family:roboto-lightitalic;" value="roboto-lightitalic">Roboto-lightitalic</option>
                                                            <option style="font-family:roboto-light;" value="roboto-light">Roboto-light</option>
                                                            <option style="font-family:robotocondensed-light;" value="robotocondensed-light">Robotocondensed-light</option>
                                                            <option style="font-family:roboto-regular;" value="roboto-regular">Roboto-regular</option>
                                                            <option style="font-family:robotocondensed-regular;" value="robotocondensed-regular">Robotocondensed-regular</option>
                                                            <option style="font-family:sf outer limits distorted;" value="sf outer limits distorted">Sf outer limits distorted</option>
                                                            <option style="font-family:robotocondensed-italic;" value="robotocondensed-italic">Robotocondensed-italic</option>
                                                            <option style="font-family:roboto-medium;" value="roboto-medium">Roboto-medium</option>
                                                            <option style="font-family:sf outer limits distupright;" value="sf outer limits distupright">Sf outer limits distupright</option>
                                                            <option style="font-family:sf outer limits extupright;" value="sf outer limits extupright">Sf outer limits extupright</option>
                                                            <option style="font-family:sf outer limits upright;" value="sf outer limits upright">Sf outer limits upright</option>
                                                            <option style="font-family:sf outer limits;" value="sf outer limits">Sf outer limits</option>
                                                            <option style="font-family:sreda.otf;" value="sreda.otf">Sreda.otf</option>
                                                            <option style="font-family:sreda;" value="sreda">Sreda</option>
                                                            <option style="font-family:subadai;" value="subadai">Subadai</option>
                                                            <option style="font-family:subadai3d;" value="subadai3d">Subadai3d</option>
                                                            <option style="font-family:subadai3dital;" value="subadai3dital">Subadai3dital</option>
                                                            <option style="font-family:subadaibold;" value="subadaibold">Subadaibold</option>
                                                            <option style="font-family:subadaiboldital;" value="subadaiboldital">Subadaiboldital</option>
                                                            <option style="font-family:sf outer limits extended;" value="sf outer limits extended">Sf outer limits extended</option>
                                                            <option style="font-family:subadaicond;" value="subadaicond">Subadaicond</option>
                                                            <option style="font-family:subadaicondital;" value="subadaicondital">Subadaicondital</option>
                                                            <option style="font-family:subadaiexpand;" value="subadaiexpand">Subadaiexpand</option>
                                                            <option style="font-family:subadaiexpandital;" value="subadaiexpandital">Subadaiexpandital</option>
                                                            <option style="font-family:subadaiital;" value="subadaiital">Subadaiital</option>
                                                            <option style="font-family:subadailaser;" value="subadailaser">Subadailaser</option>
                                                            <option style="font-family:subadailaserital;" value="subadailaserital">Subadailaserital</option>
                                                            <option style="font-family:subadaileft;" value="subadaileft">Subadaileft</option>
                                                            <option style="font-family:vanity_cre;" value="vanity_cre">Vanity_cre</option>
                                                            <option style="font-family:jotione-regular;" value="jotione-regular">Jotione-regular</option>
                                                            <option style="font-family:komtitwr;" value="komtitwr">Komtitwr</option>
                                                            <option style="font-family:roboto-black;" value="roboto-black">Roboto-black</option>
                                                            <option style="font-family:stylish fonts new.zip;" value="stylish fonts new.zip">Stylish fonts new.zip</option>
                                                            <option style="font-family:robotocondensed-lightitalic;" value="robotocondensed-lightitalic">Robotocondensed-lightitalic</option>
                                                            <option style="font-family:roboto-thin;" value="roboto-thin">Roboto-thin</option>
                                                        </select>
                                                         </div>
                                                        
                                                        <div class="form-group">
                                                        Color: <input class="jscolor form-control" type="text" id="color" value="000000" style="width: 150px;">
                                                        </div>

          



                                                        <div class="form-group">
                                                            <input  type="text"
                                                                    class="abc form-control" id="1"
                                                                    placeholder="Enter Name Here">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                   class="abc form-control" id="2"
                                                                   placeholder="Enter Designation Here">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                   class="abc form-control" id="3"
                                                                   placeholder="Enter Email Here">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                   class="abc form-control" id="4"
                                                                   placeholder="Enter Contact Here">

                                                        </div>

                                                        <div class="form-group">
                                                            <button  class="form-control" id="add-another">Add another</button>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div><!--/brands_products-->
                                        </div>
                                        <div class="col-md-8">
                                            <div id="myNicPanel" ></div><br/>
                                            <div class="view-product" id="front-card" style="position:relative">
                                                <img src="<?php echo base_url(); ?>uploads/<?php echo $product_details['front_side']; ?>" alt="" />
                                                <img class="drag" id="logo" src="http://bakerstreetbabes.com/wp-content/uploads/2013/07/intel-company-logo-png-hd-sk.png"
                                                     alt="" style="cursor: move;position: absolute;left: 10px;top: 20px;height:60px; width: 60px;">
                                                
                                                <div class="drag" id="div1" style="cursor: move;position: absolute;left: 120px;top: 60px;"></div>
                                                <div class="drag" id="div2" style="cursor: move;position: absolute;left: 150px;top: 80px;"></div>
                                                <div class="drag" id="div3" style="cursor: move;position: absolute;left: 350px;top: 250px;"></div>
                                                <div class="drag" id="div4" style="cursor: move;position: absolute;left: 350px;top: 300px;"></div>
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
                                <?php elseif ($i % 3 == 1): ?>
                                        <div class="item">
                                    <?php endif; ?>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <a href="<?php echo base_url(); ?>index.php/product_details/show/<?php echo $product['product_id']; ?>">
                                                            <img src="<?php echo base_url(); ?>uploads/<?php echo $product['featured_image']; ?>" alt="" />
                                                        </a>
                                                        <h2><?php $data = explode("-", $product['dimension_price_1']);
                                        echo $data[1]; ?></h2>
                                                        <p><?php echo $product['product_name']; ?></p>

                                                        <a href="<?php echo base_url(); ?>index.php/product_details/show/<?php echo $product['product_id']; ?>"
                                                           class="btn btn-default add-to-cart"><i class="fa fa-edit"></i>Customize</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
<?php if ($i % 3 == 0 || ($i > 3 && $i == $limit)): ?>
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
            <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
<script type="text/javascript">
    $(document).ready(function () {





        $(".drag").on('mousedown', function() {
            $(this).addClass('draggable').parents().on('mousemove', function(e) {
                $('.draggable').offset({
                    top: e.pageY - $('.draggable').outerHeight() / 2,
                    left: e.pageX - $('.draggable').outerWidth() / 2
                }).on('mouseup', function() {
                    $(this).removeClass('draggable');
                });
            });
            e.preventDefault();
        }).on('mouseup', function() {
            $('.draggable').removeClass('draggable');
        });

    });
</script>


        
 <script>

    $(document).ready(function(){
        var cnt =5;
        var xx ='<div class="form-group"><input type="text" class="abc form-control" id="';
        var x='" placeholder="Enter text here"></div>';
        var yy='<div class="drag" id="div';
        var y='" style="cursor: move;position: absolute;left: 200px;top: 200px;"></div>';
        $("#add-another").click(function(e){
            $("#add-another").before(xx+cnt+x);
            $('#front-card').append(yy+cnt+y);
            cnt++;
            e.preventDefault();
        });

    });
    </script>
            
<script type="text/javascript">
    $(document).ready(function(){

        var selected_div=0;
        var prev=0;
        $('.abc')
        .keyup(function() {
            var num=this.id;
            //selected_div=this.id;
            var value = $( this ).val();
            $( '#div'+ num).text( value );
        })
        .keyup();


        $('.abc')
        .focus(function() {
            selected_div=this.id;
            $('#'+prev).css("border","1px solid #8F8F8F");
            $(this).css("border","2px solid blue");
            prev=this.id;
        });




        $('#color').change(function()
        {
            var value = $( this ).val();
            $( '#div'+ selected_div).css("color","#"+value);
        });

        $('#font_select').change(function()
        {
            var value = $( this ).val();
            $( '#div'+ selected_div).css("font-family",value );
        });
        $('#logo_resize').change(function(){
            var value = $( this ).val();
            $('#logo').css("width",value);
            $('#logo').css("height",value);
        });
        $('#font_plus').click(function(e)
        {

            var cur_size=$( '#div'+ selected_div).css("font-size");
            var value = parseInt(cur_size.substring(0, 2))+5;
            $( '#div'+ selected_div).css("font-size", value + "px");
            e.preventDefault();
        });

        $('#font_minus').click(function(e)
        {

            var cur_size=$( '#div'+ selected_div).css("font-size");
            var value = parseInt(cur_size.substring(0, 2))-5;
            $( '#div'+ selected_div).css("font-size", value + "px");
            e.preventDefault();
        });

    });
</script>