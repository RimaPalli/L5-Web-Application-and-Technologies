<h2>Login Page</h2>
<?php
include('init.php');
//Check to see if someone is logged in, display login form or welcome message
if(!isset($_SESSION['user'])){	
	include 'loginform.php';
	if(isset($_SESSION['error'])){
	echo $_SESSION['error'];
}
}

else{
	echo 'welcome '.$_SESSION['user'].'<br>';
	echo '<a href="logout.php">logout</a><br />';
	echo '<a href="protected.php">see protected page</a><br />';
}

?>