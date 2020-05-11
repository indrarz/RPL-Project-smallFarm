<?php
include("config.php");
// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['Daftar'])){

	// ambil data dari formulir
	$email = $_POST['Email'];
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$password = md5($password);
	$namadepan = $_POST['FName'];
	$namabelakang = $_POST['LName'];

	// Cek agar tidak ada username atau email yang sama
	$cek_username = pg_num_rows(pg_query("SELECT * FROM Pengguna WHERE Username = '$username'"));
	$cek_email = pg_num_rows(pg_query("SELECT * FROM Pengguna WHERE Email = '$email'"));

	if($cek_username > 0 || $cek_email > 0) {
		header('Location: formregis.php?info=tersedia');
	} else {
		// buat query
		$query = pg_query("INSERT INTO Pengguna (Email, Username, Password, FName, LName) VALUES ('$email', '$username', '$password', '$namadepan', '$namabelakang')");

		// apakah query berhasil?
		if($query==TRUE) {
			// kalau berhasil alihkan ke halaman formlogin.php dengan status=sukses
			header('Location: formlogin.php?info=sukses');
		} else {
			// kalau gagal alihkan ke halaman formregis.php dengan status=gagal
			header('Location: formregis.php?info=gagal');
		}
	}

} else {
	die("Terjadi masalah...");
}

?>
