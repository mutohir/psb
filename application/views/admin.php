<!DOCTYPE html>
<html lang="en">
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
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/admin.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="<?php echo base_url()?>assets/images/logo_almuhsin.png" width="50" class="img-responsive pull-left" alt="">
          <a class="navbar-brand" href="<?php echo base_url()?>/admin"> PSB MUHSIN SLEMAN</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-atas">
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="#"><i class="fa fa-user"> </i> Pengumuman</a></li>
            <li><a href="#"><i class="fa fa-user"> </i> Data Calon Santri</a></li>
            <li><a href="#"><i class="fa fa-file-text"> </i> Jadwal</a></li>
            <li><a href="#"><i class="fa fa-file-text"> </i> Manajemen User</a></li>
            <li><a href="#"><i class="fa fa-file-text"> </i> Laporan</a></li>
            <li><a href="#"><i class="fa fa-user-circle"> </i> Admin</a></li>
          </ul>
          <div>
          <?php echo form_open('Admin/keluar'); ?>
          <a><button type="submit" class="btn btn-danger" style="margin-top: 8px;"><i class="fa fa-power-off" aria-hidden="true"></i> Keluar</button></a>
          <?php echo form_close(); ?>
        </div>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="#"><i class="fa fa-user"> </i> Pengumuman</a></li>
            <li><a href="#"><i class="fa fa-user"> </i> Data Calon Santri</a></li>
            <li><a href="#"><i class="fa fa-file-text"> </i> Jadwal</a></li>
            <li><a href="#"><i class="fa fa-file-text"> </i> Manajemen User</a></li>
            
            <li><a href="#"><i class="fa fa-file-text"> </i> Laporan</a></li>
            <li><a href="#"><i class="fa fa-user-circle"> </i> Admin</a></li>
          </ul>
          <footer class="text-center" style="position: relative; top:250px; z-index: 1000;"><p style="color: #fff;">Copyright @2017</p></footer>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Data Santri</h1>

          <div class="row placeholders">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 placeholder">
              <span class="fa fa-user-circle-o text-danger" style="font-size: 200px"></span>
              <h4><strong>Calon Santriwan</strong></h4>
              <!-- <span class="text-muted">Something else</span> -->
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 placeholder">
              <span class="fa fa-user-circle-o text-warning" style="font-size: 200px"></span>
              <h4><strong>Calon Santriwati</strong></h4>
              <!-- <span class="text-muted">Something else</span> -->
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 placeholder">
              <span class="fa fa-user-circle-o text-info" style="font-size: 200px"></span>
              <h4><strong>Santriwan</strong></h4>
              <!-- <span class="text-muted">Something else</span> -->
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 placeholder">
              <span class="fa fa-user-circle-o text-success" style="font-size: 200px"></span>
            <h4><strong>Santriwati</strong></h4>
            </div>
          </div>

          <h2 class="sub-header">Data Calon Santri</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NISN</th>
                  <th>Nama Lengkap</th>
                  <th>Asal Sekolah</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,00</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
              </tbody>
            </table>

        <ul class="pagination text-center">
          <li><a href="#">&laquo;</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>

          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
