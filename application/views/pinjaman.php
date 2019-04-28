<h3><i class="fa fa-angle-right"></i>Data Pinjaman</h3>
<div class="row mt">
	<div class="col-lg-12">
		<?php if ($this->session->flashdata('message') != null) : ?>
			<div class="alert alert-danger"><b>Warning!</b> Better check yourself, you're not looking too good.</div>
		<?php endif; ?>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahmodal">Tambah
			Pinjaman</button>
		<div class="content-panel">
			<section id="unseen">
				<table class="table table-bordered table-striped table-condensed" id="mydata">
					<thead>
						<tr>
							<th>NO</th>
							<th class="numeric">Nama Barang</th>
							<th class="numeric">Jenis Barang</th>
							<th class="numeric">Nama Peminjam</th>
							<th class="numeric">Status</th>
							<th class="numeric">Tanggal Pinjam</th>
							<th class="numeric">Tanggal Kembali</th>
							<th class="numeric text-center" colspan="2">OPSI</th>
						</tr>
					</thead>
					<tbody id="show_data">
						<?php $no=1; ?>
						<?php foreach ($pinjaman as $p ) : ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $p->nama_barang ?></td>
							<td><?= $p->nama_jenis ?></td>
							<td><?= $p->nama_user ?></td>
							<?php if ($p->status == 0) : ?>
							<td>kosong</td>
							<?php elseif($p->status == 1) : ?>
							<td>dalam peminjaman</td>
							<?php else: ?>
							<td>sudah dikembalikan</td>
							<?php endif; ?>
							<td><?= $p->tgl_pinjam ?></td>
							<td><?= $p->tgl_kembali ?></td>
							<td>
								<button type="button" class="btn btn-success" onclick="window.location.href='<?= base_url('home/edit/') . $p->id_pinjaman ?>'">EDIT</button>
							</td>
							<td>
								<button type="button" class="btn btn-danger" onclick="return hapus(<?= $p->id_pinjaman ?>);">HAPUS</button>
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
<div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="tambahmodalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tambahmodalLabel">Modal title</h5>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('home/add') ?>" method="post">
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">PILIH BARANG</label>
								<div class="col-sm-10">
									<select class="form-control" name="id_barang">
										<?php foreach ($barang as $b ) : ?>
											<option value="<?= $b->id_barang ?>"><?= $b->nama_barang ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">TANGGAL KEMBALI</label>
								<div class="col-sm-10">
									<input type="date" name="tgl_kembali" id="tgl_kembali">
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
<div class="modal fade" id="editpinjaman" tabindex="-1" role="dialog" aria-labelledby="editpinjamanLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editpinjamanLabel">Modal title</h5>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('home/add') ?>" method="post">
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">PILIH BARANG</label>
								<div class="col-sm-10">
									<select class="form-control" name="id_barang">
										<?php foreach ($barang as $b ) : ?>
											<option value="<?= $b->id_barang ?>"><?= $b->nama_barang ?></option>
										<?php endforeach; ?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">TANGGAL KEMBALI</label>
								<div class="col-sm-10">
									<input type="date" name="tgl_kembali" id="tgl_kembali">
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
			window.location.href="<?= base_url('home/delete/') ?>" + id
		}
	}
</script>