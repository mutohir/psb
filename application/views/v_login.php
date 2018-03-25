<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="halaman ini digunakan oleh panitia untuk mengelola data yang ada sesuai hak aksesnya">
    <meta name="author" content="Mutohir Amin">
    <link rel="icon" href="<?php echo base_url()?>assets/images/logo_almuhsin.png">
    <title>PSB Al Muhsin Sleman</title>   
    
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/signin.css" rel="stylesheet">
  <style>
  /* Button */
/*  .site-btn{padding:12px 25px 12px 25px;border-radius:2px;background:#DF314D;border-color:transparent;font-size:14px;}
  .site-btn:hover{background:#C9223D ;border-radius: transparent;}
  .site-btn2{padding:12px 25px 12px 25px;border-radius:2px;background:#05681e;border-color:transparent;font-size:14px;}
  .site-btn2:hover{background:rgb(128, 197, 71); ;border-radius:2px;}*/

  .panel-login{
  max-width: 400px;
  margin:0 auto;
  }
  body{
  padding-top: 50px;
  font-family: 'Titillium Web', sans-serif;
  background-color: #E6FFD9;
  }
p > a:hover{
    text-decoration: none;
    color: #609D41;
  }
  </style>
  <body>
    <div class="container">
      <div class="panel panel-default panel-login">
        <div class="panel-body" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        
          <?php if (isset($_SESSION['success'])): ?>
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Hoorray!</strong> <?php echo $_SESSION['success']; ?>
          </div>
          <?php elseif (isset($_SESSION['error'])): ?>
          <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Error!</strong> <?php echo $_SESSION['error']; ?>
          </div>
          <?php else: ?>
          <?php endif; ?>
          <center><a href="<?php echo base_url('Home') ?>"><img src="<?php echo base_url()?>assets/images/logo_almuhsin.png" alt="" class="img-responsive" style="max-width:120px; margin-top: 15px;"></a></center>
          <?php echo form_open("auth/cek_login"); ?>
          <!--
          <h2 class="form-signin-heading text-center" style="text-transform: uppercase"><strong class="text-info">Silahkan Login</strong></h2> -->
          <br>
          <label for="">Username</label>
          <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
          <label for="">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password" required style="margin-top:5px;">
          <!-- <div class="checkbox">
            <label>
              <input type="checkbox" value="ingat-saya" name="ingat"> Ingat Saya
            </label>
          </div> -->
          <br>
          <button class="btn btn-lg btn-success btn-block site-btn2" type="submit"><i class="fa fa-sign-in"></i> Masuk</button>
          <?php echo form_close(); ?><br>
          <div style="" class="daftar_akun text-center"><p>Belum punya akun? <a href="<?php echo base_url(); ?>Akun"><!-- <span class="fa fa-user-plus"></span> --> Buat Akun</a></p></div>
        </div>
      </div>
      </div> <!-- /container -->
      <!-- javasripts -->
      <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
      <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    </body>
  </html>