<h3><i class="fa fa-angle-right"></i>Data Barang</h3>
<div class="row mt">
	<div class="col-lg-12">
		<div class="content-panel">
			<section id="unseen">
				<table class="table table-bordered table-striped table-condensed" id="mydata">
					<thead>
						<tr>
							<th>NO</th>
							<th class="numeric">Nama Barang</th>
							<th class="numeric">Jenis Barang</th>
							<th class="numeric">Lemari Ke</th>
						</tr>
					</thead>
					<tbody id="show_data">
						<?php $no=1; ?>
						<?php foreach ($barang as $b ) : ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $b->nama_barang ?></td>
							<td><?= $b->nama_jenis ?></td>
							<td><?= $b->lemari ?></td>
						</tr>
						<?php $no++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</section>
		</div><!-- /content-panel -->
	</div><!-- /col-lg-4 -->
</div><!-- /row -->
