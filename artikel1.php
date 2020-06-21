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
          <img src="img/art1_dash.jpg" alt="">
        </div>
        <div class="blog-news_info">
          <div class="blog-news_date">
            <span>Selasa, 12 Mei 2020</span>
          </div>
          <h1 class="blog-news_title">Bahan Penting yang Harus Dipersiapkan untuk Menanam Vertikultur</h1>
          <p class="blog-news_text">
            Pertanianku — <b>Vertikultur</b> akan menjadi mudah ketika persiapan yang Anda miliki sudah memadai, baik persiapan secara ilmu maupun persiapan 
            perlengkapan yang memadai. Saat ini sudah banyak toko pertanian yang tersebar di kota ataupun desa untuk memudahkan Anda membeli peralatan
            dan perlengkapan menanam vertikultur. Bahkan, sebagian bisa dibuat sendiri menggunakan barang bekas yang masih bisa dimanfaatkan. Berikut 
            ini bahan penting yang harus dimiliki untuk membuat vertikultur di rumah. 
			<br/><br/>
            <b>Wadah tanam dan instalasi</b> <br/><br/>
            Vertikultur merupakan sistem menanam dengan memanfaatkan lahan yang terbatas untuk menghasilkan panen yang melimpah. Sistem menanamnya hampir
            sama seperti cara menanam pada umumnya, hanya saja instalasi yang dibuat memungkinkan Anda untuk mendapatkan hasil yang banyak. Oleh karena
            itu, model menanam ini sering menggunakan rak bertingkat ke atas untuk mengefisiensikan lahan.
            <br/><br/>
            Wadah tanam yang digunakan bisa berupa pot atau polibag, pipa PVC, talang air, bambu, kayu, papan, kantung tanaman, dan benda bekas lainnya.
            Sebelumnya, Anda harus merancang instalasi terlebih dahulu agar mudah menentukan wadah tanam apa yang akan digunakan. Dalam buku <i>Petik Sayuran
            di Lahan Sempit</i> terdapat banyak jenis instalasi vertikultur yang mudah untuk diikuti.
            <br/><br/>
            <b>Media tanam</b> <br/><br/>
			Setelah instalasi dan wadah tanam sudah tersedia, selanjutnya yang harus dimiliki adalah media tanam. Pada umumnya, komposisi media tanam 
			yang digunakan untuk wadah polibag atau pot adalah campuran tanah, sekam bakar, dan pupuk kandang dengan perbandingan 1:1:1. Sementara, untuk
			bibit yang ditanam pada wadah vertikultur dapat menggunakan campuran media tanam berupa tanah, pupuk kandang, dan sekam bakar dengan 
			perbandingan 2:1:1.
			<br/><br/>
			<b>Sumber:</b> <a href="https://www.pertanianku.com/bahan-penting-yang-harus-dipersiapkan-untuk-menanam-vertikultur/">https://www.pertanianku.com/bahan-penting-yang-harus-dipersiapkan-untuk-menanam-vertikultur/</a>
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
