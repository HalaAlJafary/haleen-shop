<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title> HALEEN SHOP </title> 
</head>

<body STYLE="background-color:mistyrose">

<?php
$user=$_POST["user"];
$pass=$_POST["pass"];
require __DIR__ . '/db_config.php';
$db=mysqli_connect($db_host,$db_user,$db_pass);
mysqli_select_db($db,$db_name);
$q="select * from info where user='$user' and pass='$pass'";
$result=mysqli_query($db,$q);

if( mysqli_num_rows($result)>0)
	print("<a href='project.html' > press here to continue! </a>");
else
	print("there is a problem !! <a href='signinpage.html' > make a new account </a>");

?>


</body>
</html>
