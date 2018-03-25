<div class="container">
    <div class="clearfix"></div>
    <div class="row">
        <?php include('templates/etalase.php') ?>
        <div class="col-md-9">
    <h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Data Penerimaan</h3><hr>
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
</div><!-- End Row -->
</div>
<div class="clearfix"></div>