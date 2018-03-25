<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="website penerimaan santri baru pondok pesantren salafiyah al muhsin merupakan website untuk memudahkan calon pendaftar yang ingin mendaftar agar tidak repot-repot harus datang langsung ke lokasi pendaftaran yakni ponpes salafiyah al muhsin.">
    <meta name="author" content="Mutohir Amin">
    <link rel="icon" href="<?php echo base_url()?>assets/images/logo_almuhsin.png">
    <title>PSB Al Muhsin Sleman</title>   
    
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/jquery.dynatable.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/home.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/footer.css" rel="stylesheet">
  </head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a href="#"><img src="<?php echo base_url()?>/assets/images/logo_almuhsin.png" alt="" width="30px" class="img-responsive"></a> -->
          <a class="navbar-brand" href="/psb" style="color: #FFFFFF; font-weight: bold;">PSB AL MUHSIN</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url()?>">HOME <span class="sr-only">(current)</span></a></li>
            <!-- <li><a href="<?php echo site_url('Home/daftar_online')?>">DAFTAR ONLINE</a></li> -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">INFORMASI PENDAFTARAN <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('Home/panduan')?>">PANDUAN PENDAFTARAN</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo site_url('Home/biaya')?>">BIAYA PENDAFTARAN</a></li>
<!--                 <li><a href="<?php echo site_url('Home/daftar_ulang')?>">DAFTAR ULANG</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo site_url('Home/tes')?>">TES MASUK</a></li> -->
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">INFORMASI JADWAL <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('Home/jadwal')?>">JADWAL PENDAFTARAN</a></li>
                <li><a href="<?php echo site_url('Home/rutinitas')?>">JADWAL KEGIATAN PONDOK</a></li>
              </ul>
            </li>
            <!-- <li><a href="<?php echo site_url('Home/statistik')?>">STATISTIK</a></li> -->
            <!-- <li><a href="<?php echo site_url('Home/kontak')?>">KONTAK KAMI</a></li> -->
            <li><a href="<?php echo site_url('Auth')?>">LOGIN/DAFTAR</a></li>
            <!-- <li><a href="#daftar" data-toggle="modal"></a></li> -->
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url()?>/assets/images/1.jpg ?>" class="img-responsive">
      <div class="container">
        <div class="caraous-title">
            <div class="col-md-12">
                <div class="col-md-7 title">
                    <!-- <span>Daftarkan diri anda sekarang!</span> -->
                    <!-- <h1 style="text-transform: uppercase;"><span>Daftarkan</span>diri anda sekarang!</h1>
                    <h3>We are non-profit NGO & Charity Organization</h3>
                    <a class="btn btn-lg btn-primary site-btn2" href="#">Learn More</a> -->
                </div>
                <div class="col-md-5 caraous-img-box">
                  <img src="<?php echo base_url()?>/assets/images/1.jpg ?>" class="img-responsive">
                </div>
                
            </div>
        
        </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url()?>/assets/images/2.jpg" class="img-responsive">
      <div class="container">
        <div class="caraous-title">
            <div class="col-md-12">
                <div class="col-md-7 title">
                  <!--   <span>Non-Profit Organization</span>
                    <h1><span>RAISE</span> YOUR HELPING HAND</h1>
                    <h3>We are non-profit NGO & Charity Organization</h3>
                    <a class="btn btn-lg btn-primary site-btn" href="#">Learn More</a> -->
                </div>
                <div class="col-md-5 caraous-img-box">
                   <img src="<?php echo base_url()?>/assets/images/3.jpg" class="img-responsive">
                </div>
                
            </div>
        
        </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url()?>/assets/images/3.jpg" class="img-responsive">
      <div class="container">
        <div class="caraous-title">
            <div class="col-md-12">
                <div class="col-md-7 title">
          <!--           <span>Non-Profit Organization</span>
                    <h1><span>RAISE</span> YOUR HELPING HAND</h1>
                    <h3>We are non-profit NGO & Charity Organization</h3>
                    <a class="btn btn-lg btn-primary site-btn" href="#">Learn More</a> -->
                </div>
                <div class="col-md-5 caraous-img-box">
                   <img src="<?php echo base_url()?>/assets/images/3.jpg" class="img-responsive">
                </div>
                
            </div>
        
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>