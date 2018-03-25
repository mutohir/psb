<div class="container">
  <div class="clearfix"></div>
  <div class="row">
    <?php include('templates/etalase.php') ?>
    <div class="col-sm-9">
      <a style="margin-top: 15px;" href="<?php echo base_url('petugas/C_petugas/'); ?>" data-toggle="tooltip" title="Kembali" class="pull-right"><button class="btn btn-primary fa fa-arrow-left pull-right"></button></a>
      <h3 style="text-transform: uppercase; font-weight: bold;" class="text-center"> Biodata Santri Baru</h3><hr>
      <!-- <a href="#"><button class=" btn btn-md btn-primary"><span class="fa fa-file"></span> Tambah Berkas</button></a><hr> -->
    <div class="panel panel-default">
    <div class="panel-body">
      <table class="table table-bordered">
        <tr>
          <td colspan="2" align="center"><label for="">Santri</label></td>
        </tr>
        <tr>
          <td><label for="">No. Pendaftaran</label></td>
          <td><?php echo $santri->no_pendaftaran; ?></td>
        </tr>
        <tr>
          <td><label for="">Nama Lengkap</label></td>
          <td><?php echo $santri->nama_santri; ?></td>
        </tr>
        <tr>
          <td><label for="">TTL</label></td>
          <td><?php echo $santri->tmp_lahir; ?><?php echo $santri->tgl_lahir; ?></td>
        </tr>
        <tr>
          <td><label for="">Gender</label></td>
          <td><?php echo $santri->gender; ?></td>
        </tr>
        <tr>
          <td><label for="">Status</label></td>
          <td><?php echo $santri->status; ?></td>
        </tr>
        <tr>
          <td><label for="">Status Daftar</label></td>
          <td><?php echo $santri->status_daftar; ?></td>
        </tr>
        <tr>
          <td><label for="">Telephone</label></td>
          <td><?php echo $santri->telp_santri; ?></td>
        </tr>
        <tr>
          <td><label for="">Pekerjaan</label></td>
          <td><?php echo $santri->pekerjaan; ?></td>
        </tr>
<!--         <tr>
          <td><label for="">Foto</label></td>
          <td><img src="<?php echo base_url('uploads/foto_user').$santri->userfile; ?>" width="100px"></td>
        </tr> -->
        <!-- Biodata Ayah -->
        <tr>
          <td colspan="2" align="center"><label for="">Ayah</label></td>
        </tr>
        <tr>
          <td><label for="">Nama Lengkap</label></td>
          <td><?php echo $santri->nama_ayah; ?></td>
        </tr>
        <tr>
          <td><label for="">Alamat</label></td>
          <td><?php echo $santri->alamat_ayah; ?></td>
        </tr>
        <tr>
          <td><label for="">Pekerjaan</label></td>
          <td><?php echo $santri->pekerjaan_ayah; ?></td>
        </tr>
        <tr>
          <td><label for="">Telephone</label></td>
          <td><?php echo $santri->telp_ayah; ?></td>
        </tr>
        <!-- Biodata Ibu -->
        <tr>
          <td colspan="2" align="center"><label for="">Ibu</label></td>
        </tr>
        <tr>
          <td><label for="">Nama Lengkap</label></td>
          <td><?php echo $santri->nama_ibu; ?></td>
        </tr>
        <tr>
          <td><label for="">Alamat</label></td>
          <td><?php echo $santri->alamat_ibu; ?></td>
        </tr>
        <tr>
          <td><label for="">Pekerjaan</label></td>
          <td><?php echo $santri->pekerjaan_ibu; ?></td>
        </tr>
        <tr>
          <td><label for="">Telephone</label></td>
          <td><?php echo $santri->telp_ibu; ?></td>
        </tr>
      </table>
      </div>
      </div>
    </div>
    </div><!-- End Row -->
  </div>
  <div class="clearfix"></div>