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
include 'admin.php';

include 'conn.php';
$record1 = mysqli_query($conn,"SELECT * FROM `login1`");
$row_count = mysqli_num_rows($record1)

?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10">
<table class="table table-secondary table-bordered">
    <thead class="text-center">
        <th>s.n</th>
        <th>name</th>
        <th>email</th>
        <th>number</th>
        <th>delete</th>


        
    </thead>
    <tbody class="text-center text-danger">
        <?php
        $i=0;
while($row=mysqli_fetch_array($record1)){

    echo "
    <tr>
    <td> ";?><?php echo ++$i;?><?php echo "</td>
    <td>$row[name]</td>
    <td>$row[email]</td>
    <td>$row[usernumber]</td>
    <td><a href='delete1.php? ID=$row[id]' class='btn btn-outline-danger'>delete</a></td>
    
</tr>
";

}

?>


    </tbody>
</table>
</div>
        
<div class="col-md-2 pr-5 text-center">
    <h3 class="text-danger">total</h3>
    <h1 class="bg-danger text-white"><?php
    echo $row_count;
    ?></h1>
</div>
</div>
    </div>

</body>
</html>