<?php
$page_name = '';
$page_description = '';
?>

<?php include(__dir__ . '/module/header.php'); ?>

<div class="l-index">

  <div class="p-mv">
    <h1 class="p-mv__title">Index</h1>
    <p class="p-mv__lead">description</p>
    <div class="p-mv__bg">
      <picture>
        <source media="(min-width:768px)" srcset="<?= $ASSETS_IMG . 'index/mv/bg-lg.jpg'; ?>" width="1200" height="800">
        <img src="<?= $ASSETS_IMG . 'index/mv/bg-sm.jpg'; ?>" alt="" width="400" height="600">
      </picture>
    </div>
  </div>

  <div class="p-slider">
    <div class="p-slider__main splide" id="js-slider">
      <div class="splide__track">
        <ul class="splide__list">
          <?php for ($i = 1; $i < 6; $i++) : ?>
            <li class="splide__slide">
              <img src="<?= $ASSETS_IMG . 'index/slider/0' . $i . '.jpg'; ?>" alt="" width="600" height="400">
            </li>
          <?php endfor; ?>
        </ul>
      </div>
    </div>
    <ul class="p-slider__thumb">
      <?php for ($i = 1; $i < 6; $i++) : ?>
        <li data-slider-thumb>
          <button type="button">
            <img src="<?= $ASSETS_IMG . 'index/slider/0' . $i . '.jpg'; ?>" alt="" width="200" height="120">
          </button>
        </li>
      <?php endfor; ?>
    </ul>
  </div>

  <section class="l-index__section">

  </section>

</div>

<?php include(__dir__ . '/module/footer.php'); ?>