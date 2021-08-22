<?php

include 'koneksi.php';

if (isset($_POST['simpan'])) {
	// $id = $_POST['id_produk'];
	$uname = $_POST['uname'];
	$email = $_POST['email'];
	$judul = $_POST['judul'];
    $msg = $_POST['msg'];
	
$sql = "INSERT INTO kontak (uname, email, judul, msg) VALUES ('$uname','$email', '$judul', '$msg')";
$query = mysqli_query($connect, $sql);
	if ($query) {
		echo "<script>alert('Tanggapan anda berhasil terkirim :)');window.location='contact.php'</script>";
	}else{
	header('Location: simpandata.php?status=gagal');
	}
}
?>