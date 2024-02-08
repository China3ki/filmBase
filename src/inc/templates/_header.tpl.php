<?php


echo "<header class='header'>
<div class='icon__set icon__set--menu'>
  <span class='material-symbols-outlined header__icon header__icon--menu'> menu </span>
  <span class='icon__caption icon__caption_'>Menu</span>
</div>
<h1><a href='index.php' class='header__title'>FilmBase</a></h1>
<form class='header__search'>
  <button class='material-symbols-outlined header__submit'>search</button>
  <input type='text' class='header__input' placeholder='Wyszukaj' />
  <span class='material-symbols-outlined header__icon--close'> close </span>
</form>
<div class='header__icons'>
  <div class='icon__set icon__set--search'>
    <span class='material-symbols-outlined header__icon header__icon--search'> search </span>
    <span class='icon__caption'>Wyszukaj</span>
  </div>
  <div class='icon__set icon__set--login'>";
if (isset($_SESSION['id']) && $_SESSION['avatar'] === '') echo "<span class='material-symbols-outlined header__icon header__icon--login'> account_circle</span>";
else if (isset($_SESSION['id']) && $_SESSION['avatar'] !== '') echo "<img src='{$_SESSION['avatar']}' alt='{$_SESSION['nickname']} avatar menu' class='header__icon header__icon--avatar header__icon--login'";
else  echo "<span class='material-symbols-outlined header__icon header__icon--login'> person </span>  <span class='icon__caption'>Zaloguj się</span>";
echo "
  </div>
</div>
</header>
<div class='theme'>
<span class='theme__badge'>Tryb ciemny</span>
</div> 
<div class='account__messages'></div>
";
