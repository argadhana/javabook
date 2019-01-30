@extends('admin.template.index')

@section('title','Dashboard')

@section('main')
<div class="panel panel-container">
	<div class="row">
		<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
			<div class="panel panel-teal panel-widget border-right">
				<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
					<div class="large">120</div>
					<div class="text-muted">New Orders</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
			<div class="panel panel-blue panel-widget border-right">
				<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
					<div class="large">52</div>
					<div class="text-muted">Comments</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
			<div class="panel panel-orange panel-widget border-right">
				<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
					<div class="large">24</div>
					<div class="text-muted">New Users</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
			<div class="panel panel-red panel-widget ">
				<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
					<div class="large">25.2k</div>
					<div class="text-muted">Page Views</div>
				</div>
			</div>
		</div>
	</div>
	<!--/.row-->
</div>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Site Traffic Overview
				<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
			<div class="panel-body">
				<div class="canvas-wrapper">
					<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/.row-->
@endsection
@section('js')
	<script>
		window.onload = function () {
			var chart1 = document.getElementById("line-chart").getContext("2d");
			window.myLine = new Chart(chart1).Line(lineChartData, {
			responsive: true,
			scaleLineColor: "rgba(0,0,0,.2)",
			scaleGridLineColor: "rgba(0,0,0,.05)",
			scaleFontColor: "#c5c7cc"
			});
		};
	</script>
@endsection
