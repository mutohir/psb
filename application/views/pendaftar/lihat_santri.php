<div class="container">
    <div class="clearfix"></div>
    <div class="row">
        <?php include('templates/etalase.php') ?>
        <div class="col-md-9">
  <a style="margin-top: 15px;" href="<?php echo base_url('pendaftar/C_pendaftar/'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right"><button class="btn btn-primary fa fa-arrow-left pull-right"></button></a>
    <h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Biodata Pendaftar</h3><hr>
  <div class="panel panel-default">
    <a style="margin-top: 15px;" href="<?php echo base_url('pendaftar/C_pendaftar/laporan_pendaftar/'); ?><?php echo $query->id_santri; ?>" data-toggle="tooltip" title="Cetak" class="pull-right" target="_blank"><button class="btn btn-warning fa fa-print"></button></a>
  <table class="table table-bordered">
        <tr>
          <td colspan="2" align="center"><label for="">Santri</label></td>
        </tr>
        <tr>
          <td><label for="">No. Pendaftaran</label></td>
          <td><?php echo $query->no_pendaftaran; ?></td>
        </tr>
        <tr>
          <td><label for="">Nama Lengkap</label></td>
          <td><?php echo $query->nama_santri; ?></td>
        </tr>
        <tr>
          <td><label for="">TTL</label></td>
          <td><?php echo $query->tmp_lahir; ?>, <?php echo $query->tgl_lahir; ?></td>
        </tr>
        <tr>
          <td><label for="">Gender</label></td>
          <td><?php echo $query->gender; ?></td>
        </tr>
        <tr>
          <td><label for="">Status</label></td>
          <td><?php echo $query->status; ?></td>
        </tr>
        <tr>
          <td><label for="">Pekerjaan</label></td>
          <td><?php echo $query->pekerjaan; ?></td>
        </tr>
        <tr>
          <td><label for="">Telephone</label></td>
          <td><?php echo $query->telp_santri; ?></td>
        </tr>
        <tr>
          <td><label for="">Status Daftar</label></td>
          <td><?php echo $query->status_daftar; ?></td>
        </tr>
<!--         <tr>
          <td><label for="">Foto</label></td>
          <td><img src="<?php echo base_url('uploads/foto_user').$query->userfile; ?>" alt="foto" width="120"/>
          </td>
        </tr> -->
        <!-- Biodata Ayah -->
        <tr>
          <td colspan="2" align="center"><label for="">Ayah</label></td>
        </tr>
        <tr>
          <td><label for="">Nama Lengkap</label></td>
          <td><?php echo $query->nama_ayah; ?></td>
        </tr>
        <tr>
          <td><label for="">Alamat</label></td>
          <td><?php echo $query->alamat_ayah; ?></td>
        </tr>
        <tr>
          <td><label for="">Pekerjaan</label></td>
          <td><?php echo $query->pekerjaan_ayah; ?></td>
        </tr>
        <tr>
          <td><label for="">Telephone</label></td>
          <td><?php echo $query->telp_ayah; ?></td>
        </tr>
        <!-- Biodata Ibu -->
        <tr>
          <td colspan="2" align="center"><label for="">Ibu</label></td>
        </tr>
        <tr>
          <td><label for="">Nama Lengkap</label></td>
          <td><?php echo $query->nama_ibu; ?></td>
        </tr>
        <tr>
          <td><label for="">Alamat</label></td>
          <td><?php echo $query->alamat_ibu; ?></td>
        </tr>
        <tr>
          <td><label for="">Pekerjaan</label></td>
          <td><?php echo $query->pekerjaan_ibu; ?></td>
        </tr>
        <tr>
          <td><label for="">Telephone</label></td>
          <td><?php echo $query->telp_ibu; ?></td>
        </tr>
      </table>
      </div>
      <!-- </div> -->
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>
