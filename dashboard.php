<?php
include("config.php");
session_start();
if (!isset($_SESSION['Username'])) {
	header('Location: formlogin.php');
}

// ambil data
$email = $_SESSION['Email'];
$username = $_SESSION['Username'];
$password = $_SESSION['Password'];
$namadepan = $_SESSION['FName'];
$namabelakang = $_SESSION['LName'];

// buat query
$query = pg_query("SELECT * FROM Pengguna WHERE Username='$username'");
?>

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
    <link rel="stylesheet" href="style-2.css">

    <title>Dashboard | smallFarm</title>
</head>

<body class="body">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light">
	  <a class="navbar-brand" href="dashboard.php">small<span>Farm</span></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item fitur">
	        <a class="nav-link" href="#">
	        	<img src="img/artikel.png" height="20" class="d-inline-block align-top" alt="">
	        	Artikel</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">
	        	<img src="img/forum.png" height="20" class="d-inline-block align-top" alt="">
	        	Forum Diskusi</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle toko" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          <img src="img/toko.png" height="20" class="d-inline-block align-top" alt="">
	          Toko Online
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Penjualan</a>
	          <a class="dropdown-item" href="#">Pembelian</a>
	        </div>
	      </li>
	    </ul>
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item dropdown profil">
	        <a class="nav-link dropdown-toggle p" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" value="">
	        	<?php
	        	while ($pengguna = pg_fetch_array($query)) {
	        		echo "".$namadepan." ".$namabelakang."";
	        	}
	        	?>
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Profil</a>
	          <a class="dropdown-item" href="logout.php">Keluar</a>
	        </div>
	      </li>
	    </ul>
	  </div>
	</nav>
	<!-- Akhir Navbar -->

	<!-- Carousel -->
	<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
	  <!--Indicators-->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-2" data-slide-to="1"></li>
	    <li data-target="#carousel-example-2" data-slide-to="2"></li>
	    <li data-target="#carousel-example-2" data-slide-to="3"></li>
	  </ol>
	  <!--/.Indicators-->
	  <!--Slides-->
	  <div class="carousel-inner" role="listbox">
	    <div class="carousel-item active">
	      <div class="view">
	        <img class="d-block w-100" src="img/dash_1.jpg"
	          alt="First slide">
	        <div class="mask rgba-black-strong"></div>
	      </div>
	      <div class="carousel-caption">
	        <h3 class="h3-responsive">Semai bibit</h3>
	        <p class="text">Pilihlah bibit yang berkualitas, lalu semai bibit tersebut pada media tanam.</p>
	      </div>
	    </div>

	    <div class="carousel-item">
	      <!--Mask color-->
	      <div class="view">
	        <img class="d-block w-100" src="img/dash_2.jpg"
	          alt="Second slide">
	        <div class="mask rgba-black-strong"></div>
	      </div>
	      <div class="carousel-caption">
	        <h3 class="h3-responsive">Beri pupuk</h3>
	        <p class="text">Rajinlah memberi pupuk. Gunakan pupuk kompos sehingga tanaman lebih organik. </p>
	      </div>
	    </div>

	    <div class="carousel-item">
	      <!--Mask color-->
	      <div class="view">
	        <img class="d-block w-100" src="img/dash_3.jpg"
	          alt="Third slide">
	        <div class="mask rgba-black-strong"></div>
	      </div>
	      <div class="carousel-caption">
	        <h3 class="h3-responsive">Beri air</h3>
	        <p class="text">Jangan lupa untuk menyirami tanaman setiap hari.</p>
	      </div>
	    </div>

	    <div class="carousel-item">
	      <!--Mask color-->
	      <div class="view">
	        <img class="d-block w-100" src="img/dash_4.jpg"
	          alt="Fourth slide">
	        <div class="mask rgba-black-strong"></div>
	      </div>
	      <div class="carousel-caption">
	        <h3 class="h3-responsive">Beri sinar matahari</h3>
	        <p class="text">Letakkan tanaman pada tempat yang mudah mendapatkan sinar matahari.</p>
	      </div>
	    </div>
	  </div>
	  <!--/.Slides-->
	  <!--Controls-->
	  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	  <!--/.Controls-->
	</div>
	<!-- Akhir Carousel -->

	<!-- Panel -->
	<div class="row justify-content-center kolom">
		<div class="col-lg-14 panel">
			<h1 class="artikel">Artikel</h1>
		</div>
	</div>
	<!-- Panel -->
	
	<!-- Jumbotron -->
	<div class="jumbotron jumbotron-fluid">
		<div class="card-deck">
			<div class="card">
				<img src="img/art_1.jpg" class="card-img-top">
			    <div class="card-body">
			      <h5 class="card-title">Artikel 1</h5>
			      <p class="card-text">Lorem ipsum dolor sit amet...</p>
			      <a href="#" class="btn btn-primary next">Selengkapnya</a>
			    </div>
			  </div>

			<div class="card">
			    <img src="img/art_2.jpg" class="card-img-top">
			    <div class="card-body">
			      <h5 class="card-title">Artikel 2</h5>
			      <p class="card-text">Lorem ipsum dolor sit amet...</p>
			      <a href="#" class="btn btn-primary next">Selengkapnya</a>
			    </div>
			</div>

			<div class="card">
				<img src="img/art_3.jpg" class="card-img-top">
			    <div class="card-body">
			      <h5 class="card-title">Artikel 3</h5>
			      <p class="card-text">Lorem ipsum dolor sit amet...</p>
			      <a href="#" class="btn btn-primary next">Selengkapnya</a>
			    </div>
			</div>
		</div>
	</div>
	<!-- Akhir Jumbotron -->

	<!-- Footer -->
    <footer class="page-footer">
      <div class="footer">© smallFarm, 2020</div>
    </footer>
    <!-- Akhir footer -->

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>