<?php
session_start();

$servername = "localhost";
$username = "nelfixc1_revenue";
$password = "Revenue2019";
$dbname = "nelfixc1_revenue";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (!$_SESSION['pass']) {
header("Location: /Revenue/pages/examples/login.html");
}else{
// echo "CREATED";
}

?>
<link rel="shortcut icon" href="../../dist/img/icon.png" type="image/x-icon">