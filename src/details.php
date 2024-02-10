<?php require("inc/details/details.inc.php") ?>
<?php require("inc/assets/display_user_content.inc.php") ?>
<!DOCTYPE html>
<html lang="pl" data-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FilmBase</title>
  <link rel="stylesheet" href="css/details.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script type="module" src="js/details.js" defer></script>
  <script type="module" src="js/assets/assets.js" defer></script>
  <script src="https://kit.fontawesome.com/e348b353f1.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php getUserPanel()  ?>
  <?php require("inc/templates/_header.tpl.php") ?>
  <?php require("inc/templates/_nav.tpl.html") ?>
  <main class="content">
    <!-- 
    <section class="image">
      <img src="images/long.jpg" alt="" class="image__main">
      <div class="image__title">
        <span class="title__type">SERIAL</span>
        <span class="title__name">THE WALKING DEAD: DARYL DIXON</span>
        <div class="image__stats">
          <div class="image__rate">
            <span class='material-symbols-outlined image__icon--star'> stars </span>
            </span>
            <div class="image__rates">
              <span class="image__rating">7.8</span>
              <span class="image__numbers">200 ocen</span>
            </div>

          </div>
          <span class="image__length">121 min</span>
          <div class="image__wantWatch">
            <span class="material-symbols-outlined image__heart--icon">
              favorite
            </span>
            <span class="image__want">Chcę obejrzeć</span>
          </div>
        </div>
        <div class="user__rate">
          <span class="user__rating">10</span>
          <span class='user__title'>twoja ocena</span>
          <button class="user__show"></button>
          <div class="rate">
            <fieldset class="rate__field">
              <legend>Oceń film</legend>
              <img src="images/actors/andrewlincoln/andrew.jpg" alt="" class="rate__image">
              <div class="rate__vod">
                <div class="rate__star">
                  <span data-star="1" data-desc="Kto to ogląda?" class='material-symbols-outlined rate__icon--star '> star </span>
                  <span data-star="2" data-desc="Beznadzieja" class='material-symbols-outlined rate__icon--star'> star </span>
                  <span data-star="3" data-desc="Bardzo słaby" class='material-symbols-outlined rate__icon--star'> star </span>
                  <span data-star="4" data-desc="Slaby" class='material-symbols-outlined rate__icon--star'> star </span>
                  <span data-star="5" data-desc="Średni" class='material-symbols-outlined rate__icon--star'> star </span>
                  <span data-star="6" data-desc="Nie jest żle" class='material-symbols-outlined rate__icon--star'> star </span>
                  <span data-star="7" data-desc="Dobry" class='material-symbols-outlined rate__icon--star'> star </span>
                  <span data-star="8" data-desc="Bardzo Dobry" class='material-symbols-outlined rate__icon--star'> star </span>
                  <span data-star="9" data-desc="Wybitny" class='material-symbols-outlined rate__icon--star'> star </span>
                  <span data-star="10" data-desc="Genialny!" class='material-symbols-outlined rate__icon--star'> star </span>
                </div>
                <div class="rate__details">
                  <span class="rate__number">0/10</span>
                  <span class="rate__opinion">Moja ocena</span>
                </div>
              </div>
              <form class="rate__comment">
                <label for="a">Twój komentarz</label>
                <textarea id="a" class="rate__text" maxlength="150"></textarea>
                <div class="rate__sub">
                  <span class="rate__count">150/150</span>
                  <div class="rate__inputs">
                    <button class="rate__reset">Wyczyść</button>
                    <input type="submit" class="rate__submit">
                  </div>
                </div>
              </form>
            </fieldset>
          </div>
        </div>
      </div>
    </section> -->
    <?php $detailsInstance->renderFilms("main")
    ?>
    <?php $detailsInstance->renderFilms("genres")
    ?>
    <?php $detailsInstance->renderFilms("productionCountry")
    ?>
    <?php $detailsInstance->renderFilms("premier")
    ?>
    <?php $detailsInstance->renderFilms("studio")
    ?>
    <!-- <section class="info">
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
          <span class="info__genre">Studio</span>
          <span>AMC</span>
        </div>
      </div>
    </section> -->
    <!-- <section class="episodes">
      <h1 class="episodes__title">Odcinki</h1>
      <div class="episode">
        <img src="images/long.jpg" alt="" class="episode__image">
        <div class="episode__info">
          <span class="episode__number">S01E01</span>
          <span class="episode__name">
            EVERYBODY WINS A PRIZE
          </span>
          <div class="episode__rate">
            <span class='material-symbols-outlined episode__icon--star'> stars </span>
            </span>
            <span class="episode__rating">7.8</span>
          </div>
        </div>
      </div>
      <div class="episode">
        <img src="images/long.jpg" alt="" class="episode__image">
        <div class="episode__info">
          <span class="episode__number">S01E01</span>
          <span class="episode__name">
            EVERYBODY WINS A PRIZE
          </span>
          <div class="episode__rate">
            <span class='material-symbols-outlined episode__icon--star'> stars </span>
            </span>
            <span class="episode__rating">7.8</span>
          </div>
        </div>
      </div>
    </section> -->
    <section class="gallery">
      <h1 class="gallery__title">Galeria zdjęciowa </h1>
      <?php $detailsInstance->renderFilms("images")
      ?>
      <!-- <div class="gallery__images">
        <img src="images/long.jpg" alt="" class="gallery__image gallery__image--main">
        <img src="images/daryl.jpg" alt="" class="gallery__image gallery__image--secondary">
        <img src="images/daryl.jpg" alt="" class="gallery__image gallery__image--widther">
        <img src="images/long.jpg" alt="" class="gallery__image gallery__image--square">
        <img src="images/long.jpg" alt="" class="gallery__image gallery__image--last">
      </div>
      <a href="#" class="gallery__more">Zobacz więcej zdjęć</a> -->
    </section>
    <section class="trailer">
      <h1 class="trailer__title">Trailer</h1>
      <?php //$detailsInstance->filmQuery("trailer") 
      ?>
      <!-- <iframe src="https://www.youtube.com/embed/iId5WDsYxZ4?si=c5j-Bi2FcKfoK62i" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="trailer__film"></iframe> -->
    </section>
    <section class="cast">
      <h1 class="cast__title">Obsada</h1>
      <div class="actors">
        <?php $detailsInstance->renderFilms("cast")
        ?>
        <!-- <div class="actor">
          <img src="images/actors/normanreedus/img.jpg" alt="" class="actor__image">
          <a href="" class="actor__info actor__info--link actor__info">Norman Reedus</a>
          <span class="actor__info">jako</span>
          <a href="" class="actor__info">Daryl Dixon</a>
        </div>
        <div class="actor">
          <img src="images/actors/normanreedus/img.jpg" alt="" class="actor__image">
          <a href="" class="actor__info actor__info--link actor__info">Norman Reedus</a>
          <span class="actor__info">jako</span>
          <a href="" class="actor__info">Daryl Dixon</a>
        </div>

        <div class="actor">
          <img src="images/actors/normanreedus/img.jpg" alt="" class="actor__image">
          <a href="" class="actor__info actor__info--link actor__info--name">Norman Reedus</a>
          <span class="actor__info">jako</span>
          <a href="" class="actor__info">Daryl Dixon</a>
        </div>
        <div class="actor">
          <img src="images/actors/normanreedus/img.jpg" alt="" class="actor__image">
          <a href="" class="actor__info actor__info--link actor__info--name">Norman Reedus</a>
          <span class="actor__info">jako</span>
          <a href="" class="actor__info">Daryl Dixon</a>
        </div>
        <div class="actor">
          <img src="images/actors/normanreedus/img.jpg" alt="" class="actor__image">
          <a href="" class="actor__info actor__info--link actor__info--name">Norman Reedus</a>
          <span class="actor__info">jako</span>
          <a href="" class="actor__info ">Daryl Dixon</a>
        </div>
        <div class="actor">
          <img src="images/actors/normanreedus/img.jpg" alt="" class="actor__image">
          <a href="" class="actor__info actor__info--link actor__info--name">Norman Reedus</a>
          <span class="actor__info">jako</span>
          <a href="" class="actor__info ">Daryl Dixon</a>
        </div> -->
      </div>
      <a href="#" class="cast__more">Zobacz pełną obsadę</a>
    </section>

    <section class="cast">
      <h1 class="cast__title">Postacie</h1>
      <div class="actors">
        <?php $detailsInstance->renderFilms("characters")
        ?>
        <!-- <div class="actor">
          <img src="images/actors/normanreedus/img.jpg" alt="" class="actor__image">
          <a href="" class="actor__info actor__info--link actor__info--role">Daryl Dixon</a>
        </div>
        <div class="actor">
          <img src="images/actors/normanreedus/img.jpg" alt="" class="actor__image">
          <a href="" class="actor__info actor__info--link actor__info--role">Daryl Dixon</a>
        </div>
        <div class="actor">
          <img src="images/actors/normanreedus/img.jpg" alt="" class="actor__image">
          <a href="" class="actor__info actor__info--link actor__info--role">Daryl Dixon</a>
        </div>
        <div class="actor">
          <img src="images/actors/normanreedus/img.jpg" alt="" class="actor__image">
          <a href="" class="actor__info actor__info--link actor__info--role">Daryl Dixon</a>
        </div>
        <div class="actor">
          <img src="images/actors/normanreedus/img.jpg" alt="" class="actor__image">
          <a href="" class="actor__info actor__info--link actor__info--role">Daryl Dixon</a>
        </div> -->
      </div>
      <a href="#" class="cast__more">Zobacz wszystkie role</a>
    </section>

    <section class="rates">
      <div class="critics">
        <h1 class="critics__title">Opinie krytyków</h1>
        <div class="critics__opinions">
          <?php $detailsInstance->renderFilms("critics")
          ?>
          <!-- <div class="critic__opinion">
            <div class="critic__header">
              <img src="images/actors/andrewlincoln/andrew.jpg" alt="" class="critic__image">
              <div class="critic__info">
                <span class="critic__name">Janusz Jaruzelski</span>
                <span class="critic__sub">12 tys obserwujących</span>
                <button class="critic__observe">Obserwuj</button>
              </div>
            </div>
            <div class="critic__rate">
              <span class="critic__number">8</span>
              <div class="critic__stars">
                <span class='material-symbols-outlined critic__icon--star fill'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
              </div>
            </div>
            <p class="critic__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint molestias sapiente aliquid natus atque vel dignissimos animi impedit tempore aliquam perspiciatis, voluptate eaque cupiditate. Quia necessitatibus eum alias fugit delectus magnam qui. Odit magnam deleniti at iure aliquam iste! Vitae, dolore deserunt in earum ipsam reprehenderit dolor pariatur officia. Veniam?.</p>
          </div>
          <div class="critic__opinion">
            <div class="critic__header">
              <img src="images/actors/andrewlincoln/andrew.jpg" alt="" class="critic__image">
              <div class="critic__info">
                <span class="critic__name">Janusz Jaruzelski</span>
                <span class="critic__sub">12 tys obserwujących</span>
                <button class="critic__observe">Obserwuj</button>
              </div>
            </div>
            <div class="critic__rate">
              <span class="critic__number">8</span>
              <div class="critic__stars">
                <span class='material-symbols-outlined critic__icon--star fill'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
              </div>
            </div>
            <p class="critic__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint molestias sapiente aliquid natus atque vel dignissimos animi impedit tempore aliquam perspiciatis, voluptate eaque cupiditate. Quia necessitatibus eum alias fugit delectus magnam qui. Odit magnam deleniti at iure aliquam iste! Vitae, dolore deserunt in earum ipsam reprehenderit dolor pariatur officia. Veniam?.</p>
          </div>
          <div class="critic__opinion">
            <div class="critic__header">
              <img src="images/actors/andrewlincoln/andrew.jpg" alt="" class="critic__image">
              <div class="critic__info">
                <span class="critic__name">Janusz Jaruzelski</span>
                <span class="critic__sub">12 tys obserwujących</span>
                <button class="critic__observe">Obserwuj</button>
              </div>
            </div>
            <div class="critic__rate">
              <span class="critic__number">8</span>
              <div class="critic__stars">
                <span class='material-symbols-outlined critic__icon--star fill'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
                <span class='material-symbols-outlined critic__icon--star'> star </span>
              </div>
            </div>
            <p class="critic__desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique necessitatibus rem debitis mollitia vel assumenda repellat qui ullam ut voluptatibus molestiae, ipsam ratione, sunt temporibus expedita excepturi minus fuga delectus.</p>
          </div>
        </div> -->
        </div>
      </div>
      <div class="users__opinions">
        <h1 class="opinions__title">Opinie użytkowników</h1>
        <div class="opinions">
          <?php //$detailsInstance->filmQuery("users") 
          ?>
          <div class="opinion">
            <div class="opinion__header">
              <img src="images/actors/andrewlincoln/andrew.jpg" alt="" class="opinion__image">
              <div class="opinion__user">
                <div class="opinion__userInfo">
                  <span class="opinion__name">Andrzej Gotówka</span>
                  <span class="opinion__date">19.01.2024</span>
                </div>
                <div class="opinion__rate">
                  <span class="opinion__rating">Ocenił(a) na 8</span>
                  <span class='material-symbols-outlined rate__icon--star fill'> star </span>
                </div>
              </div>
            </div>
            <p class="opinion__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique adipisci laudantium nulla at nihil aperiam voluptatibus debitis qui doloremque vel veritatis placeat architecto, facere temporibus beatae quam error rem distinctio maxime expedita quia? Quos, ratione inventore quaerat atque quis voluptates sequi earum, quisquam ab illo nihil enim impedit. Voluptates, harum.</p>
            <div class="opinion__likes">
              <div class="opinion__rateLikes">
                <span class="material-symbols-outlined opinion__like--icon">
                  thumb_up
                </span>
                <span class="opinion__likesCounter">(0)</span>
                <span class="material-symbols-outlined opinion__like--icon">
                  thumb_down
                </span>
                <span class="opinion__likesCounter">(0)</span>
              </div>
              <button class="opinion__reply">Odpowiedż</button>
            </div>
          </div>
          <div class="opinion">
            <div class="opinion__header">
              <img src="images/actors/andrewlincoln/andrew.jpg" alt="" class="opinion__image">
              <div class="opinion__user">
                <div class="opinion__userInfo">
                  <span class="opinion__name">Andrzej Gotówka</span>
                  <span class="opinion__date">19.01.2024</span>
                </div>
                <div class="opinion__rate">
                  <span class="opinion__rating">Ocenił(a) na 8</span>
                  <span class='material-symbols-outlined rate__icon--star fill'> star </span>
                </div>
              </div>
            </div>
            <p class="opinion__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique adipisci laudantium nulla at nihil aperiam voluptatibus debitis qui doloremque vel veritatis placeat architecto, facere temporibus beatae quam error rem distinctio maxime expedita quia? Quos, ratione inventore quaerat atque quis voluptates sequi earum, quisquam ab illo nihil enim impedit. Voluptates, harum.</p>
            <div class="opinion__likes">
              <div class="opinion__rateLikes">
                <span class="material-symbols-outlined opinion__like--icon">
                  thumb_up
                </span>
                <span class="opinion__likesCounter">(0)</span>
                <span class="material-symbols-outlined opinion__like--icon">
                  thumb_down
                </span>
                <span class="opinion__likesCounter">(0)</span>
              </div>
              <button class="opinion__reply">Odpowiedż</button>
            </div>
          </div>
          <div class="opinion">
            <div class="opinion__header">
              <img src="images/actors/andrewlincoln/andrew.jpg" alt="" class="opinion__image">
              <div class="opinion__user">
                <div class="opinion__userInfo">
                  <span class="opinion__name">Andrzej Gotówka</span>
                  <span class="opinion__date">19.01.2024</span>
                </div>
                <div class="opinion__rate">
                  <span class="opinion__rating">Ocenił(a) na 8</span>
                  <span class='material-symbols-outlined rate__icon--star fill'> star </span>
                </div>
              </div>
            </div>
            <p class="opinion__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique adipisci laudantium nulla at nihil aperiam voluptatibus debitis qui doloremque vel veritatis placeat architecto, facere temporibus beatae quam error rem distinctio maxime expedita quia? Quos, ratione inventore quaerat atque quis voluptates sequi earum, quisquam ab illo nihil enim impedit. Voluptates, harum.</p>
            <div class="opinion__likes">
              <div class="opinion__rateLikes">
                <span class="material-symbols-outlined opinion__like--icon">
                  thumb_up
                </span>
                <span class="opinion__likesCounter">(0)</span>
                <span class="material-symbols-outlined opinion__like--icon">
                  thumb_down
                </span>
                <span class="opinion__likesCounter">(0)</span>
              </div>
              <button class="opinion__reply">Odpowiedż</button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php require("inc/templates/_footer.tpl.php") ?>
</body>

</html>