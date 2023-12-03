<?php
session_start();

$product_name=$_POST['pname'];
$product_price=$_POST['pprice'];
$product_quntity=$_POST['pquntity'];

$_SESSION['cart'][] = array('productName' => $product_name,
'productPrice' => $product_price,
 'productQuntity' => $product_quntity );
 header('location:viewcart.php');

if(isset($_POST['addcart'])){

$check_product = array_column($_SESSION['cart'],'productName');
if(in_array($product_name,$check_product)){

    echo "
    <script>
    alert('product alredy added');
    window.location.href = 'index.php';
    </script>
    ";
}

}

if(isset($_POST['remove'])){
    foreach($_SESSION['cart'] as $key => $value){
        if($value['productName'] === $_POST['item']){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart'] );
            header('location:viewcart.php');
        }
    }
}


if(isset($_POST['update'])){
    foreach($_SESSION['cart'] as $key => $value){
        if($value['productName'] === $_POST['item']){
            $_SESSION['cart'][$key] = array('productName' => $product_name,
            'productPrice' => $product_price,
             'productQuntity' => $product_quntity );
             header('location:viewcart.php');
            
        }
    }
}


?>