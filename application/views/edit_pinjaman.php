<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit Pinjaman</title>
	<style>
		#psel{
			color: red !important;
		}
	</style>
</head>

<body>
	<form action="<?= base_url('home/add') ?>" method="post">
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">PILIH BARANG</label>
					<div class="col-sm-10">
						<select class="form-control" name="id_barang">
							<?php foreach ($barang as $b ) : ?>
								<option value="<?= $b->id_barang ?>">
									<?= $b->nama_barang ?> 
									<?php if($pinjaman[0]->id_barang == $b->id_barang) : ?>
										<p id="psel">selected</p>
									<?php endif;?>
								</option>
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
						<input type="text" value="<?= $pinjaman[0]->tgl_kembali ?>" disabled>
					</div>
					<div class="col-sm-10">
						<input type="date" name="tgl_kembali" id="tgl_kembali">
					</div>
				</div>
			</div>
		</div>
	</form>
</body>

</html>
