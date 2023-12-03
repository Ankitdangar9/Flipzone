<?php

echo $Id=$_GET['ID'];
$Servername="localhost";
$username="root";
$password="";
$database="onlion";
$conn = mysqli_connect($Servername, $username, $password, $database); 
mysqli_query($conn, "DELETE FROM `login1` WHERE id=$Id");
header('location:user.php');

?>