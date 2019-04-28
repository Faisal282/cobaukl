<h3><i class="fa fa-angle-right"></i>Data Barang</h3>
<div class="row mt">
	<div class="col-lg-12">
		<?php if ($this->session->flashdata('message') != null) : ?>
			<div class="alert alert-danger"><b>Warning!</b> Better check yourself, you're not looking too good.</div>
		<?php endif; ?>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah
			Barang</button>
		<div class="content-panel">
			<section id="unseen">
				<table class="table table-bordered table-striped table-condensed" id="mydata">
					<thead>
						<tr>
							<th>NO</th>
							<th class="numeric">Nama Barang</th>
							<th class="numeric">Jenis Barang</th>
							<th class="numeric">Lemari Ke</th>
							<th class="numeric text-center" colspan="2">OPSI</th>
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
							<td class="text-center">
								<button type="button" class="btn btn-success" onclick="window.location.href='<?= base_url('barang/edit/') . $b->id_barang ?>'">EDIT</button>
							</td>
							<td class="text-center">
								<button type="button" class="btn btn-danger" onclick="return hapus(<?= $b->id_barang ?>);">HAPUS</button>
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
				<form action="<?= base_url('barang/add') ?>" method="post">
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">NAMA BARANG</label>
								<div class="col-sm-10">
									<input type="text" name="nama_barang" id="nama_barang">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">JENIS BARANG</label>
								<div class="col-sm-10">
									<select name="jenis_barang" id="jenis_barang">
										<?php foreach ($jenis as $j) : ?>
											<option value="<?= $j->id_jenis_barang ?>"><?= $j->nama_jenis ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">LEMARI KE</label>
								<div class="col-sm-10">
									<select name="lemari" id="lemari">
										<?php foreach ($lemari as $l ) : ?>
											<option value="<?= $l->id_lemari ?>"><?= $l->no_lemari ?></option>
										<?php endforeach; ?>
									</select>
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
			window.location.href="<?= base_url('barang/delete/') ?>" + id
		}
	}
</script>
