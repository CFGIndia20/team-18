<?php
include "config.php";
$name = $_GET['name'];
$product = $_GET['product'];
$total = $_GET['resor'];
$sql = "update participant set Products='{$product}', TotalProducts={$total},date='2020-08-07' where Name='{$name}'";
if(mysqli_query($con,$sql)){
    echo "Allocate";
    $sql ="update products set Allocation='{$name}',assign='yes' where Name='{$product}'";
    if(mysqli_query($con,$sql)){
        echo $product;
    }
    else{
        echo 'error';
    }
}
else{
    echo "Not yet";
}
?>