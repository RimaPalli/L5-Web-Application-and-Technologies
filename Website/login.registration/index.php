<?php session_start();
include 'dbconnection.php';

//Code for Registration 
if(isset($_POST['signup']))
{
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	$Name=$_POST['userName'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$AgeRange=$_POST['ageRange'];
	$enc_password=$password;

	if (strlen($_POST["password"]) <= '6') 
	{
		echo "<script>alert('Your Password Must Contain At Least 6 Characters!');</script>";
	}
	elseif(!preg_match("#[0-9]+#",$password)) 
	{
		echo "<script>alert('Your Password Must Contain At Least 1 Number!');</script>";
	}
	elseif(!preg_match("#[A-Z]+#",$password)) 
	{
		echo "<script>alert('Your Password Must Contain At Least 1 Capital Letter!');</script>";
	}
	elseif(!preg_match("#[a-z]+#",$password))
	 {
		echo "<script>alert('Your Password Must Contain At Least 1 Lowercase Letter!');</script>";
	} else 
	{
		if(preg_match('/^[a-zA-Z0-9]{5,}$/', $_POST['username'])) { 
			$msg=mysqli_query($connection,"insert into user(userName,Email,Password,AgeRange) values('$Name','$email','$enc_password','$AgeRange')");

           if($msg)
       {
	echo "<script>alert('Register successfully');</script>";
        }
		}
		else
		{
			echo "<script>alert('User name must be alphanumeric and should be longer than or equals to 6');</script>";
		}
	}
}
else{
	 echo "<script>alert('Please enter valid email address');</script>";
}
}



// Code for login 
if(isset($_POST['login']))
{
	$username = $email = $password = $pwd = ' ';

	$username = $_POST['userName'];
	$Email = $_POST['email'];
	$pwd = $_POST['password'];
	$password = MD5($pwd);
	$sql = "SELECT * FROM register WHERE userName= '$username'	AND Email='$Email' AND Password='$password'";
	$result = mysqli_query($connection,$sql);
	if (mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_assoc($result)) {
				$username = $row['userName'];
				$Email = $row['email'];
				$password = $row['password'];
				session_start();
				$_SESSION['userName'] = $username;
				$_SESSION['email'] = $Email;
				$_SESSION['password'] = $password;
			}
			header("Location: index.php");
	}
	else
	{
		echo "<script>alert('Invalid email or password');</script>";
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Login System</title>
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords"
		content="Elegent Tab Forms,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements" . />
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	</script>
	<script src="js/jquery.min.js"></script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<link
		href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700,200italic,300italic,400italic,600italic|Lora:400,700,400italic,700italic|Raleway:400,500,300,600,700,200,100'
		rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="main">
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item" aria-controls="tab_item-0" role="tab">
						<div class="top-img"><img src="images/top-note.png" alt="" /></div><span>Register</span>

					</li>
					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab">
						<div class="top-img"><img src="images/top-lock.png" alt="" /></div><span>Login</span>
					</li>
					<li class="resp-tab-item lost" aria-controls="tab_item-2" role="tab">
					    <div class="top-img"><img src="images/top-key.png" alt=""/></div><span>Forgot Password</span>
					</li>
					<div class="clear"></div>
				</ul>

				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<div class="facts">

							<div class="register">
								<form name="registration" method="post" action="" enctype="multipart/form-data">
									<p>User Name </p>
									<input type="text" class="text" value="" name="userName" required>
									<p>Email Address </p>
									<input type="text" class="text" value="" name="email" required>
									<p>Password </p>
									<input type="password" value="" name="password" required>
									<p>Age Range</p>
									<div style="float: left;">
									<select name="ageRange" >
										<option value="13-18">13-18</option>
										<option value="19-32">19-32</option>
										<option value="33-49">33-49</option>
										<option value="50-above">50-above</option>
									</select><br />
									</div><br />
									<div style="color: #fff; font-family: 'Raleway', sans-serif; padding-top:5px;">

									<label for="checkbox"><span> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
									<input type="checkbox" name="chkConfirm" value="agree" required><br />
									</div>
									<div class="sign-up">
										<input type="reset" value="Reset">
										<input type="submit" name="signup" value="Sign Up">
										<div class="clear"> </div>
									</div>
								</form>

							</div>
						</div>
					</div>
					<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
						<div class="facts">
							<div class="login">
								<div class="buttons">


								</div>
								<form name="login" action="" method="post">
									<input type="text" class="text" name="uemail" value=""
										placeholder="Enter your registered email"><a href="#" class=" icon email"></a>

									<input type="password" value="" name="password"
										placeholder="Enter valid password"><a href="#" class=" icon lock"></a>

									<div class="p-container">

										<div class="submit two">
											<input type="submit" name="login" value="LOG IN">
										</div>
										<div class="clear"> </div>
									</div>

								</form>
							</div>
						</div>
					</div>
		</div>
	</div>

</body>

</html>