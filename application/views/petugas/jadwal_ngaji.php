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
            <h3 class="text-center" style="text-transform: uppercase; font-weight: bold;">Jadwal Ngaji Pondok</h3>
            <a href="<?php echo base_url('petugas/C_petugas/form_add_jadwal_ngaji') ?>" class="pull-right">
            <button class="btn btn-primary" name="add" type="submit"><span class="fa fa-calendar"></span> Tambah</button></a>
            <div class="clearfix"></div>
            <div class="table-responsive">
          <table  id="data" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No.</th>
                <th>Kelas</th>
                <th>Hari/Waktu</th>
                <th>Kitab</th>
                <th>Ustadz</th>
                <th>Tempat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no = 1;
              foreach ($query as $ngaji) { ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $ngaji->kelas; ?></td>
                <td><?php echo $ngaji->waktu; ?></td>
                <td><?php echo $ngaji->kitab; ?></td>
                <td><?php echo $ngaji->ustad; ?></td>
                <td><?php echo $ngaji->tempat; ?></td>
                <td>
                <a href="<?php echo base_url('petugas/C_petugas/edit_ngaji/') ?><?php echo $ngaji->id_ngaji ?>" data-toggle="tooltip" title="Edit"><button class="btn btn-success" role="button"><span class="fa fa-edit"></span></button></a>
                <a href="<?php echo base_url('petugas/C_petugas/delete_jadwal_ngaji/') ?><?php echo $ngaji->id_ngaji ?>" data-toggle="tooltip" title="Hapus"><button class="btn btn-danger" role="button" onclick="return confirm('Apakah anda yakin akan menghapus jadwal ini?')"><span class="fa fa-trash"></span></button></a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      <!-- </div> -->
</div>
</div>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>