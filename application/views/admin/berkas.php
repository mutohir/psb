<div class="container">
    <div class="clearfix"></div>
    <div class="row">
        <?php include('templates/etalase.php') ?>
  <div class="col-md-9">
  <?php if (isset($_SESSION['success'])): ?>
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Hoorray!</strong> <?php echo $_SESSION['success']; ?>.
    </div>
    <?php elseif (isset($_SESSION['error'])): ?>
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Error!</strong> <?php echo $_SESSION['error']; ?>
    </div>
    <?php else: ?>
    <?php endif; ?>
    <!-- <div class="panel panel-default"> -->
  <!--    </div>
</div> -->
    <h3 style="text-transform: uppercase; font-weight: bold;" class="text-center"> Berkas Pendaftaran</h3><hr>
<!-- <a href="<?php echo base_url('pendaftar/berkas/tambah'); ?>"><button class="btn btn-primary">Tambah Berkas</button></a><br><br> -->
<!-- <div class="panel"> -->
<div class="table-responsive">
<table id="data" class="table table-striped table-bordered">
<thead>
<tr>
  <th style="text-align:center" width="100">Nama Akun</th>
  <th style="text-align:center">Berkas 1</th>
  <th style="text-align:center">Berkas 2</th>
  <th style="text-align:center">Berkas 3</th>
  <th style="text-align:center">Berkas 4</th>
  <th style="text-align:center" width="150">Keterangan</th>
  <!-- <th>Nama File</th>
  <th>Ukuran File</th>
  <th>Tipe File</th> -->
  <th>Aksi</th>
</tr>
</thead>
<?php
if( ! empty($berkas)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($berkas as $data){ ?> <!-- Lakukan looping pada variabel gambar dari controller -->
    <tr>
    <td><?php echo $data->nama; ?></td>
    <td><img src="<?php echo base_url('uploads/berkas/'.$data->berkas_1); ?>" width="150" class="img-responsive">
    
    </td>
    <td><img src="<?php echo base_url('uploads/berkas/'.$data->berkas_2); ?>" width="150" class="img-responsive">
    
    </td>
    <td><img src="<?php echo base_url('uploads/berkas/'.$data->berkas_3); ?>" width="150" class="img-responsive">
    
    <td><img src="<?php echo base_url('uploads/berkas/'.$data->berkas_4); ?>" width="150" class="img-responsive">
    
    </td>
    <td><?php echo $data->keterangan; ?></td>
    <!-- <td><?php echo $data->nama_file; ?></td>
    <td><?php echo $data->ukuran_file." Kb";?></td>
    <td><?php echo $data->tipe_file; ?></td> -->
    <td>
    <!-- <a href="<?php echo base_url('pendaftar/berkas/ubah/') ?><?php echo $data->id_berkas; ?>" data-toggle="tooltip" title="Edit"><button class="btn btn-success" role="button"><span class="fa fa-edit"></span></button></a>
     -->
     <a href="<?php echo base_url('admin/C_admin/hapus/') ?><?php echo $data->id_berkas; ?>" data-toggle="tooltip" title="Hapus"><button class="btn btn-danger" role="button" onclick="return confirm('Apakah anda yakin akan menghapus berkas ini?')"><span class="fa fa-trash"></span></button></a>
    </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <a href="<?php echo base_url(); ?>admin/C_admin/download/<?php echo $data->berkas_1; ?>" data-toggle="tooltip" title="Dowload"><button class="btn btn-success" role="button"><span class="fa fa-download"></span> Download</button></a>
      </td>
      <td>
      <a href="<?php echo base_url(); ?>admin/C_admin/download/<?php echo $data->berkas_2; ?>" data-toggle="tooltip" title="Dowload"><button class="btn btn-success" role="button"><span class="fa fa-download"></span> Download</button></a>
      </td>
      <td>
      <a href="<?php echo base_url(); ?>admin/C_admin/download/<?php echo $data->berkas_3; ?>" data-toggle="tooltip" title="Dowload"><button class="btn btn-success" role="button"><span class="fa fa-download"></span> Download</button></a>
      </td>
      <td><a href="<?php echo base_url(); ?>admin/C_admin/download/<?php echo $data->berkas_4; ?>" data-toggle="tooltip" title="Dowload"><button class="btn btn-success" role="button"><span class="fa fa-download"></span> Download</button></a>
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  <?php } } else { ?>
  <tr><td colspan='6'>Data tidak ada</td></tr>
<?php } ?>
</table>
</div>
</div>
<!-- </div> -->
</div><!-- End Row -->
</div>
<div class="clearfix"></div>