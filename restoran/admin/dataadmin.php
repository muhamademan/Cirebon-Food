	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../login.php?pesan=belum_login");
	}
	?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Halaman Admin Cirebon Food</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h3>Halaman Admin</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Menu Admin</p>
                <li class="active">
                    <li>
                    <a href="index.php">Home</a>
                	</li>
                </li>
               <li>
                    <a href="datamenu.php">Data Menu</a>
                </li>
                <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Data Reservasi</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="datapemesan.php">Reservasi Baru</a>
                        </li>
                        <li>
                            <a href="datapemesan_diterima.php">Reservasi Diterima</a>
                        </li>
                        <li>
                            <a href="datapemesan_ditolak.php">Reservasi Ditolak</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="datakomentar.php">Data Komentar</a>
                </li>
                <li>
                    <a href="dataadmin.php ?>">Data Admin</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-justify"></i>
                        <span>Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <!-- <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">LOGUT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div>
              <h1>Data Admin</h1>
              <a href="form_tambah_admin.php">Tambah Admin</a><br><br>
              <table border="1" width="100%">
              <tr>
                <th>Id login</th>
                <th>Username</th>
                <th>Password</th>
                <th colspan="2">Aksi</th>
              </tr>
             <?php
  // Load file koneksi.php
          include "../koneksi.php";
          
          $query = "SELECT * FROM login"; // Query untuk menampilkan semua data siswa
          $sql = mysqli_query($conn, $query); // Eksekusi/Jalankan query dari variabel $query
          
          while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
            echo "<tr>";
            echo "<td>".$data['id_login']."</td>";
            echo "<td>".$data['username']."</td>";
            echo "<td>".$data['password']."</td>";
            echo "<td><a href='form_ubah_admin.php?id_login=".$data['id_login']."'>Ubah</a></td>";
            echo "<td><a href='proses_hapus_admin.php?id_login=".$data['id_login']."'>Hapus</a></td>";
            echo "</tr>";
          }
          ?>
          </table>

            </div>
        </div>
    </div>

    <div class="overlay"></div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>