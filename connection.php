<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'enrollment';



//connect database
$conn = mysqli_connect($host, $username, $password, $dbname);


//check if the connection was successful
if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}

//
include_once "function.php";



// Include sql_utilities.php file
include_once "sql_utilities.php";
?>