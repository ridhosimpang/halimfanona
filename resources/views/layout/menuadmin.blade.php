<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PT. HALIM FANONA</title>
	<link href="{{asset('lumino/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('lumino/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('lumino/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{asset('lumino/css/styles.css')}}" rel="stylesheet">
	
  <!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<title>@yield('title')</title>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>PT. Halim Fanona</span></a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">
					@if(auth()->user()->role=='admin')
					Admin
					@elseif(auth()->user()->role=='direktur')
					Direktur
					@endif
				</div>
				<div class="profile-usertitle-status"><span class=""></span>PT. Halim Fanona</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			@if(auth()->user()->role=='admin')
			<li><a href="/admin"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="/dataperumahan"><em class="fa fa-navicon">&nbsp;</em>Data Perumahan</a></li>
			<li><a href="/datakonsumen"><em class="fa fa-navicon">&nbsp;</em>Data Konsumen</a></li>
			<li><a href="/datapenjualan"><em class="fa fa-navicon">&nbsp;</em>Data Penjualan</a></li>
			<li><a href="/datapengajuan"><em class="fa fa-navicon">&nbsp;</em>Data Pengajuan Berkas</a></li>
			<form method="POST" action="{{route('logout')}}">
				@csrf
				<li><em class="fa fa-power-off">&nbsp;</em> <button type="submit"> Logout </button></li>
			</form>

			@elseif(auth()->user()->role=='direktur')
			<li><a href="/admin"><em class="fa fa-navicon">&nbsp;</em>Dashboard</a></li>
			<li><a href="/editadmin"><em class="fa fa-navicon">&nbsp;</em>Kelola Admin</a></li>
			<li><a href="/datapenjualan"><em class="fa fa-navicon">&nbsp;</em>Laporan Penjualan</a></li>
			<form method="POST" action="{{route('logout')}}">
				@csrf
				<li><em class="fa fa-power-off">&nbsp;</em> <button type="submit"> Logout </button></li>
			</form>
			@endif
		</ul>
	</div><!--/.sidebar-->
	@yield('container')
	
	
	<script src="{{asset('lumino/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('lumino/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('lumino/js/chart.min.js')}}"></script>
	<script src="{{asset('lumino/js/chart-data.js')}}"></script>
	<script src="{{asset('lumino/js/easypiechart.js')}}"></script>
	<script src="{{asset('lumino/js/easypiechart-data.js')}}"></script>
	<script src="{{asset('lumino/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('lumino/js/custom.js')}}"></script>
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
		
</body>
</html>
