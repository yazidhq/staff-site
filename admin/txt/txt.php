<?php   

require '../../config/function.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  echo "<script>alert('Data Tidak Ada')</script>";
}
$query = mysqli_query($conn, "SELECT * FROM staffsite WHERE id='$id'");
$result = mysqli_fetch_array($query);

$file = $result['nama'] . ".txt";
$txt = fopen($file, "w") or die("Unable to open file!");
fwrite($txt, "Nama : " . $result['nama'] . "\r\n");
fwrite($txt, "Tempat Tanggal Lahir : " . $result['ttl'] . "\r\n"); 
fwrite($txt, "Lembaga : " . $result['lembaga'] . "\r\n"); 
fwrite($txt, "Jabatan : " . $result['jabatan'] . "\r\n"); 
fwrite($txt, "Email : " . $result['email'] . "\r\n"); 
fwrite($txt, "Nomor Pegawai : " . $result['nopeg'] . "\r\n"); 
fwrite($txt, "Mulai Mengajar : " . $result['mengajar'] . "\r\n"); 
fwrite($txt, "Nomor HP : " . $result['nohp'] . "\r\n"); 
fwrite($txt, "LOKASI / RUANG" . "\r\n"); 
fwrite($txt, "Kampus : " . $result['kampus'] . "\r\n"); 
fwrite($txt, "Gedung : " . $result['gedung']  . "\r\n"); 
fwrite($txt, "Lantai : " . $result['lantai'] . "\r\n"); 
fwrite($txt, "STATUS" . "\r\n"); 
fwrite($txt, "Status : " . $result['status'] . "\r\n"); 
fwrite($txt, "Tipe Account : " . $result['tipeacc'] . "\r\n"); 
fwrite($txt, "Hingga Tanggal : " . $result['hinggatgl'] . "\r\n"); 
fwrite($txt, "NAMA ACCOUNT & PASSWORD" . "\r\n"); 
fwrite($txt, "Pilihan 1 : " . $result['pil1'] . "\r\n");
fwrite($txt, "Pilihan 2 : " . $result['pil2'] . "\r\n");
fwrite($txt, "Alternatif : " . $result['altern'] . "\r\n");
fwrite($txt, "Password : " . $result['pass'] . "\r\n");
fclose($txt);

header('Content-Description: File Transfer');
header('Content-Disposition: attachment; filename='.basename($file));
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
header("Content-Type: text/plain");
readfile($file);

?>