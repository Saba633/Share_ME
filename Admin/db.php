<?php
session_start();
error_reporting(0);
// Server detail    
$server = "localhost";
// Server Connection
$user = "root";
$password = "";
$database = "share_me";
// Database Connection
$dbconnection =  mysqli_connect($server, $user, $password, $database) or die("database is not connected");


if (!$dbconnection) {
    //     echo "Connection Created";
    // } else {
    echo "Not Connecting";
}