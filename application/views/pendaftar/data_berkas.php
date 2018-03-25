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
<a href="<?php echo base_url('pendaftar/C_pendaftar/berkas'); ?>"><button type="button" class="btn btn-primary"><span class="fa fa-file"></span> Tambah File</button></a><br>
<table id="data" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama File</th>
            <th>File</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach ($picture_list as $pic): ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $pic->judul_foto; ?></td>
            <td><img src="<?=base_url().'/uploads/'.$pic->foto;?>" width="100"></td>
            <td><button class="btn btn-success"><span class="fa fa-edit"></span></button> <button class="btn btn-danger"><span class="fa fa-trash"></span></button></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<div class="clearfix"></div>