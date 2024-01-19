const showRate = () => {
  document.querySelector('.user__rate').classList.toggle('show');
  document.querySelector('.rate').classList.toggle('show');
};
document.querySelector('.user__show').addEventListener('click', showRate);

const moveStars = (e) => {
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
const outStars = () => {
  const stars: NodeList = document.querySelectorAll('.rate__icon--star');
  const rateNumber: HTMLElement = document.querySelector('.rate__number');
  const rateOpinion: HTMLElement = document.querySelector('.rate__opinion');

  stars.forEach((star: HTMLElement) => {
    star.classList.remove('fill');
  });

  rateNumber.textContent = '0/10';
  rateOpinion.textContent = 'Moja ocena';
};

const selectStars = () => {
  document.querySelector('.rate__star').removeEventListener('mouseout', outStars);
  document.querySelector('.rate__star').removeEventListener('mouseover', moveStars);
};

const opinionStars = (e) => {
  const textLength: number = e.target.value.length;
  document.querySelector('.rate__count').textContent = `${150 - textLength}/150`;
};
const resetOpinion = () => {
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
document.querySelector('.rate__reset').addEventListener('click', resetOpinion);
document.querySelector('.rate__text').addEventListener('input', opinionStars);
document.querySelector('.rate__star').addEventListener('click', selectStars);
document.querySelector('.rate__star').addEventListener('mouseover', moveStars);
document.querySelector('.rate__star').addEventListener('mouseout', outStars);
