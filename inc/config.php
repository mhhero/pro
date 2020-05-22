<?php
$db_host = "localhost";
$db_name = "cms_pro";
$db_username = "root";
$db_password = "";


error_reporting(E_ALL);

$myPDO = new PDO("mysql:host=$db_host;dbname=$db_name" , $db_username, $db_password);


// Create connection
//$conn = new mysqli($servername, $username, $password);

// Check connection
/*
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
*/
