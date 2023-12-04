'use strict';

class Index {
  arrows: Element[];

  constructor() {
    this.arrows = [...document.querySelectorAll('.opinion__arrow')];
    this.arrows.forEach((arrow) => arrow.addEventListener('click', this.changeCriticOpinion));
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

    opinionContent.scrollTo({
      top: 0,
      left: cordX,
      behavior: 'smooth',
    });
  }
}

const indexInstance = new Index();
