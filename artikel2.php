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
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- My Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Viga">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!-- My Icon -->
  <link rel="shortcut icon" href="img/favicon.png">

  <!-- My CSS -->
  <link rel="stylesheet" href="style-2.css">

  <title>Artikel | smallFarm</title>
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


  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="blog-body">
      <div class="blog-news">
        <div class="blog-news_img">
          <img src="img/art2_dash.jpg" alt="">
        </div>
        <div class="blog-news_info">
          <div class="blog-news_date">
            <span>Selasa, 12 Mei 2020</span>
          </div>
          <h1 class="blog-news_title">Teknik Bertanam Sayur yang Bisa Digunakan Masyarakat Perkotaan</h1>
          <p class="blog-news_text">
            Pertanianku — Ada empat <b>teknik bertanam</b> yang bisa dilakukan masyarakat perkotaan untuk menanam sayur dari rumah, mulai dari teknik 
            yang paling sederhana dengan pot hingga teknik yang membutuhkan instalasi pendukung yang agak rumit. Berikut ini beberapa teknik bertanam 
            yang bisa dilakukan masyarakat di perkotaan.
			<br/><br/>
			<b>Bertanam di polibag/pot</b> <br/>
            Teknik pertama yang paling mudah untuk dilakukan di rumah adalah menanam sayuran dengan menggunakan pot. Teknik ini terbilang sangat murah, 
            mudah, dan sederhana. Anda hanya perlu menyiapkan pot atau polibag yang ditaruh di pekarangan rumah. Selain di pekarangan, pot atau polibag
            tersebut dapat diletakkan di teras, balkon rumah, hingga di atas parit depan rumah.
			<br/><br/>
            Anda hanya perlu mengatur tempat polibag atau pot yang tepat, seperti terkena cahaya sinar matahari pagi, efisien, dan menghasilkan keindahan.
            <br/><br/>
            <b>Vertikultur</b> <br/>
			Pada dasarnya teknik bertanam ini sama seperti menanam di polibag atau pot. Teknik ini lebih diperuntukan untuk mereka yang memiliki lahan
			terbatas, tetapi ingin mendapatkan hasil panen yang melimpah. Vertikultur membutuhkan adanya instalasi yang bisa membuat lahan tanam menjadi
			lebih efisien. Oleh karena itu, instalasi vertikultur pada umumnya berbentuk berundak, bertingkat, atau digantung.
			<br/><br/>
			<b>Hidroponik</b><br/><br/>
			Sistem ini sudah mulai dikenal oleh banyak orang karena sedang naik daun. Masyarakat kota besar di negara maju sudah banyak yang menanam sayuran
			di pekarangan rumahnya dengan sistem hidroponik. Hidroponik pada dasarnya adalah kegiatan menanam sayur yang tidak menggunakan media tanah. 
			Media yang digunakan sangat beragam, salah satunya yang paling terkenal adalah air.
			<br/><br/>
			<b>Sumber:</b> <a href="https://www.pertanianku.com/teknik-bertanam-sayur-yang-bisa-digunakan-masyarakat-perkotaan/">https://www.pertanianku.com/teknik-bertanam-sayur-yang-bisa-digunakan-masyarakat-perkotaan/</a>
          </p>
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
