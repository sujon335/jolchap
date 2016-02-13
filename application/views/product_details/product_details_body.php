
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
                                                    <form >

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





                                                        <?php
                                                            $my_count = 1;
                                                            if(isset($card_info)):
                                                            foreach($card_info as $card):
                                                                
                                                        ?>
                                                        
                                                        <div class="form-group">
                                                            <input  type="text"
                                                                    class="abc form-control" id="<?php echo $my_count; ?>"
                                                                    placeholder="Enter Name Here" value="<?php echo $card->text; ?>" >
                                                        </div>
                                                        <?php 
                                                            $my_count++;
                                                            endforeach;                                  
                                                            endif; 
                                                            ?>
                                                        
                                                        <?php for($my_count; $my_count<= 15; $my_count++): ?>
                                                            <div class="form-group">
                                                                <input  type="text"
                                                                    class="abc form-control" id="<?php echo $my_count; ?>"
                                                                    placeholder="Enter Name Here" style="display:none;" >
                                                            </div>
                                                        <?php endfor; ?>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <div class="form-group">
                                                            <button  class="form-control" id="add-another">Add new text box</button>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div><!--/brands_products-->
                                        </div>
                                        <div class="col-md-8">
                                            <div id="myNicPanel" >
                                                <div class="view-product" id="frontcard" style="position:relative">
                                                    <img src="<?php echo base_url(); ?>uploads/<?php echo $product_details['front_side']; ?>" alt="" />
                                                    <img class="drag" id="logo"  src=""
                                                         alt="" style="cursor: move;position: absolute;left: 10px;top: 20px;height:60px; width: 60px; visibility: hidden;">

                                                         <?php
                                                         $i = 1;
                                                         if (isset($card_info)):
                                                             
                                                            // var_dump($card_info);
                                                             
                                                             foreach ($card_info as $card):
                                                                 
                                                         ?>
                                                            <div class="drag" id="div<?php echo $i;?>" 
                                                                 style="cursor: move;position: absolute;
                                                                 font-family: <?php echo $card->font_family ?>;font-size: <?php echo $card->font_size ?>;
                                                                 color: <?php echo $card->color ?>;left: <?php echo $card->left_pos ?>;
                                                                 top: <?php echo $card->top_pos ?>;"
                                                            > <?php echo $card->text; ?></div>

                                                            <?php      
                                                                $i++;
                                                                endforeach;
                                                         endif; ?>
                                                            
                                                         <?php for(;$i<=15;$i++): ?>
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
                                                            Color: <input class="jscolor form-control" type="text" id="color_back" value="000000" style="width: 150px;">
                                                        </div>





                                                        <?php
                                                            $my_count = 1;
                                                            if(isset($card_info)):
                                                            foreach($card_info as $card):

                                                        ?>

                                                        <div class="form-group">
                                                            <input  type="text"
                                                                    class="abc form-control" id="<?php echo $my_count; ?>_back"
                                                                    placeholder="Enter Name Here" value="<?php echo $card->text; ?>" >
                                                        </div>
                                                        <?php
                                                            $my_count++;
                                                            endforeach;
                                                            endif;
                                                            ?>

                                                        <?php for($my_count; $my_count<= 15; $my_count++): ?>
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
                                                    <img class="drag" id="logo_back" src=""
                                                         alt="" style="cursor: move;position: absolute; visibility: hidden;left: 10px;top: 20px;height:60px; width: 60px;">

                                                         <?php
                                                         $i = 1;
                                                         if (isset($card_info)):

                                                            // var_dump($card_info);

                                                             foreach ($card_info as $card):

                                                         ?>
                                                            <div class="drag" id="div<?php echo $i;?>_back"
                                                                 style="cursor: move;position: absolute;
                                                                 font-family: <?php echo $card->font_family ?>;font-size: <?php echo $card->font_size ?>;
                                                                 color: <?php echo $card->color ?>;left: <?php echo $card->left_pos ?>;
                                                                 top: <?php echo $card->top_pos ?>;"
                                                            > <?php echo $card->text; ?></div>

                                                            <?php
                                                                $i++;
                                                                endforeach;
                                                         endif; ?>

                                                         <?php for(;$i<=15;$i++): ?>
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
                        <?php
                        $is_logged_in = $this->session->userdata('is_logged_in_user');
                        if (!isset($is_logged_in) || $is_logged_in != TRUE) {
                        ?>

                            <a  id="save_btn_temp" class="btn btn-block btn-success" href="<?php echo base_url(); ?>index.php/login">Save Design</a>

                        <?php } else {
                        ?>
                            <a id="save_btn_user" class="btn btn-block btn-success" href="<?php echo base_url(); ?>index.php/myCards">Save Design</a>
                        <?php } ?>
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
                                        //event.preventDefault();

                                        var product_id=<?php echo $product_details['id'] ?>;
                                        var dimension=$("#dim").val();
                                        var paper=$("#paper").val();
                                        var lamination=$("#lamination").val();
                                        var jsonObj=[];
                                        var design_item={};
                                        design_item["product_id"]=product_id;
                                        design_item["dimension"]=dimension;
                                        design_item["paper"]=paper;
                                        design_item["lamination"]=lamination;
                                        var logo_front=$("#logo").css("src");
                                        var logo_back=$("#logo_back").css("src");
                                        design_item["logo_front"]=logo_front;
                                        design_item["logo_back"]=logo_back;
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
                                            url: "<?php echo base_url(); ?>" + "index.php/product_details/save_design_user",
                                            data:  {card_data: jsonString},
                                            success: function(data) {
                                                //
                                                //
                                                //
                                               alert('success json data: '+data);
                                            }
                                        });

                                    });
                                });
                            </script>


                            <script type="text/javascript">

                                // Ajax post
                                $(document).ready(function() {
                                    $("#save_btn_temp").click(function(event) {
                                        // event.preventDefault();

                                        var product_id=<?php echo $product_details['id'] ?>;
                                        var dimension=$("#dim").val();
                                        var paper=$("#paper").val();
                                        var lamination=$("#lamination").val();
                                        var jsonObj=[];
                                        var design_item={};
                                        design_item["product_id"]=product_id;
                                        design_item["dimension"]=dimension;
                                        design_item["paper"]=paper;
                                        design_item["lamination"]=lamination;
                                        var logo_front=$("#logo").css("src");
                                        var logo_back=$("#logo_back").css("src");
                                        design_item["logo_front"]=logo_front;
                                        design_item["logo_back"]=logo_back;
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
                                            url: "<?php echo base_url(); ?>" + "index.php/product_details/save_design_temp",
                data:  {card_data: jsonString},
                success: function(data) {
                    alert('success json data: '+data);
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

