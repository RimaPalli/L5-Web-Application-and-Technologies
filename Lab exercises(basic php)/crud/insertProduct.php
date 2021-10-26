<?php

include 'connection.php';

//check to see if form has been submitted
if(isset($_POST['submitProduct'])){

    //gather data from form
    $productName=$_POST['txtProduct'];
    $price=$_POST['txtPrice'];
    $image=$_POST['txtImage'];

    //prepare a query
    $query="INSERT INTO products(ProductName, ProductPrice, ProductImageName) 
    VALUES ('$productName', '$price', '$image')";

    mysqli_query($connection, $query);

    //relocte back to front page
    header('location:./crud.php');

    //return to calling page(stored in the server variables)
  //header("Location: {$_SERVER['HTTP_REFERER']}");
}