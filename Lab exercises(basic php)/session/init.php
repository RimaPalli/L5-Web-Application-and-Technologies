<?php

session_start();
//Set up the database access credentials
$hostname = 'localhost';
$username = 'root'; //your standard uni id
$password = ''; // the password found on the W: drive
$databaseName = 'database'; //the name of the db you are using on phpMyAdmin
$connection = mysqli_connect($hostname, $username, $password, $databaseName) or exit("Unable to connect to database!");

?>