<?php

$user =$_POST['username'];
$userpassword =$_POST['userpassword'];

include 'conn.php';

$sql4 = "SELECT * FROM `login1` WHERE (name='$user' OR email='$user') AND userpassword='$userpassword'";
 
   $result4 = mysqli_query($conn, $sql4);
   session_start();

   if(mysqli_num_rows($result4)){
    $_SESSION['user'] = $user;
    echo "
   
    <script>
     alert ('succefully login')
     window.location.href='index.php';
    </script>
    ";

   }
   else{
    echo "
   
    <script>
     alert ('encurrect username/email/password')
     window.location.href='loginuser.php';
    </script>
    ";
   }


?>