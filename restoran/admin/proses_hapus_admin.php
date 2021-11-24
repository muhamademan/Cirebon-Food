<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login.php?pesan=belum_login");
	}

// Load file koneksi.php
include "../koneksi.php";
// Ambil data NIS yang dikirim oleh index.php melalui URL
$id = $_GET['id_login'];
// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "DELETE FROM login WHERE id_login='".$id."'";
$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
if($sql){
// Cek apakah file fotonya ada di folder images
// Query untuk menghapus data siswa berdasarkan NIS yang dikirim

  // Jika Sukses, Lakukan :
  header("location: dataadmin.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='dataadmin.php'>Kembali</a>";
}
?>