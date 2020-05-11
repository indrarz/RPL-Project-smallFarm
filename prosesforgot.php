<?php
include("config.php");
if(isset($_POST['Submit'])){

	// Ambil data dari form
	$email = $_POST['Email'];
	$username = $_POST['Username'];

	// Cek ketersediaan akun
	$query = pg_query("SELECT * FROM Pengguna WHERE Email = '$email' AND Username = '$username'");
	$count = pg_num_rows($query);
	$row = pg_fetch_array($query);	
	
	if ($count == 1) {
		if (is_array($row)) {
			session_start();
			$_SESSION['Username'] = $username;
			// alihkan ke formreset.php
			header('Location: formreset.php?username='.$_SESSION['Username']);
		}
	} else {
		header('Location: formforgot.php?info=notfound');
	}
}
?>