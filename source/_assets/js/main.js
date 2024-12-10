import Tablist from './init/tabs';
import Splide from '@splidejs/splide';
import '@splidejs/splide/css';


window.addEventListener('DOMContentLoaded', () => {
  // Tabs
  const tablists = document.querySelectorAll('.tabs');
  if (tablists.length) {
    tablists.forEach(tablist => {
      new Tablist(tablist);
    });
  }

  // Splide
  const splide = new Splide('.splide', {
    drag: false,
    type: 'fade',
    pagination: false,
  }).mount();

  splide.on('active', (slide) => {
    let theme = slide.slide.getAttribute('data-theme');
    splide.root.setAttribute('data-active-theme', theme);
  });
});
