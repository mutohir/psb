<div class="row">
  <?php include('templates/etalase.php') ?>
  <div class="col-md-9">
    <!-- <div class="panel panel-default"> -->
    <h3 style="text-transform: uppercase; font-weight: bold;" class="text-center"> Jadwal Pendaftaran</h3><hr>
  <!--    </div>
</div> -->
<div class="panel panel-default">
    <div class="panel-body">
            <div class="table-responsive">
		<table id="data" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Kategori Biaya</th>
					<th>Jumlah</th>
					<th>Keterangan</th>
					<th>Total</th>
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
			</tr>
			<!-- </tbody> -->
			<!-- <tfoot style="color: #212121; font-weight: bold;" class="bg-success"> -->
			<!-- </tfoot> -->
			<?php } ?>
		</table>
	</div>
</div>
</div>
</div>
</div><!-- End Row -->
</div>
<div class="clearfix"></div>