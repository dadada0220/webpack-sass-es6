/**
 * ドロワーメニュー（開く/閉じるボタンがどちらも同じ要素の場合）
 * @plugin https://micromodal.vercel.app/
 */

export default class DrawerMenuToggle {
  constructor(_parm) {
    this.modalId = _parm.modalId;
    this.modal = document.querySelector(`#${this.modalId}`) || false;
    if (!this.modal) return;
    this.toggleBtn = document.querySelector(_parm.toggleBtn) || false;
    this.closeButtons = _parm.closeButtons ? [...document.querySelectorAll(_parm.closeButtons)] : false;
    this.container = document.querySelector(_parm.container) || false;
  }

  /**
   * モーダルを開く
   */
  open() {
    MicroModal.show(this.modalId, {
      onShow: _modal => {
        _modal.ariaHidden = false;
        this.toggleBtn.ariaExpanded = true;
        delete this.toggleBtn.dataset.micromodalTrigger;
        this.toggleBtn.dataset.micromodalClose = this.modalId;
      },
      onClose: modal => {
        modal.ariaHidden = true;
        this.toggleBtn.ariaExpanded = false;
        delete this.toggleBtn.dataset.micromodalClose;
        this.toggleBtn.dataset.micromodalTrigger = this.modalId;
      },
      disableScroll: true,
      awaitOpenAnimation: true,
      awaitCloseAnimation: true,
      openClass: 'is-active',
    });
  }

  /**
   * モーダルを閉じる
   */
  close() {
    MicroModal.close(this.modalId);
  }

  /**
   * モーダルの"開く/閉じる"を切り替える
   */
  toggle() {
    if (this.toggleBtn.ariaExpanded == 'false') {
      this.open();
      return;
    }
    this.close();
  }

  /**
   * イベント付与
   */
  addEvent() {
    if (this.container) {
      this.container.addEventListener('click', (_ev) => {
        _ev.stopImmediatePropagation();
      });
    }
    if (this.toggleBtn) {
      this.toggleBtn.addEventListener('click', (_ev) => {
        this.toggle();
      });
    }
    if (this.closeButtons.length) {
      this.closeButtons.forEach(_closeButton => {
        _closeButton.addEventListener('click', (_ev) => {
          _ev.preventDefault();
          MicroModal.close(this.modalId);
        })
      });
    }
  }

  init() {
    if (!this.modal) return;
    this.addEvent();
  }
}
