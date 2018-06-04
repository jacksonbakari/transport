<?php 
$dbsevername="localhost";
$dbusername="root";
$dbPassword="";
$dbname="transport";

$conn=mysqli_connect($dbsevername,$dbusername,$dbPassword,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// mysqli_close($conn);

 ?>