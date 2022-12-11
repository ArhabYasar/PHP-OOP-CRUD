<?php 	
include('koneksi.php');
$db = new Dbh();
$id = $_GET['id'];
if(! is_null($id))
{
	$siswa = $db->get_by_id($id);
}
else
{
	header('location:home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<script src="bootstrap.bundle.js"></script>
	<link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<form method="post" action="proses.php?action=update">
<input type="hidden" name="id" value="<?php echo $siswa['id']; ?>"/>
<div class="container">
    <h2>Edit Data</h2>
        <div class="form-group">
            <label for="nama">Nama: </label>
            <input type="text" class="form-control" name="nama" id="nama" required value="<?php echo $siswa['nama']; ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="kelas">Kelas: </label>
            <input type="text" class="form-control" name="kelas" id="kelas" required value="<?php echo $siswa['kelas']; ?>">
        </div>
        <br>
        <div class="form-group">
            <label for="jurusan">Jurusan: </label>
            <input type="text" class="form-control" name="jurusan" id="jurusan" required value="<?php echo $siswa['jurusan']; ?>">
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Selesai</button>
        </form>
        </div>
</form>
</body>
</html>