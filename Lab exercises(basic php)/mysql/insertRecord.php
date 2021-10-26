<?php
include 'connection.php';


if(isset($_POST['subUser'])){
    $firstName=$_POST['txtName'];
    $Surname=$_POST['txtSurname'];
    $Email=$_POST['txtEmail'];
    $Password=$_POST['txtPass'];
    $Gender=$_POST['txtGender'];
    $Age=$_POST['txtAge'];

    $query= "INSERT INTO `Customer` ( `FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Age`) 
    VALUES ('$firstName', '$Surname', '$Email', '$Password', '$Gender', '$Age')";

//echo $query;
//exit();

    if(mysqli_query($connection, $query)){

        echo "Record inserted successfully.";
        
        } else{
        
        echo "ERROR: Could not able to execute:$query " . mysqli_error($connection);
        
        }
}
?>

