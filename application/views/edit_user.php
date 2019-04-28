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
	<form action="<?= base_url('user/edit/') . $user[0]->id_user ?>" method="post">
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">NAMA USER</label>
					<div class="col-sm-10">
						<input type="text" name="nama_user" id="nama_user" value="<?= $user[0]->nama_user ?>">	
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">USERNAME</label>
					<div class="col-sm-10">
						<input type="text" name="username" id="username" value="<?= $user[0]->username ?>">	
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label class="col-sm-2 col-sm-2 control-label">PASSWORD</label>
					<div class="col-sm-10">
						<input type="text" name="password" id="password" value="<?= $user[0]->password ?>">	
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
							<option value="0">
								USER
								<?php if ($user[0]->level == 0) : ?>
									<p>SELECTED</p>
								<?php endif; ?>
							</option>
							<option value="1">
								OPERATOR
								<?php if ($user[0]->level == 1) : ?>
									<p>SELECTED</p>
								<?php endif; ?>
							</option>
						</select>	
					</div>
				</div>
			</div>
		</div>
		<button type="submit">SIMPAN</button>
	</form>
</body>

</html>
