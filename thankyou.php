<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/thankyouscript.js"></script>
<?php
session_start();
if( $_SESSION['inside'] == "" || !(isset($_SESSION['inside']))){
	header("location:./index.php"); 
}
$_SESSION['inside']="";
?>
<title>Untitled Document</title>
</head>
<body>
<div id="wrapper">
	<div id="header" class="clearfix">
    	<h1><a href="#">Edit <span>Blink</span></a></h1>
    </div>
    <div id="container">
    	<div class="thankyou">
       	  <div class="text">
          	<h2>We are so grateful for your interest in Edit Blink  </h2>
          <p>We are hard at work improving Edit Blink. You will receive an email from us inviting you to join our beta test when we're ready for you. </p>
          </div>
          
      </div>
    </div>
</div>
</body>
</html>
