import { CountUp } from 'countup.js';
import LazyLoad from 'vanilla-lazyload';
import Tablist from './init/tabs';
import Splide from '@splidejs/splide';
import '@splidejs/splide/css';
import prefersReducedMotion from './util/prefersReducedMotion';


window.addEventListener('DOMContentLoaded', () => {
  // Check for reduced motion preferences
  const reduceMotion = prefersReducedMotion();

  // Lazyload Images
  const myLazyLoad = new LazyLoad();

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
    rewind: true,
  }).mount();

  splide.on('active', (slide) => {
    let theme = slide.slide.getAttribute('data-theme');
    splide.root.setAttribute('data-active-theme', theme);
  });

  // Goals
  if (reduceMotion === false) {
    const countUp = new CountUp('target', 61, {
      enableScrollSpy: true,
      duration: 1.5,
      scrollSpyOnce: true,
    });

    const goalProgressBar = document.getElementById('bar');
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.intersectionRatio > 0) {
          goalProgressBar.classList.add('in-viewport');
          observer.unobserve(goalProgressBar);
        }
      });
    });

    observer.observe(goalProgressBar);
  }
});
