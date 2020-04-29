<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['Daftar'])){

	// ambil data dari formulir
	$email = $_POST['Email'];
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$namadepan = $_POST['FName'];
	$namabelakang = $_POST['LName'];

	// Cek agar tidak ada username atau email yang sama
	$cek_username = pg_num_rows(pg_query("SELECT * FROM Pengguna WHERE Username = '$username'"));
	$cek_email = pg_num_rows(pg_query("SELECT * FROM Pengguna WHERE Email = '$email'"));
	if($cek_username > 0 || $cek_email > 0) {
		echo "<script>alert('Username atau Email sudah pernah digunakan'); history.go(-1) </script>";
	} else {
		// buat query
		$query = pg_query("INSERT INTO Pengguna (Email, Username, Password, FName, LName) VALUES ('$email', '$username', '$password', '$namadepan', '$namabelakang')");

		// apakah query simpan berhasil?
		if( $query==TRUE ) {
			// kalau berhasil alihkan ke halaman index.php dengan status=sukses
			header('Location: index.php?status=sukses');
		} else {
			// kalau gagal alihkan ke halaman indek.php dengan status=gagal
			header('Location: index.php?status=gagal');
		}
	}

} else {
	die("Akses dilarang...");
}

?>