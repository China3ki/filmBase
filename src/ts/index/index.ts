'use strict';

class Index {
  arrows: Element[];
  constructor() {
    this.arrows = [...document.querySelectorAll('.opinion__arrow')];
    this.arrows.forEach((arrow) => arrow.addEventListener('click', this.changeCriticOpinion));
  }

  async getContent(content: string) {
    const data = new FormData();
    data.append('data', content);
    const fetchFilms = await fetch('inc/index/index.inc.php', {
      method: 'POST',
      body: data,
    });
    return await fetchFilms.json();
  }

  render() {
    this.renderMovies(this.getContent('films'), document.querySelector('.display__content--films'));
    this.renderMovies(
      this.getContent('serials'),
      document.querySelector('.display__content--serials')
    );
  }
  async renderMovies(movies, content: HTMLElement) {
    const move = await movies;
    move.forEach((serial: string) => {
      const card: HTMLElement = document.createElement('div');
      const cardImage: HTMLImageElement = document.createElement('img');
      const cardData: HTMLElement = document.createElement('div');
      const cardName: HTMLElement = document.createElement('span');
      const cardScale: HTMLElement = document.createElement('div');
      const cardCount: HTMLElement = document.createElement('span');
      const cardRate: HTMLElement = document.createElement('span');
      const star: HTMLElement = document.createElement('span');
      card.classList.add('card');
      cardImage.classList.add('card__image');
      cardData.classList.add('card__data');
      cardName.classList.add('card__name');
      cardScale.classList.add('card__scale');
      cardCount.classList.add('card__count');
      cardCount.textContent = '1230 ocen';
      cardRate.classList.add('card__rate');
      star.textContent = 'stars';
      -star.classList.add('material-symbols-outlined', 'card__icon--star');

      cardImage.src = serial[1];
      cardName.textContent = serial[0];
      content.appendChild(card);
      card.appendChild(cardImage);
      card.appendChild(cardData);
      cardData.appendChild(cardName);
      cardData.appendChild(cardScale);
      cardScale.appendChild(cardCount);
      cardScale.appendChild(cardRate);
      cardRate.appendChild(star);
    });
  }
  changeCriticOpinion(e: Event) {
    const opinionContent: HTMLElement = document.querySelector('.opinions__content');
    const target = e.target as Element;
    let cordX: number = opinionContent.scrollLeft;
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
  }
}

const indexInstance = new Index();
indexInstance.render();
