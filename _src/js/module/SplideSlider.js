/**
* スライダー
*/

import Splide from '@splidejs/splide';

export default class SplideSlider {
  constructor(_parm) {
    this.parentSelector = '#js-slider';
    this.elmParent = document.querySelector(this.parentSelector);
    if (!this.elmParent) return;
    this.thumbsSelector = '[data-slider-thumb]';
  }

  /**
   * ギャラリータイプのスライダー初期化
   */
  galleryInit() {
    const splide = new Splide(this.parentSelector, {
      type: 'slide',
      arrows: true,
      pagination: true,
      perPage: 1,
      gap: 20,
      breakpoints: {
        767: {
          perPage: 1,
        },
      }
    });
    const thumbnails = [...document.querySelectorAll(this.thumbsSelector)];
    let current;
    for (let i = 0; i < thumbnails.length; i++) {
      initThumbnail(thumbnails[i], i);
    }
    function initThumbnail(thumbnail, index) {
      thumbnail.addEventListener('click', function () {
        splide.go(index);
      });
    }
    splide.on('mounted move', function () {
      let thumbnail = thumbnails[splide.index];
      if (thumbnail) {
        if (current) {
          current.classList.remove('is-active');
        }
        thumbnail.classList.add('is-active');
        current = thumbnail;
      }
    });
    splide.mount();
  }

  init() {
    if (!this.elmParent) return;
    this.galleryInit();
  }
}