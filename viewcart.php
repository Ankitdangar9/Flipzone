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

include 'header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center bg-light mb-5 rounded">
                <h1 class="text-warning">
                    my cart
                </h1>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-around">
            <div class="col-sm-12 col-md-6 col-lg-9">
                <table class="table table-bordered text-center">
                    <thead class="bg-danger text-white">
                        <th>index no</th>
                        <th>product name</th>
                        <th>product price</th>
                        <th>product quntity</th>
                        <th>total price</th>
                        <th>update</th>
                        <th>delete</th>
                    </thead>
                    <tbody>
                        <?php

$ptotal=0;
$total=0;
$i=0;
if(isset($_SESSION['cart'])){
    foreach($_SESSION['cart'] as $key => $value){
        $ptotal = $value['productPrice'] * $value['productQuntity'];
        $total += $value['productPrice'] * $value['productQuntity'];
        $i = $key +1;
        echo "
        <form action='insertcart.php' method='post' enctype='multipart/form-data'>
        <tr>
        <td>$i</td>
        <td><input type = 'hidden' name = 'pname' value = '$value[productName]'>$value[productName]</td>
        <td><input type = 'hidden' name = 'pprice' value = '$value[productPrice]'>$value[productPrice]</td>
        <td><input type = '' name = 'pquntity' value = '$value[productQuntity]'></td>
        <td>$ptotal</td>
        <td><button name='update'>update</button></td>
        <td><button name='remove'>delete</button></td>
        <td><input type = 'hidden' name = 'item' value = '$value[productName]'></td>
        

        </tr>
        
        </form>
        ";

    }
}

?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3 text-center">
<h3>total</h3>
<h1 class="bg-danger text-white"><?php

echo number_format($total,2);
?>
</h1>
            </div>
        </div>
    </div>
</body>
</html>