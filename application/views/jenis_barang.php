<h3><i class="fa fa-angle-right"></i>Daftar User</h3>
<div class="row mt">
	<div class="col-lg-12">
		<div class="content-panel">
			<section id="unseen">
				<table class="table table-bordered table-striped table-condensed">
					<thead>
						<tr>
							<th>NO</th>
							<th class="numeric">Jenis Barang</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						<?php foreach ($jenis as $j ) : ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $j->nama_jenis ?></td>
						</tr>
						<?php $no++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</section>
		</div><!-- /content-panel -->
	</div><!-- /col-lg-4 -->
</div><!-- /row -->
