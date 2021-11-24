<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login.php?pesan=belum_login");
	}

// Load file koneksi.php
include "../koneksi.php";
// Ambil data NIS yang dikirim oleh index.php melalui URL
$id = $_GET['id'];
// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "DELETE FROM pesan WHERE id='".$id."'";
$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
if($sql){
// Cek apakah file fotonya ada di folder images
// Query untuk menghapus data siswa berdasarkan NIS yang dikirim

  // Jika Sukses, Lakukan :
  header("location: datakomentar.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='datakomentar.php'>Kembali</a>";
}
?>