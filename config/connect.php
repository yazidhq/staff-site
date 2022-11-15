<?php 

$conn = mysqli_connect("localhost", "root", "", "staffsiteform");

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>