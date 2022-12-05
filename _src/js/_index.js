// Library
import MicroModal from 'micromodal';

// Funtion
import adjustViewport from './function/adjustViewport'

// Module
import SmoothScroll from './module/SmoothScroll';
import DrawerMenuToggle from './module/DrawerMenuToggle';
import SplideSlider from './module/SplideSlider';

const init = () => {

  (() => {
    const smoothScroll = new SmoothScroll({
      targets: 'a[href^="#"]',
      fixHeader: '#js-header',
    });
    smoothScroll.init();
  })();

  (() => {
    const drawerMenuToggle = new DrawerMenuToggle({
      modalId: 'js-drawer-menu',
      toggleBtn: '#js-drawer-menu-toggle-btn',
      closeButtons: '[data-drawer-menu-close-btn]',
      container: '#js-drawer-menu-container',
    });
    drawerMenuToggle.init();
  })();

  (() => {
    const splideSlider = new SplideSlider();
    splideSlider.init();
  })();

};

window.addEventListener('DOMContentLoaded', () => {
  adjustViewport();
  init();
});