<?php require "db.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </head>



  <body>

    <header>
      <div id="logoAndNav" class="container">
        <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar hs-menu-initialized hs-menu-horizontal">
          <div id="navBar" class="collapse navbar-collapse py-0">
            <ul class="navbar-nav u-header__navbar-nav mx-lg-auto new_menu" itemscope="" itemtype="http://www.schema.org/SiteNavigationElement">
                <li class="nav-item hs-has-mega-menu u-header__nav-item position-relative hs-mega-menu-opened" data-position="left">
                  <a id="sub-nomera" class="nav-link u-header__nav-link" href="services.html" aria-haspopup="true" aria-expanded="false">Услуги<span class="fa fa-angle-down u-header__nav-link-icon"></span></a>
                </li>
                <li class="nav-item hs-has-mega-menu u-header__nav-item position-relative hs-mega-menu-opened" data-position="left">
                  <a id="sub-uslugi" class="nav-link u-header__nav-link" href="otz.html" aria-haspopup="true" aria-expanded="false">Отзывы<span class="fa fa-angle-down u-header__nav-link-icon"></span></a>
                </li>
                <li class="nav-item hs-has-mega-menu u-header__nav-item position-relative hs-mega-menu-opened" data-position="left">
                  <a id="sub-spa" class="nav-link u-header__nav-link" href="index.php" aria-haspopup="true" aria-expanded="false">Регистрация<span class="fa fa-angle-down u-header__nav-link-icon"></span></a>
                </li>
                <li>
                  <a id="sub-spa" class="nav-link u-header__nav-link" href="index1.php" aria-haspopup="true" aria-expanded="false">Личный кабинет<span class="fa fa-angle-down u-header__nav-link-icon"></span></a>
                </li>
                <li>
                  <a id="sub-spa" class="nav-link u-header__nav-link" href="support.html" aria-haspopup="true" aria-expanded="false">Поддержка<span class="fa fa-angle-down u-header__nav-link-icon"></span></a>
                </li>
                <li>
                  <a id="sub-spa" class="nav-link u-header__nav-link" href="horse.html" aria-haspopup="true" aria-expanded="false">Наши лошади<span class="fa fa-angle-down u-header__nav-link-icon"></span></a>
                </li>
                <li>
                  <a id="sub-spa" class="nav-link u-header__nav-link" href="about.html" aria-haspopup="true" aria-expanded="false">О нас<span class="fa fa-angle-down u-header__nav-link-icon"></span></a>
                </li>
           </ul>
         </div>
       </nav>
      </div>
    </header>

    <!-- REGISTER -->

    <main>
      <div class="circle"></div>
      <div class="register-form-container">
        <h1 class="form-title">
          Регистрация
        </h1>

        <form action="register.php" method="POST">
          <div class="form-fields">
            <div class="form-field">
              <input type="text" placeholder="Логин" required="" name="login" />
            </div>
            <div class="form-field">
              <input type="password" placeholder="Пароль" required="" name="password" />
            </div>
          <div class="form-buttons">
            <button class="button" type="submit" name="do_signup">Зарегистрироватся</button> 
            <div class="divider">или</div>
            <a class="button button-login" href="index1.php">Войти</a>
          </div>
        </form>
    </main>

    <div class="block" data-attr="<?=$fio ?>"></div>

  </body>
</html>



