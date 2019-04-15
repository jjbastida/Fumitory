<?php
$parser = explode("=",$_SERVER['REQUEST_URI']);
$userId = $parser[1];
$userRow = $conn->query("SELECT * FROM users WHERE `id` = ".$userId.";");
$userName =  $conn->query("SELECT `name` FROM `users` WHERE id = ".$userId.";")->fetch_assoc()["name"];
$userUsername =  $conn->query("SELECT `username` FROM `users` WHERE id = ".$userId.";")->fetch_assoc()["username"];
$userInventory =  $conn->query("SELECT `inventory` FROM `users` WHERE id = ".$userId.";")->fetch_assoc()["inventory"];
$userScore =  $conn->query("SELECT `score` FROM `users` WHERE id = ".$userId.";")->fetch_assoc()["score"];
$userTimestamp =  $conn->query("SELECT `timestamp` FROM `users` WHERE id = ".$userId.";")->fetch_assoc()["timestamp"];
 ?>
