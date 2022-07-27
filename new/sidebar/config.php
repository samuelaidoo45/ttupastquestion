<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "contacts";
$conn = mysqli_connect("localhost", "root", "" ,"dash");
    
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>