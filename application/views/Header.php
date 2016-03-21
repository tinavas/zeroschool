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
	
	
	<!--<link rel="stylesheet" href="<?=base_url();?>/scss/extracss/bootstrap.css">-->
	<link rel="stylesheet" href="<?=base_url();?>/scss/extracss/xenon-core.css">
	<link rel="stylesheet" href="<?=base_url();?>/scss/extracss/xenon-forms.css">
	<link rel="stylesheet" href="<?=base_url();?>/scss/extracss/xenon-components.css">
	<link rel="stylesheet" href="<?=base_url();?>/scss/extracss/xenon-skins.css">	
	
	
	
    <!-- Favicons -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="<?=base_url();?>images/favicon/favicon.png" rel="shortcut icon">
    <link href="<?=base_url();?>images/favicon/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
    <link href="<?=base_url();?>images/favicon/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="<?=base_url();?>images/favicon/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="114x114">


	
    <!-- Navbar -->
	 <link href="<?=base_url();?>stylesheets/navbar.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Modernizr Scripts -->
    <script src="<?=base_url();?>javascript/vendor/modernizr-2.7.1.min.js"></script>
	 <script src="http://code.jquery.com/jquery.js"></script>
<script type="text/javascript">
$(function() {
  $('img').on('click','.closePopup', function() {
    $('.popupElement').remove()
  });

  $(window).resize(function() {
    var popup = $('#popupWindow');
    if (popup.length > 0) {
      centerPopup();
    }
  });

  $('a').click(function(e) {
    e.preventDefault();
    var popup = $('<div/>').attr('id','popupWindow').addClass('popup').addClass('popupElement').css({left: '-999px'});
    var html = '<a class="closePopup"></a><img src="' + $(this).attr('href') + '" /><div class="action"></div>';
    popup.html(html);
    $('body').append(popup);
    centerPopup();
  });
});

function centerPopup()
{
  var popup = $('#popupWindow');
  var left = ($(window).width() - popup.width()) >> 1;
  var top = ($(window).height() - popup.height()) >> 1;
  popup.css({left: left + 'px', top: top + 'px'});
}
</script>
<style type="text/css">

.popup {
  background: #fff;
  border: 2px solid #333;
  border-radius: 5px;
  padding: 10px;
  position: absolute;
  z-index: 1000;
}
.popup img {
  display: block;
  margin-bottom: 15px;
}
.popup div.action {
  text-align: right;
}
.popup div.action input {
  background: red;
  color: white;
  border: red;
}
.closePopup {
	position: absolute;
	display: block;
	width: 32px;
	height: 32px;
	background: url(images/close-button.png) no-repeat 0 0;
	right: -16px;
	top: -16px;
}
</style>
</head>
<body>
<p>Call Us Now <br>+91 755 405 3276<br>+91 810 906 9226</p>
</body>
	
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
          <a class="navbar-brand" href="<?=base_url();?>Front/index">ZeroERP Education</a>
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
			     <li><a href="<?=base_url();?>Front/About">Company</a></li>
				  
            <li><a href="<?=base_url();?>Front/Contactus">Contact us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?=base_url();?>Front/form" class="btn btn-danger" style="background-color:#E58121; color:white;border-color:#E58121" role="button"> TRY OUR DEMO
           </span></a></li>
		   <li><img src="<?=base_url();?>images/feature_icon/42.png"><a href="<?=base_url();?>Front/new"> </li>
          </ul>
        </div><!--/.nav-collapse -->
    
    </nav>
	
<div class="modal hide" id="myModal"><!-- note the use of "hide" class -->
  <div class="modal-header">
    <button class="close" data-dismiss="modal">×</button>
    <h3>Call Us Now</h3>
  </div>
  <div class="modal-body">
    <p>>+91 755 405 3276<br>+91 810 906 9226</p>
  </div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Close</a><!-- note the use of "data-dismiss" -->
    <a href="#" class="btn btn-primary">Save changes</a>
  </div>
</div>​