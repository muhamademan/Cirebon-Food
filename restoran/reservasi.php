<!DOCTYPE HTML>
<html lang="en">
<head>
        <title>Cirebon Food</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="fonts/beyond_the_mountains-webfont.css" type="text/css"/>

        <!-- Stylesheets -->
        <link href="plugin-frameworks/bootstrap.min.css" rel="stylesheet">
        <link href="plugin-frameworks/swiper.css" rel="stylesheet">
        <link href="fonts/ionicons.css" rel="stylesheet">
        <link href="common/styles.css" rel="stylesheet">

</head>
<body>

<header>
        <div class="container">
                <a class="logo" href="#"><img src="gambar/rice.png" alt="Logo"></a>

                <div class="right-area">
                        <h6><a class="plr-20 color-white btn-fill-primary" href="reservasi.php">RESERVATION</a></h6>
                </div><!-- right-area -->

                <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

                <ul class="main-menu font-mountainsre" id="main-menu">
                        <li><a href="index.php">HOME</a></li>
                        <!-- <li><a href="02_about_us.html">ABOUT US</a></li> -->
                        <li><a href="03_menu.php">MENU</a></li>
                        <!-- <li><a href="04_blog.html">NEWS</a></li> -->
                        <li><a href="05_contact.php">CONTACT</a></li>
                </ul>

                <div class="clearfix"></div>
        </div><!-- container -->
</header>


<section class="bg-6 h-300x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <!-- <h5><b>Reservasi</b></h5> -->
                                <h3 class="mt-30 mb-15">Reservasi</h3>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text">
        <div class="container">
                <?php
                        if ( isset($_GET['success']) && $_GET['success'] == 1 )
                        {
                             echo '<script type="text/javascript">alert("Terima kasih, reservasi sudah diterima.");</script>';
                        }
                        elseif ( isset($_GET['success']) && $_GET['success'] == 2 )
                        {
                               echo '<script type="text/javascript">alert("Reservasi tidak dikirim.");</script>'; 
                        }
                        else
                        {
                            
                        }
                ?>
                <form class="form-style-1 placeholder-1" method="post" action="proses_kirim_reservasi.php" enctype="mulipart/form-data">
                        <div class="row">
                                <div class="col-md-12"> <input class="mb-20" type="text" placeholder="Nama" name="nama">  </div>
                                <div class="col-md-12"> <input class="mb-20" type="text" placeholder="No Telpon" name="notelpon">  </div>
                                <div class="col-md-12"><input class="mb-20" type="text" placeholder="Alamat" name="alamat">  </div>
                                <div class="col-md-12"><input class="mb-20" type="Date" name="tanggal">  </div>
                                <div class="col-md-12">
                                        <textarea class="h-200x ptb-20" placeholder="Keterangan" name="keterangan"></textarea></div>
                        </div><!-- row -->
                        <div class="col-md-12">
                                <hr>
                                <input type="submit" value="KIRIM RESERVASI" >
                        </div>
                       
                </form>
        </div><!-- container -->
</section>


<!--  -->

<footer class="pb-50  pt-70 pos-relative footer-bg-1">

        <div class="container-fluid">

                <div class="pt-30">
                        <p class="underline-secondary"><b>Alamat :</b></p>
                        <p>Jalan Brigjen Dharsono, Cirebon </p>
                </div>

                <div class="pt-30">
                        <p class="underline-secondary mb-10"><b>Telepon :</b></p>
                        <a href="tel:+53 345 7953 32453 ">+21 345 7953 32453 </a>
                </div>

                <div class="pt-30">
                        <p class="underline-secondary mb-10"><b>Email :</b></p>
                        <a href="mailto:yourmail@gmail.com"> muhamad.eman8@gmail.com</a>
                </div>
                
        </div><!-- container -->
</footer>

<!-- SCIPTS -->
<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
<script src="plugin-frameworks/bootstrap.min.js"></script>
<script src="plugin-frameworks/swiper.js"></script>
<script src="common/scripts.js"></script>
<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-oEyU88bRR6xcbV1gI_Cahc8ugKC_JPE&callback=initMap"></script> -->

</body>
</html>