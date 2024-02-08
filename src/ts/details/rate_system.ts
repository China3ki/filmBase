import { messageInfo } from '../assets/error.js';
export const showRate = () => {
  document.querySelector('.user__rate').classList.toggle('show');
  document.querySelector('.rate').classList.toggle('show');
};

export const moveStars = (e) => {
  const selectedStar: number = parseInt(e.target.dataset.star);
  const selectedOpinion: string = e.target.dataset.desc;
  const stars: NodeList = document.querySelectorAll('.rate__icon--star');
  const rateNumber: HTMLElement = document.querySelector('.rate__number');
  const rateOpinion: HTMLElement = document.querySelector('.rate__opinion');

  stars.forEach((star: HTMLElement) => {
    star.classList.remove('fill');
    if (parseInt(star.dataset.star) <= selectedStar) {
      star.classList.add('fill');
    }
  });

  rateNumber.textContent = `${selectedStar}/10`;
  rateOpinion.textContent = `${selectedOpinion}`;
};
export const outStars = () => {
  const stars: NodeList = document.querySelectorAll('.rate__icon--star');
  const rateNumber: HTMLElement = document.querySelector('.rate__number');
  const rateOpinion: HTMLElement = document.querySelector('.rate__opinion');

  stars.forEach((star: HTMLElement) => {
    star.classList.remove('fill');
  });

  rateNumber.textContent = '0/10';
  rateOpinion.textContent = 'Moja ocena';
};

export const selectStars = () => {
  document.querySelector('.rate__star').removeEventListener('mouseout', outStars);
  document.querySelector('.rate__star').removeEventListener('mouseover', moveStars);
};

export const opinionStars = (e) => {
  const textLength: number = e.target.value.length;
  document.querySelector('.rate__count').textContent = `${150 - textLength}/150`;
};
export const resetOpinion = (e) => {
  e.preventDefault();
  const stars: NodeList = document.querySelectorAll('.rate__icon--star');
  const rateNumber: HTMLElement = document.querySelector('.rate__number');
  const rateOpinion: HTMLElement = document.querySelector('.rate__opinion');
  const textArea: HTMLInputElement = document.querySelector('.rate__text');
  stars.forEach((star: HTMLElement) => {
    star.classList.remove('fill');
  });
  rateNumber.textContent = '0/10';
  rateOpinion.textContent = 'Moja ocena';
  textArea.value = '';
  document.querySelector('.rate__count').textContent = '150/150';
  document.querySelector('.rate__star').addEventListener('mouseover', moveStars);
  document.querySelector('.rate__star').addEventListener('mouseout', outStars);
};

export const watchAndLike = async (e) => {
  const type: string = e.target.dataset.type;
  const urlParam = new URLSearchParams(window.location.search);
  const data = new FormData();
  data.append('type', type);
  data.append('name', urlParam.get('name'));
  try {
    const addLikesOrWatch = await fetch('inc/details/likes_watch.inc.php', {
      method: 'POST',
      body: data,
    });
    if (!addLikesOrWatch.ok) throw new Error('Coś poszło nie tak. Spróbuj ponownie póżniej!');

    return messageInfo(await addLikesOrWatch.text());
  } catch (error) {
    return messageInfo(error);
  } finally {
    e.target.classList.toggle('watch');
  }
};
document
  .querySelectorAll('.image__icon')
  .forEach((icon) => icon.addEventListener('click', watchAndLike));
