<?php
	include 'config/koneksi.php';
	$id_user = $_GET['id_user'];
	

	$sql= mysqli_query($koneksi, "DELETE FROM user WHERE id_user =
		 $id_user");
	header("Location:index.php");
	?>