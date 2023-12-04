<?php require("inc/index/index.inc.php") ?>
<!DOCTYPE html>
<html lang="pl" data-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FilmBase</title>
  <link rel="stylesheet" href="css/index.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script type="module" src="js/index/index.js" defer></script>
  <script src="js/assets.js" defer></script>
  <script src="https://kit.fontawesome.com/e348b353f1.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="theme">
    <span class="theme__badge">Tryb ciemny</span>
  </div>
  <!-- <div class="account">
      <div class="account__header">
        <h2 class="account__title">Konto</h2>
        <span class="material-symbols-outlined account__icon--close"> close </span>
      </div>
      <div class="account__main">
        <img src="images/963699.jpg" alt="" class="account__background" />
        <div class="account__info">
          <div class="account__details">
            <img src="images/pobrane.jpg" alt="" class="account__avatar" />
            <div class="account__data">
              <span class="account__name">Jan Kowalski</span>
              <span class="account__nickname">China3ki</span>
              <span class="account__observe">Obserwacje: 20</span>
            </div>
          </div>
          <span class="account__desc"
            >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae eveniet
            aliquid amet possimus quis veniam obcaecati cupiditate itaque aperiam tempora, voluptate
            hic? Sit minus similique animi sint. Inventore, possimus!</span
          >
        </div>
      </div>
      <ul class="account__stats">
        <li class="account__stat">
          <span class="stat__name">Oceny</span> <span class="stat__number">20</span>
        </li>
        <li class="account__stat">
          <span class="stat__name">Obserwujesz</span> <span class="stat__number">20</span>
        </li>
        <li class="account__stat">
          <span class="stat__name">Polubienia</span> <span class="stat__number">20</span>
        </li>
        <li class="account__stat">
          <span class="stat__name">Chcę obejrzeć</span> <span class="stat__number">20</span>
        </li>
      </ul>
      <ul class="account__options">
        <li class="account__option">
          Dane osobowe<span class="material-symbols-outlined menu__icon--next">
            arrow_forward
          </span>
        </li>
        <li class="account__option">
          Ustawienia konta
          <span class="material-symbols-outlined menu__icon--next"> arrow_forward </span>
        </li>
        <li class="account__option">
          Wyloguj <span class="material-symbols-outlined"> logout </span>
        </li>
      </ul>
    </div> -->
  <header class="header">
    <div class="icon__set icon__set--menu">
      <span class="material-symbols-outlined header__icon header__icon--menu"> menu </span>
      <span class="icon__caption icon__caption_">Menu</span>
    </div>
    <h1><a href="#" class="header__title">FilmBase</a></h1>
    <form class="header__search" action="">
      <button class="material-symbols-outlined header__submit">search</button>
      <input type="text" class="header__input" id="" name="" placeholder="Wyszukaj" />
      <span class="material-symbols-outlined header__icon--close"> close </span>
    </form>
    <div class="header__icons">
      <div class="icon__set icon__set--search">
        <span class="material-symbols-outlined header__icon header__icon--search"> search </span>
        <span class="icon__caption">Wyszukaj</span>
      </div>
      <div class="icon__set">
        <span class="material-symbols-outlined header__icon header__icon--login"> person </span>
        <span class="icon__caption">Zaloguj się</span>
      </div>
    </div>
  </header>
  <nav class="menu">
    <div class="menu__panel">
      <div class="menu__header">
        <h2 class="menu__title">Menu</h2>
        <span class="material-symbols-outlined menu__icon--close"> close </span>
      </div>
      <ul class="menu__list">
        <li class="list">
          <div class="list__unwind">
            <span class="list__category">Filmy</span><span class="material-symbols-outlined menu__icon--next"> arrow_forward </span>
          </div>
          <div class="menu__panel menu__panel--sub">
            <div class="menu__header">
              <div class="menu__back">
                <span class="material-symbols-outlined menu__icon--back"> arrow_back </span>
                <h2 class="menu__title">Filmy</h2>
              </div>
              <span class="material-symbols-outlined menu__icon--close"> close </span>
            </div>
            <ul class="menu__list">
              <li class="list">
                <div class="list__unwind">
                  <span class="list__category">Filmowe premiery</span><span class="material-symbols-outlined menu__icon--next"> arrow_forward </span>
                </div>
              </li>
              <li class="list">
                <div class="list__unwind">
                  <span class="list__category">Baza filmów</span><span class="material-symbols-outlined menu__icon--next"> arrow_forward </span>
                </div>
              </li>
              <li class="list">
                <div class="list__unwind">
                  <span class="list__category">Baza aktorów</span><span class="material-symbols-outlined menu__icon--next"> arrow_forward </span>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="list">
          <div class="list__unwind">
            <span class="list__category">Seriale</span><span class="material-symbols-outlined menu__icon--next"> arrow_forward </span>
          </div>
          <div class="menu__panel menu__panel--sub">
            <div class="menu__header">
              <div class="menu__back">
                <span class="material-symbols-outlined menu__icon--back"> arrow_back </span>
                <h2 class="menu__title">Seriale</h2>
              </div>
              <span class="material-symbols-outlined menu__icon--close"> close </span>
            </div>
            <ul class="menu__list">
              <li class="list">
                <div class="list__unwind">
                  <span class="list__category">Serialowe premiery</span><span class="material-symbols-outlined menu__icon--next"> arrow_forward </span>
                </div>
              </li>
              <li class="list">
                <div class="list__unwind">
                  <span class="list__category">Baza seriali</span><span class="material-symbols-outlined menu__icon--next"> arrow_forward </span>
                </div>
              </li>
            </ul>
          </div>
        </li>
        <li class="list">
          <div class="list__unwind">
            <span class="list__category">Artykuły</span><span class="material-symbols-outlined menu__icon--next"> arrow_forward </span>
          </div>
          <div class="menu__panel menu__panel--sub">
            <div class="menu__header">
              <div class="menu__back">
                <span class="material-symbols-outlined menu__icon--back"> arrow_back </span>
                <h2 class="menu__title">Artykuły</h2>
              </div>
              <span class="material-symbols-outlined menu__icon--close"> close </span>
            </div>
            <ul class="menu__list">
              <li class="list">
                <div class="list__unwind">
                  <span class="list__category">Najnowsze wieści</span><span class="material-symbols-outlined menu__icon--next"> arrow_forward </span>
                </div>
              </li>
              <li class="list">
                <div class="list__unwind">
                  <span class="list__category">Plotki</span><span class="material-symbols-outlined menu__icon--next"> arrow_forward </span>
                </div>
              </li>
              <li class="list">
                <div class="list__unwind">
                  <span class="list__category">Felietony</span><span class="material-symbols-outlined menu__icon--next"> arrow_forward </span>
                </div>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <main class="content">
    <section class="articles">
      <article class="article article--main">

        <img src="images/img.jpg" alt="Avengers" class="article__image" />
        <div class="article__content">
          <h1 class="article__title">Avengers: Wojna totalna - Najlepszym filmem 2019 roku?</h1>
          <span class="article__time">czas przeczytania: 2min</span>
        </div>
      </article>
      <aside class="articles__secondary">
        <article class="article article--secondary">
          <img src="images/img.jpg" alt="Avengers" class="article__image" />
          <div class="article__content">
            <h2 class="article__title">Avengers: Wojna totalna - Najlepszym filmem 2019 roku?</h2>
            <span class="article__time">czas przeczytania: 2min</span>
          </div>
        </article>
        <article class="article article--secondary">
          <img src="images/img.jpg" alt="Avengers" class="article__image" />
          <div class="article__content">
            <h2 class="article__title">Avengers: Wojna totalna - Najlepszym filmem 2019 roku?</h2>
            <span class="article__time">czas przeczytania: 2min</span>
          </div>
        </article>
        <article class="article article--secondary article--widther">
          <img src="images/img.jpg" alt="Avengers" class="article__image" />
          <div class="article__content">
            <h2 class="article__title">Avengers: Wojna totalna - Najlepszym filmem 2019 roku?</h2>
            <span class="article__time">czas przeczytania: 2min</span>
          </div>
        </article>
      </aside>
      <aside class="articles__bottom">
        <article class="article article--bottom">
          <img src="images/img.jpg" alt="Avengers" class="article__image" />
          <div class="article__content">
            <h2 class="article__title">Avengers: Wojna totalna - Najlepszym filmem 2019 roku?</h2>
            <span class="article__time">czas przeczytania: 2min</span>
          </div>
        </article>
        <article class="article article--bottom">
          <img src="images/img.jpg" alt="Avengers" class="article__image" />
          <div class="article__content">
            <h2 class="article__title">Avengers: Wojna totalna - Najlepszym filmem 2019 roku?</h2>
            <span class="article__time">czas przeczytania: 2min</span>
          </div>
        </article>
        <article class="article article--bottom">
          <img src="images/img.jpg" alt="Avengers" class="article__image" />
          <div class="article__content">
            <h2 class="article__title">Avengers: Wojna totalna - Najlepszym filmem 2019 roku?</h2>
            <span class="article__time">czas przeczytania: 2min</span>
          </div>
        </article>
      </aside>
    </section>
    <section class="news">
      <h1 class="news__title">Newsy</h1>
      <ul class="news__categories">
        <li><button class="news__category show">Ostatnie</button></li>
        <li><button class="news__category">Filmy</button></li>
        <li><button class="news__category">Seriale</button></li>
      </ul>
      <div class="articles--news">
        <article class="article--news">
          <img src="images/img.jpg" alt="" class="article__image--news" />
          <div class="article__content--news">
            <h2 class="article__title--news">
              Avengers: Wojna totalna - Najlepszym filmem 2019 roku?
            </h2>
            <span class="article__time--news">czas przeczytania: 2min</span>
          </div>
        </article>
        <article class="article--news">
          <img src="images/img.jpg" alt="" class="article__image--news" />
          <div class="article__content--news">
            <h2 class="article__title--news">
              Avengers: Wojna totalna - Najlepszym filmem 2019 roku?
            </h2>
            <span class="article__time--news">czas przeczytania: 2min</span>
          </div>
        </article>
        <article class="article--news">
          <img src="images/img.jpg" alt="" class="article__image--news" />
          <div class="article__content--news">
            <h2 class="article__title--news">
              Avengers: Wojna totalna - Najlepszym filmem 2019 roku?
            </h2>
            <span class="article__time--news">czas przeczytania: 2min</span>
          </div>
        </article>
        <article class="article--news">
          <img src="images/img.jpg" alt="" class="article__image--news" />
          <div class="article__content--news">
            <h2 class="article__title--news">
              Avengers: Wojna totalna - Najlepszym filmem 2019 roku?
            </h2>
            <span class="article__time--news">czas przeczytania: 2min</span>
          </div>
        </article>
        <article class="article--news">
          <img src="images/img.jpg" alt="" class="article__image--news" />
          <div class="article__content--news">
            <h2 class="article__title--news">
              Avengers: Wojna totalna - Najlepszym filmem 2019 roku?
            </h2>
            <span class="article__time--news">czas przeczytania: 2min</span>
          </div>
        </article>
        <article class="article--news">
          <img src="images/img.jpg" alt="" class="article__image--news" />
          <div class="article__content--news">
            <h2 class="article__title--news">
              Avengers: Wojna totalna - Najlepszym filmem 2019 roku?
            </h2>
            <span class="article__time--news">czas przeczytania: 2min</span>
          </div>
        </article>
      </div>
    </section>
    <section class="display display--serials">

      <h1 class="display__title">Seriale</h1>
      <ul class="display__content display__content--serials">
        <?php foreach ($requestDataInstance->__constructor("serials") as $rowSerial) :  ?>
          <li class="card">
            <img src="<?php echo $rowSerial['serial_cover'] ?>" alt="<?php echo $rowSerial['serial_name'] ?>" class="card__image" />
            <div class="card__data">
              <span class="card__name"><?php echo $rowSerial['serial_name'] ?></span>
              <div class="card__scale">
                <span class="card__count">1568 ocen</span>
                <span class="card__rate">7.8 <span class="material-symbols-outlined card__icon--star"> stars </span>
                </span>
              </div>
            </div>
          </li>
        <?php endforeach; ?>
        <li class="card">
          <img src="images/img2.jpg" alt="" class="card__image" />
          <div class="card__data">
            <span class="card__name">Avengers: Wojna totalna</span>
            <div class="card__scale">
              <span class="card__count">1568 ocen</span>
              <span class="card__rate">7.8 <span class="material-symbols-outlined card__icon--star"> stars </span>
              </span>
            </div>
          </div>
        </li>
      </ul>
      <a href="#" class="display__more">Zobacz Więcej!</a>
    </section>
    <section class="display display--films">
      <h1 class="display__title">Filmy</h1>
      <ul class="display__content display__content--films">
        <?php foreach ($requestDataInstance->__constructor("films") as $rowFilm) :  ?>
          <li class="card">
            <img src="<?php echo $rowFilm['film_cover'] ?>" alt="<?php echo $rowFilm['film_name'] ?>" class="card__image" />
            <div class="card__data">
              <span class="card__name"><?php echo $rowFilm['film_name'] ?></span>
              <div class="card__scale">
                <span class="card__count">1568 ocen</span>
                <span class="card__rate">7.8 <span class="material-symbols-outlined card__icon--star"> stars </span>
                </span>
              </div>
            </div>
          </li>
        <?php endforeach ?>
      </ul>
      <a href="#" class="display__more">Zobacz Więcej!</a>
    </section>
    <section class="opinions">
      <h1 class="opinions__title">Oceny Krytyków</h1>

      <div class="opinions__wrapper">
        <span class="material-symbols-outlined opinion__arrow opinion__arrow--left">
          keyboard_arrow_left
        </span>
        <span class="material-symbols-outlined opinion__arrow opinion__arrow--right">
          keyboard_arrow_right
        </span>
        <div class="opinions__content">
          <article class="opinion">
            <div class="opinion__info">
              <img src="images/img.jpg" alt="" class="opinion__image" />
              <div class="opinion__show">
                <span class="show__category">Serial</span>
                <span class="show__name">Avengers: Koniec gry</span>
              </div>
            </div>
            <div class="opinion__content">
              <div class="opinion__critic">
                <img src="images/pobrane.jpg" alt="" class="critic__icon--avatar" />
                <div class="critic__data">
                  <span class="critic__name"> Andrzej Kowalski</span>
                  <span class="critic__subscribers"> 12.2 obserwujących</span>
                  <button class="critic__observe">Obserwuj</button>
                </div>
              </div>
              <div class="opinion__rating">
                <span class="opinion__rate">10</span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star"> star </span>
                <span class="material-symbols-outlined opinion__icon--star"> star </span>
                <span class="material-symbols-outlined opinion__icon--star"> star </span>
                <span class="material-symbols-outlined opinion__icon--star"> star </span>
              </div>
              <p class="opinion__desc">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae odio laboriosam
                repudiandae voluptatem laudantium eligendi, facilis, deleniti, modi fuga eum atque
                vero illo! Dolorum illo sit eveniet quae, cupiditate ex!
              </p>
            </div>
          </article>
          <article class="opinion">
            <div class="opinion__info">
              <img src="images/img.jpg" alt="" class="opinion__image" />
              <div class="opinion__show">
                <span class="show__category">Serial</span>
                <span class="show__name">Avengers: Koniec gry</span>
              </div>
            </div>
            <div class="opinion__content">
              <div class="opinion__critic">
                <img src="images/pobrane.jpg" alt="" class="critic__icon--avatar" />
                <div class="critic__data">
                  <span class="critic__name"> Andrzej Kowalski</span>
                  <span class="critic__subscribers"> 12.2 obserwujących</span>
                  <button class="critic__observe">Obserwuj</button>
                </div>
              </div>
              <div class="opinion__rating">
                <span class="opinion__rate">10</span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star"> star </span>
                <span class="material-symbols-outlined opinion__icon--star"> star </span>
                <span class="material-symbols-outlined opinion__icon--star"> star </span>
                <span class="material-symbols-outlined opinion__icon--star"> star </span>
              </div>
              <p class="opinion__desc">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae odio laboriosam
                repudiandae voluptatem laudantium eligendi, facilis, deleniti, modi fuga eum atque
                vero illo! Dolorum illo sit eveniet quae, cupiditate ex!
              </p>
            </div>
          </article>
          <article class="opinion">
            <div class="opinion__info">
              <img src="images/img.jpg" alt="" class="opinion__image" />
              <div class="opinion__show">
                <span class="show__category">Serial</span>
                <span class="show__name">Avengers: Koniec gry</span>
              </div>
            </div>
            <div class="opinion__content">
              <div class="opinion__critic">
                <img src="images/pobrane.jpg" alt="" class="critic__icon--avatar" />
                <div class="critic__data">
                  <span class="critic__name"> Andrzej Kowalski</span>
                  <span class="critic__subscribers"> 12.2 obserwujących</span>
                  <button class="critic__observe">Obserwuj</button>
                </div>
              </div>
              <div class="opinion__rating">
                <span class="opinion__rate">10</span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star"> star </span>
                <span class="material-symbols-outlined opinion__icon--star"> star </span>
                <span class="material-symbols-outlined opinion__icon--star"> star </span>
                <span class="material-symbols-outlined opinion__icon--star"> star </span>
              </div>
              <p class="opinion__desc">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae odio laboriosam
                repudiandae voluptatem laudantium eligendi, facilis, deleniti, modi fuga eum atque
                vero illo! Dolorum illo sit eveniet quae, cupiditate ex!
              </p>
            </div>
          </article>
          <article class="opinion">
            <div class="opinion__info">
              <img src="images/img.jpg" alt="" class="opinion__image" />
              <div class="opinion__show">
                <span class="show__category">Serial</span>
                <span class="show__name">Avengers: Koniec gry</span>
              </div>
            </div>
            <div class="opinion__content">
              <div class="opinion__critic">
                <img src="images/pobrane.jpg" alt="" class="critic__icon--avatar" />
                <div class="critic__data">
                  <span class="critic__name"> Andrzej Kowalski</span>
                  <span class="critic__subscribers"> 12.2 obserwujących</span>
                  <button class="critic__observe">Obserwuj</button>
                </div>
              </div>
              <div class="opinion__rating">
                <span class="opinion__rate">10</span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star fill"> star </span>
                <span class="material-symbols-outlined opinion__icon--star"> star </span>
                <span class="material-symbols-outlined opinion__icon--star"> star </span>
                <span class="material-symbols-outlined opinion__icon--star"> star </span>
                <span class="material-symbols-outlined opinion__icon--star"> star </span>
              </div>
              <p class="opinion__desc">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae odio laboriosam
                repudiandae voluptatem laudantium eligendi, facilis, deleniti, modi fuga eum atque
                vero illo! Dolorum illo sit eveniet quae, cupiditate ex!
              </p>
            </div>
          </article>
        </div>
      </div>
    </section>
    <section class="birthdays">
      <h1 class="birthdays__title">Dzisiaj obchodzi urodziny</h1>
      <ul class="birthdays__content">
        <li class="birthday">
          <img src="images/andrew.jpg" alt="" class="birthday__image" />
          <div class="birthday__info">
            <span class="birthday__name">Andrew Lincoln</span>
            <span class="birthday__age">55 lat</span>
          </div>
        </li>
        <li class="birthday">
          <img src="images/andrew.jpg" alt="" class="birthday__image" />
          <div class="birthday__info">
            <span class="birthday__name">Andrew Lincoln</span>
            <span class="birthday__age">55 lat</span>
          </div>
        </li>
        <li class="birthday">
          <img src="images/andrew.jpg" alt="" class="birthday__image" />
          <div class="birthday__info">
            <span class="birthday__name">Andrew Lincoln</span>
            <span class="birthday__age">55 lat</span>
          </div>
        </li>
        <li class="birthday">
          <img src="images/andrew.jpg" alt="" class="birthday__image" />
          <div class="birthday__info">
            <span class="birthday__name">Andrew Lincoln</span>
            <span class="birthday__age">55 lat</span>
          </div>
        </li>
      </ul>
    </section>
  </main>
  <footer class="footer">
    <div class="footer__wrapper">
      <div class="visited">
        <div class="visited__header">
          <span class="visited__title">Ostatnio oglądane</span>
          <button class="visited__clear">Wyczyść historie</button>
        </div>
        <div class="visited__last">
          <img src="images/andrew.jpg" alt="" class="visited__image" />
          <img src="images/andrew.jpg" alt="" class="visited__image" />
          <img src="images/andrew.jpg" alt="" class="visited__image" />
        </div>
      </div>
      <div class="logos">
        <div class="logos__set">
          <i class="fa-brands fa-square-facebook logos__logo"></i>
          <span class="logo__name">Facebook</span>
        </div>
        <div class="logos__set">
          <i class="fa-brands fa-instagram logos__logo"></i>
          <span class="logo__name">Instagram</span>
        </div>
        <div class="logos__set">
          <i class="fa-brands fa-square-x-twitter logos__logo"></i>
          <span class="logo__name">X</span>
        </div>
      </div>
      <span class="copyright">Copyright &copy FilmBase 2023</span>
    </div>
  </footer>
</body>

</html>