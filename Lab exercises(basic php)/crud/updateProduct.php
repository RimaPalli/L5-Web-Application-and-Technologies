<?php
include 'connection.php';

$id=$_POST['txtId'];
$name=$_POST['txtName'];
$price=$_POST['txtProductPrice'];
$image=$_POST['txtProductImage'];

$query="UPDATE products
SET
  ProductId='$id',
  ProductName='$name',
  ProductPrice='$price',
  ProductImageName='$image'
  
WHERE 
  ProductId='$id'";

mysqli_query($connection, $query);
header("location:./crud.php")
?>