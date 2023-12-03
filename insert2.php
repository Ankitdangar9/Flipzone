

<?php

include 'conn.php';

if(isset($_POST['submit'])){

$name=$_POST['username'];

$useremail=$_POST['useremail'];
$usernumber=$_POST['usernumber'];
$userpassword=$_POST['userpassword'];





$dupemail=mysqli_query($conn, "SELECT * FROM `login1` WHERE email = '$useremail'");
$dupusername=mysqli_query($conn, "SELECT * FROM `login1` WHERE name = '$name'");

if(mysqli_num_rows($dupemail)){
    echo "
    <script>
    
    alert('this email alredy taken');
    window.location.href = 'register.php';
    </script>
    
    ";
}
if(mysqli_num_rows($dupusername)){
    echo "
    <script>
    
    alert('this name alredy taken');
    window.location.href = 'register.php';
    </script>
    
    ";
}
else{
    $sql3= "INSERT INTO `login1` (`name`, `email`, `usernumber`, `userpassword`) VALUES ('$name', '$useremail', '$usernumber', '$userpassword')";
$result = mysqli_query($conn, $sql3) or die("query failed");
echo "
    <script>
    
    alert('register succefully');
    window.location.href = 'index.php';
    </script>
    
    ";
}


}

?>

