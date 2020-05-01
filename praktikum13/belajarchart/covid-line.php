<?php
include('koneksi.php');
$negara = mysqli_query($koneksi,"SELECT * from tb_negara");
while($row = mysqli_fetch_array($negara)){
$nama_negara[] = $row['negara'];
	
	$query = mysqli_query($koneksi,"SELECT * from tb_covid where id_negara='".$row['id_negara']."'");
	$row = $query->fetch_array();
	$total_kasus[] = $row['total_kasus'];
	$kasus_baru[] = $row['kasus_baru'];
	$total_kematian[] = $row['total_kematian'];
	$kematian_baru[] = $row['kematian_baru'];
	$total_sembuh[] = $row['total_sembuh'];
	$kasus_aktif[] = $row['kasus_aktif'];
	
}
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
			type: 'line',
			data: {
				labels: <?php echo json_encode($nama_negara); ?>,
				datasets: [{ 
        			data: <?php echo json_encode($total_kasus); ?>,
					label: 'Total Kasus',
        			borderColor: 'rgba(255, 99, 100, 1)',
					fill: false
				},{
					data: <?php echo json_encode($kasus_baru); ?>,
					label: 'Kasus Baru',
        			borderColor: 'rgba(54, 162, 200, 1)',
					fill: false
				},{
					data: <?php echo json_encode($total_kematian); ?>,
					label: 'Total Kematian',
        			borderColor: 'rgba(255, 206, 80, 1)',
					fill: false
				},{
					data: <?php echo json_encode($kematian_baru); ?>,
					label: 'Kematian Baru',
        			borderColor: 'rgba(127, 255, 200, 1)',
					fill: false
				},{
					data: <?php echo json_encode($total_sembuh); ?>,
					label: 'Total Sembuh',
        			borderColor: 'rgba(0, 191, 200, 1)',
					fill: false
				},{
					data: <?php echo json_encode($kasus_aktif); ?>,
					label: 'Kasus Aktif',
        			borderColor: 'rgba(112, 128, 100, 1)',
					fill: false
				}
			]
			},
			options: {
    title: {
      display: true,
      text: 'Covid-19 in the World per-region'
    }
  }
});
	</script>
</body>
</html>