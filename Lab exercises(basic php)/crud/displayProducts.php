<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table, th, td{
    border-collapse:collapse;
    border: 1px solid black;
}
th, td{
    padding: 10px;
}
</style>
<body>
<?php
include 'connection.php';
$query="SELECT * FROM products";
$result=mysqli_query($connection, $query);
echo '<table>';
  echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Price</th>';
    echo '<th>Image</th>';
    echo '<th>Amend</th>';
    echo '<th>Delete</th>';
  echo '</tr>';

  
  while ($row=mysqli_fetch_assoc($result)){
    echo '<tr>';
    echo '<td>'.$row['ProductName'].'  '.'</td>';
    echo '<td>'.$row['ProductPrice'].'  '.'</td>';
    echo '<td>'.'<img src="./images/' . $row['ProductImageName'] . '" />'.'  '.'</td>';
    echo '<td>'.'<a href="amendProduct.php?id='. $row['ProductId'].'">Amend</a>'.'  '.'</td>';
    echo '<td>'.'<a href="deleteProduct.php?id='. $row['ProductId'].'">Delete</a> <br />'.'</td>';

  echo '</tr>';
  }
echo '</table>';

    ?>
</body>
</html>
