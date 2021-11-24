<!DOCTYPE html>
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
                <a class="logo" href="index.php"><img src="gambar/rice.png" alt="Logo"></a>

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


<section class="bg-5 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>MENU</b></h5>
                                <h2 class="mt-30 mb-15">Weekend</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text">
        <div class="container">
                <div class="heading"><h3>Weekend Terfavorit</h3></div>
                <div class="row">
                        <div class="col-lg-3 col-md-4  col-sm-6 ">
                                <div class="center-text mb-30">
                                        <div class="ïmg-200x mlr-auto pos-relative">
                                                <img src="gambar/empal_gentong.jpg" alt="">
                                        </div>
                                        <h5 class="mt-20">Empal Gentong</h5>
                                        <h4 class="mt-5 color-primary"><b>IDR 45000</b></h4>
                                </div><!--text-center-->
                        </div><!-- col-md-3 -->

                        <div class="col-lg-3 col-md-4  col-sm-6 ">
                                <div class="center-text mb-30">
                                        <div class="ïmg-200x mlr-auto pos-relative"><img src="gambar/teh_poci.jpg" alt=""></div>
                                        <h5 class="mt-20">Teh Poci</h5>
                                        <h4 class="mt-5 color-primary"><b>IDR 7000</b></h4>
                                </div><!--text-center-->
                        </div><!-- col-md-3 -->

                        <div class="col-lg-3 col-md-4  col-sm-6 ">
                                <div class="center-text mb-30">
                                        <div class="ïmg-200x mlr-auto pos-relative"><img src="gambar/nasi_jamblang.jpg" alt=""></div>
                                        <h5 class="mt-20">Nasi Jamblang</h5>
                                        <h4 class="mt-5 color-primary"><b>IDR 10000</b></h4>
                                </div><!--text-center-->
                        </div><!-- col-md-3 -->

                        <div class="col-lg-3 col-md-4  col-sm-6 ">
                                <div class="center-text mb-30">
                                        <div class="ïmg-200x mlr-auto pos-relative">
                                                <img src="gambar/sate_kalong.jpg" alt="">
                                        </div>
                                        <h5 class="mt-20">Sate Kalong</h5>
                                        <h4 class="mt-5 color-primary"><b>IDR 20000</b></h4>
                                </div><!--text-center-->
                        </div><!-- col-md-3 -->
                </div><!-- row-->
        </div><!-- container -->
</section>

<section class="bg-lite-blue">
        <div class="container">
                <div class="row">
                        <?php 
                                include "koneksi.php";
                                $query_menu= mysqli_query($conn, "select * from makanan");
                                while($data = mysqli_fetch_array($query_menu)){
                        ?>
                        <div class="col-md-6">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left"><img class="br-3" src="gambar/<?php echo $data['gambar']; ?>" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b><?php echo $data["nama_menu"];?></b><b class="color-primary float-right">IDR <?php echo $data["harga"];?></b></h5>
                                                <p class="pr-70"><?php echo $data["keterangan"];?></p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->
                        <?php 
                            }
                        ?>
                </div><!-- row -->
        </div><!-- container -->
</section>




<footer class="pb-50  pt-70 pos-relative">
        <div class="pos-top triangle-bottom"></div>
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

</footer>

<!-- SCIPTS -->
<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
<script src="plugin-frameworks/bootstrap.min.js"></script>
<script src="plugin-frameworks/swiper.js"></script>
<script src="common/scripts.js"></script>
</body>
</html>