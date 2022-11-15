<?php

require '../../config/function.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  echo "<script>alert('Data Tidak Ada')</script>";
}
$query = mysqli_query($conn, "SELECT * FROM staffsite WHERE id='$id'");
$result = mysqli_fetch_array($query);

if($query->num_rows > 0){ 
    $delimiter = ";"; 
    $filename = $result['nama'] . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = [$result['nama'], $result['lembaga'], $result['email'], $result['nopeg']]; 
    fputcsv($f, $fields, $delimiter); 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
?>
