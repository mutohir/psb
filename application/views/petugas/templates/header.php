<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="website penerimaan santri baru pondok pesantren salafiyah al muhsin merupakan website untuk memudahkan calon pendaftar yang ingin mendaftar agar tidak repot-repot harus datang langsung ke lokasi pendaftaran.">
    <meta name="author" content="Mutohir Amin">
    <link rel="icon" href="<?php echo base_url()?>assets/images/logo_almuhsin.png">
    <title>PSB Al-Muhsin Sleman</title>   
    
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600" rel="stylesheet" type="text/css">
    
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/jquery.dynatable.css" rel="stylesheet">
    
    <link href="<?php echo base_url()?>assets/css/summernote.css" rel="stylesheet">

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/others.css" rel="stylesheet">    
    
    <style>
    body{
      background-color: #E7F3FF;
    }
      nav .container .nav .dropdown{
        background: transparent;
        /*padding: 5px;*/
      }
      .navbar-default .navbar-nav .open .dropdown-menu{
        background: #7bbd5a;
      }
      .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover{
        background: transparent;
      }
      .navbar-default .navbar-nav .open .dropdown-menu>li>a,.navbar-default .navbar-nav .open .dropdown-menu{
        border: none;
        color: #FFFFFF;
        background-color: #7bbd5a;
      }
      .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover{
        color: #609D41;
      }
       #data > thead > tr{
       background-color: #02AAB0;
      }
      .nav-sidebar{
        position: relative;
      }
      .nav-sidebar li ul{
       left: 110px;
       top: 20px;
      }

    </style>
  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
         <!-- <a class="navbar-brand" href="#"><img src="<?php echo base_url()?>/assets/images/logo_almuhsin.png" style="margin-top: -12px;" alt="" width="50px" class="img-responsive"></a>
        <form class="form-inline">
          <a href=""><button type="button" class="btn btn-danger text-center pull-right" style="margin-top:12px;">Logout</button></a>
        </form> -->
        <div class="navbar-header">
          <!-- <a href="#"><img src="<?php echo base_url()?>assets/images/logo_almuhsin.png" alt="PSB Al-Muhsin" width="65px" class="img-responsive"></a> -->
          <a class="navbar-brand" href="<?php echo base_url('petugas/C_petugas'); ?>" style="color: #FFFFFF; font-weight: bold;">PSB AL MUHSIN</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <!-- <li>
              <a href="<?php echo base_url("petugas/C_petugas/logout") ?>"><button type="button" class="btn btn-danger"><span class="fa fa-sign-out"></span> Keluar</button></a>
            </li> -->
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color: #fff;"><i class="fa fa-cogs"></i>&nbsp;Pengaturan <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                  <li role="presentation"><a role="menuitem" href="<?php echo base_url('petugas/C_petugas/profil/'); ?><?php echo $user_id; ?>"><span class="fa fa-user"></span>  &nbsp;Profil</a></li>
                  <li role="presentation"><a role="menuitem" href="<?php echo base_url('petugas/C_petugas/logout'); ?>"><span class="fa fa-sign-out"></span> Keluar</a></li>
                  <!-- <li role="presentation"><a role="menuitem" href="<?php echo base_url('petugas/C_petugas/ubah_password/'); ?>">Ubah Password</a></li> -->
              </ul>
            </li>
          </ul>
     </div>
   </nav>