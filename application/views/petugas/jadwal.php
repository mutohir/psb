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
            <h3 class="text-center" style="text-transform: uppercase; font-weight: bold;">Jadwal PSB</h3>
            <a href="<?php echo base_url('petugas/C_petugas/form_add_jadwal') ?>" class="pull-right">
            <button class="btn btn-primary" name="add" type="submit"><span class="fa fa-calendar"></span> Tambah</button></a>
            <div class="clearfix"></div>
            <table id="data" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                    <th>Aksi</th
                </tr>
            </thead>
<!--             <tfoot>
            <tr>
                <th>#</th>
                <th>Nama Kegiatan</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Aksi</th>
            </tr>
            </tfoot> -->
            <tbody>
                <?php
                $no=1;//variabel no?
                foreach ($query as $row) { ?>
                
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->nama_kegiatan; ?></td>
                    <td><?php echo $row->tgl_awal; ?></td>
                    <td><?php echo $row->tgl_akhir; ?></td>
                    <td>
                        <a href="<?php echo base_url('petugas/C_petugas/edit_jadwal/') ?><?php echo $row->id_jadwal ?>" data-toggle="tooltip" title="Edit"><button class="btn btn-success" role="button"><span class="fa fa-edit"></span></button></a>
                        <a href="<?php echo base_url('petugas/C_petugas/delete_jadwal/') ?><?php echo $row->id_jadwal ?>" data-toggle="tooltip" title="Hapus"><button class="btn btn-danger" role="button" onclick="return confirm('Apakah anda yakin akan menghapus jadwal ini?')"><span class="fa fa-trash"></span></button></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div><!-- End Row -->
</div>
<div class="clearfix"></div>