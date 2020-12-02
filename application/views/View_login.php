<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ?></title>
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
    <link rel="stylesheet" href="<?php echo base_url('asset/css/Pin.css')?>">
</head>
<body>

	<!-- form itself end-->
    <form id="test-form" class="limiter" method="post">
        <div class="loginform">
          <div class="login_inner">
                <div class="logo text-center">
                    <a href="#">
                        <img src="<?php echo base_url('asset/img/LogoBPS.png')?>" alt="" height="70" weight="90">
                    </a>
                </div>
                <h3><center>BPS OH</center></h3>

            <?php
                if($this->session->flashdata('sukses')){

                ?>
                <strong style="margin-top: 5px" class="text-success pl-3"><?php echo $this->session->flashdata('sukses');?></strong>
            <?php }?>
            <?php
                if($this->session->flashdata('warning')){

                ?>
                <strong style="margin-top: 5px" class="text-danger pl-3"><?php echo $this->session->flashdata('warning');?></strong>
            <?php }?>
                <form>
                    <?php 
                    //validasi form jika ada error

                    

                    echo form_open(base_url('Login'));
                    ?>
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div style="margin-top: 5px" class="error"><?php echo form_error('username', '<strong class="text-danger pl-3">','</strong>');?></div>
                            <input type="text" placeholder="Username" name="username" value="<?php echo set_value('username')?>">
                        </div>
                        <div class="col-xl-12 col-md-12">
                             <div style="margin-top: 5px" class="error"><?php echo form_error('password', '<strong class="text-danger pl-3">','</strong>');?></div> 
                            <input type="Password" name="password" placeholder="Masukkan Password" value="<?php echo set_value('password')?>">
                        </div>
                        <div class="col-xl-12">
                            <input type="submit" class="boxed_btn_green" id="tombol" value="Login"></input>
                        </div>
                    </div>
                </form>
                <a class="lupa" href="#">Lupa Password ?</a>
              </div>
        </div>
    </form>
    <!-- form itself end -->

</body>
</html>