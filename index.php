<!DOCTYPE html>
  <html>
<head>
	<title>APLIKASI SPP</title>
</head>
    <body>
        <h1>Data User Kelas XII A</h1>
       <a href="From_tambah.php">Tambah Data</a>
<table border =1>
 	<thead>
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Aksi</th>
		</tr>	
	</thead>
	<tbody>
		<?php
		 $no=1;
		include 'config/koneksi.php';
		$sql  = mysqli_query($koneksi,"SELECT * FROM user");
		while ($row = mysqli_fetch_assoc($sql)) {
			?>
		<tr>
			<td><?= $row ['id_user']?></td>
			<td><?= $row ['nama']?></td>
			<td><?= $row ['username']?></td>
			<td><?= $row ['password']?></td>
			<td><?= $row ['level']?></td>
			<td><a href="<?='edit_user.php?id_user='.$row['id_user']?>">edit</a>] |
				<a href="<?= 'hapus_user.php?id_user='.$row['id_user']?>"
			onclick = "return confirm('yakin akan menghapus data ini ?')">hapus</a>
		</tr>
		<?php
		 $no++;
		}
		?>
		
	</tbody>
</table>

</body>
</html>
