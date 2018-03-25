<div class="col-sm-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div href="#" class="thumbnail">
            <?php if (empty($this->input->post('userfile'))) { ?>
               <img src="<?php echo base_url()?>assets/images/logo_almuhsin.png" alt="foto" width="120">
            <?php } else { ?>
                <img src="<?php echo base_url('uploads/foto_user').$query->userfile; ?>" alt="foto" width="120">
            <?php } ?>
            </div>
            <h3 class="panel-title text-center" style="text-transform:uppercase;"><?php echo $level; ?></h3><br>
        </div>
        <div class="panel-body">
            <ul class="nav nav-sidebar">
                <li><a href="<?php echo base_url()?>pendaftar/C_pendaftar"><span class="fa fa-dashboard"></span>&nbsp;&nbsp;&nbsp;Dashboard </a></li>
                <li class="dropdown"><a href="#" id="menu1" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-info-circle"></i>&nbsp;&nbsp;&nbsp;Informasi <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url('pendaftar/C_pendaftar/panduan')?>"><span class="fa fa-indent"></span>&nbsp;&nbsp;&nbsp;Panduan Pendaftaran </a></li>
                        <li><a href="<?php echo base_url('pendaftar/C_pendaftar/biaya')?>"><span class="fa fa-money"></span>&nbsp;&nbsp;&nbsp;Biaya Pendaftaran </a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" id="menu1" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;Jadwal <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url()?>pendaftar/C_pendaftar/jadwal"><span class="fa fa-calendar"></span>&nbsp;&nbsp;&nbsp;Jadwal Pendaftaran </a></li>
                        <li><a href="<?php echo base_url()?>pendaftar/C_pendaftar/jadwal_ngaji"><span class="fa fa-book"></span>&nbsp;&nbsp;&nbsp;Jadwal Ngaji </a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url('pendaftar/C_pendaftar/daftar/')?><?php echo $user_id; ?>"><span class="fa fa-book"></span>&nbsp;&nbsp;&nbsp;Daftar Online </a></li>
           <!--      <li><a href="<?php echo base_url('pendaftar/C_pendaftar/biodata/')?><?php echo $user_id; ?>"><span class="fa fa-file-text"></span>&nbsp;&nbsp;&nbsp;Biodata </a></li> -->
                <li><a href="<?php echo base_url('pendaftar/berkas/')?>"><span class="fa fa-file"></span>&nbsp;&nbsp;&nbsp;Berkas</a></li>
                <!-- <li><a href="<?php echo base_url('pendaftar/C_pendaftar/penerimaan')?>"><span class="fa fa-graduation-cap"></span>&nbsp;&nbsp;Pengumuman </a></li> -->
            <!-- <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-cogs"></i> Pengaturan<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role="presentation"><a role="menuitem" href="<?php echo base_url('pendaftar/C_pendaftar/profil/');?><?php echo $user_id; ?>">Profil</a></li>
                <li role="presentation"><a role="menuitem" href="#">Ubah Password</a></li>
            </ul>
        </li> -->
        <!-- <a href="<?php echo base_url("pendaftar/C_pendaftar/logout") ?>" class="text-default" style="margin-left: 16px;"> <span class="fa fa-sign-out"></span> Keluar<button class="btn btn-xs btn-danger" style="margin-left: 12px;"><i class="fa fa-sign-out"></i> Keluar</button></a> -->
    </ul>
</div>
</div>
</div>