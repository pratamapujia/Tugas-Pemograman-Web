<?php
include('koneksi.php');
$query = mysqli_query($koneksi,"SELECT sum(total_kasus) as total_kasus, sum(kasus_baru) as kasus_baru, sum(total_kematian) as total_kematian, sum(kematian_baru) as kematian_baru, sum(total_sembuh) as total_sembuh, sum(kasus_aktif) as kasus_aktif from tb_covid");
$row = 	$query->fetch_array();
$total_kasus = $row['total_kasus'];
$kasus_baru = $row['kasus_baru'];
$total_kematian = $row['total_kematian'];
$kematian_baru = $row['kematian_baru'];
$total_sembuh = $row['total_sembuh'];
$kasus_aktif = $row['kasus_aktif'];

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		.warning {color: #FF0000;}
		.container {
			padding-top: 25px;
		}
				
	</style>
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	
	<div class="container rounded shadow bg-white ">
	<div class="card ">
				<div class="card-header bg-info text-white shadow sticky-top" align="center">
					<p class="h4">GRAFIK PENYEBARAN COVID-19</p>
				</div>
		
			<div class="card-body">
				<div class="col-sm container">
					<div style="width:100%; height:100%">
						<canvas id="myChart"></canvas>
					</div>
				</div>
		</div>
	<script>
		var ctx = document.getElementById("myChart");
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ['Total Kasus','Kasus Baru','Total Kematian', 'Kematian Baru', 'Total Sembuh', 'Kasus Aktif'],
				datasets: [{ 
					data: [<?php 
						echo json_encode($total_kasus); 
						echo ', '; 
						echo json_encode($kasus_baru); 
						echo ', '; 
						echo json_encode($total_kematian);
						echo ', '; 
						echo json_encode($kematian_baru); 
						echo ', '; 
						echo json_encode($total_sembuh);
						echo ', '; 
						echo json_encode($kasus_aktif);
						   ?>],
					label: 'Total Cases', 
        			backgroundColor:[ 
						'rgba(255, 99, 100, 1)',
						'rgba(54, 162, 200, 1)',
						'rgba(255, 206, 80, 1)',
						'rgba(127, 255, 200, 1)',
						'rgba(0, 191, 200, 1)',
						'rgba(112, 128, 100, 1)'
					]
				}
			]
			},
			options: {
    title: {
      display: true,
      text: 'Total cases Covid-19 in the World'
    }
  }
});
	</script>
</body>
</html>