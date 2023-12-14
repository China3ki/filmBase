import { searchEngine } from './search.js';
const showElements = (e: Event) => {
  e.preventDefault();
  const target = e.target as Element;
  const form: HTMLElement = document.querySelector('.search');
  const menu: HTMLElement = document.querySelector('.menu');
  const searchInput: HTMLElement = document.querySelector('.search__input');
  const accountPanel: HTMLElement = document.querySelector('.account');
  // Show input
  if (
    target.parentElement.classList.contains('icon__set--search') ||
    target.classList.contains('icon__set--search') ||
    target.classList.contains('header__input')
  ) {
    form.classList.add('show');
    searchInput.focus();
  } else if (target.classList.contains('search__close')) {
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
  // Show Account panel
  if (
    target.classList.contains('header__icon--login') ||
    target.classList.contains('icon__set--login')
  ) {
    accountPanel.classList.add('show');
  } else if (target.classList.contains('account__icon--close')) {
    accountPanel.classList.remove('show');
  }
};

const nextMenu = (e: Event) => {
  const target = e.currentTarget as Element;
  target.parentElement.querySelector('.menu__panel--sub').classList.add('show');
};
const previousMenu = (e: Event) => {
  const target = e.currentTarget as Element;
  target.parentElement.parentElement.parentElement
    .querySelector('.menu__panel--sub')
    .classList.remove('show');
};
const changeTheme = () => {
  const theme: string = document.documentElement.dataset.theme;
  console.log(theme);
  document.documentElement.setAttribute('data-theme', theme === 'light' ? 'dark' : 'light');
};

document.querySelector('body').addEventListener('click', showElements);
document.querySelector('body').addEventListener('touchend', showElements);
document
  .querySelectorAll('.list__unwind')
  .forEach((list) => list.addEventListener('click', nextMenu));
document
  .querySelectorAll('.list__unwind')
  .forEach((list) => list.addEventListener('touchend', nextMenu));
document
  .querySelectorAll('.menu__back')
  .forEach((list) => list.addEventListener('click', previousMenu));
document
  .querySelectorAll('.menu__back')
  .forEach((list) => list.addEventListener('touchend', previousMenu));
document.querySelector('.theme').addEventListener('click', changeTheme);

document.querySelector('.search__input').addEventListener('input', searchEngine);
