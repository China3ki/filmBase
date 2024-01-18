const showRate = () => {
  document.querySelector('.user__rate').classList.toggle('show');
  document.querySelector('.rate').classList.toggle('show');
};
document.querySelector('.user__show').addEventListener('click', showRate);

const rateStars = (e) => {
  console.log(e.target);
};
document.querySelector('.rate__star').addEventListener('mouseover', rateStars);
