<?php 
class Dbh{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "dbrpl12";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "GAGAL TERKONEKSI DENGAN DATABASE : " . mysqli_connect_error();
		}
	}
 
	function tampil_data(){
		$data = mysqli_query($this->koneksi,"SELECT * FROM siswa");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
 
	function tambah_data($nama,$kelas,$jurusan){
		mysqli_query($this->koneksi,"INSERT into siswa values ('','$nama','$kelas','$jurusan')");
	}
		
	function get_by_id($id){
		$query = mysqli_query($this->koneksi,"SELECT * FROM siswa WHERE id='$id'");
		return $query->fetch_array();
	}
	function update_data($nama,$kelas,$jurusan){
		$query = mysqli_query($this->koneksi,"UPDATE siswa SET nama='$nama',kelas='$kelas',jurusan='$jurusan' WHERE id='$id'");

	}
	function delete_data($id){
		$query = mysqli_query($this->koneksi,"DELETE FROM siswa WHERE id='$id'");
	}
}

?>