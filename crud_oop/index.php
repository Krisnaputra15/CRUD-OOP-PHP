<?php
include "database.php";
$db = new database();
?>
<!DOCTYPE html>
<html>
	<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
<h1>CRUD OOP PHP</h1>
<h2>WWW.MALASNGODING.COM</h2>
<h3>Data User</h3>
 </center>

<br>
<br>
<center><table class="table table-hover table1">
	<tr>
		<th class="thead">No</th>
		<th class="thead">Nama</th>
		<th class="thead">Alamat</th>
		<th class="thead">Usia</th>
		<th class="thead"><center>Opsi</center></th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['alamat']; ?></td>
		<td><?php echo $x['usia']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit" class="btn btn-primary tombol1">Edit</a>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus" class="btn btn-secondary tombol2">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table></center>
<center><a href="tambah.php" class="btn btn-primary btn-large tombol3">Input Data</a></center>
</body>
</html>