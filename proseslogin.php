<?php
include("config.php");
session_start();
// cek apakah tombol login sudah diklik atau belum?
if(isset($_POST['Login'])){

	// ambil data dari formulir
	$username = $_POST['Username'];
	$password = $_POST['Password'];
	$password = md5($password);
	
	// cek ketersediaan akun
	$query = pg_query("SELECT * FROM Pengguna WHERE  Username = '$username' AND Password = '$password'");
	$count = pg_num_rows($query);
	$row = pg_fetch_array($query);

	if ($count == 1) {
		if (is_array($row)) {
			session_start();
			$_SESSION['Username'] = $username;
			// alihkan ke dashboard.php
			header('Location: dashboard.php?username='.$_SESSION['Username']);
		}
	} else {
		header('Location: formlogin.php?info=salah');
	}

} else {
	die("Terjadi masalah...");
}
?>
