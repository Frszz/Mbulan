<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Lupa Password - Mbluan</title>

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
                  <input type="email" name="email" placeholder="Email" required class="login__input">
                  <i class="ri-mail-fill"></i>
               </div>

               <div class="login__box">
                  <input type="password" name="password" placeholder="Password Baru" required class="login__input">
                  <i class="ri-key-fill"></i>
               </div>

               <div class="login__box">
                  <input type="password" name="password2" placeholder="Konfirmasi Password" required class="login__input">
                  <i class="ri-lock-2-fill"></i>
               </div>
            </div>

            <button type="submit" name="reset" class="login__button">Reset</button>

            <div class="login__register">
               Kembali Ke Halaman <a href="Login.php">Masuk?</a>
            </div>

         </form>
      </div>
   </body>
</html>