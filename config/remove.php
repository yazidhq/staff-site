<?php 

require 'function.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM staffsite WHERE id='$id'");
header("location:../admin/data-staff.php");

?>