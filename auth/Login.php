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

         <form action="../application/Dashboard.php" class="login__form">
            <h1 class="login__title">Mbulan</h1>

            <div class="login__inputs">
               <div class="login__box">
                  <input type="email" placeholder="Email" required class="login__input">
                  <i class="ri-mail-fill"></i>
               </div>

               <div class="login__box">
                  <input type="password" placeholder="Password" required class="login__input">
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

            <button type="submit" class="login__button">Masuk</button>

         </form>
      </div>
   </body>
</html>