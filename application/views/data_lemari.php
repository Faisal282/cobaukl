<h3><i class="fa fa-angle-right"></i>Data Lemari</h3>
<div class="row mt">
	<div class="col-lg-12">
		<?php if ($this->session->flashdata('message') != null) : ?>
			<div class="alert alert-danger"><b>Warning!</b> Better check yourself, you're not looking too good.</div>
		<?php endif; ?>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah
			Lemari</button>
		<div class="content-panel">
			<section id="unseen">
				<table class="table table-bordered table-striped table-condensed">
					<thead>
						<tr>
							<th class="text-center">NO</th>
							<th class="numeric text-center">Nomer Lemari</th>
							<th class="numeric text-center">OPSI</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						<?php foreach ($lemari as $l ) : ?>
						<tr>
							<td class="text-center"><?= $no ?></td>
							<td class="text-center"><?= $l->no_lemari ?></td>
							<td class="text-center">
							<button type="button" class="btn btn-danger" onclick="return hapus(<?= $l->id_lemari ?>);">HAPUS</button>
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
				<form action="<?= base_url('lemari/add') ?>" method="post">
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">NO LEMARI</label>
								<div class="col-sm-10">
									<input type="number" name="no_lemari" id="no_lemari">
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
			window.location.href="<?= base_url('lemari/delete/') ?>" + id
		}
	}
</script>
