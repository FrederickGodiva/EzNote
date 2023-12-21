<?php 
  session_start();
  
  require "../php/functions.php";

  if(!isset($_SESSION["login"])) {
    header("Location: ./login.php");
    exit;
  }
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Notes</title>
    <link rel="icon" href="../assets/img/logo.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/notes.css" />
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
      <form action="" method="POST" class="add-note">
        <div class="notes"></div>
      </form>
      <button class="add">
        <img src="../assets/icon/add.png" alt="" width="15" height="15" />
      </button>
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="../js/time.js"></script>
    <script src="../js/notes.js"></script>
  </body>
</html>
