<?php
$servername="localhost";
$username="root";
$password="";
$database="login";
$connection=mysqli_connect($servername,$username,$password,$database);
if(!$connection)
die("Connection not successful".mysqli_connect_error());
?>