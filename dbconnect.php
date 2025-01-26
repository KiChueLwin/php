<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'mysitedb';

$connect = mysqli_connect($host,$username,$password,$database);  // database connection function

if(isset($connect)){
    echo "Database connected.";
}
else{
    echo "Database connection fails.";
}


?>