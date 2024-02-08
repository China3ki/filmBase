<?php
function displayUserPanel()
{
    echo "<div class='account'>
    <div class='account__header'>
        <h2 class='account__title'>Konto</h2>
        <span class='material-symbols-outlined account__icon--close'> close </span>
    </div>
    <div class='account__main'>";
    if ($_SESSION['background'] === "") echo "<img src='images/backgroundDefault.webp' alt='user background' class='account__background' />";
    else echo "<img src='{$_SESSION['background']}' alt='user background' class='account__background' />";

    echo "<div class='account__info'>
            <div class='account__details'>";
    if ($_SESSION['avatar'] === "") echo "<span class='material-symbols-outlined account__avatar--default'>account_circle</span>";
    else echo " <img src='{$_SESSION['avatar']}' alt='User avatar' class='account__avatar' />";

    echo " <div class='account__data'>
                    <span class='account__name'>{$_SESSION['name']} {$_SESSION['surname']} </span>
                    <span class='account__nickname'>{$_SESSION['nickname']}</span>
                    <span class='account__observe'>Obserwacje: 20</span>
                </div>
            </div>
            <span class='account__desc'>{$_SESSION['desc']}</span>
        </div>
    </div>
    <ul class='account__stats'>
        <li class='account__stat'>
            <span class='stat__name'>Oceny</span> <span class='stat__number'>20</span>
        </li>
        <li class='account__stat'>
            <span class='stat__name'>Obserwujesz</span> <span class='stat__number'>20</span>
        </li>
        <li class='account__stat'>
            <span class='stat__name'>Polubienia</span> <span class='stat__number'>20</span>
        </li>
        <li class='account__stat'>
            <span class='stat__name'>Chcę obejrzeć</span> <span class='stat__number'>20</span>
        </li>
    </ul>
    <ul class='account__options'>
        <li class='account__option'>
            <div class='account__category list__unwind'>
                <span> Dane osobowe</span>
                <span class='material-symbols-outlined menu__icon--next'>
                    arrow_forward
                </span>
            </div>
        </li>
        <li class='account__option'>
            <div class='account__category list__unwind'>
                <span>Ustawienia konta</span>
                <span class='material-symbols-outlined menu__icon--next'> arrow_forward </span>
            </div>
        </li>
        <li class='account__option'>
            <a href='inc/assets/session.inc.php?logout' class='account__category list__unwind'>
                <span>Wyloguj</span> <span class='material-symbols-outlined'> logout </span>
            </a>
        </li>
    </ul>
</div>";
}
