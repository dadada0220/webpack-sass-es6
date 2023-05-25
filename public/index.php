<?php

$PAGE_DATA = [
  'title' => '',
  'description' => '',
];

include(__dir__ . '/module/header.php');

?>

<div class="l-index">

  <div class="p-mv">
    <div class="p-mv__inner">
      <h1 class="p-mv__title">BASE TEMPLATE</h1>
    </div>
    <div class="p-mv__bg">
      <picture>
        <source media="(min-width:768px)" srcset="<?php echo $ASSETS_IMG . 'index/mv/bg-lg.jpg'; ?>" width="1200" height="800">
        <img src="<?php echo $ASSETS_IMG . 'index/mv/bg-sm.jpg'; ?>" alt="" width="400" height="600">
      </picture>
    </div>
  </div>

  <div class="p-slider">
    <div class="p-slider__main splide" id="js-slider">
      <div class="splide__track">
        <ul class="splide__list">
          <?php for ($i = 1; $i < 6; $i++) : ?>
            <li class="splide__slide">
              <img src="<?php echo $ASSETS_IMG . 'index/slider/0' . $i . '.jpg'; ?>" alt="" width="600" height="400">
            </li>
          <?php endfor; ?>
        </ul>
      </div>
    </div>
    <ul class="p-slider__thumb">
      <?php for ($i = 1; $i < 6; $i++) : ?>
        <li data-slider-thumb>
          <button type="button">
            <img src="<?php echo $ASSETS_IMG . 'index/slider/0' . $i . '.jpg'; ?>" alt="" width="200" height="120">
          </button>
        </li>
      <?php endfor; ?>
    </ul>
  </div>

  <section class="l-index__section">

  </section>

</div>

<?php include(__dir__ . '/module/footer.php'); ?>