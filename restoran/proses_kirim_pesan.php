<?php 
	include "koneksi.php";

	$nama= $_POST['nama'];
	$email= $_POST['email'];
	$judul= $_POST['judul'];
	$pesan= $_POST['pesan'];

	$query="insert into pesan (nama,email, judul, pesan) values ('".$nama."', '".$email."', '".$judul."', '".$pesan."') ";
	$insert_query= mysqli_query($conn, $query);
	if ($insert_query){
		Header( 'Location: 05_contact.php?success=1' );
		
	}
	else{
		Header( 'Location: 05_contact.php?success=2' );
	}


 ?>