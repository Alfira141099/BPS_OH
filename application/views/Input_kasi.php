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
    <link rel="stylesheet" href="<?php echo base_url('asset/css/responsive.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<!--     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" />
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
                                        <li><a class="" href="<?php echo base_url('Bps_kasi')?>">home</a></li>
                                        <li><a class="" href="<?php echo base_url('Jadwal/index')?>">Jadwal</a></li>
                                         <li><a class="active" href="<?php echo base_url('Kasi/index')?>">Input Jadwal</a></li>
                                        <li><a class="" href="<?php echo base_url('Input_pegawai/index')?>">Input Pegawai</a></li>
                                        <li><a class="" href="<?php echo base_url('Pegawai/index')?>">Data Pegawai</a></li>
                                        <li><a class="" href="<?php echo base_url('Login/logout')?>">Logout</a></li>
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
        <div class="container">
        <div class="row block-5 justify-content-center mb-1">
          <div class="col-md-4 mb-md-1">
            
            <h2 class="text-center">Penjadwalan Perjalanan Dinas<br> </h2>
            <?php if($this->session->flashdata('message')) : ?>
            <div class="row justify-content-center">
                <div class="alert alert-success text-center" >
                    <p class="text-dark"><?= ucwords($this->session->flashdata('message')) ?></p>
                </div>
            </div>
            <?php endif; ?>
            <form action="<?php echo base_url().'Kasi/tambah_aksi';?>" id="form-input" method="POST">
              <div class="form-group">
                <label for="nama">Nama</label>
                        <select name="NIP" id="nama" class="pegawai form-control">
                        <option disabled="disabled" selected="selected">Pilih Nama Pegawai</option>                            
                <?php foreach ($Pegawai as $pgi): ?>
                        <option value="<?php echo $pgi->NIP ?>"><?php echo $pgi->NAMA?></option>
                <?php endforeach ?>
                    </select>
                    <div style="margin-top: 5px" class="error"><?php echo form_error('NIP', '<small class="text-danger">','</small>');?></div>
              </div>
              <div class="form-group">
                <label for="nama">Seksi</label>
                        <select name="seksi" id="seksi" class="form-control">
                        <option selected disabled>Pilih Seksi/Subbag</option>
                <?php foreach ($dataseksi as $key): ?>
                        <option value="<?php echo $key->seksi ?>"><?php echo $key->seksi ?></option>
                <?php endforeach ?>
                    </select>
                    <div style="margin-top: 5px" class="error"><?php echo form_error('seksi', '<small class="text-danger">','</small>');?></div>
              </div>
              <div class="form-group">
                <label for="tempat">Tanggal</label>
                <div class="input-group">
                    <input id="tanggal" type="date" class="form-control" placeholder="tanggal" name="tanggal" autocomplete="off">
                </div>
                <div style="margin-top: 5px" class="error"><?php echo form_error('tanggal', '<small class="text-danger">','</small>');?></div>
              </div>
              
              <div class="form-group">
                <label for="nama">Kegiatan</label>
                <input type="text" class="form-control" name="kegiatan" id="" placeholder="Masukkan kegiatan">
                <div style="margin-top: 5px" class="error"><?php echo form_error('kegiatan', '<small class="text-danger">','</small>');?></div>
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
    </section>

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
<!--     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <!--contact js-->
    <script src="<?php echo base_url('asset/js/contact.js')?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.ajaxchimp.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.form.js')?>"></script>
    <script src="<?php echo base_url('asset/js/jquery.validate.min.js')?>"></script>
    <script src="<?php echo base_url('asset/js/mail-script.js')?>"></script>
    <script src="<?php echo base_url('asset/js/main.js')?>"></script>

    <script>
        $(document).ready(function() {
            $('.pegawai').select2();
            let disableddate = [];
            $('.pegawai').change(function(){
                let nip = this.value;
                $.ajax({
                    url: '<?= base_url() ?>/kasi/getDateAjax',
                    method: 'post',
                    data: {nip:nip},
                    success: 
                    function(result){
                        JSON.parse(result).forEach(item => disableddate.push(item))

                        // $('.datepicker').datepicker({
                        //     format: 'mm/dd/yyyy',
                        //     beforeShowDay: function(date){
                        //         dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
                        //         if(result.indexOf(dmy) != -1){
                        //             return false;
                        //         }
                        //         else{
                        //             return true;
                        //         }
                        //     }
                        // });
                    }
                });
            });
            $('.datepicker').datepicker({
                format: 'mm-dd-yyyy',
                beforeShowDay: function(date){
                    dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
                    if(disableddate.indexOf(dmy) != -1){
                        return false;
                    }
                    else{
                        return true;
                    }
                }
            });
        });
    </script>
    <script>
        document.getElementById('find').style.background = '#26C867';
        // In your Javascript (external .js resource or <script> tag)
    </script>
</body>

</html>