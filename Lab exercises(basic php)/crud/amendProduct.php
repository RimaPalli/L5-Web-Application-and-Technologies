<?php

include 'connection.php';

$id=$_GET['id'];

$query="SELECT * FROM  products WHERE ProductId='$id'";
$result=mysqli_query($connection, $query);
$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update</title>
</head>
<body>

<form method="post" action="updateProduct.php">
        <fieldset class="fieldset-width">
            <legend>
                Enter Product Details
            </legend>

            <label for="name">Product ID: </label>
            <input type="hidden" name="txtId" value="<?php echo $row['ProductId']?>" /><br /><br />
            <label for="name">Product Name: </label>
            <input type="text" name="txtName" value="<?php echo $row['ProductName']?>" /><br /><br />
            <label for="price">Price: </label>
            <input type="text" name="txtProductPrice" value="<?php echo $row['ProductPrice']?>" /><br /><br />
            <label for="image">Image File Name: </label>
            <input type="text" name="txtProductImage" value="<?php echo $row['ProductImageName']?>" /><br /><br />
            <input type="submit" value="Submit" name="subProduct" />
            <input type="reset" value="Clear"  />
            
        </fieldset>
    </form>
</body>
</html>


