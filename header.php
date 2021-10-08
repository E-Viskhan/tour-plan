<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Best tour plan - Hotel Booking</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700&family=Nunito:wght@400;600;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://api-maps.yandex.ru/2.1/?apikey=0e798ebc-5522-42c1-a008-3a000533b325&lang=ru_RU"></script>
  </head>
  <body>
    <header class="navbar navbar__mobile--fixed">
      <div class="container">
        <div class="navbar-top">
          <a href="index.php" class="logo">
            <img
              src="img/horizontal-logo.svg"
              alt="Logo: Best Tour Plan"
              class="logo__image"
            />
          </a>

          <form
            action="#"
            class="search navbar__search navbar__search--mobile-hidden"
          >
            <input
              type="search"
              class="search__input"
              placeholder="Search Location"
            />
            <button class="search__button" type="submit">
              <img src="img/search.svg" alt="icon: search" />
            </button>
          </form>

          <a href="#" class="user navbar__user navbar__user--mobile-hidden">
            <img
              src="img/user-avatar.jpg"
              alt="Avatar: Nathan"
              class="user__avatar"
            />
            <span class="user__name">Nathan</span>
          </a>
          <!-- /.user -->
          <button class="menu-button navbar-top__menu-button">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </button>
        </div>
        <!-- /.navbar-top -->
      </div>
      <!-- /.container -->
      <nav class="navbar-bottom">
        <div class="container">
          <ul class="navbar-menu">
            <li class="navbar-menu__item navbar-menu__item--mobile-visible">
              <a href="#" class="user navbar__user">
                <img
                  src="img/user-avatar.jpg"
                  alt="Avatar: Nathan"
                  class="user__avatar user__avatar--mobile"
                />
                <span class="user__name user__name--mobile">Nathan</span>
              </a>
              <!-- /.user -->
            </li>
            <li class="navbar-menu__item navbar-menu__item--mobile-visible">
              <form action="#" class="search">
                <input
                  type="search"
                  class="search__input"
                  placeholder="Search Location"
                />
                <button class="search__button">
                  <img src="img/search.svg" alt="icon: search" />
                </button>
              </form>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">All Deals</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotels</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Activities</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Restaurants</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Events</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Rodrigues</a>
            </li>
          </ul>
          <!-- /.navbar-menu -->
        </div>
        <!-- /.container -->
      </nav>
    </header>