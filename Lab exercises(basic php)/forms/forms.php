<?php

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>

<body>
    <h1>Processing Input from HTML Forms</h1>
    <h2>Login Form and Validation</h2>

    <form method="post" action="forms.php">
        <fieldset>
            <legend>
                Login
            </legend>

            <label for="email">Email: </label>
            <input type="text" name="txtEmail" /><br />
            <label for="passwd">Password: </label>
            <input type="password" name="txtPass" /><br />
            <input type="submit" value="Submit" name="loginSubmit" />
            <input type="reset" value="Clear" />
        </fieldset>
    </form>

    <?php
    if(isset($_POST['loginSubmit'])){ 
        $email=$_POST['txtEmail'];
        $password=$_POST['txtPass'];
        echo "Email:$email Password:$password";
    }
    else{
         //Do nothing
         }
 ?>

<h2>Form Handling and Validation</h2>
    <form method="post" action="forms.php">
        <fieldset>
            <legend>Comments</legend>
            <label for="email">Email: </label>
            <input type="text" name="textEmail" value="<?php
                        if(isset($_POST['textEmail'])){
                            echo $_POST['textEmail'];
                        }
                    ?>"/><br />
            <textarea rows="4" cols="50" name="txtComment"></textarea><br />
            <label for="">Click to Confirm: </label>
            <input type="checkbox" name="chkConfirm" value="agree"><br />
            <input type="submit" value="Submit" name="submit" />
            <input type="reset" value="Clear" />
        </fieldset>
    </form>
    
    <?php
    if(isset($_POST['submit'])){ 
        if(empty($_POST['textEmail'])){
            echo 'email must not be empty';
        }
        else{
            if(filter_var($_POST['textEmail'], FILTER_VALIDATE_EMAIL)){
                $email=$_POST['textEmail'];
                $comment=$_POST['txtComment'];
                    if (isset($_POST['chkConfirm'])){
                    $confirm='Agreed<br />';
            
                    }else{
                        $confirm='Not Agreed<br />';
                    }
                echo "<pre>Email:$email <br>Comments:$comment <br>$confirm</pre>";
            }
        else{
            echo 'Please! enter valid email';
        }
    }
}
    else{
         //Do nothing
         }

 ?>

<h2>TAX Calculator</h2>

<form method="post" action="forms.php">
    <fieldset>
        <legend>
            Without TAX Calculator
        </legend>

        <label for="tax">After TAX Price: </label>
        <input type="text" name="txtTax" /><br />
        <label for="rate">TAX Rate: </label>
        <input type="text" name="txtRate" /><br />
        <input type="submit" value="Submit" name="Submit" />
        <input type="reset" value="Clear" />
    </fieldset>
</form>
<?php
 if(isset($_POST['Submit'])){ 
$Tax=$_POST['txtTax'];
$taxRate=$_POST['txtRate'];
if(empty($tax) AND empty($taxRate)){
    echo 'textfields shouldnot be empty';
}
elseif(filter_var($Tax, FILTER_VALIDATE_INT)){
    $beforeTax=(100*$Tax)/(100+$taxRate);
    echo 'Price Before Tax: '.$beforeTax;
}else{
    echo 'enter whole number';
}

 }
 else{
     //do nothing
 }
 
?>


<h2>Passing Data Appended to an URL</h2>
<h3>Pick a category</h3>
<a href="forms.php?cat=Films">Films</a>
<a href="forms.php?beloved=Books">Books</a>
<a href="forms.php?dynamite=Music">Music</a>

<?php

    echo '<br>';

    if(isset($_GET['cat'])){
        $cat=$_GET['cat'];   
        echo $cat;
        echo '<br>';
        echo 'The category choosen is '.$cat;
    }
    if(isset($_GET['beloved'])){
        $beloved=$_GET['beloved'];
        echo $beloved;
        echo '<br>';
        echo 'The category choosen is '.$beloved;
    }
    if(isset($_GET['dynamite'])){
        $dynamite=$_GET['dynamite'];
        echo $dynamite;
        echo '<br>';
        echo 'The category choosen is '.$dynamite;
    }


?>

<footer>
<br /><a href='../watIndex.php'>Home</a>
</footer>
</body>
</html>