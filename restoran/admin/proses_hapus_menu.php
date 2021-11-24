<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login.php?pesan=belum_login");
	}

// Load file koneksi.php
include "../koneksi.php";
// Ambil data NIS yang dikirim oleh index.php melalui URL
$id_makanan = $_GET['id_makanan'];
// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM makanan WHERE id_makanan='".$id_makanan."'";
$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
// Cek apakah file fotonya ada di folder images
if(is_file("../gambar/".$data['gambar'])) // Jika foto ada
  unlink("../gambar/".$data['gambar']); // Hapus foto yang telah diupload dari folder images
// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM makanan WHERE id_makanan='".$id_makanan."'";
$sql2 = mysqli_query($conn, $query2); // Eksekusi/Jalankan query dari variabel $query
if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: datamenu.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='datamenu.php'>Kembali</a>";
}
?>