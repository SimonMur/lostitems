<head>
</head>
<body>
  <nav class="navbar navbar-default" role="navigation"> 
        <div class="navbar-header"> 
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                 <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span>
                 <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="#">Lost ID</a> 
        </div> 
     <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo site_url('welcome/index'); ?>">Home</a></li>
			  <li  ><a href="<?php echo site_url('reportlost/index'); ?>">Report Lost ID</a></li>
			  <li><a href="<?php echo site_url('about/index'); ?>">About</a></li>
			  <li><a href="<?php echo site_url('tips/index'); ?>">Tips</a></li>
			  <li><a href="<?php echo site_url('contact/index'); ?>">Contact</a></li>
                </ul> 
        </div> 
    </nav>
		<div class="home"style="margin-top:0px;padding-top:0px;">
	<br>
    <div class="row">
    <div class="col-md-12">
		<div class="col-md-2"></div>
     <div class="col-md-8">
	  <div class="panel panel-primary"> 
            <div class="panel-heading"style="background-color:#009933;"> 
                <h3 class="panel-title text-center">Search Results</h3> 
            </div> 
            <div class="panel-body"style="background-color:black;margin-bottom:0px;"> 
			<?php if ( ! is_null($results)): ?>
             <?php if (count($results)): ?>
			 <?php foreach($results as $found):?>
			 <br>
			 <br>
			 <p class="text-center"style="color:white"><b>Id Number :</b> <?php echo $found->Id_Number?></p>
			 <p class="text-center"style="color:white"><b>Place Found :</b> <?php echo $found->Place_Found?></p>
			 <br>
			  <p class="text-center"style="color:white"><b>Give Us your Contact Details to enable Us deliver your ID</b></p>
			  <hr>
			   <?php
			 $attributes=array("class" => "form-horizontal", "id" => "detailsform", "name" => "detailsform");
			 echo form_open("usercontacts/index", $attributes);?>
			 <fieldset>
		     <div class="form-group"> 
              <label for="firstname" class="col-sm-3 control-label"> Name</label> 
              <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo set_value('name');?>" 
				id="name"  name="name" placeholder="Enter Your  Name"/> 
				      <span class="text-danger"><?php echo form_error('name'); ?></span>
              </div> 
          </div>
		     <div class="form-group"> 
              <label for="firstname" class="col-sm-3 control-label">Email</label> 
              <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo set_value('email');?>" 
				id="email"  name="email" placeholder="Enter Your Email"/> 
				      <span class="text-danger"><?php echo form_error('email'); ?></span>
              </div> 
          </div>
		            <div class="form-group">
               <label for="IdNumber" class="col-sm-3 control-label">Phone Number</label> 
              <div class="col-sm-9"> 
                   <input type="text" class="form-control" value="<?php echo set_value('PNo');?>" 
				id="PNo"  name="PNo" placeholder="Enter your Phone Number"/> 
				      <span class="text-danger"><?php echo form_error('PNo'); ?></span>
                   </div>
               </div>
			   <div class="form-group">
                <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary btn-md btn-block" value="Submit" style="background-color:#FF0000;margin-bottom:0px;"/>
            </div>
         </fieldset>
        <?php echo form_close(); ?>
			 <?php endforeach;?>
			 <?php else: ?>
    <p style="color:#FFFFFF"><b style="color:#FF0000"><b>Sorry! There are no matching results for ID Number <?php echo $this->input->post('IdNo') ?>.</b></b>
  <b>Fill in the form below to submit your lost ID details and receive notification once the ID is found</b>
	</p>
             <?php
			 $attributes=array("class" => "form-horizontal", "id" => "detailsform", "name" => "detailsform");
			 echo form_open("reportlost/check", $attributes);?>
			 <fieldset>
          <div class="form-group"> 
              <label for="firstname" class="col-sm-3 control-label">SurName</label> 
              <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo set_value('surname');?>" 
				id="surname"  name="surname" placeholder="Enter your  SurName"/> 
				      <span class="text-danger"><?php echo form_error('surname'); ?></span>
              </div> 
          </div>
		     <div class="form-group"> 
              <label for="firstname" class="col-sm-3 control-label">First Name</label> 
              <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo set_value('firstname');?>" 
				id="surname"  name="firstname" placeholder="Enter Your First Name"/> 
				      <span class="text-danger"><?php echo form_error('firstname'); ?></span>
              </div> 
          </div>
		     <div class="form-group"> 
              <label for="firstname" class="col-sm-3 control-label">Second Name</label> 
              <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo set_value('secondname');?>" 
				id="surname"  name="secondname" placeholder="Enter Your Second Name"/> 
				      <span class="text-danger"><?php echo form_error('secondname'); ?></span>
              </div> 
          </div>
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
                   <input type="text" class="form-control" value="<?php echo set_value('PNo');?>" 
				id="IdNo"  name="PNo" placeholder="Enter your Phone Number"/> 
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
                <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary btn-md btn-block" value="Submit" style="background-color:#FF0000;margin-bottom:0px;"/>
            </div>
         </fieldset>
        <?php echo form_close(); ?>
       
<p class="text-center"style="color:white">These details are considered confidential and will be shared with no Parties</p>
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
<!---Home-->	  
</body>  <!-- START FOOTER SECTION -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="footer_area">
            <p>Designed By <a href="http://www.webcloudkenya.com" rel="nofollow"target="_blank">Webcloud Kenya Ltd</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- END FOOTER SECTION -->
</body>