<?php
$name=$_GET['productName'];
$amount=$_GET['productAmount'];

require_once('connect.php');
 //code form php.net
$query="INSERT INTO `listItems`(`product`, `amount`) VALUES ('$name','$amount')";
$mysqli=new mysqli($serverName, $user, $password, $database);
            
if($mysqli->connect_errno)
{
printf("Connect failed: %s\n", $mysqli->connect_error);
exit();
}
            
$result = $mysqli->query($query);
?>