<?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../login.php?pesan=belum_login");
  }
// Load file koneksi.php
include "../koneksi.php";
// Ambil Data yang Dikirim dari Form
$username = $_POST['username'];
$password = $_POST['password'];
  
  $query = "INSERT INTO login (username, password) VALUES('".$username."', '".$password."')";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: dataadmin.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_tambah_admin.php'>Kembali Ke Form</a>";
  }

?>