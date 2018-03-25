<div class="container">
<div class="clearfix"><div class="clearfix"></div></div>
  <h4>Selamat Datang <em><?php echo $username; ?></em> !</h4>
  <img src="<?php echo base_url() ?>images/kniv.jpg" alt="">
<div class="clearfix"></div>
  <div class="row">
    
<?php include('templates/etalase.php') ?>

<div class="col-md-9">
<h3 style="text-transform: uppercase; font-weight: bold;" class="text-center"> Informasi PSB</h3>
<!-- <a href="#"><button class=" btn btn-md btn-primary"><span class="fa fa-file"></span> Tambah Berkas</button></a><hr> -->

<div role="tabpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active">
            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Jadwal PSB</a>
        </li>
        <li role="presentation">
            <a href="#tab1" aria-controls="tab" role="tab" data-toggle="tab">Pengumuman Seleksi</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
        <!-- <a href="" data-toggle="tooltip" title="Tambah Jadwal" data-placement="right"><span class="fa fa-2x fa-calendar-plus-o text-primary"></span></a> -->
        <div class="table-responsive">
          <table class="table table-hover table-bordered table-hover table-striped">
            <thead>
              <tr>
                <th>TANGGAL PENDAFTARAN</th>
                <th>SOWAN NDALEM</th>
                <th>TES MASUK</th>
                <th>PENGUMUMAN KELASAN</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Minggu, 28 Oktober 2017</td>
                <td>Senin, 30 Oktober 2017</td>
                <td>Jumat, 3 September 2017</td>
                <td>Senin, 6 September 2017</td>
                <td>
                <a href="#" data-toggle="tooltip" title="Lihat"><button class="btn btn-info" role="button"><span class="fa fa-eye"></span></button></a>
                <a href="#" data-toggle="tooltip" title="Edit"><button class="btn btn-success" role="button"><span class="fa fa-edit"></span></button></a>
                <a href="#" data-toggle="tooltip" title="Hapus"><button class="btn btn-danger" role="button"><span class="fa fa-trash"></span></button></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        </div>
        <div role="tabpanel" class="tab-pane" id="tab1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro a dolorum, velit nihil veritatis! Laudantium, consequatur, repellendus. Quas possimus iste voluptas architecto voluptatem impedit alias magni placeat, voluptatibus, amet doloribus.
        </div>
    </div>
</div>

</div>
</div>
    </div><!-- End Row -->
</div>
<div class="clearfix"></div>