<?php 
  session_start();

  require "../php/functions.php";

  if(isset($_SESSION["login"])) {
    header("Location: ../../index.html");
    exit;
  }

  if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = pg_query($db, $query);

    if(pg_num_rows($result) === 1) {
      $row = pg_fetch_assoc($result);

      if(password_verify($password, $row["password"])) {
        $_SESSION["login"] = true;
        $_SESSION["id_user"] = $row["id_user"];
        
        header("Location: ./home.php");
        exit;
      }
    }
  }
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Log in</title>
    <link rel="icon" href="../assets/img/logo.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/login.css" />
  </head>

  <body>
    <div class="content">
      <div class="content-left px-5">
        <div class="header">
          <img
            src="../assets/img/logo.png"
            alt="Deskripsi Gambar"
            class="logo"
            width="75" />
          <h1 class="header-title">EzNote</h1>
        </div>

        <h2 class="login-heading">Login to Your account</h2>
        <div class="login-method">
          <form action="" method="POST" class="login-form">
            <input
              type="text"
              class="form-control username-input"
              id="username"
              name="username"
              placeholder="Username" />

            <input
              type="password"
              class="password-input"
              id="password"
              name="password"
              placeholder="Password" />

            <button type="submit" name="login" class="login-button">
              Login
            </button>
            <span class="sign-up"
              ><a href="./signup.php">Don't have an account?</a></span
            >
          </form>
        </div>
      </div>

      <div class="content-right">
        <div class="logo">
          <img
            src="../assets/img/logo.png"
            alt="Deskripsi Gambar"
            width="250" />
          <h1 class="header web-title">EzNote</h1>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
  </body>
</html>
