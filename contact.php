  

<?php 
 session_start();	
 
$_SESSION["name"]=$_REQUEST["subject"];
$_SESSION["email"]=$_REQUEST["mobile"];
$_SESSION["message"]=$_REQUEST["quantity"];

$g=$_SESSION["name"];
$m=$_SESSION["email"];
$n=$_SESSION["message"];

 require_once('ConnectDB.php');
	$conn=mysql_connect(SERVER,USER,PASSWORD);
	mysql_select_db(DATABASE,$conn);

$query="insert into lunch values('".$g."','".$m."','".$n."')";
mysql_query($query) or die(mysql_error());
  
 
 
echo"Thanks for writing to us";
  header('Location:index.html');
mysql_close($conn);
 ?>
 
 
 