
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
                                                    <form enctype="multipart/form-data" id="icon_image" name="icon_image">
                                                        <label>Upload image</label>
                                                        <div class="form-group">
                                                        <input type="file" id="front_side" name="card_icon">
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-success">Upload</button>
                                                        </div>
                                                    </form>
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
                                                                <option style="font-family:Arial;" value="Arial">Arial</option>
                                                                <option style="font-family:Arial Black;" value="Arial Black">Arial Black</option>
                                                                <option style="font-family:Comic Sans MS; " value="Comic Sans MS">Comic Sans MS</option>
                                                                <option style="font-family:Impact;" value="Impact">Impact</option>
                                                                <option style="font-family:Lucida Sans Unicode;" value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                                                                <option style="font-family:Tahoma;" value="Tahoma">Tahoma</option>
                                                                <option style="font-family:Trebuchet MS;" value="Trebuchet MS">Trebuchet MS</option>
                                                                <option style="font-family:Verdanaa;" value="Verdana">Verdana</option>
                                                                <option style="font-family:Courier New;" value="Courier New">Courier New</option>
                                                                <option style="font-family:Lucida Console;" value="Lucida Console">Lucida Console</option>
                                                                <option style="font-family:Georgia;" value="Georgia">Georgia</option>
                                                                <option style="font-family:Palatino Linotype;" value="Palatino Linotype">Palatino Linotype</option>
                                                                <option style="font-family:Times New Roman;" value="Times New Roman">Times New Roman</option>
                                   
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            Color: <input class="jscolor form-control" type="text" id="color" value="000000" style="width: 150px;">
                                                        </div>





                                                        <?php
                                                        $my_count = 1;
                                                        foreach ($card_info as $card):
                                                            if ($card->type == "front") {
                                                        ?>

                                                                <div class="form-group">
                                                                    <input  type="text"
                                                                            class="abc form-control" id="<?php echo $my_count; ?>"
                                                                            placeholder="Enter Name Here" value="<?php echo $card->text; ?>" >
                                                                </div>
<?php $my_count++;
                                                            } endforeach; ?>

                                                        <?php for ($my_count; $my_count <= 15; $my_count++): ?>
                                                            <div class="form-group">
                                                                <input  type="text"
                                                                        class="abc form-control" id="<?php echo $my_count; ?>"
                                                                        placeholder="Enter Name Here" style="display:none;" >
                                                            </div>
                                                        <?php endfor; ?>




                                                            <div class="form-group">
                                                                <button  class="form-control" id="add-another">Add another</button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div><!--/brands_products-->
                                            </div>

                                            <div class="col-md-8">
                                                <div id="myNicPanel" >
                                                    <div class="view-product" id="frontcard" style="position:relative">
                                                        <img src="<?php echo base_url(); ?>uploads/<?php echo $product_details['front_side']; ?>" alt="" />
                                                    <?php
                                                            $front_src = "";
                                                            foreach ($card_image as $row) {
                                                                if ($row->type == "front") {
                                                                    $front_src = $row->path;
                                                                    $front_top=$row->top;
                                                                    $front_left=$row->left;
                                                                    $front_height=$row->height;
                                                                    $front_width=$row->width;
                                                                }
                                                            }if ($front_src == "") {
                                                    ?>
                                                                <img class="drag" id="logo" src=""
                                                                     alt="" style="cursor: move;position: absolute; visibility: hidden;left: 10px;top: 20px;height:60px; width: 60px;">
                                                                <?php } else { ?>
                                                           <img class="drag" id="logo" src="<?php echo $front_src; ?>"
                                                                alt="" style="cursor: move;position: absolute; left: <?php echo $front_left; ?>;top: <?php echo $front_top; ?>;height:<?php echo $front_height; ?>; width: <?php echo $front_width; ?>;">
                                                         <?php } ?>
                                                         <?php
                                                            if (isset($card_info)):
                                                                $i = 1;
                                                                // var_dump($card_info);

                                                                foreach ($card_info as $card):
                                                                    if ($card->type == "front") {
                                                         ?>
                                                                   <div class="drag" id="div<?php echo $i; ?>"
                                                                        style="cursor: move;position: absolute;
                                                                        font-family: <?php echo $card->font_family ?>;font-size: <?php echo $card->font_size ?>;
                                                                        color: <?php echo $card->color ?>;left: <?php echo $card->left_pos ?>;
                                                                        top: <?php echo $card->top_pos ?>;"
                                                                        > <?php echo $card->text; ?></div>

                                                    <?php
                                                                        $i++;
                                                                    }
                                                                endforeach;
                                                            endif; ?>

                                                    <?php for (; $i <= 15; $i++): ?>
                                                                <div class="drag" id="div<?php echo $i; ?>" style="cursor: move;position: absolute;left: 200px;top: 200px;"></div>
                                                    <?php endfor; ?>


                                                                <h3>ZOOM</h3>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="companyprofile" >
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="brands_products"><!--brands_products-->
                                                            <h2>Back Texts</h2>
                                                            <div class="brands-name">
                                                                <form enctype="multipart/form-data" id="icon_image_back" name="icon_image_back">
                                                                    <label>Upload image</label>
                                                                    <div class="form-group">
                                                                        <input type="file" id="front_side" name="card_icon">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" class="btn btn-success">Upload</button>
                                                                    </div>
                                                                </form>
                                                                <form>

                                                                    <div class="form-group">
                                                                        <input  name="logo_resize_back" id="logo_resize_back" min="5" max="1000" value="30" type="range">
                                                                    </div>


                                                                    <button id="font_plus_back"  style="background: none; color: transparent;">
                                                                        <img    src="<?php echo base_url(); ?>assets/images/fontplus.png"   style="width: 50px; height: 50px;"></img>
                                                                    </button>

                                                                    <button id="font_minus_back"  style="background: none; color: transparent;"> <img   src="<?php echo base_url(); ?>assets/images/fontminus.png" style="width: 50px; height: 50px;"></img></button>
                                                                    <br/><br/>
                                                                    <div class="form-group">
                                                                        <select  selected="selected" class="font_family wbfd_front_multiple_selected_font form-control" id="font_select_back" data-id="1" style="width: 150px;">
                                                                      <option value="selectFont">Select Font</option>
                                                                <option style="font-family:Arial;" value="Arial">Arial</option>
                                                                <option style="font-family:Arial Black;" value="Arial Black">Arial Black</option>
                                                                <option style="font-family:Comic Sans MS; " value="Comic Sans MS">Comic Sans MS</option>
                                                                <option style="font-family:Impact;" value="Impact">Impact</option>
                                                                <option style="font-family:Lucida Sans Unicode;" value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                                                                <option style="font-family:Tahoma;" value="Tahoma">Tahoma</option>
                                                                <option style="font-family:Trebuchet MS;" value="Trebuchet MS">Trebuchet MS</option>
                                                                <option style="font-family:Verdanaa;" value="Verdana">Verdana</option>
                                                                <option style="font-family:Courier New;" value="Courier New">Courier New</option>
                                                                <option style="font-family:Lucida Console;" value="Lucida Console">Lucida Console</option>
                                                                <option style="font-family:Georgia;" value="Georgia">Georgia</option>
                                                                <option style="font-family:Palatino Linotype;" value="Palatino Linotype">Palatino Linotype</option>
                                                                <option style="font-family:Times New Roman;" value="Times New Roman">Times New Roman</option>                           <option style="font-family:Agency FB;" value="Agency FB">Agency FB</option>
                                                
                                                                        </select>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        Color: <input class="jscolor form-control" type="text" id="color_back" value="000000" style="width: 150px;">
                                                                    </div>





                                                        <?php
                                                                $my_count = 1;
                                                                if (isset($card_info)):
                                                                    foreach ($card_info as $card):
                                                                        if ($card->type == "back"):
                                                        ?>

                                                                            <div class="form-group">
                                                                                <input  type="text"
                                                                                        class="abc form-control" id="<?php echo $my_count; ?>_back"
                                                                                        placeholder="Enter Name Here" value="<?php echo $card->text; ?>" >
                                                                            </div>
<?php
                                                                            $my_count++;
                                                                        endif;
                                                                    endforeach;
                                                                endif;
?>

<?php for ($my_count; $my_count <= 15; $my_count++): ?>
                                                                    <div class="form-group">
                                                                        <input  type="text"
                                                                                class="abc form-control" id="<?php echo $my_count; ?>_back"
                                                                                placeholder="Enter Name Here" style="display:none;" >
                                                                    </div>
<?php endfor; ?>





                                                                    <div class="form-group">
                                                                        <button  class="form-control" id="add-another_back">Add new text box</button>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div><!--/brands_products-->
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div id="myNicPanel" >
                                                            <div class="view-product" id="backcard" style="position:relative">
                                                                <img src="<?php echo base_url(); ?>uploads/<?php echo $product_details['back_side']; ?>" alt="" />
<?php
                                                                    $back_src = "";
                                                                    foreach ($card_image as $row) {
                                                                        if ($row->type == "back") {
                                                                            $back_src = $row->path;
                                                                            $back_top=$row->top;
                                                                            $back_left=$row->left;
                                                                            $back_height=$row->height;
                                                                            $back_width=$row->width;
                                                                        }
                                                                    }if ($back_src == "") {
?>
                                                                        <img class="drag" id="logo_back" src=""
                                                                             alt="" style="cursor: move;position: absolute; visibility: hidden;left: 10px;top: 20px;height:60px; width: 60px;">
                                                                    <?php } else { ?>
                                                                   <img class="drag" id="logo_back" src="<?php echo $back_src; ?>"
                                                                        alt="" style="cursor: move;position: absolute; left: <?php echo $back_left; ?>;top: <?php echo $back_top; ?>;height:<?php echo $back_height; ?>; width: <?php echo $back_width; ?>;">
                                                         <?php } ?>
                                                         <?php
                                                                    $i = 1;
                                                                    if (isset($card_info)):

                                                                        // var_dump($card_info);

                                                                        foreach ($card_info as $card):
                                                                            if ($card->type == "back"):
                                                         ?>
                                                                           <div class="drag" id="div<?php echo $i; ?>_back"
                                                                                style="cursor: move;position: absolute;
                                                                                font-family: <?php echo $card->font_family ?>;font-size: <?php echo $card->font_size ?>;
                                                                                color: <?php echo $card->color ?>;left: <?php echo $card->left_pos ?>;
                                                                                top: <?php echo $card->top_pos ?>;"
                                                                                > <?php echo $card->text; ?></div>

                                                    <?php
                                                                                $i++;
                                                                            endif;
                                                                        endforeach;
                                                                    endif; ?>

                                                    <?php for (; $i <= 15; $i++): ?>
                                                                        <div class="drag" id="div<?php echo $i; ?>_back" style="cursor: move;position: absolute;left: 200px;top: 200px;"></div>
                                                    <?php endfor; ?>

                                                                        <h3>ZOOM</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!--/category-tab-->

                                        </div>




                                    </div>
                                </div>

            <?php
                                                                        if (isset($design_info)) {
                                                                            foreach ($design_info as $design) {
                                                                                $design_id = $design->design_id;
            ?>
                                                                                <div class="col-md-3" style=" padding-left: 5px;">
                                                                                    <div class="product-image-wrapper"><!--product-details-->


                                                                                        <div class="single-products" style=" padding: 10px;"><!--/product-information-->
                                                                                            <p><b>Name: </b><?php echo $product_details['product_name']; ?></p>
                                                                                            <p><b>Description: </b><?php echo $product_details['product_description']; ?></p>
                                                                                            <div class="form-inline" style="margin-bottom: 5px;">
                                                                                                <div class="form-group">
                                                                                                    <label>Dimension:</label>
                                                                                                    <select id="dim" class="form-control">
                                                                                                        <option selected="true" value="3x5">3x5</option>
                                                                                                        <option value="4x6">4x6</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-inline" style="margin-bottom: 5px;">
                                                                                                <div class="form-group">
                                                                                                    <label>Paper:</label>
                                                                                                    <select id="paper" class="form-control">
                                                                                                        <option selected="true" value="Paper 1">Paper 1</option>
                                                                                                        <option value="Paper 2">Paper 2</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-inline" style="margin-bottom: 5px;">
                                                                                                <div class="form-group">
                                                                                                    <label>Lamination:</label>
                                                                                                    <select id="lamination" class="form-control">
                                                                                                        <option selected="true" value="Matt">Matt</option>
                                                                                                        <option  value="Glossy">Glossy</option>
                                                                                                        <option value="None">None</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <p><b>Cards in Unit:</b> 1000</p>
                                                                                            <p><b>Unit Price:</b> 800 tk</p>

                        <?php }
                                                                        } ?>


                                                                        <a id="save_btn_user" class="btn btn-block btn-success" href="<?php echo base_url(); ?>index.php/myCards">Update Design</a>

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
                                                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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


                                                                $("#add-another").click(function(e){

                                                                    $("#"+cnt).show();
                                                                    cnt++;
                                                                    e.preventDefault();
                                                                });

                                                            });
                                                        </script>
                                                        <script>

                                                            $(document).ready(function(){
                                                                var cnt =5;


                                                                $("#add-another_back").click(function(e){

                                                                    $("#"+cnt+"_back").show();
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

                                                                $('#color_back').change(function()
                                                                {
                                                                    var value = $( this ).val();
                                                                    $( '#div'+ selected_div).css("color","#"+value);
                                                                });

                                                                $('#font_select_back').change(function()
                                                                {
                                                                    var value = $( this ).val();
                                                                    $( '#div'+ selected_div).css("font-family",value );
                                                                });
                                                                $('#logo_resize_back').change(function(){
                                                                    var value = $( this ).val();
                                                                    $('#logo_back').css("width",value);
                                                                    $('#logo_back').css("height",value);
                                                                });
                                                                $('#font_plus_back').click(function(e)
                                                                {

                                                                    var cur_size=$( '#div'+ selected_div).css("font-size");
                                                                    var value = parseInt(cur_size.substring(0, 2))+5;
                                                                    $( '#div'+ selected_div).css("font-size", value + "px");
                                                                    e.preventDefault();
                                                                });

                                                                $('#font_minus_back').click(function(e)
                                                                {

                                                                    var cur_size=$( '#div'+ selected_div).css("font-size");
                                                                    var value = parseInt(cur_size.substring(0, 2))-5;
                                                                    $( '#div'+ selected_div).css("font-size", value + "px");
                                                                    e.preventDefault();
                                                                });


                                                            });
                                                        </script>






                                                        <script type="text/javascript">

                                                            // Ajax post
                                                            $(document).ready(function() {
                                                                $("#save_btn_user").click(function(event) {
                                                                    // event.preventDefault();

                                                                    var design_id=<?php echo $design_id; ?>;
                                                                    var dimension=$("#dim").val();
                                                                    var paper=$("#paper").val();
                                                                    var lamination=$("#lamination").val();
                                                                    var jsonObj=[];
                                                                    var design_item={};

                                                                    design_item["dimension"]=dimension;
                                                                    design_item["paper"]=paper;
                                                                    design_item["lamination"]=lamination;
                                                                    design_item["design_id"]=design_id;
                                                                    var logo_front=$("#logo").attr("src");
                                                                    var logo_front_top=$("#logo").css("top");
                                                                    var logo_front_left=$("#logo").css("left");
                                                                    var logo_front_width=$("#logo").css("width");
                                                                    var logo_front_height=$("#logo").css("height");

                                                                    var logo_back=$("#logo_back").attr("src");
                                                                    var logo_back_top=$("#logo_back").css("top");
                                                                    var logo_back_left=$("#logo_back").css("left");
                                                                    var logo_back_width=$("#logo_back").css("width");
                                                                    var logo_back_height=$("#logo_back").css("height");

                                                                    design_item["logo_front"]=logo_front;
                                                                    design_item["logo_front_top"]=logo_front_top;
                                                                    design_item["logo_front_left"]=logo_front_left;
                                                                    design_item["logo_front_width"]=logo_front_width;
                                                                    design_item["logo_front_height"]=logo_front_height;


                                                                    design_item["logo_back"]=logo_back;
                                                                    design_item["logo_back"]=logo_back;
                                                                    design_item["logo_back_top"]=logo_back_top;
                                                                    design_item["logo_back_left"]=logo_back_left;
                                                                    design_item["logo_back_width"]=logo_back_width;
                                                                    design_item["logo_back_height"]=logo_back_height;
                                                                    var textDataJsonObj = [];
                                                                    $('#frontcard').children('div').each(function () {

                                                                        var text = $(this).text();
                                                                        if(text.trim() == "")
                                                                            return;
                                                                        var font_size = $(this).css("font-size");
                                                                        var font_family = $(this).css("font-family");
                                                                        var color=$(this).css("color");
                                                                        var top=$(this).css('top');
                                                                        var left=$(this).css('left');

                                                                        var text_item = {};
                                                                        text_item ["text"] = text;
                                                                        text_item ["font_size"] = font_size;
                                                                        text_item ["font_family"] = font_family;
                                                                        text_item ["color"] = color;
                                                                        text_item ["top"] = top;
                                                                        text_item ["left"] = left;
                                                                        textDataJsonObj.push(text_item);
                                                                    });

                                                                    var backtextDataJsonObj = [];
                                                                    $('#backcard').children('div').each(function () {

                                                                        var text = $(this).text();
                                                                        if(text.trim() == "")
                                                                            return;
                                                                        var font_size = $(this).css("font-size");
                                                                        var font_family = $(this).css("font-family");
                                                                        var color=$(this).css("color");
                                                                        var top=$(this).css('top');
                                                                        var left=$(this).css('left');

                                                                        var text_item = {};
                                                                        text_item ["text"] = text;
                                                                        text_item ["font_size"] = font_size;
                                                                        text_item ["font_family"] = font_family;
                                                                        text_item ["color"] = color;
                                                                        text_item ["top"] = top;
                                                                        text_item ["left"] = left;
                                                                        backtextDataJsonObj.push(text_item);
                                                                    });


                                                                    design_item["card_texts_front"]=textDataJsonObj;
                                                                    design_item["card_texts_back"]=backtextDataJsonObj;

                                                                    jsonObj.push(design_item);
                                                                    var jsonString=JSON.stringify(jsonObj);

                                                                    alert(jsonString);


                                                                    jQuery.ajax({
                                                                        type: "POST",
                                                                        url: "<?php echo base_url(); ?>" + "index.php/product_details/edit_design_user",
                                                                        data:  {card_data: jsonString},
                                                                        success: function(data) {
                                                                            //  alert('success json data: '+data);
                                                                        }
                                                                    });

                                                                });
                                                            });
                                                        </script>

                                                        <script type="text/javascript">
                                                            $("form[name='icon_image']").submit(function(e) {
                                                                var formData = new FormData($(this)[0]);

                                                                $.ajax({
                                                                    url: "<?php echo base_url(); ?>" + "index.php/product_details/upload_icon_image",
                                                                    type: "POST",
                                                                    data: formData,
                                                                    async: false,
                                                                    success: function (data) {
                                                                        var src = "<?php echo base_url(); ?>uploads/"+ data;
                                                                        $("#logo").attr("src",src);
                                                                        $('#logo').css("visibility","visible");
                                                                    },
                                                                    cache: false,
                                                                    contentType: false,
                                                                    processData: false
                                                                });

                                                                e.preventDefault();
                                                            });
                                                        </script>

                                                        <script type="text/javascript">
                                                            $("form[name='icon_image_back']").submit(function(e) {
                                                                var formData = new FormData($(this)[0]);

                                                                $.ajax({
                                                                    url: "<?php echo base_url(); ?>" + "index.php/product_details/upload_icon_image",
                                                                    type: "POST",
                                                                    data: formData,
                                                                    async: false,
                                                                    success: function (data) {
                                                                        var src = "<?php echo base_url(); ?>uploads/"+ data;
                $("#logo_back").attr("src",src);
                $('#logo_back').css("visibility","visible");
            },
            cache: false,
            contentType: false,
            processData: false
        });

        e.preventDefault();
    });
</script>

<script type="text/javascript">

    window.onload = function() {
        var detective = new Detector();
        //alert(detective.detect('arial'));
    };

    var Detector = function() {
        // a font will be compared against all the three default fonts.
        // and if it doesn't match all 3 then that font is not available.
        var baseFonts = ['monospace', 'sans-serif', 'serif'];

        //we use m or w because these two characters take up the maximum width.
        // And we use a LLi so that the same matching fonts can get separated
        var testString = "mmmmmmmmmmlli";

        //we test using 72px font size, we may use any size. I guess larger the better.
        var testSize = '72px';

        var h = document.getElementsByTagName("body")[0];

        // create a SPAN in the document to get the width of the text we use to test
        var s = document.createElement("span");
        s.style.fontSize = testSize;
        s.innerHTML = testString;
        var defaultWidth = {};
        var defaultHeight = {};
        for (var index in baseFonts) {
            //get the default width for the three base fonts
            s.style.fontFamily = baseFonts[index];
            h.appendChild(s);
            defaultWidth[baseFonts[index]] = s.offsetWidth; //width for the default font
            defaultHeight[baseFonts[index]] = s.offsetHeight; //height for the defualt font
            h.removeChild(s);
        }

        function detect(font) {
            var detected = false;
            for (var index in baseFonts) {
                s.style.fontFamily = font + ',' + baseFonts[index]; // name of the font along with the base font for fallback.
                h.appendChild(s);
                var matched = (s.offsetWidth != defaultWidth[baseFonts[index]] || s.offsetHeight != defaultHeight[baseFonts[index]]);
                h.removeChild(s);
                detected = detected || matched;
            }
            return detected;
        }

        this.detect = detect;
    };


</script>