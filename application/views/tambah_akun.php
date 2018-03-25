<div class="container">
    <div class="panel panel-default panel-login">
      <div class="panel-body" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <center><a href="index.html"><img src="<?php echo base_url()?>assets/images/logo_almuhsin.png" alt="" class="img-responsive" style="max-width:120px; margin-top: 15px;"></a></center>
      <?php echo form_open("auth/cek_login"); ?>
      <!--   
        <h2 class="form-signin-heading text-center" style="text-transform: uppercase"><strong class="text-info">Silahkan Login</strong></h2> -->
       <br>
       <label for="">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
        <label for="">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" required style="margin-top:5px;">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="ingat-saya" name="ingat"> Ingat Saya
          </label>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit"><i class="fa fa-send"></i> Masuk</button>
      <?php echo form_close(); ?>
      <div class="daftar_akun text-center"><p>Belum punya akun? <a href='<?php echo base_url() ?>home/tambahakun'>Daftar</a></p></div>
      </div>
    </div>
    </div> <!-- /container -->