
	 <body>
 
    <div class="home" style="margin-top:0px;padding-top:0px;">

    <div class="container">
   

     <div class="results-form">
    <div class="panel panel-primary"> 
            <button class="panel-heading" style="background-color:#009933;width: 100%; border: 0px; "  id="showSearch"> 
                <h4 class="panel-title text-center">Your Search Results</h4> 
            </button>
            <div class="panel-body" style="background-color:white;margin-bottom:0px; display: block;"> 
 <div style="text-align: center;">
       <span class="fa fa-times"></span>
       </div>
       <hr>
       <div style="text-align: center;">
    <p style="color:#FFFFFF"><b style="color:#FF0000"><b>Sorry! There are no matching results for Document Number <?php echo $this->input->post('IdNo') ?>.</b></b>
<hr>
  <p style="color: rgba(0,0,0,0.8); text-transform: uppercase;">Fill in the form below to submit your lost ID details and receive notification once the ID is found</p>
  </p>
 </div>
             <?php
       $attributes=array("class" => "form-horizontal", "id" => "detailsform", "name" => "detailsform");
       echo form_open("reportlost/index", $attributes);?>
       <fieldset>
          
         <div class="form-group"> 
              <label for="firstname" class="col-sm-3 control-label">Full name as they appear on </label> 
             
                <input type="text" class="form-control" value="<?php echo set_value('firstname');?>" 
        id="surname"  name="firstname" placeholder="Enter Full as it appears on the doc"/> 
              <span class="text-danger"><?php echo form_error('firstname'); ?></span>
             
          </div>
         
                <div class="form-group">
               <label for="IdNumber" class="col-sm-3 control-label">ID Number</label> 
              
                   <input type="text" class="form-control" value="<?php echo set_value('IdNo');?>" 
        id="IdNo"  name="IdNo" placeholder="Enter the ID Number"/> 
              <span class="text-danger"><?php echo form_error('IdNo'); ?></span>
                   
               </div>
                <div class="form-group">
               <label for="IdNumber" class="col-sm-3 control-label">Phone Number</label> 
           
                   <input type="text" class="form-control" value="<?php echo set_value('PNo');?>" 
        id="IdNo"  name="PNo" placeholder="Enter your Phone Number"/> 
              <span class="text-danger"><?php echo form_error('PNo'); ?></span>
                
               </div>
                <div class="form-group">
               <label for="IdNumber" class="col-sm-3 control-label">Email Address</label> 
         
                   <input type="text" class="form-control" value="<?php echo set_value('Email');?>" 
        id="IdNo"  name="Email" placeholder="Enter your Email Address"/> 
              <span class="text-danger"><?php echo form_error('Email'); ?></span>
                 
               </div>
                   <div class="form-group">
               <label for="IdNumber" class="col-sm-3 control-label">Date Lost</label> 
              
                   <input type="text" class="form-control" value="<?php echo set_value('datelost');?>" 
        id="datepicker"  name="date" size="30" placeholder="Enter the date Lost"/> 
              <span class="text-danger"><?php echo form_error('date'); ?></span>
                 
               </div>
         <div class="form-group">
                <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary btn-md btn-block" value="Submit" style="background-color:#3CE17B; border: solid green; border-radius: 40px;margin-bottom:0px; width:50%; padding: 10px; margin-left: 25%"/>
            </div>
         </fieldset>
        <?php echo form_close(); ?>
       
<p class="text-center" style="color: rgba(0,0,0,0.8);">These details are considered confidential and will be shared with no Parties</p>
</div>
</div>
</div>
</div>
</div>
</body>