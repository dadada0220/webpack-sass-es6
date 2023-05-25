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
          <a href="<?php echo home_url(''); ?>">
            <img src="<?php echo $ASSETS_IMG . '_common/logo/logo.svg'; ?>" alt="<?php echo $SITE_NAME; ?>" width="84" height="35">
          </a>
        </div>
        <nav class="l-header__nav is-md-show">
          <ul class="p-header-menu">
            <li class="p-header-menu__item">
              <a href="<?php echo home_url(''); ?>">トップページ</a>
            </li>
            <li class="p-header-menu__item">
              <a href="<?php echo home_url('slider'); ?>">スライダー</a>
            </li>
            <li class="p-header-menu__item">
              <a href="<?php echo home_url('form'); ?>">フォーム</a>
            </li>
          </ul>
        </nav>
        <div class="l-header__drawer-menu-btn">
          <button type="button" class="c-hamburger-menu" id="js-drawer-menu-toggle-btn" role="button" aria-expanded="false" data-micromodal-trigger="js-drawer-menu">
            <span></span>
          </button>
        </div>
      </div>

      <div class="p-drawer-menu" id="js-drawer-menu" aria-hidden="true">
        <div class="p-drawer-menu__overlay" tabindex="-1" data-micromodal-close="data-micromodal-close">
          <div class="p-drawer-menu__container" id="js-drawer-menu-container" role="navigation" aria-modal="true" aria-labelledby="bl_drawer">
            <ul class="p-drawer-menu__menu-list">
              <li>
                <a href="<?php echo home_url(''); ?>">トップページ</a>
              </li>
              <li>
                <a href="<?php echo home_url('slider'); ?>">スライダー</a>
              </li>
              <li>
                <a href="<?php echo home_url('form'); ?>">フォーム</a>
              </li>
            </ul>
            <button class="p-drawer-menu__close-btn" type="button" role="button" data-drawer-menu-close-btn>閉じる</button>
          </div>
        </div>
      </div>

    </header>

    <div class="l-main">