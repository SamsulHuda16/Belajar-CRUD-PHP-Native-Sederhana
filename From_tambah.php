<?php
	include 'config/koneksi.php';
	?>
<!DOCTYPE html>
<html>
<head>
	<title> Tambah Data</title>
</head>
<body>
	<H3> FORM Tambah Data</H3>
	<form action="" method="POST">
<table>
	<tr>
		<td><label>NAMA</label></td>
		<td><input type="text"name="nama"></td>
	</tr>
	<tr>
		<td><label>USERNAME</label></td>
		<td><input type="text"name="username"></td>
	</tr>
	<tr>
		<td><label>PASSWORD</label></td>
		<td><input type="password"name="password"></td>
	</tr>
	<tr>
		<td><label>LEVEL</label></td>
		<td><input type="radio" name="level" value="petugas"checked="petugas">Petugas</td>
		<td><input type="radio" name="level" value="admin">Admin</td>
	</tr>
	<tr>
		<td><button type="submit"name="simpan">Simpan</button></td>
		<td><button type="reset">Batal</button></td>
	</tr>
</table>
</form>
</body>
</html>
	
<?php
	if(isset($_POST['simpan'])){

	$id_user = $_POST['id_user'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];

	$r = mysqli_query($koneksi,"INSERT INTO user VALUES('','$nama','$password','$username','$level')  ");

	header("Location:index.php");
}
?>