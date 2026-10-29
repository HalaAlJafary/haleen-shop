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

$name=$_POST["name"];
require __DIR__ . '/db_config.php';
$db=mysqli_connect($db_host,$db_user,$db_pass);
mysqli_select_db($db,$db_name);
$q="delete from buy where name='$name' ";
mysqli_query($db,$q);

print("<h1>the purchase was successfully delete !!</h1>");
?>


</body>
</html>
