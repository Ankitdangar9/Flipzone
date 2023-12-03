<?php

if(isset($_POST['upload'])){
    include 'conn.php';

    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pages = $_POST['pages'];
    $product_image=$_FILES['pimage'];
    $image_loc = $_FILES['pimage']['tmp_name'];
    $image_name = $_FILES['pimage']['name'];
    $img_des = "productimage/".$image_name; 


    move_uploaded_file($image_loc, "productimage/".$image_name);
    $product_catogory = $_POST['pages'];

    $sql2 = "INSERT INTO `product detail` (`pname`, `pprice`, `pimage`, `category`) VALUES ('$pname','$pprice','$img_des','$pages')";
    mysqli_query($conn, $sql2);

    header('location:product.php');

   


   
   
   
    
   
}

?>


