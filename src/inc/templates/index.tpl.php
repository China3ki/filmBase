<?php

function display($data, $type)
{

  switch ($type) {
    case 'articlesMain':
      echo "<article class='article article--main'>
    <img src='{$data[0]['article_Image']}' alt='{{$data[0]['article_title']}' class='article__image' />
    <div class='article__content'>
      <h1 class='article__title'>{$data[0]['article_title']}</h1>
      <span class='article__time'>czas przeczytania: 2min</span>
    </div>
  </article>
  <aside class='articles__secondary'>
    <article class='article article--secondary'>
      <img src='{$data[1]['article_Image']}' alt='{$data[1]['article_title']}' class='article__image' />
      <div class='article__content'>
        <h1 class='article__title'> {$data[1]['article_title']}</h1>
        <span class='article__time'>czas przeczytania: 2min</span>
      </div>
    </article>
    <article class='article article--secondary'>
      <img src='{$data[2]['article_Image']}' alt='{$data[2]['article_title']}' class='article__image' />
      <div class='article__content'>
        <h1 class='article__title'>{$data[2]['article_title']}</h1>
        <span class='article__time'>czas przeczytania: 2min</span>
      </div>
    </article>
    <article class='article article--secondary article--widther'>
      <img src='{$data[3]['article_Image']}' alt='{$data[3]['article_title']}' class='article__image' />
      <div class='article__content'>
        <h1 class='article__title'>{$data[3]['article_title']}</h1>
        <span class='article__time'>czas przeczytania: 2min</span>
      </div>
    </article>
  </aside>
  <aside class='articles__bottom'>
    <article class='article article--bottom'>
      <img src='{$data[4]['article_Image']}' alt='{$data[4]['article_title']}' class='article__image' />
      <div class='article__content'>
        <h1 class='article__title'>{$data[4]['article_title']}</h1>
        <span class='article__time'>czas przeczytania: 2min</span>
      </div>
    </article>
    <article class='article article--bottom'>
      <img src='{$data[5]['article_Image']}' alt='<?php echo {$data[5]['article_title']} ?>' class='article__image' />
      <div class='article__content'>
        <h1 class='article__title'>{$data[5]['article_title']}</h1>
        <span class='article__time'>czas przeczytania: 2min</span>
      </div>
    </article>
    <article class='article article--bottom'>
      <img src='{$data[6]['article_Image']}' alt='{$data[6]['article_title']}' class='article__image' />
      <div class='article__content'>
        <h1 class='article__title'> {$data[6]['article_title']} ></h1>
        <span class='article__time'>czas przeczytania: 2min</span>
      </div>
    </article>
    </aside>";
      break;
    case "news":
      foreach ($data as $row) {
        echo "<article class='article--news'>
        <img src='{$row['article_Image']}' alt='{$row['article_title']}' class='article__image--news' />
        <div class='article__content--news'>
          <h2 class='article__title--news'>{$row['article_title']}</h2>
          <span class='article__time--news'>czas przeczytania: 2min</span>
        </div>
      </article>";
      }
      break;
    case "serials":
      foreach ($data as $row) {
        echo " <li class='card'>
        <img src='{$row['serial_cover']}' alt='{$row['serial_name']}' class='card__image' />
        <div class='card__data'>
          <span class='card__name'>{$row['serial_name']}</span>
          <div class='card__scale'>
            <span class='card__count'>{$row['count']} ocen</span>
            <span class='card__rate'>{$row['rate']}<span class='material-symbols-outlined card__icon--star'> stars </span>
            </span>
          </div>
        </div>
      </li>";
      }
      break;
    case "films":
      foreach ($data as $row) {
        echo " <li class='card'>
        <img src='{$row['film_cover']}' alt='{$row['film_name']}' class='card__image' />
        <div class='card__data'>
          <span class='card__name'>{$row['film_name']}</span>
          <div class='card__scale'>
            <span class='card__count'>{$row['count']} ocen</span>
            <span class='card__rate'>{$row['rate']}<span class='material-symbols-outlined card__icon--star'> stars </span>
            </span>
          </div>
        </div>
      </li>";
      }
      break;
    case "criticsRate":
      foreach ($data as $row) {
        echo "<article class='opinion'>
        <div class='opinion__info'>
          <img src='{$row['cover']}' alt='{$row['name']}' class='opinion__image' />
          <div class='opinion__show'>
            <span class='show__category'>Filmy</span>
            <span class='show__name'>{$row['name']}</span>
          </div>
        </div>
        <div class='opinion__content'>
          <div class='opinion__critic'>
            <img src='{$row['user_avatar']}' alt='User avatar' class='critic__icon--avatar' />
            <div class='critic__data'>
              <span class='critic__name'>{$row['user_name']} {$row['user_surname']}</span>
              <span class='critic__subscribers'> 12.2 obserwujących</span>
              <button class='critic__observe'>Obserwuj</button>
            </div>
          </div>
          <div class='opinion__rating'>
            <span class='opinion__rate'>{$row['rate']}</span>";
        for ($i = 0; $i < 10; $i++) {
          if ($i >= $row['rate']) {
            echo "<span class='material-symbols-outlined opinion__icon--star'> star </span>";
          } else {
            echo "  <span class='material-symbols-outlined opinion__icon--star fill'> star </span>";
          }
        }
        echo "
          </div>
          <p class='opinion__desc'>
            {$row['rate_comment']}
          </p>
        </div>
      </article>";
      }
  }
}
