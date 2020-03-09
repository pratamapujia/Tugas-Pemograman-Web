<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body>
	<table border="0">
		<form action="output.php" method="POST">
			<tr>
				<td>NPM</td>
				<td> : </td>
				<td><input type="text" name="NPM"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td> : </td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td>IPK</td>
				<td> : </td>
				<td><input type="text" name="IPK"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td> : </td>
				<td><input type="text" name="Jurusan"></td>
			</tr>
			<tr>
				<td>Tempat dan Tanggal Lahir</td>
				<td> : </td>
				<td><input type="text" name="TTL"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td><input type=radio name=JK value=Laki-laki>Laki-laki
					<input type=radio name=JK value=Perempuan>Perempuan
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><input type="textfield" name="Alamat"></td>
			</tr>
			<tr>
   				<td></td>
   				<td></td>
   				<td><input type="submit" name="submit" value="Tambah Data"></td>
  			</tr>
		</form>
	</table>
</body>
</html>