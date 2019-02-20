<?php require_once('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Beranda</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container-fluid bawah">
		<h1 class="h1 text-monospace text-center">Selamat Datang di Abesensi !</h1>
		<h3 class="h3 text-monospace text-center">Berikut Data Statistik Hari Ini</h3>
		<div class="row">
			<div class="col">
				<div class="card border-info mb-3">
				  <div class="card-header text-monospace text-center">Jumlah Siswa Yang Sudah Absen Hari Ini</div>
				  <div class="card-body text-info">
				    <h5 class="card-title text-center">Diagram Viusal Data</h5>
				    <div id="donutchart"></div>
				  </div>
				</div>
			</div>

			<div class="col">
				<div class="card border-success mb-3">
				  <div class="card-header text-monospace text-center"></div>
				  <div class="card-body text-info">
				    <h5 class="card-title">Info Panel title</h5>
				    
				  </div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Siswa Hadir',     11],
          ['Siswa Tidak Hadir',      2]          
        ]);

        var options = {          
          pieHole: 0,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
</body>
</html>