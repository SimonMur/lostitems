<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 
  <script type="text/javascript">
    
    $(document).ready(function(){
      $('#showSearch').on('click', function(){
        $('#searchPanel').toggle('slow');
      })
      $('#showFoundIdForm').on('click', function(){
        $('#foundIdPanel').toggle('slow');
      })
      $('#showReportLost').on('click', function(){
        $('#reportlostPanel').toggle('slow');
      })
    })

  </script>
  

    <div class="container" style="margin-top: 50px;">


            <div class="panel-body" style="border: 0px solid black; margin-top: 30px;" id="searchPanel"> 
             <?php
       $attributes=array("class" => "form-horizontal", "id" => "detailsform", "name" => "detailsform");                          
       echo form_open("searchId/search", $attributes);?>

        
              <div class="form-group">  

    <input type="text" class="form-controla" value="<?php echo set_value('IdNo');?>" 
        id="IdNo"  name="IdNo" placeholder="Enter Doucment Number i.e ID Number, Passport Number, Student Reg No, Your account No(For ATM Cards)" style="; " class="btn-block" value="Search"/><button type="submit" class="search-btn"> <span class="fa fa-search"></span> </button>
       
      <?php echo form_close(); ?>  
            </div>
            
     </div>
      <?php echo $this->session->flashdata('msg'); ?>
   </div>   
  
<div class="container" style="margin-top: 60px;">

       <div class="col-md-6">
        <div class="panel" style=" border: 3px solid white;" > 

       <!--  <i class="fa fa-briefcase font_icon"></i> -->
            <button class="panel-heading" style="background-color:#009933;width: 100%; border: 0px;" id="showFoundIdForm"> 
                <h4 class="panel-title text-center" style=" padding: 10px;">Report a found Document</h4> 
           </button>
            <div class="panel-body" style="display: none;" id="foundIdPanel">
              
             <?php
       $attributes=array("class" => "form-horizontal", "id" => "detailsform", "name" => "detailsform");
       echo form_open("insertdata/index", $attributes);?>
     <div class="col-md-12">
          <div class="form-group"> 
          <!--<form action="mailto:zippwaah@gmail.com" method="post" enctype="text/plain">-->
              <label for="firstname" class="col-sm-3 control-label">ID/Passport name</label> 
          
                <input type="text" class="form-control" value="<?php echo set_value('name');?>" 
        id="surname"  name="name" placeholder="Enter Person's Name on Document"/> 
              <span class="text-danger"><?php echo form_error('name'); ?></span>
           
          </div>
                <div class="form-group">
               <label for="IdNumber" class="col-sm-3 control-label">ID/Passport number</label> 
            
                   <input type="text" class="form-control" value="<?php echo set_value('IdNo');?>" 
        id="IdNo"  name="IdNo" placeholder="Enter ID Number"/> 
              <span class="text-danger"><?php echo form_error('IdNo'); ?></span>
                 
               </div>
       <div class="form-group"> 
              <label for="firstname" class="col-sm-3 control-label">Collectors' Name</label> 
            
                <input type="text" class="form-control" value="<?php echo set_value('collectorsname');?>" 
        id="surname"  name="collectorsname" placeholder="Enter  your name"/> 
              <span class="text-danger"><?php echo form_error('collectorsname'); ?></span>
             
          </div>
               <div class="form-group">
               <label for="lastname" class="col-sm-3 control-label">Collector's Phone Number</label> 
              
                 <input type="text" class="form-control" value="<?php echo set_value('collectorscontact');?>" 
        id="collectorscontact"  name="collectorscontact" placeholder="Enter Your Phone Number"/> 
              <span class="text-danger"><?php echo form_error('collectorscontact'); ?></span>
              
               </div>
       <div class="form-group">
               <label for="lastname" class="col-sm-3 control-label">County Found</label> 
            
                    <?php
           $attributes ='class="form-control" style="color:#46ce31;background-color:transparent;" id = "county"';
        $options = array(
                  ''  => '  ......Select Your County......',
                  'Baringo'  => 'Baringo County',
                  'Bomet'    => 'Bomet County',
                  'Bungoma'   => 'Bungoma County',
                  'Busia' => 'Busia County',
          'Elgeyo Marakwet'  => 'Elgeyo Marakwet County',
                  'Embu'    => 'Embu County',
                  'Garissa'   => 'Garissa County',
                  'Homa Bay' => 'Homa Bay County',
          'Isiolo'  => 'Isiolo County',
                  'Kajiado'    => 'Kajiado County',
                  'Kakamega'   => 'Kakamega County',
                  'Kericho' => 'Kericho County',
          'Kiambu'  => 'Kiambu County',
                  'Kilifi'    => 'Kilifi County',
                  'Kirinyaga'   => 'Kirinyaga County',
                  'Kisii' => 'Kisii County',
          'Kisumu'  => 'Kisumu County',
                  'Kitui'    => 'Kitui County',
                  'Kwale'   => 'Kwale County',
                  'Laikipia' => 'Laikipia County',
          'Lamu'  => 'Lamu County',
                  'Machakos'    => 'Machakos County',
                  'Makueni'   => 'Makueni County',
                  'Mandera' => 'Mandera County',
          'Marsabit'  => 'Marsabit County',
          'Meru'  => 'Meru County',
          'Migori' => 'Migori County',  
          'Mombasa'  => 'Mombasa County',
                  'Muranga'    => 'Muranga County',
                  'Nairobi'   => 'Nairobi County',
                  'Nakuru' => 'Nakuru County',
          'Nandi'  => 'Nandi County',
                  'Narok'    => 'Narok County',
                  'Nyamira'   => 'Nyamira County',
                  'Nyandarua' => 'Nyandarua County',
          'Nyeri'  => 'Nyeri County',
                  'Samburu'    => 'Samburu County',
                  'Siaya'   => 'Siaya County',
                  'Taita Taveta' => 'Taita Taveta County',
          'Tana River'  => 'Tana River County',
                  'Tharaka Nithi'    => 'Tharaka Nithi County',
                  'Trans Nzoia'   => 'Trans Nzoia County',
                  'Turkana' => 'Turkana County',
          'Uasin Gishu'  => 'Uasin Gishu County',
                  'Vihiga'    => 'Vihiga County',
                  'Wajir'   => 'Wajir County',
                  'West Pokot' => 'West Pokot County',
                );

echo form_dropdown('county', $options, 'large', $attributes); ?>
              <span class="text-danger"><?php echo form_error('county');?></span>
                   
               </div>
         <div class="form-group">
               <label for="lastname" class="col-sm-3 control-label">Place Found</label> 
              
                     <input type="text" class="form-control" value="<?php echo set_value('placefound');?>" 
        id="placefound"  name="placefound" placeholder="Enter Place Found"/> 
              <span class="text-danger"><?php echo form_error('placefound'); ?></span>
                  
               </div>
<div class="form-group">
               <label for="IdNumber" class="col-sm-3 control-label">Date Found</label> 
               
                   <input type="text" class="form-control" value="<?php echo set_value('datefound');?>" 
        id="datepicker"  name="date" size="30"placeholder="Enter date Found"/> 
              <span class="text-danger"><?php echo form_error('date'); ?></span>
                 
               </div>
         <div class="form-group">
                <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary btn-md btn-block" value="Submit" style="background-color:#009933;margin-bottom:0px; padding: 8px; border-radius: 30px; border: 3px solid green; width: 50%; margin-left: 25%;"/>
            </div>
       
        <?php echo form_close(); ?>

            </div>
  </div>
</div>
    </div><!--col-md-12-->
    <div class="col-md-6">
      <div class="panel " style="border: 3px solid white;"> 
            <button class="panel-heading" style="background-color:black; width: 100%; border: 0px;" id="showReportLost"> 
                <h4 class="panel-title text-center" style=" padding: 10px;">Become an Agent</h4> 
            </button>
            <div class="panel-body" style="background-color:transparent;display: none;" id="reportlostPanel"> 
       <?php echo $this->session->flashdata('msg'); ?>
       <?php echo $this->session->flashdata('msg2'); ?>
             <?php
       $attributes=array("class" => "form-horizontal", "id" => "detailsform", "name" => "detailsform");
       echo form_open("reportlost/check", $attributes);?>
       <fieldset>
          <!-- <div class="form-group"> 
              <label for="firstname" class="col-sm-3 control-label">SurName</label> 
              <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo set_value('surname');?>" 
        id="surname"  name="surname" placeholder="Enter your  SurName"/> 
              <span class="text-danger"><?php echo form_error('surname'); ?></span>
              </div> 
          </div> -->
         <div class="form-group"> 
              <label for="firstname" class="col-sm-3 control-label">Full Name</label> 
              <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo set_value('firstname');?>" 
        id="surname"  name="firstname" placeholder="Enter Your Full name"/> 
              <span class="text-danger"><?php echo form_error('firstname'); ?></span>
              </div> 
          </div>
        <!--  <div class="form-group"> 
              <label for="firstname" class="col-sm-3 control-label">Second Name</label> 
              <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo set_value('secondname');?>" 
        id="surname"  name="secondname" placeholder="Enter Your Second Name"/> 
              <span class="text-danger"><?php echo form_error('secondname'); ?></span>
              </div> 
          </div> -->
                <div class="form-group">
               <label for="IdNumber" class="col-sm-3 control-label">ID Number</label> 
              <div class="col-sm-9"> 
                   <input type="text" class="form-control" value="<?php echo set_value('IdNo');?>" 
        id="IdNo"  name="IdNo" placeholder="Enter the ID Number"/> 
              <span class="text-danger"><?php echo form_error('IdNo'); ?></span>
                   </div>
               </div>
                <div class="form-group">
               <label for="IdNumber" class="col-sm-3 control-label">Phone Number</label> 
              <div class="col-sm-9"> 
                   <input type="text" class="form-control" value="<?php echo set_value('phonenumber');?>" 
        id="phonenumber"  name="phonenumber" placeholder="Enter your Phone Number"/> 
              <span class="text-danger"><?php echo form_error('PNo'); ?></span>
                   </div>
               </div>
                <div class="form-group">
               <label for="IdNumber" class="col-sm-3 control-label">Email Address</label> 
              <div class="col-sm-9"> 
                   <input type="text" class="form-control" value="<?php echo set_value('Email');?>" 
        id="IdNo"  name="Email" placeholder="Enter your Email Address"/> 
              <span class="text-danger"><?php echo form_error('Email'); ?></span>
                   </div>
               </div>
                   <div class="form-group">
               <label for="IdNumber" class="col-sm-3 control-label">Date Lost</label> 
              <div class="col-sm-9"> 
                   <input type="text" class="form-control" value="<?php echo set_value('datelost');?>" 
        id="datepicker"  name="date" size="30"placeholder="Enter the date Lost"/> 
              <span class="text-danger"><?php echo form_error('date'); ?></span>
                   </div>
               </div>
         <div class="form-group">
                <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary btn-md btn-block" value="Submit" style="background-color:rgba(0,0,0,0.8);margin-bottom:0px; padding: 10px; border-radius: 20px; border: 4px solid black; width: 50%; margin-left: 25%;"/>
            </div>
         </fieldset>
     <p class="text-center" style="color:white">These details are considered confidential and will be shared with no Parties</p>
        <?php echo form_close(); ?>
       
           
             </div>

    </div>
    </div>
    <!---row-->

 





  <!-- <section id="featuresSection"style="margin-top:0px;padding-top:0px;">
 -->
<!-- 
   <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="features_ara">
            <h3>Lost Your ID/Passport or other items?</h3>
            <p style="margin-bottom:5px;">We can help You Trace it back</p>
            <div class="features_responsive"style="margin-top:0px;">
              <div class="row">
                <div class="col-lg-4 col-md-4">
                  <div class="single_features_responsive wow fadeInUp">
                    <!-- <i class="fa fa-desktop desktop_icon"></i> -->
                 <!--    <h2>What We Do</h2>
                    <p>Helping Kenyans trace lost IDs,Passports and other items</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="single_features_responsive wow fadeInUp"style="background-color:#FF0000;">
                 

 -->
 

  </body> 

  
  </div>

  
    <!-- <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="features_ara">
            <h2>Lost Your ID/Passport or other items?</h2>
            <p style="margin-bottom:5px;">We can help You Trace it back</p>
            <div class="features_responsive"style="margin-top:0px;">
              <div class="row">
                <div class="col-lg-4 col-md-4">
                  <div class="single_features_responsive wow fadeInUp">
                    <i class="fa fa-desktop desktop_icon"></i>
                    <h2>What We Do</h2>
                    <p>Helping Kenyans trace lost IDs,Passports and other items</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="single_features_responsive wow fadeInUp"style="background-color:#FF0000;">
                   <i class="fa fa-paste font_icon"></i>
                    <h2>Services</h2>
                    <p>Enabling Kenyans get their ID cards from the Various agents</p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="single_features_responsive wow fadeInUp">
                     <i class="fa fa-credit-card html_icon"></i>
                    <h2>Benefits</h2>
                    <p>Reduced ID replacement Costs and Easy Checking for lost ID's</p>
                  </div>
                </div>
              </div>
            </div>
           </div>
        </div>
      </div>
    </div>   -->
   <!-- START FEATURES PRODUCT AREA -->
 <!-- START FIRST FEATURES PRODUCT -->
     <!--  <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="app_area">
           <div class="container">
              <div class="row">
              <div class="col-lg-7 col-md-7 wow fadeInUp">
                <div class="featprodcs_img app_img">
          <img src="<?php echo base_url('assets/Images/phone.png'); ?>"/>
                </div>
                </div>
                <div class="col-lg-5 col-md-5">
                  <div class="featprodcs_content apparea_content">
                    <h2>Why Use Our Website</h2>
                    <ul class="nav chapterNav">
                      <li><a href="#">Secure</a></li>
                      <li><a href="#">Accurate</a></li>
                      <li><a href="#">Genuine</a></li>
            <li><a href="#">Reliable</a></li>
                    </ul>
                  </div>
                </div>
              </div>
           </div>
          </div>
        </div>
      </div> -->
      <!-- START APP DOWNLOAD AREA -->
    
