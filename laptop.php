<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

    include 'header.php';


?>
</head>
<body>
    <div class="container-fluid">
        <div class="col-md-12">
        <div class="row">

      

<h1 class="text-warning text-center my-3">Laptop</h1>


<?php

include 'conn.php';
$sql = "SELECT*FROM `product detail`";
$result2 = mysqli_query($conn, $sql);

while($fetch = mysqli_fetch_assoc($result2)){

$checkpage = $fetch['category'];
if($checkpage === 'laptop'){

    echo "

<div class='col-md-6 col-lg-4 m-auto mb-3'>


<form action='insertcart.php' method='POST'>
<div class='card m-auto' style='width: 18rem;'>
  <img src='$fetch[pimage]' class='card-img-top m-auto' style = 'width: 170px; height: 280px''>
  <div class='card-body text-center'>
    <h5 class='card-title fs-4 text-danger fw-bold'>$fetch[pname]</h5>
    <p class='card-text fs-4 text-danger fw-bold'>RS: $fetch[pprice]</p>
    <input type='hidden' name='pname' value='$fetch[pname]' >
    <input type='hidden' name='pprice' value='$fetch[pprice]' >
    <input type='number' name='pquntity' value = ' min '1'  max = '20' ' placeholder ='qunatity'><br><br>
    
    <input type='submit' name='addcart' class='btn btn-danger text-white w-100' value= 'add to cart'>
    
  </div>
</div>
</form>
</div>
";
}
}
?>

</div>
    </div>
</div>
<?php
include 'footer.php';

?>
</body>
</html>