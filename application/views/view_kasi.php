<!doctype html>
<html class="no-js" lang="zxx">
<?php $level = $this->session->userdata('level');?>

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
    <link href="<?php echo base_url('asset/tabel/dataTables.bootstrap4.min.css');?>" rel="stylesheet">

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
                                        <li><a class="" href="<?php echo base_url('Bps_kasi')?>">home</a></li>
                                        <?php if($level=='Kasi'){
                                            echo '
                                        <li><a class="" href="'.base_url('Kasi/index').'">Input Jadwal</a></li>
                                        <li><a class="" href="'.base_url('Input_pegawai/index').'">Input Pegawai</a></li>
                                        <li><a class="" href="'.base_url('Pegawai/index').'">Data Pegawai</a></li>';}?>
                                        <li><a class="" href="<?php echo base_url('Login/logout')?>">Logout</a></li>
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

    <!-- prising_area_start -->
    <div class="prising_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <h3>
                            JADWAL PERJALANAN DINAS 
                        </h3>
                        <h3>
                        BPS KABUPATEN PROBOLINGGO
                        </h3>
                    </div>
                </div>
            </div>

        <div class= "box-body">
            <?php if($this->session->flashdata('message')) : ?>
            <div class="row justify-content-center">
                <div class="alert alert-danger col-6 text-center" >
                    <p class="text-dark"><?= ucwords($this->session->flashdata('message')) ?></p>
                </div>
            </div>
            <?php endif; ?>
            <?php if($this->session->flashdata('success')) : ?>
            <div class="row justify-content-center">
                <div class="alert alert-success col-6 text-center" >
                    <p class="text-dark"><?= ucwords($this->session->flashdata('success')) ?></p>
                </div>
            </div>
            <?php endif; ?>
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th>Tanggal</th>
                        <th>Seksi</th>
                        <th>Kegiatan</th>
                        <?php if($level=='Kasi'){
                            echo '
                        <th>Aksi</th>';
                        }?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //if(is_array($jadwal)){
                    $no = 1;
                    foreach ($jadwal as $jdl) :
                        ?>
                        <tr>
                            <td style="text-align: .center;"><?php echo $no++ ?></td>
                            <td><?php echo date("j F Y",strtotime($jdl['TANGGAL'])) ?></td>
                            <td><?php echo $jdl['SEKSI'] ?></td>
                            <td><?php echo $jdl['KEGIATAN'] ?></td>
                            <td><?php if($level=='Kasi'){
                                ?>
                                <span onclick="javascript: return confirm('Anda yakin hapus?')">
                                    <?php echo anchor('Data_kasi/hapus/'.$jdl['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                                </span>
                                <span>
                                    <?php echo anchor('Data_kasi/edit/'.$jdl['id'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                                </span>
                                <?php }
                                ?>
                            </td>
                        </tr>
                    <?php
                    endforeach
                    ?>
                </tbody>
            </table>
        </div>
        </div>
    </div>

    <!-- footer -->
     <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-md-10 col-lg-8">
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
                                        <a href="https://www.instagram.com/bpskabprobolinggo/">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-5">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Tentang Sistem
                            </h3>
                            <p>Sistem Penjadwalan Dinas BPS Kabupaten Probolinggo merupakan sistem yang dirancang untuk mengatur penjadwalan perjalanan dinas staf BPS Kabupaten Probolinggo</p>
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

    <!-- Page level plugins -->
  <script src="<?php echo base_url('asset/tabel/jquery.dataTables.min.js');?>"></script>
  <script src="<?php echo base_url('asset/tabel/dataTables.bootstrap4.min.js');?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url('asset/tabel/datatables-demo.js');?>"></script>

    <script>
        document.getElementById('find').style.background = '#26C867';
    </script>
</body>

</html>