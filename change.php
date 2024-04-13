<?php require "db.php"; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <!-- CSS BS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- javascript -->
    <script src="js/comment.js"></script>

    <!-- CSS -->
    <link href="CSS/style.css" rel="stylesheet" crossorigin="anonymous">

    <!-- JS BS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
    <h1 align="center">Добавления данных</h1>
    <form action="changedata.php" method="POST">
      <div class="form-field">
         <input type="text" id="login" placeholder="Логин" name="login" />
      </div>

      <div class="form-field">
         <input type="text" id="tel" placeholder="Номер телефона" name="tel" />
      </div>

      <div class="form-field">
        <input type="text" id="zan" placeholder="Занятие" name="zan">
      </div>

      <div class="form-field">
        <input type="text" id="pay" placeholder="Способ оплаты" name="pay">
      </div>
      
      <div class="form-buttons" type="submit">
        <button class="button" type="submit" name="change">Изменить</button>
      </div>
    </form>
  </body>
</html>

