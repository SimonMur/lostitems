
<body>
 
		<div class="home" style="margin-top:0px;padding-top:0px;">
	<br>
    <div class="row">
    <div class="col-md-12">
     <div class="col-md-8">
	  <div class="panel panel-primary"> 
            <div class="panel-heading" style="background-color:#009933;"> 
                <h3 class="panel-title text-center">User Contacts</h3> 
            </div> 
            <div class="panel-body" style="background-color:black;margin-bottom:0px; display: block;"> 
			   <?php
			 $attributes=array("class" => "form-horizontal", "id" => "detailsform", "name" => "detailsform");
			 echo form_open("usercontacts/index", $attributes);?>
			 <fieldset>
       <div class="form-group"> 
              <label for="firstname" class="col-sm-3 control-label">Confirm Documnet No.</label> 
           
                <input type="text" style="display: none;" class="form-control" value="<?php echo $found->name?>" 
        id="name"  name="docname" placeholder="Enter Documnet Number"/> 
              <span class="text-danger"><?php echo form_error('docname'); ?></span>
              
          </div>
          <div class="form-group"> 
              <label for="firstname" class="col-sm-3 control-label">Confirm Documnet No.</label> 
           
                <input type="text" style="display: none;" class="form-control" value="<?php echo $found->user_id?>" 
        id="name"  name="id" placeholder="Enter Documnet Number"/> 
              <span class="text-danger"><?php echo form_error('id'); ?></span>
              
          </div>
  <div class="form-group"> 
              <label for="firstname" class="col-sm-3 control-label">Confirm Documnet No.</label> 
           
                <input type="text" class="form-control" value="<?php echo set_value('IdNo');?>" 
        id="name"  name="IdNo" placeholder="Enter Documnet Number"/> 
              <span class="text-danger"><?php echo form_error('id_number'); ?></span>
             
          </div>
         <div class="form-group"> 
              <label for="firstname" class="col-sm-3 control-label"> Name</label> 
           
                <input type="text" class="form-control" value="<?php echo set_value('name');?>" 
        id="name"  name="name" placeholder="Your full name as it appers on the document"/> 
              <span class="text-danger"><?php echo form_error('name'); ?></span>
             
          </div>
         <div class="form-group"> 
              <label for="firstname" class="col-sm-3 control-label">Email</label> 
              
                <input type="text" class="form-control" value="<?php echo set_value('email');?>" 
        id="email"  name="email" placeholder="Enter Your Email"/> 
              <span class="text-danger"><?php echo form_error('email'); ?></span>
              
          </div>
                <div class="form-group">
               <label for="IdNumber" class="col-sm-3 control-label">Phone Number</label> 
         
                   <input type="text" class="form-control" value="<?php echo set_value('PNo');?>" 
        id="PNo"  name="PNo" placeholder="Enter your Phone Number"/> 
              <span class="text-danger"><?php echo form_error('PNo'); ?></span>
                 
               </div>
         <div class="form-group">
                <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary btn-md btn-block" value="Submit and Verify" style="background-color:#009933;margin-bottom:0px; padding: 8px; border-radius: 30px; border: 3px solid green; width: 50%; margin-left: 25%;"/>
            </div>
         </fieldset>
		 			
<p class="text-center"style="color:white">These details are considered confidential and will be shared with no one</p>
        <?php echo form_close(); ?>
<br>
			</div><!---Panel-body-->
			</div><!---Panel primary--->
	 </div><!---Col-md-8--->
	 <div class="col-md-2"></div>
    </div>
    </div>
    <!---row-->

</div>
<!---Home-->	  
</body>  <!-- START FOOTER SECTION -->
 