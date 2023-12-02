const changeCriticOpinion = (e: Event) => {
  const opinionContent: HTMLElement = document.querySelector('.opinions__content');
  const target = e.target as Element;
  let cordX: number = opinionContent.scrollLeft;
  let cos: number = 0;
  if (target.classList.contains('opinion__arrow--left')) {
    cordX -= 400;
  } else {
    cordX += 400;
  }
  console.log(document.querySelector('.opinions__content').scrollLeft);
  opinionContent.scrollTo({
    top: 0,
    left: cordX,
    behavior: 'smooth',
  });
};
document
  .querySelectorAll('.opinion__arrow')
  .forEach((arrow) => arrow.addEventListener('click', changeCriticOpinion));
