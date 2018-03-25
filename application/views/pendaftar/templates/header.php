<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="website penerimaan santri baru pondok pesantren salafiyah al muhsin merupakan website untuk memudahkan calon pendaftar yang ingin mendaftar agar tidak repot-repot harus datang langsung ke lokasi pendaftaran yakni ponpes salafiyah al muhsin.">
    <meta name="author" content="Mutohir Amin">
    <link rel="icon" href="<?php echo base_url()?>assets/images/logo_almuhsin.png">
    <title>PSB Al-Muhsin Sleman</title>   
    
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600" rel="stylesheet" type="text/css">
    
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/jquery.dynatable.css" rel="stylesheet">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/others.css" rel="stylesheet">    

<style type="text/css">
  body{
      background-color: #E6FFD9;
    }
  .gallery
      {
          display: inline-block;
          margin-top: 20px;
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
<script type="text/javascript">
 
function showHide(elem) {
    if(elem.selectedIndex != 0) {
         //hide the divs
         for(var i=0; i < divsO.length; i++) {
             divsO[i].style.display = 'none';
        }
        //unhide the selected div
        document.getElementById('div'+elem.value).style.display = 'block';
    }
}
 
window.onload=function() {
    //get the divs to show/hide
    divsO = document.getElementById("frmMyform").getElementsByTagName('div');
}
</script>
  </head>
  <body>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
         <!-- <a class="navbar-brand" href="#"><img src="<?php echo base_url()?>/assets/images/logo_almuhsin.png" style="margin-top: -12px;" alt="" width="50px" class="img-responsive"></a>
        <form class="form-inline">
          <a href=""><button type="button" class="btn btn-danger text-center pull-right" style="margin-top:12px;">Logout</button></a>
        </form> -->
        <div class="navbar-header">
          <!-- <a href="#"><img src="<?php echo base_url()?>assets/images/logo_almuhsin.png" alt="PSB Al-Muhsin" style="margin: 5px auto;" width="65px" class="img-responsive"></a> -->
          <a class="navbar-brand" href="<?php echo base_url('pendaftar/C_pendaftar'); ?>" style="color: #FFFFFF; font-weight: bold;">PSB AL MUHSIN</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <!-- <li>
              <a href="<?php echo base_url("pendaftar/C_pendaftar/logout") ?>"><button type="button" class="btn btn-danger"><span class="fa fa-sign-out"></span> Keluar</button></a>
            </li> -->
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color: #fff;"><i class="fa fa-cogs"></i> Pengaturan<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                  <li role="presentation"><a role="menuitem" href="<?php echo base_url('pendaftar/C_pendaftar/profil/'); ?><?php echo $user_id; ?>"><span class="fa fa-user"></span>  &nbsp;Profil</a></li>
                  <li role="presentation"><a role="menuitem" href="<?php echo base_url('pendaftar/C_pendaftar/logout'); ?>" onclick="return confirm('Apakah anda yakin ingin keluar?')"><span class="fa fa-sign-out"></span> Keluar</a></li>
                  <!-- <li role="presentation"><a role="menuitem" href="<?php echo base_url('pendaftar/C_pendaftar/ubah_password/'); ?>">Ubah Password</a></li> -->
              </ul>
            </li>
          </ul>
     </div>
   </nav>

   <div class="container">
    <div class="clearfix"><!-- <div class="clearfix"></div> --></div>
    <!-- <div><p class="pull-right"></p>
      <h4>Selamat Datang <strong><?php echo $username ?></strong> !</h4>
    </div> -->
    <!-- <div class="clearfix"></div> -->