<?php

function displayDetails($data, $content)
{
  switch ($content) {
    case "main":
      echo "<section class='image'>
            <img src='{$data[0]['film_cover_widther']}' alt='film Cover widther' class='image__main'>
            <div class='image__title'>
              <span class='title__type'>FILM</span>
              <span class='title__name'>{$data[0]['film_name']}</span>
              <div class='image__stats'>
                <div class='image__rate'>
                  <span class='material-symbols-outlined image__icon--star'> stars </span>
                  </span>
                  <div class='image__rates'>
                    <span class='image__rating'>{$data[0]['rate']}</span>
                    <span class='image__numbers'>{$data[0]['count']} ocen</span>
                  </div>
      
                </div>
                <span class='image__length'>{$data[0]['film_length']} min</span>
                <div class='image__wantWatch'>
                  <span class='material-symbols-outlined image__heart--icon'>
                    favorite
                  </span>
                  <span class='image__want'>Chcę obejrzeć</span>
                </div>
              </div>
              <div class='user__rate'>
                <span class='user__rating'>10</span>
                <span class='user__title'>twoja ocena</span>
                <button class='user__show'></button>
                <div class='rate'>
                  <fieldset class='rate__field'>
                    <legend>Oceń film</legend>
                    <img src='images/actors/andrewlincoln/andrew.jpg' alt='' class='rate__image'>
                    <div class='rate__vod'>
                      <div class='rate__star'>
                        <span data-star='1' data-desc='Kto to ogląda?' class='material-symbols-outlined rate__icon--star '> star </span>
                        <span data-star='2' data-desc='Beznadzieja' class='material-symbols-outlined rate__icon--star'> star </span>
                        <span data-star='3' data-desc='Bardzo słaby' class='material-symbols-outlined rate__icon--star'> star </span>
                        <span data-star='4' data-desc='Slaby' class='material-symbols-outlined rate__icon--star'> star </span>
                        <span data-star='5' data-desc='Średni' class='material-symbols-outlined rate__icon--star'> star </span>
                        <span data-star='6' data-desc='Nie jest żle' class='material-symbols-outlined rate__icon--star'> star </span>
                        <span data-star='7' data-desc='Dobry' class='material-symbols-outlined rate__icon--star'> star </span>
                        <span data-star='8' data-desc='Bardzo Dobry' class='material-symbols-outlined rate__icon--star'> star </span>
                        <span data-star='9' data-desc='Wybitny' class='material-symbols-outlined rate__icon--star'> star </span>
                        <span data-star='10' data-desc='Genialny!' class='material-symbols-outlined rate__icon--star'> star </span>
                      </div>
                      <div class='rate__details'>
                        <span class='rate__number'>0/10</span>
                        <span class='rate__opinion'>Moja ocena</span>
                      </div>
                    </div>
                    <form class='rate__comment'>
                      <label for='a'>Twój komentarz</label>
                      <textarea id='a' class='rate__text' maxlength='150'></textarea>
                      <div class='rate__sub'>
                        <span class='rate__count'>150/150</span>
                        <div class='rate__inputs'>
                          <button class='rate__reset'>Wyczyść</button>
                          <input type='submit' class='rate__submit'>
                        </div>
                      </div>
                    </form>
                  </fieldset>
                </div>
              </div>
            </div>
          </section>
          <section class='info'>
      <div class='info__all'>
        <div class='info__main'>
          <img src='{$data[0]['film_cover']}' alt='film cover' class='info__image'>
          <div class='info__details'>
            <span class='info__desc'>{$data[0]['film_desc']}</span>  
          </div>
        </div>
         ";
      break;
    case "info":
      echo "
       
          
          <span>Horror</span>
          <span class='info__genre'>Produkcja</span>
          <span>Francja</span>
          <span class='info__genre'>Premiera</span>
          <span>20.12.2023</span>
          <span class='info__genre'>Studio</span>
          <span>AMC</span>
     ";
      break;
    case "genres":
      echo " <div class='info__production'>
      <span class='info__genre'>Gatunek</span>
      <span>";
      foreach ($data as $row) {
        echo "{$row['genre_name']} ";
      }
      echo "</span>";
      break;
    case "productionCountry":
      echo "<span class='info__genre'>Produkcja</span>
      <span>";
      foreach ($data as $row) {
        echo "{$row['country_name']}";
      }
      echo "</span>";
      break;
    case "premier":
      echo "<span class='info__genre'>Premiera</span>
      <span>";
      foreach ($data as $row) {
        echo "{$row['date_premier']} ({$row['country_name']})";
      }
      echo "</span>";
      break;
    case "studio":
      echo " <span class='info__genre'>Studio</span>
      <span>";
      foreach ($data as $row) {
        echo "{$row['studio_name']}";
      }
      echo "</span>
      </div>
      </div>
    </section>";
      break;
    case "episodes":
      echo " <section class='episodes'>
          <h1 class='episodes__title'>Odcinki</h1>
          <div class='episode'>
            <img src='images/long.jpg' alt='' class='episode__image'>
            <div class='episode__info'>
              <span class='episode__number'>S01E01</span>
              <span class='episode__name'>
                EVERYBODY WINS A PRIZE
              </span>
              <div class='episode__rate'>
                <span class='material-symbols-outlined episode__icon--star'> stars </span>
                </span>
                <span class='episode__rating'>7.8</span>
              </div>
            </div>
          </div>
          <div class='episode'>
            <img src='images/long.jpg' alt='' class='episode__image'>
            <div class='episode__info'>
              <span class='episode__number'>S01E01</span>
              <span class='episode__name'>
                EVERYBODY WINS A PRIZE
              </span>
              <div class='episode__rate'>
                <span class='material-symbols-outlined episode__icon--star'> stars </span>
                </span>
                <span class='episode__rating'>7.8</span>
              </div>
            </div>
          </div>
        </section>";
      break;
    case "images":
      echo " <div class='gallery__images'>
            <img src='{$data[0]['image_path']}' alt='first photo' class='gallery__image gallery__image--main'>
            <img src='{$data[1]['image_path']}' alt='first photo'  class='gallery__image gallery__image--secondary'>
            <img src='{$data[2]['image_path']}' alt='first photo'  class='gallery__image gallery__image--widther'>
            <img src='{$data[3]['image_path']}' alt='first photo'  class='gallery__image gallery__image--square'>
            <img src='{$data[4]['image_path']}' alt='first photo'  class='gallery__image gallery__image--last'>
          </div>
          <a href='#' class='gallery__more'>Zobacz więcej zdjęć</a>";
      break;
    case "trailer":
      echo "<iframe src='{$data[0]['film_trailer']}' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen class='trailer__film'></iframe>";
      break;
    case "cast":
      foreach ($data as $row) {
        echo " <div class='actor'>
          <img src='{$row['actor_image']}' alt='{$row['actor_name']} {$row['actor_surname']} zdjęcie' class='actor__image'>
          <a href='' class='actor__info actor__info--link actor__info'>{$row['actor_name']} {$row['actor_surname']}</a>
          <span class='actor__info'>jako</span>
          <a href='' class='actor__info'>{$row['character_name']}</a>
        </div>";
      };
      break;
    case "characters":
      foreach ($data as $row) {
        echo " <div class='actor'>
          <img src='{$row['character_image']}' alt='{$row['character_name']} zdjęcie' class='actor__image'>
          <a href='' class='actor__info actor__info--link actor__info--role'>{$row['character_name']}</a></div>";
      };
      break;
    case "critics":
      foreach ($data as $row) {
        echo "<div class='critic__opinion'>
        <div class='critic__header'>
          <img src='{$row['user_avatar']}' alt='{$row['user_name']} zdjęcie' class='critic__image'>
          <div class='critic__info'>
            <span class='critic__name'>{$row['user_name']} {$row['user_surname']}</span>
            <span class='critic__sub'>12 tys obserwujących</span>
            <button class='critic__observe'>Obserwuj</button>
          </div>
        </div>
        <div class='critic__rate'>
          <span class='critic__number'>{$row['rate']}</span>
          <div class='critic__stars'>";
        for ($i = 1; $i <= 10; $i++) {
          if ($i > $row['rate']) {
            echo " <span class='material-symbols-outlined critic__icon--star'> star </span>";
          } else {
            echo " <span class='material-symbols-outlined critic__icon--star fill'> star </span>";
          }
        }
        echo "
          </div>
        </div>
        <p class='critic__desc'>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint molestias sapiente aliquid natus atque vel dignissimos animi impedit tempore aliquam perspiciatis, voluptate eaque cupiditate. Quia necessitatibus eum alias fugit delectus magnam qui. Odit magnam deleniti at iure aliquam iste! Vitae, dolore deserunt in earum ipsam reprehenderit dolor pariatur officia. Veniam?.</p>
      </div>";
      }
      break;
    case "users":
      foreach ($data as $row) {
        echo "
        <div class='opinion'>
        <div class='opinion__header'>
        <img src='{$row['user_avatar']}' alt='{$row['user_nick']} awatar' class='opinion__image'>
        <div class='opinion__user'>
          <div class='opinion__userInfo'>
            <span class='opinion__name'>{$row['user_nick']}</span>
            <span class='opinion__date'>19.01.2024</span>
          </div>
          <div class='opinion__rate'>
            <span class='opinion__rating'>Ocenił(a) na {$row['rate']}</span>
            <span class='material-symbols-outlined rate__icon--star fill'> star </span>
          </div>
        </div>
      </div>
      <p class='opinion__desc'>{$row['rate_comment']}</p>
      <div class='opinion__likes'>
        <div class='opinion__rateLikes'>
          <span class='material-symbols-outlined opinion__like--icon'>
            thumb_up
          </span>
          <span class='opinion__likesCounter'>(0)</span>
          <span class='material-symbols-outlined opinion__like--icon'>
            thumb_down
          </span>
          <span class='opinion__likesCounter'>(0)</span>
        </div>
        <button class='opinion__reply'>Odpowiedż</button>
      </div>
    </div>";
      }
      break;
  }
}
