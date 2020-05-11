<?php
include("config.php");
session_start();
if (!isset($_SESSION['Username'])) {
	header('Location: formlogin.php');
}
if(isset($_POST['Submit'])){

	// Ambil data dari form
	$username = $_SESSION['Username'];
	$password1 = $_POST['Password-1'];
	$password1 = md5($password1);
	$password2 = $_POST['Password-2'];
	$password2 = md5($password2);

	// Cek kesamaan password baru
	if ($password1 == $password2) {
		$query = pg_query("UPDATE Pengguna SET Password = '$password1' WHERE Username = '$username'");
		if ($query == TRUE) {
				// alihkan ke formlogin.php
				header('Location: formlogin.php?info=gantipassword');
			}
	}	else {
		header('Location: formreset.php?info=salah');
	}
}
?>