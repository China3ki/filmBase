<div class="account account--nonlogged">
  <div class="account__header">
    <h2 class="account__title">Konto</h2>
    <span class="material-symbols-outlined account__icon--close"> close </span>
  </div>
  <div class="account__main">
    <div class="account__info">
      <div class="account__details">
        <span class="material-symbols-outlined account__icon">
          account_circle
        </span>
      </div>
      <span class="account__desc">Niezalogowany</span>
    </div>
  </div>
  <ul class="account__options">
    <li class="account__option">
      <div class="account__category list__unwind">
        <span>Zaloguj się</span>
        <span class="material-symbols-outlined menu__icon--next">login</span>
      </div>
      <div class="login__unwind ">
        <div class="login__header">
          <div class="login__back menu__back">
            <span class="material-symbols-outlined login__icon--back"> arrow_back </span>
            <h2 class="login__title">Zaloguj się</h2>
          </div>
          <span class="material-symbols-outlined login__icon--close account__icon--close"> close </span>
        </div>
        <form action="inc/assets/login.inc.php" method="POST" class="login__form login__form--login">
          <div class="login__data">
            <label for="emailLogin" class="login__label">Adres Email</label>
            <input type="text" id="emailLogin" placeholder="Email" name="emailLogin" class="login__input login__input--login">
          </div>
          <div class="login__data">
            <label for="passwordLogin" class="login__label">Hasło</label>
            <input type="password" id='passwordLogin' placeholder="Hasło" name='passwordLogin' class=" login__input login__input--login">
          </div>
          <input type="submit" value="Zaloguj się" class=" login__submit login__submit--login">
        </form>
      </div>
    </li>
    <li class="account__option">
      <div class="account__category list__unwind">
        <span>Zarejestruj się</span>
        <span class="material-symbols-outlined"> app_registration </span>
      </div>
      <div class="login__unwind ">
        <div class="login__header">
          <div class="login__back menu__back">
            <span class="material-symbols-outlined login__icon--back"> arrow_back </span>
            <h2 class="login__title">Zarejestruj się</h2>
          </div>
          <span class="material-symbols-outlined login__icon--close account__icon--close"> close </span>
        </div>
        <form action="inc/assets/register.inc.php" method="POST" class="login__form login__form--register">
          <div class="login__data">
            <label for="nickname" class="login__label">Nazwa użytkownika</label>
            <input type="text" name="nickname" id="nickname" placeholder="Nazwa użytkownika" maxlength="35" class="login__input login__input--register">
          </div>
          <div class="login__data">
            <label for="name" class="login__label">Imię</label>
            <input type="text" name="name" id="name" placeholder="Imię" class="login__input login__input--register">
          </div>
          <div class="login__data">
            <label for="surname" class="login__label">Nazwisko</label>
            <input type="text" name="surname" id="surname" placeholder="Nazwisko" class="login__input login__input--register">
          </div>
          <div class="login__data">
            <label for="email" class="login__label">Adres Email</label>
            <input type="email" name="email" id="email" placeholder="Email" class="login__input login__input--register">
          </div>
          <div class="login__data">
            <label for="password" class="login__label">Hasło</label>
            <input type="password" name="password" id="password" placeholder="Hasło" class="login__input login__input--register">
          </div>
          <div class="login__strength">
            <span class="login__info ">Siła hasła: </span>
            <span class="login__level strong"></span>
          </div>
          <div class="login__data">
            <label for="passwordr" class="login__label">Powtórz hasło</label>
            <input type="password" name="passwordr" id="passwordr" placeholder="Powtórz hasło" class="login__input login__input--register">
          </div>
          <input type="submit" value="Zarejestruj się!" class="login__submit login__submit--register">
        </form>
      </div>
    </li>
  </ul>
  <div class="account__messages">

  </div>
</div>