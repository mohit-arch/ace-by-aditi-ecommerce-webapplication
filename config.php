<?php
$user='aditi';
$password='aditi';
$db="aditi";
$c=mysqli_connect('localhost',$user,$password,$db);

if (!$c) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>