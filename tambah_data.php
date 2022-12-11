<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
    <script src="bootstrap.bundle.js"></script>
	<link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<div class="container">
<form method="post" action="proses.php?action=add">
    <h2>Tambah Data</h2>

        <div class="form-group">
            <label for="nama">Nama: </label>
            <input type="text" class="form-control" name="nama" id="nama" required autocomplete="off">
        </div>
        <br>
        <div class="form-group">
            <label for="kelas">Kelas: </label>
            <input type="text" class="form-control" name="kelas" id="kelas" required autocomplete="off">
        </div>
        <br>
        <div class="form-group">
            <label for="jurusan">Jurusan: </label>
            <input type="text" class="form-control" name="jurusan" id="jurusan" required autocomplete="off">
        </div>
        <br>
        <button type="submit" name="tombol" values="Simpan" class="btn btn-primary">Selesai</button>
        </form>
        </div>
	</div>
	<br>
</table>
</form>
</body>
</html>