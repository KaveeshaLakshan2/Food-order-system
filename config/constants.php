<?php 

//Start session
session_start();

//can change db name, password,username in this single code
//this code added to the menuPHP
//create constants to store non repeating values
define('SITEURL','http://localhost/Food-order-system/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME', 'food-order');

 //3.Execute query and save data in the database
 $conn = mysqli_connect(LOCALHOST, DB_USERNAME,DB_PASSWORD) or die(mysqli_error()); //database connection
 $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error()); //selecting database
?>

