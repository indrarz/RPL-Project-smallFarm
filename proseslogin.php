<?php
include("config.php");
session_start();
// cek apakah tombol login sudah diklik atau belum?
if(isset($_POST['Login'])){

	// ambil data dari formulir
	$email = $_POST['Email'];
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$password = md5($password);
	$namadepan = $_POST['FName'];
	$namabelakang = $_POST['LName'];
	$status	  = $_POST['Status'];
	
	// cek jika akun tersedia
	$cek_email = pg_num_rows(pg_query("SELECT * FROM Pengguna WHERE Email = '$email'"));
	$cek_username = pg_num_rows(pg_query("SELECT * FROM Pengguna WHERE Username = '$username'"));
	$cek_password = pg_num_rows(pg_query("SELECT * FROM Pengguna WHERE Password = '$password'"));
	$cek_namadepan = pg_num_rows(pg_query("SELECT * FROM Pengguna WHERE FName = '$namadepan'"));
	$cek_namabelakang = pg_num_rows(pg_query("SELECT * FROM Pengguna WHERE LName = '$namabelakang'"));
	$cek_status = pg_num_rows(pg_query("SELECT * FROM Pengguna WHERE Status = '$status'"));

	if ($cek_username == 1 && $cek_password == 1) {
		session_start();
		$_SESSION['Email'] = $email;
		$_SESSION['Username'] = $username;
		$_SESSION['Password'] = $password;
		$_SESSION['FName'] = $namadepan;
		$_SESSION['LName'] = $namabelakang;
		header('Location: dashboard.php?username='.$username);
	} else {
		header('Location: formlogin.php?info=salah');
	}
} else {
	die("akses gagal...");
}
?>