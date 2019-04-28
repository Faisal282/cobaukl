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
	<form action="<?= base_url('barang/edit/') . $barang[0]->id_barang ?>" method="post">
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">NAMA BARANG</label>
					<div class="col-sm-10">
						<input type="text" name="nama_barang" value="<?= $barang[0]->nama_barang ?>">
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
                            <?php foreach ($jenis_barang as $jb) : ?>
                                <option value="<?= $jb->id_jenis_barang ?>">
                                    <?= $jb->nama_jenis ?>
                                    <?php if ($barang[0]->jenis_barang == $jb->id_jenis_barang) : ?>
                                        <p>SELECTED</p>
                                    <?php endif; ?>
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
					<label class="col-sm-2 col-sm-2 control-label">LEMARI KE</label>
					<div class="col-sm-10">
                        <select name="lemari" id="lemari">
                            <?php foreach ($lemari as $l) : ?>
                                <option value="<?= $l->id_lemari ?>"><?= $l->no_lemari ?></option>
                            <?php endforeach; ?>
                        </select>
					</div>
				</div>
			</div>
        </div>
        <button type="submit">SIMPAN</button>
	</form>
</body>

</html>
