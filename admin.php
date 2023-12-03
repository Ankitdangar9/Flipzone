<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php
session_start();

if(!isset($_SESSION['admin'])){
  header('location:login.php');
}


?>
<body>

<nav class="navbar navbar-light bg-dark ">
  <div class="container-fluid text-white">
    <a class="navbar-brand text-white"><h1>MYSTORE</h1></a>
    <span>

    <i class="fas fa-user-shield"></i>
    hello,<?php echo $_SESSION['admin'];?> |  
    <i class="fas fa-sign-out-alt"></i>
    <a href="logout.php" class="text-decoration-none text-white">Logout |</a>
    <a href="header.php" class="text-decoration-none text-white">Userpanel</a>

    </span>
   
  </div>
  
</nav>

<div>
<h2 class="text-center">Deshboard</h2>

</div>

<div class="col-md-6 bg-danger text-center m-auto">
<a href="product.php" class="text-white text-decoration-none fs-4 px-5">Add Post</a>
<a href="user.php" class="text-white text-decoration-none fs-4 px-5">User</a>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>