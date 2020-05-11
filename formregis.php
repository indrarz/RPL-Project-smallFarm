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

  <!-- My Icon -->
  <link rel="shortcut icon" href="img/favicon.png">

  <!-- My CSS -->
  <link rel="stylesheet" href="style-1.css">

  <title>Registrasi | smallFarm</title>
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
      <form class="form" action="prosesregis.php" method="POST">
        <fieldset>
          <div class="container">
            <p class="regis">Registrasi</p>
            <?php if (isset($_GET['info'])) { ?>
              <?php if ($_GET['info'] == 'tersedia') { ?>
                <div class="alert alert-danger" role="alert">Username atau Email telah terdaftar.</div>
              <?php } ?>
            <?php } ?>
            <p>
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" name="FName" placeholder="Nama depan" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="LName" placeholder="Nama belakang" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
              </div>
            </p>
            <p>
              <input type="email" class="form-control" name="Email" placeholder="Email" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
            </p>
            <p>
              <input type="text" class="form-control" name="Username" placeholder="Username" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
            </p>
            <p>
              <input type="password" class="form-control" name="Password" placeholder="Password" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
            </p>
            <p class="tombol">
              <button type="submit" class="btn btn-primary sub-daftar" name="Daftar">Daftar</button> 
            </p>
          </div>
        </fieldset>
      </form>
      <!-- Akhir Form -->

      <p class="back">
        <a class="back-login" href="formlogin.php">Sudah punya akun? Masuk!</a>
      </p>
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
