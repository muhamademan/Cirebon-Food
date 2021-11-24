<?php 
	include "koneksi.php";

	$nama= $_POST['nama'];
	$notelpon= $_POST['notelpon'];
	$alamat= $_POST['alamat'];
	$tanggal= $_POST['tanggal'];
	$keterangan= $_POST['keterangan'];
	$query="insert into reservasi (nama,no_telp, alamat, tanggal, keterangan, status) values ('".$nama."', '".$notelpon."', '".$alamat."', '".$tanggal."', '".$keterangan."', 'menunggu') ";
	$insert_query= mysqli_query($conn, $query);
	if ($insert_query){
		Header( 'Location: reservasi.php?success=1' );
		
	}
	else{
		Header( 'Location: reservasi.php?success=2' );
	}


 ?>