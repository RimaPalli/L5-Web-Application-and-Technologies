 
<?php
//start session so session vars are avaialble on this page
//connection to database
include('init.php');
//if data has been submitted to this page collect it
if (isset($_POST['subLogin'])){
	$user=$_POST['txtUser'];
	$pass=$_POST['txtPass'];
	//build and run query to see if user details entered match any in user table
	$query="SELECT * FROM users WHERE username='$user' AND password='$pass'";
	
	$result=mysqli_query($conn, $query);
	
	if ($row = mysqli_fetch_assoc($result)) {
		
		$_SESSION['user']=$user;
		
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	} else {
		
		$_SESSION['error']='User not recognised';
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

}
?>