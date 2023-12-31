<!DOCTYPE html>
<html lang="pl" data-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FilmBase</title>
  <link rel="stylesheet" href="css/details.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="js/index.js" defer></script>
  <script type="module" src="js/assets/assets.js" defer></script>
  <script src="https://kit.fontawesome.com/e348b353f1.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php require("inc/templates/_login.tpl.php") ?>
  <?php require("inc/templates/_header.tpl.php") ?>
  <?php require("inc/templates/_nav.tpl.php") ?>
  <main class="content">
    <section class="image">
      <img src="images/long.jpg" alt="" class="image__main">
      <div class="image__title">
        <span class="title__type">SERIAL</span>
        <span class="title__name">THE WALKING DEAD: DARYL DIXON</span>
        <div class="image__stats">
          <div class="image__rate">
            <span class='material-symbols-outlined image__icon--star'> stars </span>
            </span>
            <span class="image__rating">7.8</span>
          </div>
          <span class="image__year">2023</span>
        </div>
        <div class="user__rate">
          <span class="user__rating">10</span>
          <span class='user__title'>twoja ocena</span>
          <div class="rate">
            <fieldset class="rate__field">
              <legend>Oceń film</legend>
              <img src="images/actors/andrewlincoln/andrew.jpg" alt="" class="rate__image">
              <div class="rate__vod">
                <div class="rate__star">
                  <span class='material-symbols-outlined rate__icon--star'> star </span>
                  <span class='material-symbols-outlined rate__icon--star'> star </span>
                  <span class='material-symbols-outlined rate__icon--star'> star </span>
                  <span class='material-symbols-outlined rate__icon--star'> star </span>
                  <span class='material-symbols-outlined rate__icon--star'> star </span>
                  <span class='material-symbols-outlined rate__icon--star'> star </span>
                  <span class='material-symbols-outlined rate__icon--star'> star </span>
                  <span class='material-symbols-outlined rate__icon--star'> star </span>
                  <span class='material-symbols-outlined rate__icon--star'> star </span>
                  <span class='material-symbols-outlined rate__icon--star'> star </span>
                </div>
              </div>
              <form class="rate__comment">
                <label for="a">Twój komentarz</label>
                <textarea id="a" class="rate__text"></textarea>
                <div class="rate__sub">
                  <span class="rate__count">150/150</span>
                  <input type="submit" class="rate__submit">
                </div>
              </form>
            </fieldset>
          </div>
        </div>
      </div>

    </section>
    <section class="info">
      <div class="info__all">
        <div class="info__main">
          <img src="images/daryl.jpg" alt="" class="info__image">
          <div class="info__details">
            <span class="info__desc">Maggie i Negan wyruszają do odciętego od kontynentu Manhattanu w poszukiwaniu porwanego syna kobiety.</span>
            <div class="info__seasons">
              <a href="" class="info__season">Sezon 11</a>
              <a href="" class="info__season">Sezon 10</a>
              <a href="" class="info__season">Sezon 9</a>
              <a href="" class="info__season">Sezon 1</a>
              <a href="" class="info__season">Sezon 1</a>
              <a href="" class="info__season">Sezon 1</a>
              <a href="" class="info__season">Sezon 1</a>
              <a href="" class="info__season">Sezon 1</a>
              <a href="" class="info__season">Sezon 1</a>

            </div>
          </div>
        </div>
        <div class="info__production">
          <span class="info__genre">Gatunek</span>
          <span>Horror</span>
          <span class="info__genre">Produkcja</span>
          <span>Francja</span>
          <span class="info__genre">Premiera</span>
          <span>20.12.2023</span>
        </div>
      </div>
      <div class="cast">
        <h1 class="cast__title">Obsada</h1>
        <div class="actors">
          <div class="actor">
            <img src="images/actors/normanreedus/img.jpg" alt="" class="actor__image">
            <a href="" class="actor__info actor__info--link actor__info">Norman Reedus</a>
            <span class="actor__info">jako</span>
            <a href="" class="actor__info actor__info--link">Daryl Dixon</a>
          </div>
          <div class="actor">
            <img src="images/actors/normanreedus/img.jpg" alt="" class="actor__image">
            <a href="" class="actor__info actor__info--link actor__info--name">Norman Reedus</a>
            <span class="actor__info">jako</span>
            <a href="" class="actor__info actor__info--link">Daryl Dixon</a>
          </div>
          <div class="actor">
            <img src="images/actors/normanreedus/img.jpg" alt="" class="actor__image">
            <a href="" class="actor__info actor__info--link actor__info--name">Norman Reedus</a>
            <span class="actor__info">jako</span>
            <a href="" class="actor__info actor__info--link">Daryl Dixon</a>
          </div>
          <div class="actor">
            <img src="images/actors/normanreedus/img.jpg" alt="" class="actor__image">
            <a href="" class="actor__info actor__info--link actor__info--name">Norman Reedus</a>
            <span class="actor__info">jako</span>
            <a href="" class="actor__info actor__info--link">Daryl Dixon</a>
          </div>
          <div class="actor">
            <img src="images/actors/normanreedus/img.jpg" alt="" class="actor__image">
            <a href="" class="actor__info actor__info--link actor__info--name">Norman Reedus</a>
            <span class="actor__info">jako</span>
            <a href="" class="actor__info actor__info--link">Daryl Dixon</a>
          </div>
        </div>
        <a href="#" class="cast__more">Zobacz pełną obsadę</a>
      </div>
    </section>

  </main>

  <?php require("inc/templates/_footer.tpl.php") ?>
</body>

</html>