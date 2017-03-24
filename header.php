<?php
error_reporting('E_ALL ^ E_NOTICE');
global $ISO_common,$pageClass,$title;
?>
<?php
error_reporting('E_ALL ^ E_NOTICE');
?>
<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="en" class="ie7 no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title><?php echo $title ?> | AutoLoanSaver.com</title>
		<link rel="stylesheet" type="text/css" href="/components/assets/css/main.min.css" />
    <link rel="stylesheet" type="text/css" href="/components/assets/css/superslides.css" />    
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,500italic,400italic,700,700italic' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css" />
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script type="text/javascript" src="/components/assets/js/scripts-head.min.js"></script>
    <script type="text/javascript" src="/components/assets/js/scripts.min.js"></script>
    <script type="text/javascript" src="/components/assets/js/slideshow/jquery.superslides.js"></script>
    <script type="text/javascript" src="/components/assets/js/carousel/owl.carousel.min.js"></script>
		<link rel="shortcut icon" href="/components/assets/img/favicon.ico?v=1" />
		<script>document.documentElement.className = document.documentElement.className.replace('no-js', 'js');</script>

    <script type="text/javascript">
    function _init() {}
    </script>

<?php
wp_head();
?>

</head>                 
	          
<body class="<?php echo $pageClass ?>" onload="_init()">

  <div class="top homepage-top">
<?php
if ( $title == "Homepage" ) {
?>
    <div class="bg"></div>
    <div class="text-label">Get a Car Loan Approved Online.</div>
<?php
}
?>
    <div class="container">
      <a href="/" id="logo" style="display:none;">
    	<img src="/components/assets/img/logo.png" alt="AutoLoanSaver.com" />
    	</a>  
            