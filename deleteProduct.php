<?php
$name=$_GET['product'];

require_once('connect.php');
 //code form php.net
$query="DELETE FROM `listItems` WHERE `product`='$name'";
$mysqli=new mysqli($serverName, $user, $password, $database);
            
if($mysqli->connect_errno)
{
printf("Connect failed: %s\n", $mysqli->connect_error);
exit();
}
            
$result = $mysqli->query($query);
?>