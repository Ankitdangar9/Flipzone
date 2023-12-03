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
    session_start();
    $count = 0;

if(isset($_SESSION['cart'])){

    $count = count($_SESSION['cart']);



}

?>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand pb-2"><img src="download1.png" style="width:120px; margin-top:-30px; height:80px; background-color:black" alt=""></a>
    
    <div class="d-flex">
    <a href="index.php" class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-house" ></i>home</a>
    <a href="viewcart.php" class="text-warning text-decoration-none pe-2"><i class="fa-solid fa-cart-shopping"></i>cart (<?php echo $count   ?>) |</a>

    <span class="text-warning pe-2">

    <i class="fa-solid fa-user-shield"></i>Hello, <?php

    if(isset($_SESSION['user'])){

    
    
   
    echo $_SESSION['user'];
    echo "| <a href='logoutuser.php' class='text-warning text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i>Logout</a>";

    }
    else{
        echo "| <a href='loginuser.php' class='text-warning text-decoration-none pe-2'><i class='fa-solid fa-right-to-bracket'></i>Login</a>|";
    }
    ?>|
    
    <a href="admin.php" class="text-warning text-decoration-none pe-2">Admin</a>

    </span>
  
</nav>
</div>

<div class="bg-danger sticky-top">

<ul class="list-unstyled d-flex justify-content-center">
    <li><a href="laptop.php" class="text-decoration-none text-white fw-bold fs-4 px-5">LAPTOP</a></li>
    <li><a href="mobail.php" class="text-decoration-none text-white fw-bold fs-4 px-5">MOBAIL</a></li>
    <li><a href="bag.php" class="text-decoration-none  text-white fw-bold fs-4 px-5">BAG</a></li>
    
</ul>

</div>

</body>
</html>