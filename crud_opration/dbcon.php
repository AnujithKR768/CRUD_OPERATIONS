<?php 

$host = "localhost";
$user = "root";
$pass = "";
$database= "crud_opration";

$conn = new mysqli($host,$user,$pass,$database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




    
?>