<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/thankyouscript.js"></script>
<title>Edit Blink</title>
<?php
session_start();
if( $_SESSION['inside'] == "" || !(isset($_SESSION['inside']))){
	header("location:./index.php"); 
}
?>
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
          	<h2>Thank you so much for helping us create Edit Blink. </h2>
          	<p>Edit Blink is currently in production and your participation is helping us make sure were creating something people want. </p>
          	<p>Edit Blink is not available to everyone just yet. If you would like to request an invitation to be one of our beta testers, and get access to Edit Blink before everyone else, please sign up below. </p>
          </div>
          <form action="save_to_db.php" method="post">
          <div class="request-invite">
          		<div class="email">
                	<span><input type="text" name="email" value="Email" /></span>
                </div>
                <div class="submit">
                	<span><input type="submit" name="edit" value="Request Invite" /></span>
                </div>
          </div>  
          </form>        
   	  </div>
    </div>
</div>
</body>
</html>
