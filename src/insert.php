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
$shampoo=$_POST["shampoo"];
$sunscreen=$_POST["sunscreen"];
$perfume=$_POST["perfume"];
$faceoil=$_POST["faceoil"];
$moisturizer=$_POST["m"];
$bodybutter=$_POST["bodybutter"];
$facemask=$_POST["facemask"];
$serum=$_POST["serum"];
$lotion=$_POST["lotion"];

require __DIR__ . '/db_config.php';
$db=mysqli_connect($db_host,$db_user,$db_pass);
mysqli_select_db($db,$db_name);
$q1="select * from buy where name='$name'";
$result=mysqli_query($db,$q1);
if(mysqli_num_rows($result)>0)
{
$q2="update buy set shampoo='$shampoo',sunscreen='$sunscreen',perfume='$perfume',faceoil='$faceoil',moisturizer='$moisturizer',bodybutter='$bodybutter',facemask='$facemask',serum='$serum',lotion='$lotion' where name ='$name'";
mysqli_query($db,$q2);
}
else
{$q3="insert into buy (name,shampoo,sunscreen,perfume,faceoil,moisturizer,bodybutter,facemask,serum,lotion)values ('$name','$shampoo','$sunscreen','$perfume','$faceoil','$moisturizer','$bodybutter','$facemask','$serum','$lotion')";
mysqli_query($db,$q3);
}
$q4="select * from buy where name='$name' ";
$r=mysqli_query($db,$q4);

print("<table border='10'>");

while($a=mysqli_fetch_row($r)){

foreach($a as $v)
print("<th style='width:400px ; height:50px'> $v</th>");
print("</tr>");
}
print("</table>");
$total=0;

if($_POST["country"]=='J')
	$total=$total+2;
elseif($_POST["country"]=='P')
    $total=$total+3;
elseif($_POST["country"]=='S')
    $total=$total+4	;
elseif($_POST["country"]=='I')
    $total=$total+5;
elseif($_POST["country"]=='L')
    $total=$total+4;
elseif($_POST["country"]=='SA')
    $total=$total+5;
	
if($_POST["shampoo"])
	$total=$total+3;
if($_POST["sunscreen"])
	$total=$total+15;
if($_POST["perfume"])
	$total=$total+10;
if($_POST["faceoil"])
	$total=$total+5;
if($_POST["m"])
	$total=$total+14;
if($_POST["bodybutter"])
	$total=$total+20;
if($_POST["facemask"])
	$total=$total+5;
if($_POST["serum"])
	$total=$total+14;
if($_POST["lotion"])
	$total=$total+10;
print("<h3><br>the total price is: $total</h3>");


print("<form method='POST' action='delete.php'>");
print("<label>if you want to delete the purchase insert your name  ");
print("<input type='text' name='name' ></label>");
print("<input type='submit' value='delete' >");


?>


</body>
</html>