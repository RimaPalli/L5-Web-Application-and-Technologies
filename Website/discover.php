<!DOCTYPE html>
<html>
<head>
<link href="./style1.css" rel="stylesheet" type="text/css" />
<link href="./style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="header_top">
    <div class="container1">
    <h2>Misoo Kim</h2>
</div>
</div>

<div class="header_bottom">
    <div class="container1">
        <nav class="nav">
            <ul>
        <li><div class="search">
        <form action="/action_page.php">
      <input type="text" placeholder="What are you looking for?" name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
              </form></div><li>
            
                <li><a href="index1.php">Home</a></li>
                <li><a href="#">Jisoo</a></li>
                <li><a href="#">Women's Wear</a></li>
                <li><a href="#">Men's Wear</a></li>
                <li><a href="form.php">Register/Login</a></li>
                <li><i class="fa fa-shopping-cart"></i><a href="#">Cart</a></li>
            <ul>
        <nav>
    </div>
</div>
<!-- The flexible grid (content) -->

  <h1> All Products</h1>

    <hr>
      <div class="small-container">
        <div class="row">
                <?php 
                    $Product_Name = isset($_GET['Product_Name']) ? $_GET['Product_Name']: '';
                    $Product_Category = isset($_GET['Product_Category']) ? $_GET['Product_Category'] : '';
                    $Product_Type = isset($_GET['Product_Type']) ? $_GET['Product_Type'] : '';
                    $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : '';
                ?>
                <form action="discover.php" method="get">
                   <div class="form-group col-md-2">
                        <input class="form-control" type="text" name="Product_Name" placeholder="Product Name" 
                            value="<?php $Product_Name ?>"/>
                    </div>

                    <div class="form-group col-md-2">
                        <select name="Product_Category" class="form-control">
                            <option value="">Product category</option>
                            <option value="Men" <?php if($Product_Category=="Men") echo 'selected'?> >Men</option>
                            <option value="Women" <?php if($Product_Category=="Women") echo 'selected'?>>Women</option>
                            <option value="Jisoo" <?php if($Product_Category=="Jisoo") echo 'selected'?>>Jisoo</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <select name="Product_Type" class="form-control">
                            <option value="">Type of Product</option>
                            <option value="Shoes" <?php if($Product_Type=="Shoes") echo 'selected'?>>Shoes</option>
                            <option value="Bag" <?php if($Product_Type=="Bag") echo 'selected'?>>Bag</option>
                            <option value="Dress" <?php if($Product_Type=="Dress") echo 'selected'?>>Dress</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <select name="sort_by" class="form-control">
                            <option value="">Sort By Name or Price</option>
                            <option value="Name" <?php if($sort_by=="Name") echo 'selected'?> >Name</option>
                            <option value="Price" <?php if($sort_by=="Price") echo 'selected'?> >Price</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <input class="btn btn-primary" type="submit" name="submit" value="Search" />
                    </div>
                </form>
            </div>  

            <?php        
            include 'connection.php';
            $fields = array('Product_Category','Product_Type');
            $conditions = array();
            foreach($fields as $field){
                // if the field is set and not empty
                if(isset($_GET[$field]) && $_GET[$field] != '') {
                    // create a new condition while escaping the value inputed by the user (SQL Injection)
                    $conditions[] = "`$field` LIKE '%" . $_GET[$field] . "%'";
                }
            }
            
            
            $query = "SELECT * FROM product ";
            if(count($conditions) > 0) {
                // append the conditions
                $query .= "WHERE " . implode (' AND ', $conditions); // you can change to 'OR', but I suggest to apply the filters cumulative
            }
            $orderby = '';
            if($sort_by=='Name'){
                $orderby = ' order by Product_Name ASC ';
            }else{
                $orderby = ' order by Product_Price DESC ';
            } 
            $query = $query. $orderby ;
            $result = mysqli_query($connection, $query);
            echo'<div class="row">';
            while($row = mysqli_fetch_assoc($result)){               
            echo'<div class="col-4">';
            echo '<img src="./images/'.$row['Product_Image_Name'] . '" />';
            echo '<h4>'. $row['Product_Name'].'</h4>';
            echo '<p>$'.$row['Product_Price'].'</p>';
            echo ' <a href="" class="btn">Add to Cart</a> ';
            echo'</div>';     
            }
            echo'</div>';
            ?>
        </div>

<!-- Footer -->
<footer>
      <div class="footer-content">
          <h3> Misoo Kim</h3>
          <p>thank You for Your Vist! 
              And wish you enjoyed shopping here!</p>
              <ul class="socials">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
              <ul>
</div>
<div class="footer-bottom">
    <p>copyright &copy;2021 misookim</p>
</div>
</footer>
</body>
</html>

