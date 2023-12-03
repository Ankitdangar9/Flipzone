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

<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto border border-primary mt-3">

     


  <form action="cart.php" method="post" enctype="multipart/form-data">
  

<div class="mb-3">
 <p class="text-center fw-bold fs-3 text-warning">Product Detail:</p>
</div>

<div class="mb-3">
  <label  class="form-label">Product Name:</label>
  <input type="text" class="form-control" name="pname" placeholder="Enter product name">
</div>

<div class="mb-3">
  <label  class="form-label">Product Price:</label>
  <input type="text" class="form-control" name="pprice"  placeholder="Product Price">
</div>

<div class="mb-3">
  <label  class="form-label">Add Product Image:</label>
  <input type="file" name="pimage" class="form-control"  >
</div>

<div class="mb-3">
  <label  class="form-label">Select Page Category:</label>
  <select class="form-select" name="pages" aria-label="Default select example">
  <option value="home">Home</option>
  <option value="laptop">laptop</option>
  <option value="bag">bag</option>
  <option value="moabil">mobail</option>
</select>
  
</div>

  
  
  <button name="upload" class="bg-danger fs-4 fw-bold my-3 form-control text-white">upload</button>


</form>


    
</div>
    </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8 m-auto">

    <table class="table table-hover">

<thead>
<th>Id</th>
<th>name</th>
<th>price</th>
<th>image</th>
<th>category</th>
<th>delete</th>
<th>update</th>

</thead>

<tbody class=" text-center">

<?php
 
 include 'conn.php'; 
 $sql2 = "SELECT*FROM `product detail`";
 
   $result2 = mysqli_query($conn, $sql2);
   
   while($fetch = mysqli_fetch_array($result2))

   echo"
  
    

    <tr>
        <td>$fetch[id]</td>
        <td>$fetch[pname]</td>
        <td>$fetch[pprice]</td>
        
        <td><img src='$fetch[pimage]' height='90px' width='100px'></td>
        <td>$fetch[category]</td>
        <td><a href = 'delete.php?ID=$fetch[id]' class = 'btn btn-danger'>delete</a></td>
        <td><a href = 'update.php?ID=$fetch[id]' class = 'btn btn-warning'>update</a></td>
        
   </tr>

   ";
   ?>

   




</tbody>


</table>

</div>
  </div>
</div>
</body>
</html>