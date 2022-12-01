<?php 

require 'function.php';

$id = $_GET['id'];

mysqli_query($conn, "SELECT acc_status FROM staffsite WHERE id = '$id'");
mysqli_query($conn, "UPDATE staffsite SET acc_status = 0 WHERE id = '$id'");
header("location:../admin/data-staff.php");

?>