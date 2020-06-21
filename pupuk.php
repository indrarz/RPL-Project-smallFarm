<?php
include("config.php");
session_start();
if (!isset($_SESSION['Username'])) {
  header('Location: formlogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
   .div {
     width: 300px;
     height: 180px;
     border: 1px white;
     border-radius: 30px;
   }
</style>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- My Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Viga">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

  <!-- My Icon -->
  <link rel="shortcut icon" href="img/favicon.png">

  <!-- My CSS -->
  <link rel="stylesheet" href="style-2.css">

  <title>Beri Pupuk | smallFarm</title>
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
          <a class="nav-link" href="artikel.php">
            <img src="img/artikel.png" height="20" class="d-inline-block align-top" alt="">
          Artikel</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle toko" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="img/toko.png" height="20" class="d-inline-block align-top" alt="">
          Toko Online</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="penjualan.php">Penjualan</a>
            <a class="dropdown-item" href="pembelian.php">Pembelian</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown profil">
          <a class="nav-link dropdown-toggle p" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['Username']; ?>
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

    <div class="carousel-inner" >
      <div class="carousel-item active">        
          <img class="d-block w-100" src="img/dash_2.jpg">
          <div class="mask rgba-black-strong"></div>
        <div class="carousel-caption">
         <a class="nav-link"><h3 class="h3-responsive">Beri Pupuk</h3></a>
          <p class="text">Rajinlah memberi pupuk, gunakan pupuk kompos sehingga tanaman lebih organik.</p>
        </div>
      </div>     
    </div>

  </div>
  <!-- Akhir Carousel -->
  
  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="card" style="max-width: 1200px; margin-left: 65px;">
  	<div class="row no-gutters">
  		<div class="col-md-4">
  			<img src="img/semai1.jpg" class="div">
  		</div>
  		<div class="col-md-8"><br>
  			<div class="card-header">
  				<h5 class="card-title">Semangka</h5>
  			</div>
  			<div class="card-body">
  				<a href="#" class="btn btn-primary next">Selengkapnya</a>
  			</div>
  		</div>
  	</div>
    </div>
    <br/>
     <div class="card" style="max-width: 1200px; margin-left: 65px;">
  	<div class="row no-gutters">
  		<div class="col-md-4">
  			<img src="img/semai2.jpg" class="div">
  		</div>
  		<div class="col-md-8"><br>
  			<div class="card-header">
  				<h5 class="card-title">Jagung</h5>
  			</div>
  			<div class="card-body">
  				<a href="#" class="btn btn-primary next" align=right>Selengkapnya</a>
  			</div>
  		</div>
  	</div>
    </div>
   <br/>
    <div class="card" style="max-width: 1200px; margin-left: 65px;">
  	<div class="row no-gutters">
  		<div class="col-md-4">
  			<img src="img/semai3.jpg" class="div">
  		</div>
  		<div class="col-md-8"><br>
  			<div class="card-header">
  				<h5 class="card-title">Nanas</h5>
  			</div>
  			<div class="card-body">
  				<a href="#" class="btn btn-primary next" align=right>Selengkapnya</a>
  			</div>
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
