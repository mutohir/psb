<div class="col-sm-3">
    <div class="panel panel-default" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="panel-heading">
            <div data-toggle="modal" href='#modal-id' class="thumbnail">
                <img src="<?php echo base_url()?>/assets/images/logo_almuhsin.png" alt="" width="100px" class="img-responsive">
            </div>
            <h3 class="panel-title text-center" style="text-transform: uppercase;"><?php echo $level ?></h3>
            <div class="modal fade" id="modal-id">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- <?php
                        foreach ($query as $row) { ?> -->
                        <form action="<?php echo base_url('petugas/C_petugas/edit/')?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Foto Profil</h4>
                            </div>
                            <div class="modal-body">
                                <input type="file" name="userfile" value="" placeholder="" size="20">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="submit">Upload</button>
                            </div>
                        </form>
                        <!-- <?php } ?> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <ul class="nav nav-sidebar">
                <li><a href="<?php echo base_url()?>petugas/C_petugas"><span class="fa fa-dashboard"></span> &nbsp;&nbsp;&nbsp;Dashboard</a></li>
                <!-- <li class="dropdown "><a href="#" id="menu1" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-indent"></i> &nbsp;&nbsp;&nbsp;Informasi <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu"> -->
                <li class="dropdown"><a href="#" id="menu1" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-info-circle"></i>&nbsp;&nbsp;&nbsp;Informasi <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url('petugas/C_petugas/panduan')?>"><span class="fa fa-indent"></span>&nbsp;&nbsp;&nbsp;Panduan Pendaftaran </a></li>
                        <li><a href="<?php echo base_url('petugas/C_petugas/biaya')?>"><span class="fa fa-money"></span>&nbsp;&nbsp;&nbsp;Biaya Pendaftaran </a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" id="menu1" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-calendar"></i>&nbsp;&nbsp;&nbsp;Jadwal <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo base_url()?>petugas/C_petugas/jadwal"><span class="fa fa-calendar"></span>&nbsp;&nbsp;&nbsp;Jadwal Pendaftaran </a></li>
                        <li><a href="<?php echo base_url()?>petugas/C_petugas/jadwal_ngaji"><span class="fa fa-book"></span>&nbsp;&nbsp;&nbsp;Jadwal Ngaji </a></li>
                    </ul>
                </li>
                <!-- </ul></li> -->
                <li><a href="<?php echo base_url('petugas/C_petugas/penerimaan')?>"><span class="fa fa-graduation-cap"></span>&nbsp;&nbsp;Penerimaan</a></li>
                <!-- <li><a href="<?php echo base_url('pendaftar/berkas/')?>"><span class="fa fa-file"></span>&nbsp;&nbsp;&nbsp;Berkas</a></li> -->
                <!-- <li class="dropdown "><a href="#" id="menu1" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-address-book"></i> &nbsp;&nbsp;&nbsp;Pengguna <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo base_url('petugas/C_petugas/data_pendaftar') ?>">Pendaftar</a></li>
                    <li><a href="<?php echo base_url('petugas/C_petugas/data_petugas') ?>">Petugas</a></li>
                </ul>
            </li> -->
            <li><a href="<?php echo base_url()?>petugas/C_petugas/berkas"><span class="fa fa-file"></span>&nbsp;&nbsp;&nbsp;Berkas </a></li>
            <!-- <li class="dropdown "><a href="#" id="menu1" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;&nbsp;Laporan <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url('C_laporan_pendaftar') ?>" target="_blank">Laporan Data Pendaftar</a></li>
                <li><a href="<?php echo base_url('C_laporan_petugas') ?>" target="_blank">Laporan Data Petugas</a></li>
            </ul>
        </li> -->
        <!-- <li class="dropdown "><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-cogs"></i> Pengaturan<span class="caret"></span></a> -->
        <!-- <ul class="dropdown-menu" role="menu" aria-labelledby="menu1"> -->
            <!-- <li role="presentation"><a role="menuitem" href="<?php echo base_url('petugas/C_petugas/profil/'); ?>">Profil</a></li> -->
            <!-- <li role="presentation"><a role="menuitem" href="<?php echo base_url('petugas/C_petugas/ubah_password/'); ?>">Ubah Password</a></li> -->
        <!-- </ul> -->
    <!-- </li> -->
    <!-- <a href="<?php echo base_url("petugas/C_petugas/logout") ?>" class="text-primary" style="margin-left: 16px;"><span class="fa fa-sign-out"></i> </span> Keluar</a> -->
</ul>
</div>
<!-- <table class="table table-responsive table-hover">
<tr>
    <td><a href="<?php echo base_url()?>petugas/informasi">Manajemen Informasi</a></td>
</tr>
<tr>
    <td><a href="<?php echo base_url()?>petugas/data_pendaftar">Manajemen Data Pendaftar</a></td>
</tr>
<tr>
    <td><a href="<?php echo base_url()?>petugas/berkas">Manajemen Berkas</a></td>
</tr>
<tr>
    <td><a href="<?php echo base_url()?>petugas/kebutuhan_santri">Manajemen Kebutuhan Santri</a></td>
</tr>
<tr>
    <td><a href="">Manajemen Panitia PSB</a></td>
</tr>
<tr>
    <td><a href="">Manajemen Laporan</a></td>
</tr>
<tr>
    <td><a href="#" class="text-danger"><i class="fa fa-sign-out"> </i> Keluar</a></td>
</tr>
</tbody>
</table> -->
</div>
</div>