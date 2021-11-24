<?php
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../login.php?pesan=belum_login");
  }
// Load file koneksi.php
include "../koneksi.php";
// Ambil Data yang Dikirim dari Form
$nama_menu = $_POST['nama_menu'];
$harga = $_POST['harga'];
$jenis_menu = $_POST['jenis_menu'];
$keterangan = $_POST['keterangan'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "../gambar/".$fotobaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO makanan (nama_menu, jenis, harga,keterangan, gambar) VALUES('".$nama_menu."', '".$jenis_menu."', '".$harga."', '".$keterangan."', '".$fotobaru."')";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: datamenu.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_tambah_menu.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  // echo "<br><a href='form_tambah_menu.php'>Kembali Ke Form</a>";
}
?>