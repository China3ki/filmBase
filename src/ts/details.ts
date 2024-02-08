import {
  showRate,
  moveStars,
  outStars,
  selectStars,
  opinionStars,
  resetOpinion,
} from './details/rate_system.js';

document.querySelector('.rate__reset').addEventListener('click', resetOpinion);
document.querySelector('.rate__text').addEventListener('input', opinionStars);
document.querySelector('.rate__star').addEventListener('click', selectStars);
document.querySelector('.rate__star').addEventListener('mouseover', moveStars);
document.querySelector('.rate__star').addEventListener('mouseout', outStars);
document.querySelector('.user__show').addEventListener('click', showRate);
