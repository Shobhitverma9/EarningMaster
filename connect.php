<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "sql208.infinityfree.com";
$username = "if0_38336717";
$password = "2abcd3efghj";
$dbname = "if0_38336717_earningmaster";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


 


?>