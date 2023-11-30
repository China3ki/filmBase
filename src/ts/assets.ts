export const showElements = (e: Event) => {
  const target = e.target as Element;
  const form: HTMLElement = document.querySelector('.header__search');
  const menu: HTMLElement = document.querySelector('.menu');
  const searchInput: HTMLElement = document.querySelector('.header__input');
  // Show input
  if (
    target.parentElement.classList.contains('icon__set--search') ||
    target.classList.contains('icon__set--search')
  ) {
    form.classList.add('show');
    searchInput.focus();
  } else if (target.classList.contains('header__icon--close')) {
    form.classList.remove('show');
  }
  // Show menu
  if (
    target.classList.contains('icon__set--menu') ||
    target.parentElement.classList.contains('icon__set--menu')
  ) {
    menu.classList.add('show');
  } else if (target.classList.contains('menu__icon--close')) {
    menu.classList.remove('show');
  }
};

export const nextMenu = (e: Event) => {
  const target = e.currentTarget as Element;
  target.parentElement.querySelector('.menu__panel--sub').classList.add('show');
};
export const previousMenu = (e: Event) => {
  const target = e.currentTarget as Element;
  target.parentElement.parentElement.parentElement
    .querySelector('.menu__panel--sub')
    .classList.remove('show');
};
export const changeTheme = () => {
  const theme: string = document.documentElement.dataset.theme;
  console.log(theme);
  document.documentElement.setAttribute('data-theme', theme === 'light' ? 'dark' : 'light');
};
