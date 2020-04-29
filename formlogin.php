<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- My Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Viga">

    <!-- My Icon -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Login | smallFarm</title>
</head>

<body class="body">
	<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.php">small<span>Farm</span></a>
    </nav>    
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
      	<!-- Form -->
		<form class="form" action="#.php" method="POST">
			<fieldset>
				<div class="container">
					<p class="regis">Login</p>
				  	<p>
				    	<input type="text" class="form-control" name="Username" placeholder="Username" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
			  		</p>
			  		<p>
			    		<input type="password" class="form-control" name="Password" placeholder="Password" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
			  		</p>
			  		<div class="form-group">
			  			<div class="form-check">
			  				<input type="checkbox" class="form-check-input" id="Check">
			  				<label class="form-check-label" for="Check">Remember me</label>
			  			</div>
			  		</div>
			  		<p class="tombol">
			    		<button type="submit" class="btn btn-primary sub-daftar" name="Login">Login</button> 
			  		</p>
			  	</div>
			</fieldset>
		</form>
      	<!-- Akhir Form -->

      	<p class="back">
			<a class="back-login" href="formregis.php">Belum punya akun? Daftar!</a>
		</p>
		<p class="forget">
			<a class="forget-next" href="#">Lupa password?</a>
		</p>
      </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Footer -->
    <footer class="page-footer">
      <div class="footer">© smallFarm, 2020</div>
    </footer>
    <!-- Akhir footer -->
</body>
</html>