<?php
?>
<?php if ($_SESSION['level'] == 0) : ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DASHBOARD</title>
	<link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?=base_url()?><?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?><?=base_url()?>assets/css/zabuto_calendar.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/gritter/css/jquery.gritter.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/lineicons/style.css">
	<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/style-responsive.css" rel="stylesheet">
	<script src="<?=base_url()?>assets/js/chart-master/Chart.js"></script>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>

<body>
	<section id="container">
		<!--header start-->
		<header class="header black-bg">
			<div class="sidebar-toggle-box">
				<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
			</div>
			<!--logo start-->
			<a href="index.html" class="logo"><b>DASHGUM FREE</b></a>
			<!--logo end-->
			<div class="nav notify-row" id="top_menu">
				<!--  notification start -->
				<ul class="nav top-menu">
					<!-- settings start -->
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
							<i class="fa fa-tasks"></i>
							<span class="badge bg-theme">4</span>
						</a>
						<ul class="dropdown-menu extended tasks-bar">
							<div class="notify-arrow notify-arrow-green"></div>
							<li>
								<p class="green">You have 4 pending tasks</p>
							</li>
							<li>
								<a href="index.html#">
									<div class="task-info">
										<div class="desc">DashGum Admin Panel</div>
										<div class="percent">40%</div>
									</div>
									<div class="progress progress-striped">
										<div class="progress-bar progress-bar-success" role="progressbar"
											aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
											<span class="sr-only">40% Complete (success)</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="index.html#">
									<div class="task-info">
										<div class="desc">Database Update</div>
										<div class="percent">60%</div>
									</div>
									<div class="progress progress-striped">
										<div class="progress-bar progress-bar-warning" role="progressbar"
											aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only">60% Complete (warning)</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="index.html#">
									<div class="task-info">
										<div class="desc">Product Development</div>
										<div class="percent">80%</div>
									</div>
									<div class="progress progress-striped">
										<div class="progress-bar progress-bar-info" role="progressbar"
											aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											<span class="sr-only">80% Complete</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="index.html#">
									<div class="task-info">
										<div class="desc">Payments Sent</div>
										<div class="percent">70%</div>
									</div>
									<div class="progress progress-striped">
										<div class="progress-bar progress-bar-danger" role="progressbar"
											aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
											<span class="sr-only">70% Complete (Important)</span>
										</div>
									</div>
								</a>
							</li>
							<li class="external">
								<a href="#">See All Tasks</a>
							</li>
						</ul>
					</li>
					<!-- settings end -->
					<!-- inbox dropdown start-->
					<li id="header_inbox_bar" class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
							<i class="fa fa-envelope-o"></i>
							<span class="badge bg-theme">5</span>
						</a>
						<ul class="dropdown-menu extended inbox">
							<div class="notify-arrow notify-arrow-green"></div>
							<li>
								<p class="green">You have 5 new messages</p>
							</li>
							<li>
								<a href="index.html#">
									<span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
									<span class="subject">
										<span class="from">Zac Snider</span>
										<span class="time">Just now</span>
									</span>
									<span class="message">
										Hi mate, how is everything?
									</span>
								</a>
							</li>
							<li>
								<a href="index.html#">
									<span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
									<span class="subject">
										<span class="from">Divya Manian</span>
										<span class="time">40 mins.</span>
									</span>
									<span class="message">
										Hi, I need your help with this.
									</span>
								</a>
							</li>
							<li>
								<a href="index.html#">
									<span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
									<span class="subject">
										<span class="from">Dan Rogers</span>
										<span class="time">2 hrs.</span>
									</span>
									<span class="message">
										Love your new Dashboard.
									</span>
								</a>
							</li>
							<li>
								<a href="index.html#">
									<span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
									<span class="subject">
										<span class="from">Dj Sherman</span>
										<span class="time">4 hrs.</span>
									</span>
									<span class="message">
										Please, answer asap.
									</span>
								</a>
							</li>
							<li>
								<a href="index.html#">See all messages</a>
							</li>
						</ul>
					</li>
					<!-- inbox dropdown end -->
				</ul>
				<!--  notification end -->
			</div>
			<div class="top-menu">
				<ul class="nav pull-right top-menu">
					<li><a class="logout" href="<?= base_url('login/logout') ?>">Logout</a></li>
				</ul>
			</div>
		</header>
		<!--header end-->

		<!--sidebar start-->
		<aside>
			<div id="sidebar" class="nav-collapse ">
				<!-- sidebar menu start-->
				<ul class="sidebar-menu" id="nav-accordion">
					<p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle"
								width="60"></a></p>
					<h5 class="centered">Marcel Newman</h5>
					<li class="mt">
						<a class="active" href="<?= base_url('home') ?>">
							<i class="fa fa-dashboard"></i>
							<span>Data Pinjaman</span>
						</a>
					</li>
					<li class="mt">
						<a href="<?= base_url('barang') ?>">
							<i class="fa fa-dashboard"></i>
							<span>Data Barang</span>
						</a>
					</li>
					<li class="mt">
						<a href="<?= base_url('lemari') ?>">
							<i class="fa fa-dashboard"></i>
							<span>Data Lemari</span>
						</a>
					</li>
					<li class="mt">
						<a href="<?= base_url('jenis') ?>">
							<i class="fa fa-dashboard"></i>
							<span>Jenis Barang</span>
						</a>
					</li>
					<li class="mt">
						<a href="<?= base_url('user') ?>">
							<i class="fa fa-dashboard"></i>
							<span>Daftar User</span>
						</a>
					</li>
				</ul>
				<!-- sidebar menu end-->
			</div>
		</aside>
		<!--sidebar end-->

		<!--main content start-->
		<section id="main-content">
			<section class="wrapper">
				<?php $this->load->view($konten); ?>
			</section>
		</section>
		<!--main content end-->

		<!--footer start-->
		<!-- <footer class="site-footer">
			<div class="text-center">
				2014 - Alvarez.is
				<a href="index.html#" class="go-top">
					<i class="fa fa-angle-up"></i>
				</a>
			</div>
		</footer> -->
		<!--footer end-->
	</section>
	<!-- js placed at the end of the document so the pages load faster -->
	<script src="<?= base_url('') ?>assets/js/jquery.js"></script>
	<script src="<?= base_url('') ?>assets/js/jquery-1.8.3.min.js"></script>
	<script src="<?= base_url('') ?>assets/js/bootstrap.min.js"></script>
	<script class="include" type="text/javascript" src="<?= base_url('') ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="<?= base_url('') ?>assets/js/jquery.scrollTo.min.js"></script>
	<script src="<?= base_url('') ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
	<script src="<?= base_url('') ?>assets/js/jquery.sparkline.js"></script>
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


	<!--common script for all pages-->
	<script src="<?= base_url('') ?>assets/js/common-scripts.js"></script>

	<script type="text/javascript" src="<?= base_url('') ?>assets/js/gritter/js/jquery.gritter.js"></script>
	<script type="text/javascript" src="<?= base_url('') ?>assets/js/gritter-conf.js"></script>

	<!--script for this page-->
	<script src="<?= base_url('') ?>assets/js/sparkline-chart.js"></script>
	<script src="<?= base_url('') ?>assets/js/zabuto_calendar.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			var unique_id = $.gritter.add({
				// (string | mandatory) the heading of the notification
				title: 'Welcome to Dashgum!',
				// (string | mandatory) the text inside the notification
				text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Free version for <a href="http://blacktie.co" target="_blank" style="color:#ffd777">BlackTie.co</a>.',
				// (string | optional) the image to display on the left
				image: 'assets/img/ui-sam.jpg',
				// (bool | optional) if you want it to fade out on its own or just sit there
				sticky: true,
				// (int | optional) the time you want it to be alive for before fading out
				time: '',
				// (string | optional) the class name you want to apply to that specific message
				class_name: 'my-sticky-class'
			});

			return false;
		});

	</script>

	<script type="application/javascript">
		$(document).ready(function () {
			$("#date-popover").popover({
				html: true,
				trigger: "manual"
			});
			$("#date-popover").hide();
			$("#date-popover").click(function (e) {
				$(this).hide();
			});

			$("#my-calendar").zabuto_calendar({
				action: function () {
					return myDateFunction(this.id, false);
				},
				action_nav: function () {
					return myNavFunction(this.id);
				},
				ajax: {
					url: "show_data.php?action=1",
					modal: true
				},
				legend: [{
						type: "text",
						label: "Special event",
						badge: "00"
					},
					{
						type: "block",
						label: "Regular event",
					}
				]
			});
		});


		function myNavFunction(id) {
			$("#date-popover").hide();
			var nav = $("#" + id).data("navigation");
			var to = $("#" + id).data("to");
			console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
		}

	</script>
	<script>
		$('#mydata').dataTable();

		//fungsi tampil barang
		function tampil_data_barang() {
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url()?>home/index',
				async: false,
				dataType: 'json',
				success: function (data) {
					console.log(data);
					var html = '';
					var i;
					for (i = 0; i < data.length; i++) {
						html += '<tr>' +
							'<td>' + data[i].barang_kode + '</td>' +
							'<td>' + data[i].barang_nama + '</td>' +
							'<td>' + data[i].barang_harga + '</td>' +
							'<td style="text-align:right;">' +
							'<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="' + data[i]
							.barang_kode + '">Edit</a>' + ' ' +
							'<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="' + data[i]
							.barang_kode + '">Hapus</a>' +
							'</td>' +
							'</tr>';
					}
					$('#show_data').html(html);
				}

			});
		}

		//GET UPDATE
		$('#show_data').on('click', '.item_edit', function () {
			var id = $(this).attr('data');
			$.ajax({
				type: "GET",
				url: "<?php echo base_url('index.php/barang/get_barang')?>",
				dataType: "JSON",
				data: {
					id: id
				},
				success: function (data) {
					$.each(data, function (barang_kode, barang_nama, barang_harga) {
						$('#ModalaEdit').modal('show');
						$('[name="kobar_edit"]').val(data.barang_kode);
						$('[name="nabar_edit"]').val(data.barang_nama);
						$('[name="harga_edit"]').val(data.barang_harga);
					});
				}
			});
			return false;
		});


		//GET HAPUS
		$('#show_data').on('click', '.item_hapus', function () {
			var id = $(this).attr('data');
			$('#ModalHapus').modal('show');
			$('[name="kode"]').val(id);
		});

		//Simpan Barang
		$('#btn_simpan').on('click', function () {
			var kobar = $('#kode_barang').val();
			var nabar = $('#nama_barang').val();
			var harga = $('#harga').val();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('index.php/barang/simpan_barang')?>",
				dataType: "JSON",
				data: {
					kobar: kobar,
					nabar: nabar,
					harga: harga
				},
				success: function (data) {
					$('[name="kobar"]').val("");
					$('[name="nabar"]').val("");
					$('[name="harga"]').val("");
					$('#ModalaAdd').modal('hide');
					tampil_data_barang();
				}
			});
			return false;
		});

		//Update Barang
		$('#btn_update').on('click', function () {
			var kobar = $('#kode_barang2').val();
			var nabar = $('#nama_barang2').val();
			var harga = $('#harga2').val();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('index.php/barang/update_barang')?>",
				dataType: "JSON",
				data: {
					kobar: kobar,
					nabar: nabar,
					harga: harga
				},
				success: function (data) {
					$('[name="kobar_edit"]').val("");
					$('[name="nabar_edit"]').val("");
					$('[name="harga_edit"]').val("");
					$('#ModalaEdit').modal('hide');
					tampil_data_barang();
				}
			});
			return false;
		});

		//Hapus Barang
		$('#btn_hapus').on('click', function () {
			var kode = $('#textkode').val();
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('index.php/barang/hapus_barang')?>",
				dataType: "JSON",
				data: {
					kode: kode
				},
				success: function (data) {
					$('#ModalHapus').modal('hide');
					tampil_data_barang();
				}
			});
			return false;
		});
		tampil_data_barang(); //pemanggilan fungsi tampil barang.

	</script>
</body>

</html>
<?php endif; ?>
<?php if ($_SESSION['level'] == 1) : ?>
<h1>Ini admin</h1>
<a href="<?= base_url('index.php/login/logout') ?>">logout</a>
<?php endif; ?>
