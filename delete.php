<?php

echo $Id = $_GET['ID'];

include 'conn.php';
mysqli_query($conn, "DELETE FROM `product detail` WHERE id = $Id");
header("location:product.php");


?>