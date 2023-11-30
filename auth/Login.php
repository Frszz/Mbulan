<?php

   session_start();
    if( isset($_SESSION["login"])) {
        header("Location: ../application/Dashboard.php");
        exit;
    }

    // Koneksi Database
    require_once "../config/config.php";

    if( isset($_POST["login"]) ) {
      $username = $_POST["username"];
      $password = $_POST["password"];

      $result = mysqli_query($con, "SELECT * FROM tbl_admin WHERE
         username = '$username' AND password = '$password'");
         
      if( mysqli_num_rows($result) === 1 ) { 
         $_SESSION["login"] = true;


         header("Location: ../application/Dashboard.php");
         exit;
      }

      $error = true;
    }

?>
<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login - Mbluan</title>

      <!-- Remixicon -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

      <!-- CSS -->
      <link rel="stylesheet" href="assets/css/style.css">

   </head>
   <body>
      <div class="login">
         <img src="assets/img/bg.jpg" alt="image" class="login__bg">

         <form action="" method="POST" class="login__form">
            <h1 class="login__title">Mbulan</h1>

            <div class="login__inputs">
               <div class="login__box">
                  <input type="text" name="username" placeholder="Username" required class="login__input">
                  <i class="ri-user-fill"></i>
               </div>

               <div class="login__box">
                  <input type="password" name="password" placeholder="Password" required class="login__input">
                  <i class="ri-lock-2-fill"></i>
               </div>
            </div>

            <div class="login__check">
               <div class="login__check-box">
                  <input type="checkbox" class="login__check-input" id="user-check">
                  <label for="user-check" class="login__check-label">Ingat Saya</label>
               </div>

               <a href="Reset-pw.php" class="login__forgot">Lupa Password?</a>
            </div>
            
            <?php 
               if(isset($_POST['login'])) {
                  if(mysqli_num_rows($result) > 0){
                     $_SESSION['username'] = $username;
                     echo "<script>window.location='../application/dashboard.php';</script>";
                  } else{ ?>
                     <div class="login-rejected" id="login-rejected">
                        <p class="failed-2">Username / Password salah</p> 
                     </div>
                  <?php
                  }
               }
            ?>
            <button type="submit" name="login" class="login__button">Masuk</button>

            <div class="login__register">
               Belum Punya Akun? <a href="Registrasi.php">Registrasi</a>
            </div>

         </form>
      </div>
   </body>
</html>