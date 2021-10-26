<?php
session_start();
if(!$_SESSION['user']){
	header("location:watWeek8.php");
}
?>