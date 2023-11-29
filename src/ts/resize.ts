export const changeNavigation = () => {
  interface HTMLElements {
    nav: HTMLElement;
    header: HTMLElement;
  }
  const mobile: HTMLElements = {
    header: document.querySelector('.header--mobile'),
    nav: document.querySelector('.nav--mobile'),
  };
  const desktop: HTMLElements = {
    header: document.querySelector('.header--desktop'),
    nav: document.querySelector('.nav--desktop'),
  };

  if (window.matchMedia('(min-width: 768px)').matches) {
    mobile.header.style.display = 'none';
    desktop.header.style.display = 'flex';
    desktop.nav.style.display = 'flex';
  } else {
    mobile.header.style.display = 'flex';
    desktop.header.style.display = 'none';
    desktop.nav.style.display = 'none';
  }
};
