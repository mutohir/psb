<!-- <div class="footerHeader"> -->
<div class="clear" style="padding-top: 50px;">
	<div class="container">
	<div class="panel-heading" style="color: #212121; text-transform: uppercase;">
        <h3 class="panel-title text-center"><b>Rincian Biaya Pondok</b></h3>
      </div>
	<div class="table-responsive">
		<table id="data" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Kategori</th>
					<th>Jumlah</th>
					<th>Alokasi</th>
					<th class="bg-success">Total</th>
				</tr>
			</thead>
			<tbody>
			<?php 
			$no = 1;
			foreach ($biaya as $row): ?>
			<tr>
				
				<td><?php echo $no++; ?></td>
				<td><?php echo $row->kategori_biaya; ?></td>
				<td><?php echo $row->jumlah; ?></td>
				<td><?php echo $row->alokasi; ?></td>
				<td style="color: #212121; font-weight: bold;" class="bg-success"><?php echo $row->total; ?>
				</td>
			</tr>
			<?php endforeach ?>
			</tbody>
			</tfoot>
		</table>
	</div>
	</div>
</div>
<!-- </div> -->