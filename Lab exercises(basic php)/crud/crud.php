<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
<h2>Manage Records</h2>
<?php
include 'displayProducts.php';
?>
<br /> <br /><form method="post" action="insertProduct.php">
        <fieldset>
            <legend>
                Enter Product Details
            </legend>

            <label for="name">Product Name: </label>
            <input type="text" name="txtProduct" /><br /><br />
            <label for="price">Price: </label>
            <input type="text" name="txtPrice" /><br /><br />
            <label for="image">Image File Name: </label>
            <input type="text" name="txtImage" /><br /><br />
            <input type="submit" value="Submit" name="submitProduct" />
            <input type="reset" value="Clear"  />
            
        </fieldset>
    </form>
    <footer>
<br /><a href='../watIndex.php'>Home</a>
</footer>
</body>
</html>
