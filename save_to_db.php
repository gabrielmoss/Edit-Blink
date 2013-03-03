<?php 
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$database ='edit_blink';
	$datatable = 'edit_blink_table';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}
	mysql_select_db($database);

session_start();	
if(isset($_POST['add'])){	
  	$email = "";
  	$text =  ($_POST['text']);
   	$words =  ($_POST['words']);
   	$cost =  ($_POST['cost']);

	$sql = "INSERT INTO $datatable (email,text,words,cost) VALUES('$email','$text',$words,$cost)";
	
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not enter data: ' . mysql_error());
	}
	
	
	if($_SESSION['inside'] == ""||!(isset($_SESSION['inside']))){		
			$query = "select id from $datatable order by id desc limit 0,1";
			$result = mysql_query($query);      
			if(!$result) mysql_error();
				$rows = @mysql_num_rows($result);
			if($rows > 0){
				$_SESSION['inside'] = 1;
				$row = mysql_fetch_array($result, MYSQL_NUM);
				$read = $row[0];
				$_SESSION['id'] =$read;
				
			} 
			else {
				$_SESSION['inside'] = 0;
			}
			header("location:./request-invite.php"); 
	}	
	
}
else if(isset($_POST['edit'])){
	$email = ($_POST['email']);
	$sql = "UPDATE edit_blink_table SET email = '$email' WHERE id=" .$_SESSION['id'];
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not Update data: ' . mysql_error());
	}
	header("location:./thankyou.php");	
}
mysql_close($conn);
?>
