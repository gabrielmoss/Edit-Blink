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
<title>Edit Blink</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39898771-1', 'editblink.com');
  ga('send', 'pageview');

</script>
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
