<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
$id= $_GET['ID'];   
include 'conn.php';
$record1 = mysqli_query($conn,"SELECT * FROM `product detail` WHERE `id` ='$id'");



$data = mysqli_fetch_array($record1);



?>

<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto border border-primary mt-3">

     


  <form action="update.php" method="POST" enctype="multipart/form-data">
  

<div class="mb-3">
 <p class="text-center fw-bold fs-3 text-warning">Product update:</p>
</div>

<div class="mb-3">
  <label  class="form-label">Product Name:</label>
  <input type="text" value =" <?php echo $data['pname']    ?>" class="form-control" name="pname" placeholder="Enter product name">
</div>

<div class="mb-3">
  <label  class="form-label">Product Price:</label>
  <input type="text" value = "  <?php echo $data['pprice']    ?>" class="form-control" name="pprice"  placeholder="Product Price">
</div>

<div class="mb-3">
  <label  class="form-label">Add Product Image:</label>
  <input type="file"  name="pimage" class="form-control"  >
  <img src="<?php echo $data['pimage'] ?>"  alt="" srcset="">
</div>

<div class="mb-3">
  <label  class="form-label">Select Page Category:</label>
  <select class="form-select" value = "  <?php echo $data['pages']    ?>" name="pages" aria-label="Default select example">
  <option value="home">Home</option>
  <option value="laptop">laptop</option>
  <option value="bag">bag</option>
  <option value="moabil">mobail</option>
</select>
  
</div>

  
  <input type="hidden" name="id" value = "<?php echo $data['id'] ?>">
  <button name="update" class="bg-danger fs-4 fw-bold my-3 form-control text-white">update</button>


</form>


    
</div>
    </div>
</div>





   






</table>

</div>
  </div>
</div>



<?php

if(isset($_POST['update'])){
    $id=$_POST['id']; 
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pages = $_POST['pages'];
    $product_image=$_FILES['pimage'];
    $image_loc = $_FILES['pimage']['tmp_name'];
    $image_name = $_FILES['pimage']['name'];
    $img_des = "productimage/" .$image_name; 


    move_uploaded_file($image_loc, "productimage/" . $image_name);

    include 'conn.php'; 
    mysqli_query($conn, "UPDATE `product detail` SET `pname`='$pname',`pprice`='$pprice',`pimage`='$img_des',`category`='$pages' WHERE id= $id") or die("failed");
    header("location:product.php");
}



?>
</body>
</html>



