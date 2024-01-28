<?php require("inc/index/index.inc.php") ?>

<!DOCTYPE html>
<html lang="pl" data-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FilmBase</title>
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="js/index.js" defer></script>
  <script type="module" src="js/assets/assets.js" defer></script>
  <script src="https://kit.fontawesome.com/e348b353f1.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php require("inc/templates/_login.tpl.php") ?>
  <?php require("inc/templates/_header.tpl.html") ?>
  <?php require("inc/templates/_nav.tpl.html") ?>

  <main class="content">
    <section class="articles">
      <?php $mainInstance->excecuteQuery("articlesMain") ?>
    </section>
    <section class="news">
      <h1 class="news__title">Newsy</h1>
      <ul class="news__categories">
        <li><button class="news__category show">Ostatnie</button></li>
        <li><button class="news__category">Filmy</button></li>
        <li><button class="news__category">Seriale</button></li>
      </ul>
      <div class="articles--news">
        <?php $mainInstance->excecuteQuery("news") ?>
      </div>
    </section>
    <section class="display display--serials">
      <h1 class="display__title">Seriale</h1>
      <ul class="display__content display__content--serials">
        <?php $mainInstance->excecuteQuery("serials") ?>
      </ul>
      <a href="#" class="display__more">Zobacz Więcej!</a>
    </section>
    <section class="display display--films">
      <h1 class="display__title">Filmy</h1>
      <ul class="display__content display__content--films">
        <?php $mainInstance->excecuteQuery("films") ?>
      </ul>
      <a href="#" class="display__more">Zobacz Więcej!</a>
    </section>
    <section class="opinions">
      <h1 class="opinions__title">Oceny Krytyków</h1>
      <div class="opinions__wrapper">
        <span class="material-symbols-outlined opinion__arrow opinion__arrow--left hide">
          keyboard_arrow_left
        </span>
        <span class="material-symbols-outlined opinion__arrow opinion__arrow--right">
          keyboard_arrow_right
        </span>
        <div class="opinions__content">
          <?php $mainInstance->excecuteQuery("criticsRate") ?>
        </div>
      </div>
    </section>
    <section class="birthdays">
      <h1 class="birthdays__title">Dzisiaj obchodzi urodziny</h1>
      <ul class="birthdays__content">
        <li class="birthday">
          <img src="images/actors/andrewlincoln/andrew.jpg" alt="" class="birthday__image" />
          <div class="birthday__info">
            <span class="birthday__name">Andrew Lincoln</span>
            <span class="birthday__age">55 lat</span>
          </div>
        </li>
        <li class="birthday">
          <img src="images/actors/andrewlincoln/andrew.jpg" alt="" class="birthday__image" />
          <div class="birthday__info">
            <span class="birthday__name">Andrew Lincoln</span>
            <span class="birthday__age">55 lat</span>
          </div>
        </li>
        <li class="birthday">
          <img src="images/actors/andrewlincoln/andrew.jpg" alt="" class="birthday__image" />
          <div class="birthday__info">
            <span class="birthday__name">Andrew Lincoln</span>
            <span class="birthday__age">55 lat</span>
          </div>
        </li>
        <li class="birthday">
          <img src="images/actors/andrewlincoln/andrew.jpg" alt="" class="birthday__image" />
          <div class="birthday__info">
            <span class="birthday__name">Andrew Lincoln</span>
            <span class="birthday__age">55 lat</span>
          </div>
        </li>
      </ul>
    </section>
  </main>
  <?php require("inc/templates/_footer.tpl.php") ?>
</body>

</html>