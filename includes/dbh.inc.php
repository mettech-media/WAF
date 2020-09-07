<?php
$dBServername = "localhost:3306";
$dBUsername = "electric_ziyad";
$dBPassword = "Q1w2e3r4p0o9$";
$dBName = "electric_waq";

// Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
