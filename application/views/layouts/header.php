<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Lost ID</title>
    <meta name="description" content="">
    <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/skdslider.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/animate.css') ?>" rel="stylesheet"> 
	<link href="<?php echo base_url('assets/css/ionicons.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/jquery-ui.theme.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/jquery-ui.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('http://fonts.googleapis.com/css?family=Roboto:400,300,100') ?>" rel="stylesheet">
	<link href="<?php echo base_url('http://code.jquery.com/ui/1.11.0/jquery-ui.js')?>">
    <link href="<?php echo base_url('assets/css/font-awesome.min.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

	<script>
   $(function() {
    $( "#datepicker" ).datepicker();
    $( "#format" ).change(function() {
      $( "#datepicker" ).datepicker( "option", "dateFormat", $( this ).val() );
    });
  });
	</script>
</head>
 <nav class="navbar navbar-default navbar-fixed-top;" role="navigation"> 
 <div class="container">
        <div class="navbar-header"> 
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                 <span class="sr-only">Toggle navigation</span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span>
                 <span class="icon-bar"></span> 
            </button>
            <!-- <a class="navbar-brand" href="#">Lost Id/Passport</a>  -->
        </div> 
     <div class="collapse navbar-collapse" id="example-navbar-collapse">
           <ul class="nav navbar-nav">
           <li><a class="home-link" href="<?php echo site_url('/'); ?>"> <span class="fa fa-th-large"></span></a></li>
      
                </ul>
                <ul class="nav navbar-nav navbar-right">
               <li><a href="<?php echo site_url('/'); ?>"> <span class="fa fa-users"></span> Agents</a></li>
                <li><a href="<?php echo site_url('/'); ?>">Terms</a></li>
                <span class="fa fa-box"></span>
                </ul>
        </div> 
        </div>
    </nav>
<div class="home-product">

    
  <h1 class="main-text">Lost<i style="color: #FF5733;">items</i></h1>
<p class="main-text2">Search and Find your lost documents online. With our wide range of agent you are asured of getting your documents</p>
 
</div>
</html>