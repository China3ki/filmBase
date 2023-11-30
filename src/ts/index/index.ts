import { showElements, nextMenu, previousMenu, changeTheme } from '../assets.js';
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
