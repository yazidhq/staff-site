<head>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<?php 

require 'connect.php';

// Input Data Staff ke DB
function isi_data($data){
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$ttl = htmlspecialchars($data["ttl"]);
	$lembaga = htmlspecialchars($data["lembaga"]);
	$jabatan = htmlspecialchars($data["jabatan"]);
	$nopeg = htmlspecialchars($data["nopeg"]);
	$mengajar = htmlspecialchars($data["mengajar"]);
	$nohp = htmlspecialchars($data["nohp"]);
	$kampus = htmlspecialchars($data["kampus"]);
	$gedung = htmlspecialchars($data["gedung"]);
	$lantai = htmlspecialchars($data["lantai"]);
	$status = htmlspecialchars($data["status"]);
	$tipeacc = htmlspecialchars($data["tipeacc"]);
	$hinggatgl = htmlspecialchars($data["hinggatgl"]);
	$pil1 = htmlspecialchars($data["pil1"]);
	$pil2 = htmlspecialchars($data["pil2"]);
	$altern = htmlspecialchars($data["altern"]);
	$pass = htmlspecialchars($data["pass"]);
	$acc_status = htmlspecialchars($data["acc_status"]);

	$ktp = upload();
	if (!$ktp) {
		return false;
	}

	mysqli_query($conn, "INSERT INTO staffsite VALUES
					(
						'',
						'$nama',
						'$email',
						'$ttl',
						'$lembaga',
						'$jabatan',
						'$nopeg',
						'$mengajar',
						'$nohp',
						'$kampus',
						'$gedung',
						'$lantai',
						'$status',
						'$tipeacc',
						'$hinggatgl',
						'$pil1',
						'$pil2',
						'$altern',
						'$pass',
						'$ktp',
						'acc_status'
					)
				");

	return mysqli_affected_rows($conn);
}
// end

// Ubah data
function edit_data($data){
		global $conn;

	$id = $data['id'];
	
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$ttl = htmlspecialchars($data["ttl"]);
	$lembaga = htmlspecialchars($data["lembaga"]);
	$jabatan = htmlspecialchars($data["jabatan"]);
	$nopeg = htmlspecialchars($data["nopeg"]);
	$mengajar = htmlspecialchars($data["mengajar"]);
	$nohp = htmlspecialchars($data["nohp"]);
	$kampus = htmlspecialchars($data["kampus"]);
	$gedung = htmlspecialchars($data["gedung"]);
	$lantai = htmlspecialchars($data["lantai"]);
	$status = htmlspecialchars($data["status"]);
	$tipeacc = htmlspecialchars($data["tipeacc"]);
	$hinggatgl = htmlspecialchars($data["hinggatgl"]);
	$pil1 = htmlspecialchars($data["pil1"]);
	$pil2 = htmlspecialchars($data["pil2"]);
	$altern = htmlspecialchars($data["altern"]);
	$pass = htmlspecialchars($data["pass"]);

	$oldktp = $data['oldktp'];

	if ($_FILES['ktp']['error'] === 4) {
		$ktp = $oldktp;
	}else{
		$ktp = uploadfromadmin();
	}
	
	mysqli_query($conn, "UPDATE staffsite SET
							nama = '$nama',
							email = '$email',
							ttl = '$ttl',
							lembaga = '$lembaga',
							jabatan = '$jabatan',
							nopeg = '$nopeg',
							mengajar = '$mengajar',
							nohp = '$nohp',
							kampus = '$kampus',
							gedung = '$gedung',
							lantai = '$lantai',
							status = '$status',
							tipeacc = '$tipeacc',
							hinggatgl = '$hinggatgl',
							pil1 = '$pil1',
							pil2 = '$pil2',
							altern = '$altern',
							pass = '$pass',
							ktp = '$ktp'
						WHERE id = $id
				");

	return mysqli_affected_rows($conn);
}
// end

// Upload gambar ktp
function upload(){
	$namaFile = $_FILES['ktp']['name'];
	$sizeFile = $_FILES['ktp']['size'];
	$tmpName = $_FILES['ktp']['tmp_name'];

	$eksGambarValid = ['jpg', 'jpeg', 'png'];
	$eksGambar = explode('.', $namaFile);
	$eksGambar = strtolower(end($eksGambar));

	if (!in_array($eksGambar, $eksGambarValid)) {
		echo 	'<script type="text/javascript">
					$(document).ready(function(){
						Swal.fire(
						  "Ekstensi KTP",
						  "Ekstensi KTP yang anda unggah bukan JPG/ JPEG/ PNG",
						  "error"
						)
						});
				</script>';
		return false;
	}

	if ($sizeFile > 2000000) {
		echo 	'<script type="text/javascript">
					$(document).ready(function(){
						Swal.fire(
						  "Ukuran KTP",
						  "Ukuran KTP yang anda unggah melebihi ukuran maksimum (2mb)",
						  "error"
						)
						});
				</script>';
		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $eksGambar;

	move_uploaded_file($tmpName, 'assets/img/ktp/' . $namaFileBaru);
	return $namaFileBaru;
}
// end

// Upload gambar ktp admin
function uploadfromadmin(){
	$namaFile = $_FILES['ktp']['name'];
	$sizeFile = $_FILES['ktp']['size'];
	$tmpName = $_FILES['ktp']['tmp_name'];

	$eksGambarValid = ['jpg', 'jpeg', 'png'];
	$eksGambar = explode('.', $namaFile);
	$eksGambar = strtolower(end($eksGambar));

	if (!in_array($eksGambar, $eksGambarValid)) {
		echo 	'<script type="text/javascript">
					$(document).ready(function(){
						Swal.fire(
						  "Ekstensi KTP",
						  "Ekstensi KTP yang anda unggah bukan JPG/ JPEG/ PNG",
						  "error"
						)
						});
				</script>';
		return false;
	}

	if ($sizeFile > 2000000) {
		echo 	'<script type="text/javascript">
					$(document).ready(function(){
						Swal.fire(
						  "Ukuran KTP",
						  "Ukuran KTP yang anda unggah melebihi ukuran maksimum (2mb)",
						  "error"
						)
						});
				</script>';
		return false;
	}

	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $eksGambar;

	move_uploaded_file($tmpName, '../assets/img/ktp/' . $namaFileBaru);
	return $namaFileBaru;
}
// end

?>
