<?php 

define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('DB','edu');
$connection=mysqli_connect(HOST,USER,PASSWORD,DB) or die(mysqli_connect_error());
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'edu');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
?>