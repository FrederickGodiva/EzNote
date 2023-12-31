<?php 
  session_start();

  if(!isset($_SESSION["login"])) {
    header("Location: ../../index.html");
    exit;
  }
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Setting</title>
    <link rel="icon" href="../assets/img/logo.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/about-us.css" />
  </head>

  <body>
    <nav class="p-3">
      <div class="header">
        <a
          href="./home.php"
          class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
          <img src="../assets/img/logo.png" alt="logo" width="50" />
          <h1 class="header-text">EzNote</h1>
        </a>
      </div>
      <hr />
      <ul class="nav nav-pills flex-column mb-auto sidebar">
        <li class="nav-item">
          <img src="../assets/icon/home.png" alt="Home" width="25" />
          <a href="./home.php" class="nav-link nav-option" aria-current="page">
            Home
          </a>
        </li>
        <li class="nav-item">
          <img src="../assets/icon/notes.png" alt="Notes" width="25" />
          <a href="./notes.php" class="nav-link nav-option"> Notes </a>
        </li>
        <li class="nav-item">
          <img src="../assets/icon/picture.png" alt="Picture" width="25" />
          <a href="./pictures.php" class="nav-link nav-option"> Pictures </a>
        </li>
        <li class="nav-item">
          <img src="../assets/icon/settings.png" alt="Account" width="25" />
          <a href="./account.php" class="nav-link nav-option"> Account </a>
        </li>
        <li class="nav-item">
          <img src="../assets/icon/file.png" alt="About Us" width="25" />
          <a href="./about-us.php" class="nav-link nav-option"> About Us </a>
        </li>
      </ul>
      <a href="./logout.php" class="btn btn-danger justify-content-center"
        >Log Out</a
      >
    </nav>

    <header>
      <div class="time">
        <div class="date"></div>
        <div class="clock"></div>
      </div>
    </header>

    <main>
      <div class="picture">
        <div class="col-2 col-md-2">
          <img
            src="../assets/img/margareth.png"
            alt="Image 1"
            class="img-fluid w-100 rounded-circle" />
          <div class="figure-caption text-center text-black fw-bold">
            Margareth
          </div>
        </div>
        <div class="col-2 col-md-2">
          <img
            src="../assets/img/azi.png"
            alt="Image 2"
            class="img-fluid w-100 rounded-circle" />
          <div class="figure-caption text-center text-black fw-bold">Azi</div>
        </div>
        <div class="col-2 col-md-2">
          <img
            src="../assets/img/frederick.png"
            alt="Image 3"
            class="img-fluid w-100 rounded-circle" />
          <div class="figure-caption text-center text-black fw-bold">
            Frederick
          </div>
        </div>
        <div class="col-2 col-md-2">
          <img
            src="../assets/img/wilbert.png"
            alt="Image 4"
            class="img-fluid w-100 rounded-circle" />
          <div class="figure-caption text-center text-black fw-bold">
            Wilbert
          </div>
        </div>
      </div>

      <div class="about-us-text">
        <div>
          <h1 class="text-center">KELOMPOK EUNOIA</h1>
          <p>Anggota:</p>
          <p>1. Margareth Serepine Simanjuntak (221401022)</p>
          <p>2. Muhammad Azi Maulana Manru (221401028)</p>
          <p>3. Frederick Godiva (221401038)</p>
          <p>4. Wilbert Nailson Sachio (221401048)</p>
        </div>

        <div>
          <h3 class="text-center">Keterangan:</h3>
          <p>
            Ini adalah tugas akhir ujian laboratorium pemrograman web dan basis
            data. <br />
            Dalam project ini kami membuat website catatan sederhana yang juga
            menggunakan CRUD dalam pengaplikasiannya
          </p>
        </div>
      </div>
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
    <script src="../js/time.js"></script>
  </body>
</html>
