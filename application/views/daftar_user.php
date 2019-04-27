<h3><i class="fa fa-angle-right"></i>Daftar User</h3>
<div class="row mt">
	<div class="col-lg-12">
		<div class="content-panel">
			<section id="unseen">
				<table class="table table-bordered table-striped table-condensed">
					<thead>
						<tr>
							<th>NO</th>
							<th class="numeric">Nama User</th>
							<th class="numeric">Usernam</th>
							<th class="numeric">Level</th>
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
						</tr>
						<?php $no++; ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</section>
		</div><!-- /content-panel -->
	</div><!-- /col-lg-4 -->
</div><!-- /row -->

<!-- Modal -->
<div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="tambahmodal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>