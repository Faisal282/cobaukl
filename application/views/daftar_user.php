<h3><i class="fa fa-angle-right"></i>Daftar User</h3>
<div class="row mt">
	<div class="col-lg-12">
		<?php if ($this->session->flashdata('message') != null) : ?>
			<div class="alert alert-danger"><b>Warning!</b> Better check yourself, you're not looking too good.</div>
		<?php endif; ?>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah
			Barang</button>
		<div class="content-panel">
			<section id="unseen">
				<table class="table table-bordered table-striped table-condensed">
					<thead>
						<tr>
							<th>NO</th>
							<th class="numeric">Nama User</th>
							<th class="numeric">Username</th>
							<th class="numeric">Level</th>
							<th class="numeric text-center" colspan="2">OPSI</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						<?php foreach ($user as $u ) : ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $u->nama_user ?></td>
							<td><?= $u->username ?></td>
							<?php if ($u->level == 1) : ?>
							<td>OPERATOR</td>
							<?php else: ?>
							<td>USER</td>
							<?php endif ?>
							<td class="text-center">
								<button type="button" class="btn btn-success" onclick="window.location.href='<?= base_url('user/edit/') . $u->id_user ?>'">EDIT</button>
							</td>
							<td class="text-center">
								<button type="button" class="btn btn-danger" onclick="return hapus(<?= $u->id_user ?>);">HAPUS</button>
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
				<form action="<?= base_url('user/add') ?>" method="post">
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">NAMA USER</label>
								<div class="col-sm-10">
									<input type="text" name="nama_user" id="nama_user">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">USERNAME</label>
								<div class="col-sm-10">
									<input type="text" name="username" id="username">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">PASSWORD</label>
								<div class="col-sm-10">
									<input type="text" name="password" id="password">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">LEVEL</label>
								<div class="col-sm-10">
									<select name="level" id="level">
										<option value="0">USER</option>
										<option value="1">OPERATOR</option>
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
			window.location.href = "<?= base_url('home/delete/') ?>" + id
		}
	}

</script>
