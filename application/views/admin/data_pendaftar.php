<div class="container">
    <div class="clearfix"></div>
    <div class="row">
        <?php include('templates/etalase.php') ?>
        <div class="col-sm-9">
            <h3 class="text-center" style="text-transform: uppercase; font-weight: bold;">Data Akun pendaftar</h3>
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
            <!-- <a href="<?php echo base_url('C_laporan_pendaftar') ?>" class="pull-right" data-toggle="tooltip" title="Cetak Data" target="_blank"><button class="btn btn-warning" name="cetak" target="_blank"><span class="fa fa-file-pdf-o"> </span></button></a> -->
            <a href="<?php echo base_url('admin/C_admin/form_add_pendaftar') ?>" class="pull-right"><button class="btn btn-primary" name="add" type="submit"> <span class="fa fa-user-plus"> </span> Tambah</button></a><div class="clearfix"></div>
            <div class="table-responsive">
            <table id="data" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Level</th>
                    <th>Aksi</th
                </tr>
            </thead>
            <!-- <tfoot>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
            </tfoot> -->
            <tbody>
                <?php
                $no=1;//variabel no?
                foreach ($query as $row) { ?>
                
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->username ?></td>
                    <td><?php echo $row->email ?></td>
                    <td><?php echo $row->password ?></td>
                    <td><?php echo $row->level ?></td>
                    <td>
                        <!-- <a href="<?php echo base_url('admin/C_admin/lihat_pendaftar/') ?><?php echo $row->user_id ?>" data-toggle="tooltip" title="Lihat"><button class="btn btn-primary" role="button"><span class="fa fa-eye"></span></button></a> -->
                        <a href="<?php echo base_url('admin/C_admin/edit_pendaftar/') ?><?php echo $row->user_id ?>" data-toggle="tooltip" title="Edit"><button class="btn btn-success" role="button"><span class="fa fa-edit"></span></button></a>
                        <!-- <a href="<?php echo base_url('admin/C_admin/laporan_pendaftar/') ?><?php echo $row->user_id ?>" data-toggle="tooltip" title="Cetak"><button class="btn btn-warning" role="button"><span class="fa fa-print"></span></button></a> -->
                        <a href="<?php echo base_url('admin/C_admin/delete_pendaftar/') ?><?php echo $row->user_id ?>" data-toggle="tooltip" title="Hapus"><button class="btn btn-danger" role="button" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"><span class="fa fa-trash"></span></button></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
    </div><!-- End Row -->
</div>
<div class="clearfix"></div>