<?php 
include_once('db_connect.php');
$database = new database();
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    if($database->register($username,$password,$nama))
    {
      header('location:login.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Registrasi</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css?<?php echo time(); ?>" />
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css?<?php echo time(); ?>" />
  <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
</head>

<body class="d-flex flex-column h-100 big-wrapper light">
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./img/logo.png" alt="" width="50" height="50" class="d-inline me-3">
          Jasa Print Online
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end links" id="navbarNav">
          <ul class="navbar-nav me-5">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Form Registrasi</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main role="main" class="flex-shrink-0">
    <div class="container">
      <h1 class="mt-5">Form Pendaftaran</h1>
      <p class="lead">Silahkan Daftarkan Identitas Anda</p>
      <hr />
      <form method="post" action="">
        <div class="form-group row pb-3">
          <label for="username" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
          </div>
        </div>

        <div class="form-group row pb-3">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
          </div>
        </div>


        <div class="form-group row pb-5">
          <label for="password" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="container d-flex gap align-items-baseline">
          <button type="submit" class="button" name="register">Daftar</button>
          <p>Atau</p>
          <a class="button secondary" href="login.php" role="button">Masuk</a>
        </div>
      </form>
    </div>
  </main>

  <footer class="footer mt-auto py-3">
    <div class="container">
      <span class="text-muted">Jasa Print Online - 2022</span>
    </div>
  </footer>

  <!-- JavaScript Files -->

  <script src="js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</body>

</html>