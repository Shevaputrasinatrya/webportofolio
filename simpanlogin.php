<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$email=$_POST["email"];
$password=$_POST["pass"];

//Query input menginput data kedalam tabel barang
  $sql="insert into logadmin (email,pass) values
		('$email','$password')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($connect,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "<script>alert('Selamat Datang Admin');window.location='listproduk.php'</script>";
	exit;
  }
else {
	echo "Gagal Login";
	exit;
}  

?>