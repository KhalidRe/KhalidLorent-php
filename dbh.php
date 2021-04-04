<?php
$user = 'root';
$password = 'root';
$db = 'lkloginsystem';
$host = 'localhost';
$port = 8080;

$link = mysqli_init();
$conn = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);