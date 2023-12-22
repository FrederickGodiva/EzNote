<?php 
  require "../php/functions.php";

  if(isset($_POST["sign-up"])) {
    if(signUp($_POST) > 0) {
      echo "
        <script>
          alert('New User Added!');
        </script>
      ";
      header("Location: login.php");
    } else {
      echo pg_last_error($db);
    }
  }
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Register</title>
    <link rel="icon" href="../assets/img/logo.png" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/signup.css" />
  </head>

  <body>
    <div class="content">
      <div class="px-5 content-left">
        <div class="header">
          <img
            src="../assets/img/logo.png"
            alt="Deskripsi Gambar"
            class="logo"
            width="50" />
          <h1 class="header-title">EzNote</h1>
        </div>

        <h2 class="login-heading">Sign Up Your Account</h2>

        <div class="login-method">
          <form action="" method="POST" class="login-form">
            <div>
              <input
                type="text"
                class="username-input"
                id="username"
                name="username"
                placeholder="Username" />
            </div>
            <div>
              <input
                type="password"
                class="password-input"
                id="password"
                name="password"
                placeholder="Password" />
            </div>
            <div>
              <input
                type="password"
                class="password-input"
                id="passwordConfirmation"
                name="passwordConfirmation"
                placeholder="Password Confirmation" />
            </div>

            <button class="signup-button" type="submit" name="sign-up">
              Sign Up
            </button>
            <span class="login"
              ><a href="./login.php">Already have an account?</a></span
            >
          </form>
        </div>
      </div>

      <div class="content-right">
        <div class="logo-kanan">
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
