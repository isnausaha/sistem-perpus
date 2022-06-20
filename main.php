<?php
  include "koneksi.php";
  session_start();
  if (empty($_SESSION['username'])) {
    echo "<script>location='login.php'</script>";
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>perpus baca</title>
  </head>
  <body style="height: 100vh;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Perpus baca</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="main.php?hal=home">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="main.php?hal=data_admin">Data admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="main.php?hal=data_buku">Data buku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="main.php?hal=data_user">Data anggota</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  if (isset($_GET['hal'])) {
    if ($_GET['hal'] == "home") {
      include "home.php";
    } elseif ($_GET['hal'] == "data_admin") {
      include "data_admin.php";
    } elseif ($_GET['hal'] == "data_user") {
      include "data_user.php";
    } elseif ($_GET['hal'] == "data_buku") {
      include "data_buku.php";
    } elseif ($_GET['hal'] == "tambah_admin") {
      include "tambah_admin.php";
    } elseif ($_GET['hal'] == "tambah_user") {
      include "tambah_user.php";
    } elseif ($_GET['hal'] == "tambah_buku") {
      include "tambah_buku.php";
    } elseif ($_GET['hal'] == "edit_admin") {
      include "edit_admin.php";
    } elseif ($_GET['hal'] == "edit_user") {
      include "edit_user.php";
    } elseif ($_GET['hal'] == "edit_buku") {
      include "edit_buku.php";
    } elseif ($_GET['hal'] == "hapus_admin") {
      include "hapus_admin.php";
    } elseif ($_GET['hal'] == "hapus_user") {
      include "hapus_user.php";
    } elseif ($_GET['hal'] == "hapus_buku") {
      include "hapus_buku.php";
    } elseif ($_GET['hal'] == "baca_buku") {
      include "baca_buku.php";
    } elseif ($_GET['hal'] == "profil") {
      include "profil.php";
    } 
  } else {
    include "home.php";
  }
  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>