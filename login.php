<!DOCTYPE html>
<!---Coding By CoderGirl | www.codinglabweb.com--->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


  <!--=============== BOXICONS ===============-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  <!--=============== SWIPER CSS ===============--> 
 <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <!--<title>Login & Registration Form | CoderGirl</title>-->
  <!---Custom CSS File--->
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="style.css">
  <title>Login</title>
</head>
<body>
  <!--==================== HEADER ====================-->
  <header class="header" id="header">
    <nav class="nav container">
        <a href="index.html" class="nav__logo">
            <i class='bx bxs-watch nav__logo-icon'></i> WatchSearch
        </a>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="index.html" class="nav__link active-link">Startseite</a>
                </li>
                <li class="nav__item">
                    <a href="index.html" class="nav__link">Featured</a>
                </li>
                <li class="nav__item">
                    <a href="index.html" class="nav__link">Produkte</a>
                </li>
                <li class="nav__item">
                    <a href="index.html" class="nav__link">Neu</a>
                </li>
            </ul>

            <div class="nav__close" id="nav-close">
                <i class='bx bx-x' ></i>
            </div>
        </div>

        <div class="nav__btns">
            <!-- Theme change button -->
            <div class="nav__shop" id="cart-shop">
                <i class='bx bxs-user' ></i>
            </div>

            <div class="nav__shop" id="cart-shop">
                <i class='bx bx-shopping-bag' ></i>
            </div>


        </div>
    </nav>
</header>

<!---LOGIN FORM-->
  <div class="logincontainer">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action='login_db.php' method="POST">
        <input type="text" name="username1" id="username1" placeholder="Enter your username">
        <input type="password" name="password1" id="password1" placeholder="Enter your password">
        <input type="submit" class="button" value="Login">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
      <form action="insert_into_db.php" method="POST">
        <input type="text" name="username" id="username" placeholder="Enter your username">
        <input type="text" name="email" id="email" placeholder="Enter your email">
        <input type="password" name="password" id="password" placeholder="Create a password">

        <input type="submit" class="button" value="Signup">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>