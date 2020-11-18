<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BPS OH</title>
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
    <link rel="stylesheet" href="<?php echo base_url('asset/css/responsive.css')?>">
</head>

<body>

    <!-- header-start -->
    <header>
        <div class="header-area " id="navigasi">
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
                                        <li><a class="active" href="<?php echo base_url('Bps_oh')?>">home</a></li>
                                        <li><a href="#test-form" class="login popup-with-form">Login</a></li>
                                    </ul>
                                </nav>
                            </div>
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

<section class="ftco-section contact-section">

        
        <div class="row block-5 justify-content-center mb-1">
          <div class="col-md-4 mb-md-1">
            
            <h2 class="text-center">Penjadwalan OH<br> </h2>
            <form action="" id="form-input" method="POST">
              <div class="form-group">
                <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="nama" required>
              </div>
              <div class="form-group">
                <label for="nama">NIP</label>
                        <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP" required>
              </div>
              <div class="form-group">
                <label for="tempat">Tanggal</label>
                        <div class="input-group">
                            <input id="tanggal" type="date" min="<?= date('Y-m-d'); ?>" max="" class="form-control" placeholder="tanggal" name="Tanggal" required>
              </div>
              </div>
              
              <div class="form-group">
                <label for="nama">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" required>
              </div>
              <center>
              <div class="form-group">
                <input name="input" id="input" type="submit" value="simpan" class="btn btn-primary py-2 px-4">
              </div>
          </center>
            </form>
            <?php
              
            ?>
          </div>
        </div>
        
      </div>
    </section>

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