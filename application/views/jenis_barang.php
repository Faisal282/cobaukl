<h3><i class="fa fa-angle-right"></i>Jenis Barang</h3>
<div class="row mt">
	<div class="col-lg-12">
		<?php if ($this->session->flashdata('message') != null) : ?>
			<div class="alert alert-danger"><b>Warning!</b> Better check yourself, you're not looking too good.</div>
		<?php endif; ?>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah
			Jenis Barang</button>
		<div class="content-panel">
			<section id="unseen">
				<table class="table table-bordered table-striped table-condensed">
					<thead>
						<tr>
							<th>NO</th>
							<th class="numeric">Jenis Barang</th>
							<th class="numeric text-center">OPSI</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						<?php foreach ($jenis as $j ) : ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $j->nama_jenis ?></td>
							<td class="text-center">
								<button type="button" class="btn btn-danger" onclick="return hapus(<?= $j->id_jenis_barang ?>);">HAPUS</button>
							</td>
						</tr>
						<?php $no++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</section>
		</div><!-- /content-panel -->
	</div><!-- /col-lg-4 -->
</div><!-- /row -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tambahModalLabel">Modal title</h5>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('jenis/add') ?>" method="post">
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">NAMA JENIS</label>
								<div class="col-sm-10">
									<input type="text" name="nama_jenis" id="nama_jenis">
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	function hapus(id) {
		if (confirm('Apakah anda yakin menghapus ?')) {
			window.location.href="<?= base_url('jenis/delete/') ?>" + id
		}
	}
</script>