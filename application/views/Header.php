<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
  <head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="googlebot" content="index,follow">

    <!-- Title -->
    <title>ZeroERP Education</title>

    <!-- Templates core CSS -->
	<link href="<?=base_url();?>stylesheets/application.css" rel="stylesheet">
	<link href="<?=base_url();?>scss/custom.css" rel="stylesheet">
	<link href="<?=base_url();?>scss/extracss/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url();?>scss/navbar.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url();?>/scss/extracss/xenon-core.css">

	
    <!-- Favicons -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <!-- Navbar -->
	 <link href="<?=base_url();?>stylesheets/navbar.css" rel="stylesheet">
	 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  </head>
  
  
  
  <!-- NAVBAR
================================================== -->
 
<!--<div class="navbar-wrapper">-->
    <nav class="navbar navbar-default navbar-fixed-top">
      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="min-height: inherit" href="<?=base_url();?>Front/index">ZeroERP Education</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
           
           
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <!--<li><a href="<?=base_url();?>Front/index">Why ZeroERP Education</a></li>-->
                <li><a href="<?=base_url();?>Front/feature">Feature Tour</a></li>
                <!--<li><a href="<?=base_url();?>Front/index">Mobile</a></li>-->
              
              </ul>
            </li>
			
			 <li><a href="http://junctiondev.cloudapp.net/appmanager/login/registration_application?id=School">Register and Use free</a></li>
				  
			 <li><a href="<?=base_url();?>Front/About">Company</a></li>
				  
            <li><a href="<?=base_url();?>Front/Contactus">Contact us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?=base_url();?>Front/form" class="btn btn-danger" style="background-color:#E58121; color:white;border-color:#E58121" role="button"> ANY QUERY
           </span></a></li>
		   <!--<li><img src="<?=base_url();?>images/feature_icon/42.png"> </li>-->
          </ul>
        </div><!--/.nav-collapse -->
    
    </nav>
	
<!--<div class="modal hide" id="myModal"><!-- note the use of "hide" class 
  <div class="modal-header">
    <button class="close" data-dismiss="modal">×</button>
    <h3>Call Us Now</h3>
  </div>
  <div class="modal-body">
    <p>>+91 755 405 3276<br>+91 810 906 9226</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Close</a><!-- note the use of "data-dismiss" 
    <a href="#" class="btn btn-primary">Save changes</a>
  </div>
</div>​-->