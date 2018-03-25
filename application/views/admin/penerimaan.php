<div class="container">
    <div class="clearfix"></div>
    <div class="row">
        <?php include('templates/etalase.php') ?>
        <div class="col-sm-9">
    <h3 style="text-transform: uppercase; font-weight: bold;" class="text-center">Data Penerimaan</h3><hr>

            <div class="table-responsive">
              <table id="data" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>No. Pendaftaran</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat Pendaftar</th>
                    <th>Gender</th>
                    <th>Status </th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>#</th>
                    <th>No. Pendaftaran</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat Pendaftar</th>
                    <th>Gender</th>
                    <th>Status </th>
                    <th>Aksi</th>
                  </tr>
                </tfoot>
                <tbody>
                        <?php 
                        $no = 1;
                        foreach ($queries->result() as $query) { ?>
                        <tr>
                          
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $query->no_pendaftaran ?></td>
                          <td><?php echo $query->nama_santri ?></td>
                          <td><?php echo $query->alamat_santri ?></td>
                          <td><?php echo $query->gender ?></td>
                          <td>
                          <?php
                              if ($query->status_daftar == 'Menunggu') { ?>
                              <span class="bg-danger">Menunggu</span>
                                <?php } else { ?>
                                <span class="bg-success">Diterima</span>
                              <?php }
                              ?>
                          </td><td>
                              <a href="<?php echo base_url('admin/C_admin/edit/') ?><?php echo $query->id_santri ?>" data-toggle="tooltip" title="Edit"><button class="btn btn-success" role="button"><span class="fa fa-edit"></span></button></a>
                              <!-- <a href="<?php echo base_url('admin/C_admin/delete_jadwal/') ?><?php echo $query->id_santri ?>" data-toggle="tooltip" title="Hapus"><button class="btn btn-danger" role="button" onclick="return confirm('Apakah anda yakin akan menghapus jadwal ini?')"><span class="fa fa-trash"></span></button></a> -->
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