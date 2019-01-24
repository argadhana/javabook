<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title') | Book Store</title>
	<link href="{{asset('')}}lumino/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('')}}lumino/css/font-awesome.min.css" rel="stylesheet">
	<link href="{{asset('')}}lumino/css/datepicker3.css" rel="stylesheet">
	<link href="{{asset('')}}lumino/vendor/datatables/datatables.min.css" rel="stylesheet">
	{{-- <link href="{{asset('')}}lumino/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet"> --}}
	<link href="{{asset('')}}lumino/vendor/select2-4.0.5/dist/css/select2.min.css" rel="stylesheet">
	<link href="{{asset('')}}lumino/vendor/select2-bootstrap-theme-0.1.0-beta.10/dist/select2-bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('')}}lumino/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="{{asset('')}}lumino/js/html5shiv.js"></script>
	<script src="{{asset('')}}lumino/js/respond.min.js"></script>
	<![endif]-->

	<style>
		/* Make Select2 boxes match Bootstrap3 heights: */
		.select2-selection__rendered {
			line-height: 32px !important;
		}

		.select2-selection {
			height: 46px !important;
			box-shadow: none !important;
			border: 1px solid #ddd !important;
		}
		.select2-search__field{
			height: 38px !important;
			box-shadow: none !important;
		}
		.select2-dropdown{
			box-shadow: none !important;
			border: 2px solid #74b9ff !important;
		}
		th{
			height: 20px !important;
			background-color: #f5f6fa;
		}
		.nowrap {
			white-space:nowrap !important;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Book</span>Store</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
			<li><a href="{{route('dashboard.index')}}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="parent ">
				<a data-toggle="collapse" href="#master-data"><em class="fa fa-pencil">&nbsp;</em> Master Data <span data-toggle="collapse" href="#master-data" class="icon pull-right"><em class="fa fa-plus"></em></span></a>
				<ul class="children collapse" id="master-data">
					<li>
						<a href="{{route('jenis.index')}}"><span class="fa fa-minus">&nbsp;</span> Jenis Buku</a>
					</li>
					<li>
						<a href="{{route('genre.index')}}"><span class="fa fa-minus">&nbsp;</span> Genre Buku</a>
					</li>
					<li>
						<a href="{{route('buku.index')}}"><span class="fa fa-minus">&nbsp;</span> Buku</a>
					</li>
				</ul>
			</li>
			<li class="parent ">
				<a data-toggle="collapse" href="#laporan"><em class="fa fa-file-text-o">&nbsp;</em> Laporan - laporan <span data-toggle="collapse" href="#laporan" class="icon pull-right"><em class="fa fa-plus"></em></span></a>
				<ul class="children collapse" id="laporan">
					<li>
						<a href=""><span class="fa fa-minus">&nbsp;</span> Laporan 1</a>
					</li>
					<li>
						<a href=""><span class="fa fa-minus">&nbsp;</span> Laporan 2</a>
					</li>
					<li>
						<a href=""><span class="fa fa-minus">&nbsp;</span> Laporan 3</a>
					</li>
				</ul>
			</li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
				<ol class="breadcrumb">
					<li><a href="{{route('dashboard.index')}}"><em class="fa fa-home"></em></a></li>
					@yield('panel-link')
					<li class="active">@yield('title')</li>
				</ol>
			</div>
			<!--/.row-->
			
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">@yield('title')</h1>
				</div>
			</div>
			<!--/.row-->
		@yield('main')	
	</div>	<!--/.main-->
	
	<script src="{{asset('')}}lumino/vendor/jquery/jquery-3.3.1.min.js"></script>
	<script src="{{asset('')}}lumino/js/bootstrap.min.js"></script>
	<script src="{{asset('')}}lumino/js/chart.min.js"></script>
	<script src="{{asset('')}}lumino/js/chart-data.js"></script>
	<script src="{{asset('')}}lumino/js/easypiechart.js"></script>
	<script src="{{asset('')}}lumino/js/easypiechart-data.js"></script>
	<script src="{{asset('')}}lumino/js/bootstrap-datepicker.js"></script>
	<script src="{{asset('')}}lumino/vendor/datatables/datatables.min.js"></script>
	{{-- <script src="{{asset('')}}lumino/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script> --}}
	<script src="{{asset('')}}lumino/vendor/select2-4.0.5/dist/js/select2.min.js"></script>
	<script src="{{asset('')}}lumino/vendor/jquery-mask/dist/jquery.mask.min.js"></script>
	<script src="{{asset('')}}lumino/js/custom.js"></script>
	@yield('js')
	<script>
		$(document).ready( function () {
			$('.datatable').DataTable();
			$('.money').mask('#.##0', {reverse: true});
		});
		$(function () {
			$('ul li a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active')
			$('ul li a').click(function(){
				$(this).parent().addClass('active').siblings().removeClass('active')	
			})
		});
		$('.datepicker').datepicker({
			format: 'yyyy/mm/dd',
		});
		$( ".selectpicker" ).select2({
			theme: "bootstrap",
		});
	</script>
		
</body>
</html>