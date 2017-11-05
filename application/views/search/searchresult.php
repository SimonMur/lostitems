
<body>
 
		<div class="home" style="margin-top:0px;padding-top:0px;">

    <div class="container">
   

     <div class="results-form">
	  <div class="panel panel-primary"> 
            <button class="panel-heading" style="background-color:#009933;width: 100%; border: 0px; "  id="showSearch"> 
                <h4 class="panel-title text-center">Your Search Results</h4> 
            </button>
            <div class="panel-body" style="background-color:white;margin-bottom:0px; display: block;"> 
			<?php if ( ! is_null($results)): ?>
             <?php if (count($results)): ?>
			 <?php foreach($results as $found):?>
        <div style="text-align: center;">
			 <span class="fa fa-check"></span>
       </div>
       <hr>

       <p style="text-align: center; font-weight: 900;">You're are lucky, Document Number : <?php echo $found->id_number?> FOUND!!</p>
       <p class="text-center" style="color:rgba(0,0,0,0.7); text-transform: uppercase; font-size: 15px; font-weight: 900; color: green; display: none;"> <?php echo $found->name?></p>
       <div class="col-md-4">
			 <p class="text-center" style="color:rgba(0,0,0,0.7); text-transform: uppercase; font-size: 15px; font-weight: 900; color: green;"> <?php echo $found->id_number?></p>
       </div>
        <div class="col-md-4">
			 <p class="text-center" style="color:rgba(0,0,0,0.7); text-transform: uppercase;"><b>County:</b> <?php echo $found->county_id?></p>
       </div>
        <div class="col-md-4">
        <p class="text-center" style="color:rgba(0,0,0,0.7); text-transform: uppercase;"><span class="fa fa-map-marker"></span> <?php echo $found->location?></p>
		</div>

    <hr>
			  <p class="text-center" style="color:rgba(0,0,0,0.7); text-transform: uppercase;"><b>Fill in your contact details</b></p>
			  <hr>
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
        <?php echo form_close(); ?>
			 <?php endforeach;?>
			 <?php else: ?>
        
    <?php endif ?>
<?php endif ?>
			</div><!---Panel-body-->
			</div><!---Panel primary--->
	 </div><!---Col-md-8--->
	 <div class="col-md-2"></div>
    </div>
    </div>
    <!---row-->
</div>

</body>