<div class="container">
    <div class="clearfix"></div>
    <div class="row">
        <?php include('templates/etalase.php') ?>
  <div class="col-md-9">
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
    <h3 style="text-transform: uppercase; font-weight: bold;" class="text-center"> Rincian Biaya Pendaftaran</h3><hr>
            <a href="<?php echo base_url('petugas/C_petugas/form_add_biaya') ?>" class="pull-right">
            <button class="btn btn-primary" name="add" type="submit"><span class="fa fa-money"></span> Tambah</button></a>
            <div class="clearfix"></div>
  <div class="table-responsive">
    <table id="data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Kategori</th>
          <th>Jumlah</th>
          <th>Alokasi</th>
          <th>Total</th>
          <th>Aksi</th>
        </tr>
      </thead>
    <?php
      $no = 1;
       foreach ($biaya as $row) { ?>
      <!-- <tbody> -->
      <tr>
        <td><?php echo $no++;; ?></td>
        <td><?php echo $row->kategori_biaya; ?></td>
        <td><?php echo $row->jumlah; ?></td>
        <td><?php echo $row->alokasi; ?></td>
        <td colspan="4" class="text-center"><?php echo $row->total; ?></td>
        <td>
        <a href="<?php echo base_url('petugas/C_petugas/edit_biaya/') ?><?php echo $row->id_biaya ?>" data-toggle="tooltip" title="Edit"><button class="btn btn-success" role="button"><span class="fa fa-edit"></span></button></a>
        <a href="<?php echo base_url('petugas/C_petugas/delete_biaya/') ?><?php echo $row->id_biaya ?>" data-toggle="tooltip" title="Hapus"><button class="btn btn-danger" role="button" onclick="return confirm('Apakah anda yakin akan menghapus jadwal ini?')"><span class="fa fa-trash"></span></button></a>
        </td>
      </tr>
      <!-- </tbody> -->
      <!-- <tfoot style="color: #212121; font-weight: bold;" class="bg-success"> -->
      <!-- </tfoot> -->
      <?php } ?>
    </table>
  </div>
<!-- </div> -->
</div>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>