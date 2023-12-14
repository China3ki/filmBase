'use strict';

class Index {
  arrows: Element[];

  constructor() {
    this.arrows = [...document.querySelectorAll('.opinion__arrow')];
    this.arrows.forEach((arrow) => arrow.addEventListener('click', this.changeCriticOpinion));
  }

  changeCriticOpinion(e: Event) {
    const opinionContent: HTMLElement = document.querySelector('.opinions__content');
    const leftArrow: HTMLElement = document.querySelector('.opinion__arrow--left');
    const rightArrow: HTMLElement = document.querySelector('.opinion__arrow--right');
    const target = e.target as Element;
    const maxCordX: number = opinionContent.scrollWidth - opinionContent.clientWidth;
    let cordX: number = opinionContent.scrollLeft;

    if (target.classList.contains('opinion__arrow--left')) {
      cordX -= 400;
    } else {
      cordX += 400;
    }

    if (cordX <= 100) {
      leftArrow.classList.add('hide');
    } else {
      leftArrow.classList.remove('hide');
    }
    if (cordX >= maxCordX - 100) {
      rightArrow.classList.add('hide');
    } else {
      rightArrow.classList.remove('hide');
    }

    opinionContent.scrollTo({
      top: 0,
      left: cordX,
      behavior: 'smooth',
    });
    console.log(maxCordX);
    console.log(cordX);
  }
}

const indexInstance = new Index();
