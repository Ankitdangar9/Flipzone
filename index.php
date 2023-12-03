<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$user =$_POST['username'];
$userpassword =$_POST['userpassword'];

include 'conn.php';
 if (!empty($user) && !empty($userpassword)) {
$sql4 = "SELECT * FROM `login1` WHERE name='$user' AND userpassword='$userpassword'";
 
   $result4 = mysqli_query($conn, $sql4);
   session_start();
if(mysqli_num_rows($result4)>0){
    $_SESSION['user'] = $user;
$_SESSION['userpassword'] = $userpassword;
    echo "
   
    <script>
     alert ('succefully login')
     window.location.href='index1.php';
    </script>
    ";

   }
 
else{
     echo "
   
    <script>
     alert ('encurrect username/email/password')
     window.location.href='index.php';
    </script>
    ";
   
   }
 }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto mt-5 bg-white shadow border border-info">

        <p class="text-warning text-center">User login</p>
        <form  method='post' enctype="multipart/form-data">
            
            <div class="mb-3">
                <label for="">username:</label>
                <input type="text" name="username" placeholder="enter username" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="">userpassword:</label>
                <input type="password" name="userpassword" placeholder="enter username" class="form-control">
            </div>
            
            <div class="mb-3">
            <button class="w-100 bg-danger fs-4 text-white">login</button>
            </div>
            
        </form>
        <div class="mb-3">
           <button name="submit" class="w-100 bg-warning fs-4 text-white"> <a href="register.php"> register</a></button>
            </div>
        
    </div>
</div>
    
</body>
</html>