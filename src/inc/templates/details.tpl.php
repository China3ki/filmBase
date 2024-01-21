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
            <div class='info__production'>
              <span class='info__genre'>Gatunek</span>
              <span>Horror</span>
              <span class='info__genre'>Produkcja</span>
              <span>Francja</span>
              <span class='info__genre'>Premiera</span>
              <span>20.12.2023</span>
              <span class='info__genre'>Studio</span>
              <span>AMC</span>
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
    }
}
