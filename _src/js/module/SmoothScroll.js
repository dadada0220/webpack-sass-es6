/**
 * スムーススクロールを実行するクラス
 * @see https://www.to-r.net/media/smooth_scrolling_2019/
 */

// モダンブラウザ用のポリフィル
import smoothscroll from 'smoothscroll-polyfill';

export default class SmoothScroll {
  constructor(_parm) {
    this.elmLinks = [...document.querySelectorAll(_parm.targets)];
    // 固定ヘッダーの場合、ヘッダー要素を指定する（高さ分スクロール位置をズラす）
    this.elmFixHeader = document.querySelector(_parm.fixHeader) || false;
    this.addGap = _parm.addGap || 0;
  }

  /**
   * 任意の位置までスクロールする
   * @param {EventObject} _event イベントのオブジェクト
   */
  scroll(_event) {
    smoothscroll.polyfill();
    _event.preventDefault();
    const elmTarget = document.querySelector(_event.currentTarget.getAttribute('href'));
    const targetOffset = elmTarget.getBoundingClientRect().top;
    const nowOffset = window.pageYOffset;
    const gap = this.elmFixHeader ? this.elmFixHeader.clientHeight : 0;
    const finishOffset = targetOffset + nowOffset - gap - this.addGap;
    window.scrollTo({
      top: finishOffset,
      behavior: 'smooth',
    });
  }

  /**
   * イベント付与
   */
  addEvent() {
    this.elmLinks.forEach((_elmLink) => {
      _elmLink.addEventListener('click', (_ev) => {
        this.scroll(_ev);
      });
    });
  }

  init() {
    if (!this.elmLinks.length) return;
    this.addEvent();
  }
}
