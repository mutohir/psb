<div class="container">
    <div class="clearfix"></div>
    <div class="row">
        <?php include('templates/etalase.php') ?>
        <div class="col-sm-9"><?php if (isset($_SESSION['success'])): ?>
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
            <a href="<?php echo base_url('petugas/C_petugas/form_add_panduan') ?>" class="pull-right" style="margin-top: 15px;">
            <button class="btn btn-primary"><span class="fa fa-plus"></span> Tambah</button></a>
            <h3 class="text-center" style="text-transform: uppercase; font-weight: bold;">panduan pendaftaran</h3><hr>
   <div class="panel panel-default">
     <div class="panel-body">
     
  <table id="data" class="table table-bordered table-striped">
      <thead>
        <tr>
        <th class="text-center">Judul Panduan</th>
        <th class="text-center">Isi Panduan</th>
        <th class="text-center">Aksi</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($panduan as $row) { ?>
        <tr>
        <td><?php echo $row->judul_panduan; ?></td>
        <td><?php echo $row->isi_panduan; ?></td>
        <td>
          <a href="<?php echo base_url('petugas/C_petugas/edit_panduan/') ?><?php echo $row->id_panduan ?>" data-toggle="tooltip" title="Edit"><button class="btn btn-success" role="button"><span class="fa fa-edit"></span></button></a>
          <a href="<?php echo base_url('petugas/C_petugas/delete_panduan/') ?><?php echo $row->id_panduan ?>" data-toggle="tooltip" title="Hapus"><button class="btn btn-danger" role="button" onclick="return confirm('Apakah anda yakin akan menghapus panduan ini?')"><span class="fa fa-trash"></span></button></a>
        </td>
      </tr>
      <?php } ?>
      </tbody>
  </table>
</div>
   </div>
  <!--    </div>
</div> -->
<!-- <div class="panel panel-default">
  <div class="panel-body">
    <div role="tabpanel">
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
        <?php foreach ($panduan as $row) { ?>
          <a href="#panduan" aria-controls="home" role="tab" data-toggle="tab"><?php echo $row->judul_panduan; ?></a>
        </li>
        <li role="presentation">
          <a href="#alur" aria-controls="tab" role="tab" data-toggle="tab">Alur Pendaftaran</a>
        </li>
      </ul>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="panduan">
          <div class="panel-body text-justify">
            <?php echo $row->isi_panduan; ?>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="alur">
          <div class="panel-body">
            <img src=" <?php echo base_url(); ?>assets/images/alurnew.png" alt="" class="img-responsive">
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div> -->
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>