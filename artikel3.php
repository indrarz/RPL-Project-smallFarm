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
          <img src="img/art3_dash.jpg" alt="">
        </div>
        <div class="blog-news_info">
          <div class="blog-news_date">
            <span>Rabu, 13 Mei 2020</span>
          </div>
          <h1 class="blog-news_title">Sarana dan Prasarana yang Harus Dimiliki untuk Produksi Pupuk Organik</h1>
          <p class="blog-news_text">
			Pertanianku — Dalam pembuatan <b>pupuk organik</b> membutuhkan beberapa sarana dan prasarana pendukung. Jika pupuk hanya dibuat untuk kepentingan
			pribadi, sarana dan prasarana yang dibutuhkan tidak terlalu rumit, cukup dengan benda-benda yang mudah ditemukan di sekitar. Namun, produksi
			pupuk organik ditujukan untuk skala komersial dalam jumlah yang besar, sarana dan prasarana yang Anda butuhkan harus memadai. Berikut ini 
			beberapa sarana dan prasarana yang harus Anda miliki.
			<br/><br/>
			<b>Mesin pencacah</b> <br/><br/>
            Bahan baku pupuk organik adalah limbah organik dari pertanian ataupun peternakan. Limbah tersebut terkadang masih dalam bentuk utuh atau berukuran
            besar. Guna memudahkan proses pembuatan pupuk, bahan baku harus dicacah menjadi ukuran yang lebih kecil-kecil menggunakan mesin pencacah. 
            Jika produksi pupuk organik hanya ditujukan untuk penggunaan pribadi, Anda bisa mencacahnya secara manual.
            <br/><br/>
            <b>Alat penyaring</b> <br/><br/>
			Pupuk yang sudah dicacah harus disaring agar mendapatkan bahan baku dengan ukuran yang sama. Hal tersebut sangat berguna untuk mengefektifkan
			proses produksi. Bahan baku yang masih berukuran berbeda dimasukkan kembali ke mesin pencacah agar ukurannya menjadi seragam.
			<br/><br/>
            <b>Mesin giling</b> <br/>
			Setelah semua ukuran bahan baku seragam, bahan dimasukkan ke mesin penggiling untuk dihaluskan. Bahan tersebut akan digiling untuk mendapatkan
			ukuran yang lebih kecil lagi agar dapat digranulasi.
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