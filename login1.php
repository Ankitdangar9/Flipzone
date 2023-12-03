<?php
include 'conn.php';

$a_name=$_POST['username'];
$password=$_POST['password'];

$sql4 = "SELECT*FROM `login` WHERE username='$a_name' AND password='$password'";
 
   $result4 = mysqli_query($conn, $sql4);

   

session_start();


   if(mysqli_num_rows($result4)){

      $_SESSION['admin'] = $a_name;
   
   echo "
   
    <script>
     alert ('login succefully')
     window.location.href='admin.php';
    </script>
    ";
   }
   else{

      echo "
   
    <script>
     alert ('username password not match')
     window.location.href='login.php';
    </script>
    ";
   }

?>