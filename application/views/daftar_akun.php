<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="halaman ini digunakan oleh panitia untuk mengelola data yang ada sesuai hak aksesnya">
    <meta name="author" content="Mutohir Amin">
    <link rel="icon" href="<?php echo base_url()?>assets/images/logo_almuhsin.png">

    <title>Selamat Datang di login PSB Al Muhsin Sleman</title>

    <!-- Bootstrap core CSS -->
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>  
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/css/signin.css" rel="stylesheet">
  </head>
<style>
  .panel-login{
    max-width: 400px;
    margin:0 auto;
  }
  body{
  padding-top: 50px;
  font-family: 'Titillium Web', sans-serif;
  background-color: #E6FFD9;
  }

</style>
  <body>
    <div class="container">
    <div class="panel panel-default panel-login">
       
    <!-- <?php if (isset($_SESSION['sukses']));  ?>
       <div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Holy guacamole!</strong> <?php echo $_SESSION['sukses']; ?> 
       </div>

    <?php if (isset($_SESSION['error']));  ?>
       <div class="alert alert-warning alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Holy guacamole!</strong> <?php echo $_SESSION['error']; ?> 
       </div> -->

      <div class="panel-body" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <!-- <center><a href="index.html"><img src="<?php echo base_url()?>assets/images/logo_almuhsin.png" alt="" class="img-responsive" style="max-width:120px; margin-top: 15px;"></a></center> -->
      <?php echo form_open("akun/tambah"); ?>
        <b class="text-danger"> <?php echo $exist; ?></b>
        <h2 class="form-signin-heading text-center" style="text-transform: uppercase"><strong class="text-info">Daftar Akun</strong></h2>
       <br>
        <label for="">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama Anda" required autofocus>
        <label for="">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username" required>
        <label for="">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" style="margin-top:5px;" required>
        <label for="">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" style="margin-top:5px;">
        <input type="hidden" name="level" id="level" class="form-control" value="<?php echo 'pendaftar' ?>" class="sr-only" required><br>
        <div class="pull-right">
        <button class="btn btn-success" type="submit" name="add"><i class="fa fa-user-plus"></i> Daftar</button>
        <button class="btn btn-warning" type="reset"><i class="fa fa-refresh"></i> Reset</button>
        </div>
      <?php echo form_close(); ?>
      <a href="<?php echo base_url('auth'); ?>"><button class="btn btn-danger"><span class="fa fa-arrow-left"></span> <!-- Kembali --></button></a>
    </div>
    </div> <!-- /container -->

    <!-- javasripts -->
    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
