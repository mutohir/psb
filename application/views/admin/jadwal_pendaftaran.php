<div class="container">
	<div class="clearfix"></div>
	<div class="row">
		<?php include('templates/etalase.php') ?>
		<div class="col-sm-9">
			<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center"> Informasi Pendaftaran</h3><hr>
			<a href="<?php echo base_url('admin/C_admin/form_add_jadwal') ?>" class="pull-right">
			<button class="btn btn-warning" name="add" type="submit"><span class="fa fa-print" data-toggle="tooltip" title="Cetak Jadwal"></span></button></a>
			<a href="<?php echo base_url('admin/C_admin/form_add_jadwal') ?>" class="pull-right">
			<button class="btn btn-primary" name="add" type="submit"><span class="fa fa-calendar" data-toggle="tooltip" title="Buat Jadwal"></span></button></a>
			<div class="clearfix"></div>
			<table id="data" class="table table-hover table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th>No.</th>
                <th>Tgl. Mulai Pendaftaran</th>
                <th>Tgl. Selesai Pendaftaran</th>
                <th>Tanggal Seleksi</th>
                <th>Pengumuman</th>
                <th>Aktif</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No.</th>
                <th>Tgl. Mulai Pendaftaran</th>
                <th>Tgl. Selesai</th>
                <th>Tanggal Seleksi</th>
                <th>Pengumuman</th>
                <th>Aktif</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
            <tbody>
             <?php
                $no=1;
                foreach ($query as $row) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->tgl_awal ?></td>
                    <td><?php echo $row->tgl_akhir ?></td>
                    <td><?php echo $row->tgl_tes ?></td>
                    <td><?php echo $row->tgl_pengumuman ?></td>
                    <td><?php echo $row->tgl_aktif ?></td>
                    <td>
                        <a href="<?php echo base_url('admin/C_admin/edit_jadwal/') ?><?php echo $row->id_jadwal ?>" data-toggle="tooltip" title="Edit"><button class="btn btn-success" role="button"><span class="fa fa-edit"></span></button></a>
                        <a href="<?php echo base_url('admin/C_admin/delete_jadwal/') ?><?php echo $row->id_jadwal ?>" data-toggle="tooltip" title="Hapus"><button class="btn btn-danger" role="button" onclick="return confirm('Apakah anda yakin akan menghapus jadwal ini?')"><span class="fa fa-trash"></span></button></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
          </table>
			
		</div>
		</div><!-- End Row -->
	</div>
	<div class="clearfix"></div>