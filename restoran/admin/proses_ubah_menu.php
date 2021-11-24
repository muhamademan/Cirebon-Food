<!-- cek apakah sudah login -->
  <?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../login.php?pesan=belum_login");
  }
// Load file koneksi.php
include "../koneksi.php";
// Ambil data NIS yang dikirim oleh form_ubah.php melalui URL
$id_makanan = $_POST['id_makanan'];
// Ambil Data yang Dikirim dari Form
$nama_menu = $_POST['nama_menu'];
$harga= $_POST['harga'];
$jenis_menu = $_POST['jenis_menu'];
$keterangan = $_POST['keterangan'];
// Cek apakah user ingin mengubah fotonya atau tidak
if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
  // Ambil data foto yang dipilih dari form
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $fotobaru = date('dmYHis').$foto;
  
  // Set path folder tempat menyimpan fotonya
  $path = "../gambar/".$fotobaru;
  // Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
    $query = "SELECT * FROM makanan WHERE id_makanan='".$id_makanan."'";
    $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("../gambar/".$data['gambar'])) // Jika foto ada
      unlink("../gambar/".$data['gambar']); // Hapus file foto sebelumnya yang ada di folder images
    
    // Proses ubah data ke Database
    $query = "UPDATE makanan SET nama_menu='".$nama_menu."', jenis='".$jenis_menu."', harga='".$harga."', keterangan='".$keterangan."', gambar='".$fotobaru."' WHERE id_makanan='".$id_makanan."'";
    $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: datamenu.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='form_ubah_menu.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='form_ubah_menu.php'>Kembali Ke Form</a>";
  }
}else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
  // Proses ubah data ke Database
  $query = "UPDATE makanan SET nama_menu='".$nama_menu."', jenis='".$jenis_menu."', harga='".$harga."', keterangan='".$keterangan."' WHERE id_makanan='".$id_makanan."'";
  $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: datamenu.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_ubah_menu.php'>Kembali Ke Form</a>";
  }
}
?>