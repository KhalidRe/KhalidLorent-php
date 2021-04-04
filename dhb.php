<?php
$servername ="localhost:8080";
$dBUsername ="root";
$dBPassword ="";
$dBName="lkloginystem";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName)

if(!$conn){
    die("oke: " .mysqli_connect_error());
}