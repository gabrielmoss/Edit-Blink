<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/homescript.js"></script>
<?php
session_start();
if($_SESSION['inside'] != ""||!isset($_SESSION['inside'])){
	$_SESSION['inside']="";	
}
?>
<title>Untitled Document</title>
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
    	<div class="home">
       	  <div class="text">
          	<p>Edit Blink is the fast, easy way to proofread your writing. For just 3¢ a word, your work will be corrected by two professional proofreaders and be back to you within an hour or it's free.</p>
          </div>
          <div class="form-text" >
          <form action="save_to_db.php" method="post">
          	<div class="input-textarea">
            	<div class="textarea-bg-top">
                	<div class="textarea-bg-bottom">
                    	<textarea name="text" id="jScrollPaneDemo" cols="72" rows="20" >Paste your text here to begin...</textarea>
                    </div>
                </div>            	
            </div>
            <div class="count-bar clearfix">
            	<div class="words">
                	<span>
                    	<label>Words</label><input name="words"  readonly="readonly" type="text"  value="" />
                    </span>    
                </div>
                <div class="rate">
                	<span>
                		<label>Rate</label><input name="rate"  readonly="readonly" type="text" value="3¢" />
                    </span>    
                </div>
                <div class="cost">
                	<span>
                		<label>Cost</label><input name="cost"  readonly="readonly" type="text"  />
                    </span>    
                </div>
                <div class="pay">
                	<span>                		
                		<input type="submit" name="add" value="Pay" />
                    </span>    
                </div>
            </div>
          </form>	
          </div>
      	</div>
    </div>
</div>
</body>
</html>
