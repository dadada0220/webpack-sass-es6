<?php include(__DIR__ . '/_config.php'); ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include(__dir__ . '/head.php'); ?>
</head>

<body>

  <div class="l-wrapper">

    <header class="l-header" id="js-header">

      <div class="l-header__inner">
        <div class="l-header__logo">
          <a href="<?= home_url(''); ?>">
            <img src="<?= $ASSETS_IMG . '_common/logo/logo.svg'; ?>" alt="<?= $SITE_NAME; ?>" width="84" height="35">
          </a>
        </div>
        <nav class="l-header__nav is-md-show">
          <ul class="p-header-menu">
            <li class="p-header-menu__item">
              <a href="<?= home_url(''); ?>" class="p-header-menu__link">TOP</a>
            </li>
            <li class="p-header-menu__item">
              <a href="<?= home_url('page'); ?>" class="p-header-menu__link">PAGE</a>
            </li>
          </ul>
        </nav>
        <div class="l-header__drawer-menu-btn">
          <!-- 開く/閉じるボタンが同じ要素の場合 -->
          <button type="button" class="c-hamburger-menu" id="js-drawer-menu-toggle-btn" role="button" aria-expanded="false" data-micromodal-trigger="js-drawer-menu">
            <span></span>
          </button>
          <!-- 開く/閉じるボタンが違う要素の場合
          DrawerMenuToggle.jsは読み込ませなくて大丈夫
          scriptの読み込ませる位置は適宜調整すること
          <button type="button" data-micromodal-trigger="js-drawer-menu">開くボタン</button>
          <button type="button" data-micromodal-close>閉じるボタン</button>
          <script>
            MicroModal.init({
              disableScroll: true,
              awaitOpenAnimation: true,
              awaitCloseAnimation: true,
              openClass: 'is-active',
            });
          </script> -->
        </div>
      </div>

      <div class="p-drawer-menu" id="js-drawer-menu" aria-hidden="true">
        <div class="p-drawer-menu__overlay" tabindex="-1" data-micromodal-close="data-micromodal-close">
          <div class="p-drawer-menu__container" id="js-drawer-menu-container" role="navigation" aria-modal="true" aria-labelledby="bl_drawer">
            <ul class="p-drawer-menu__menu-list">
              <li>
                <a href="<?= home_url(''); ?>">TOP</a>
              </li>
              <li>
                <a href="<?= home_url('page'); ?>">PAGE</a>
              </li>
            </ul>
            <button class="p-drawer-menu__close-btn" type="button" role="button" data-drawer-menu-close-btn>Close</button>
          </div>
        </div>
      </div>

    </header>

    <div class="l-main">