<?php
	include 'config/koneksi.php';
	$id_user = $_GET['id_user'];
	$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT
* FROM user WHERE id_user = $id_user "));
?>

<!DOCTYPE html>
<html>
<head>
	<title> Edit data</title>
</head>
<body>
	<H3> FORM Tambah Data</H3>
	<form action="" method="POST">
<table>
	<input type="hidden" name="id_user" value="<?= $id_user ?>">
	<tr>
		<td><label>NAMA</label></td>
		<td><input type="text"name="nama" value="<?= $data['nama'] ?>"></td>
	</tr>
	<tr>
		<td><label>USERNAME</label></td>
		<td><input type="text"name="username" value="<?= $data['username'] ?>"></td>
	</tr>
	<tr>
		<td><label>PASSWORD</label></td>
		<td><input type="text"name="password" value="<?= $data['password']?>"></td>
	</tr>
	<tr>
		<td><label>LEVEL</label></td>
		<td><input type="radio" name="level" value="petugas" <?php if ($data['level'] == 'petugas') {
			echo "checked";
		} ?>>Petugas</td>

		<td><input type="radio" name="level" value="admin" <?php if ($data['level'] == 'admin') {
			echo "checked";
		} ?>>Admin</td>
	</tr>
	<tr>
		<td><button type="submit"name="edit">Update</button></td>
		<td><button type="reset">Batal</button></td>
	</tr>
</table>
</form>
</body>
</html>
	
<?php
	if(isset($_POST['edit'])){

	$id_user = $_POST['id_user'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];

	$r = mysqli_query($koneksi, "UPDATE user SET nama ='$nama',password='$password', username = '$username', level ='$level' WHERE id_user = $id_user ");

	header("Location:index.php");
}
?>