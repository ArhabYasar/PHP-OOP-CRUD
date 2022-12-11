<?php 	
include('koneksi.php');
$db = new Dbh();
$siswa = $db->tampil_data();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Siswa</title>
	<script src="bootstrap.bundle.js"></script>
	<link rel="stylesheet" href="bootstrap.css">

</head>
<body>
<div class="container">
	<h1>Data Siswa </h1>
	<a href="tambah_data.php">Tambah Data</a>
<table class="table table-hover">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Jurusan</th>
			<th>Opsi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($siswa as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td><?php echo $row['kelas']; ?></td>
				<td><?php echo $row['jurusan']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
					<a href="proses.php?action=delete&id=<?php echo $row['id']; ?>">Hapus</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	</div>
</body>
</html>