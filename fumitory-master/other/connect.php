<?php
$hostname = "fumitory.site";
$username = "fumipkfg";
$password = "Pur1n213";
$dbname = "fumipkfg_fumitory";
// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 ?>
