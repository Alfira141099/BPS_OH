<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BPS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('asset/img/logoBPS.png')?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/magnific-popup.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/themify-icons.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/nice-select.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/flaticon.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/gijgo.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/animate.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/slicknav.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/style.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/css/table.css')?>">
</head>

<body>

    <!-- header-start -->
    <header>
        <div class="header-area" id="navigasi">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="<?php echo base_url('Bps_oh')?>">
                                    <img src="<?php echo base_url('asset/img/LogoBPS.png')?>" alt="" height="60" weight="90">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-10">
                            <div class="main-menu  d-none d-lg-block position-relative text-right">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="<?php echo base_url('Bps_oh/index')?>">home</a></li>
                                        <li><a href="<?= base_url('Login/logout')?>" class="login popup-with-form">Logout</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area" id="slider">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-9">
                        <div class="slider_text text-center">
                            <p>Penjadwalan OH</p>
                            <h3>BPS Kabupaten Probolinggo</h3>
                            <div class="find_dowmain">
                                <form action="#" class="find_dowmain_form">
                                  <td>  <input type="text" name="nama" id="nama" placeholder="Temukan nama">  </td>
                                    <button type="submit" id="find">cari</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- prising_area_start -->
    <div class="prising_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>
                            Staff BPS Kabupaten Probolinggo
                        </h3>
                    </div>
                </div>
            </div>
            </div>

            <section class="ftco-section">
            <div class="container">

            <?php 
                $numcol = 4;
                $countrow = 0;
                $colwidth = 12 / $numcol;
            ?>

            <div class="row">

            <?php
                foreach ($pegawai as $pgi) :
                ?>

        <div class="col-xl-4 col-md-4 col-lg-4">
            <div class="single_prising">
            <div class="prising_icon blue">
            </div>
                    
                <div class="card-header bg-light">.
                <h4><td><a href="<?php echo base_url('Jadwal/index/'.$pgi->NIP,''); ?>">
                    <?php echo $pgi->NAMA ?></a></td></h4>
                <p class="nip"><td><?php echo $pgi->NIP ?></td></p>
                <p class="jabatan"><td><?php echo $pgi->Jabatan ?></td></p>
                </div>
               
            </div>
        </div>
            <?php
                endforeach;
                ?>

            </div>

            <?php 
            $countrow++;
            if ($countrow % $numcol == 0){
              echo '</div><div class="row">';
            }
            
          ?>

      </div>
         </section>

        </div>
    </div>

    <!-- footer -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-md-12 col-lg-10">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="<?php echo base_url('asset/img/LogoBPS.png')?>" alt="" height="70" weight="90">
                                </a>
                            </div>
                            <p class="footer_text doanar"> <a class="first" href="#">(0335) 422117
                                </a> <br>
                                <a href="#">bps3513@bps.go.id</a> </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                service
                            </h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Jadwal</a></li>
                                <li><a href="#">Daftar Staff</a></li>
                            </ul>

                        </div>
                    </div> 
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> BPS Kab Probolinggo<i class="" aria-hidden="true"></i> <a href="" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                       </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->
    <!-- link that opens popup -->

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="<?php echo base_url('asset/img/LogoBPS.png')?>" alt="" height="70" weight="90">
                    </a>
                </div>
                <h3><center>Masuk Sebagai Kasi</center></h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_green">Sign in</button>
                        </div>
                    </div>
                </form>
                <p class="doen_have_acc">Belum punya akun? <a class="dont-hav-acc" href="#test-form2">Sign Up</a>
                </p>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- form itself end-->
    <form id="test-form2" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="<?php echo base_url('asset/img/LogoBPS.png')?>" alt="" height="70" weight="90">
                    </a>
                </div>
                <h3><center>Registration</center></h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <input type="email" placeholder="Masukkan email">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <input type="Password" placeholder="Konfirm password">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed_btn_green">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->


    <!-- JS here -->
    <script src="<?php echo base_url('asset/js/vendor/modernizr-3.5.0.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/vendor/jquery-1.12.4.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/owl.carousel.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/isotope.pkgd.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/ajax-form.js')?>"></script>
    <script src="<?php echo base_url('asset/js/waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.counterup.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/imagesloaded.pkgd.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/scrollIt.js')?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.scrollUp.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/wow.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/nice-select.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.slicknav.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.magnific-popup.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/plugins.js')?>"></script>
    <script src="<?php echo base_url('asset/js/gijgo.min.js')?>"></script>

    <!--contact js-->
    <script src="<?php echo base_url('asset/js/contact.js')?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.ajaxchimp.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.form.js')?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.validate.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/mail-script.js')?>"></script>
    <script src="<?php echo base_url('asset/js/main.js')?>"></script>

    <script>
        document.getElementById('find').style.background = '#26C867';
    </script>
</body>

</html>