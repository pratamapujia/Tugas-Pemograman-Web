<!DOCTYPE html>
<html>
<head>
	<title>Web Penduduk</title>
	<link rel="stylesheet" type="text/css" href="utama.css">
</head>
<body>
	<header>
    <div class="tulisan_berjalan">
     <marquee style="font-family: impact; font-size:50px; color:white;" >SELAMAT DATANG DI SITUS PENDUDUK DESA BAHAGIA</marquee>
    </div>
		<div class="main">
			<div class="logo2"><img src="Nama.png"></div>
		</div>

		<div class="button">
			<a href="utama.php" class="btn1">HOME</a>
			<a onclick="myFunction()" class="btn2">PENDUDUK</a>
			<div id="myDropdown" class="btn2-child">
    			<a href="Penduduk.php">TAMBAH DATA</a>
    			<a href="data-penduduk.php">LIHAT DATA</a>
  			</div>
			<a onclick="myFunction2()" class="btn3">MUTASI</a>
			<div id="myDropdown2" class="btn3-child">
				<a href="Mutasi.php">TAMBAH DATA</a>
				<a href="data-mutasi.php">LIHAT DATA</a>
			</div>
			<a onclick="myFunction3()" class="btn4">KEMATIAN</a>
			<div id="myDropdown3" class="btn4-child">
				<a href="Kematian.php">TAMBAH DATA</a>
				<a href="data-kematian.php">LIHAT DATA</a>
			</div>
			<a href="Kontak.php" class="btn5">KONTAK</a>
		</div>
	</header>	
	<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function myFunction2() {
    document.getElementById("myDropdown2").classList.toggle("show");
}
function myFunction3() {
    document.getElementById("myDropdown3").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  	if (!event.target.matches('.btn2')) {
    	var dropdowns = document.getElementsByClassName("btn2-child");
    	var i;
    	for (i = 0; i < dropdowns.length; i++) {
      		var openDropdown = dropdowns[i];
      		if (openDropdown.classList.contains('show')) {
        		openDropdown.classList.remove('show');
      		}
    	}
  	} else if (!event.target.matches('.btn3')) {
  		var dropdowns = document.getElementsByClassName("btn3-child");
  		for (var i = 0; i < dropdowns.length; i++) {
  			var openDropdown = dropdowns[i];
  			if (openDropdown.classList.contains('show')) {
  				openDropdown.classList.remove('show');
  			}
  		}
  	} else if (!event.target.matches('.btn4')) {
      var dropdowns = document.getElementsByClassName("btn4-child");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
      }
    }
}
</script>
</body>
</html>