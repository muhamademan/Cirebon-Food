<?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../login.php?pesan=belum_login");
  }

// Load file koneksi.php
include "../koneksi.php";
// Ambil data NIS yang dikirim oleh index.php melalui URL
$Id_reservasi = $_GET['Id_reservasi'];
// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "UPDATE reservasi SET status = 'sudah bayar' WHERE Id_reservasi ='".$Id_reservasi."'";
$sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
if($sql){
// Cek apakah file fotonya ada di folder images
// Query untuk menghapus data siswa berdasarkan NIS yang dikirim

  // Jika Sukses, Lakukan :
  header("location: datapemesan_diterima.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data Ditolak. <a href='datapemesan_diterima.php'>Kembali</a>";
}
?>