<?php

/*
    Template Name: Reviews
    Template post type:  page
    */

?>

<?php get_header() ?>



<main>
  <div class="sub-hero-wrp">
    <lottie-player class="bg-animation contekst" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/other-animation.json" loop speed="1" autoplay></lottie-player>
    <section class="sub-hero blog-first-screen">

      <div class="container">
        <div class="sub-hero-wrapper">

          <?php echo do_shortcode('[breadcrumb_simple]') ?>
          <h1 class="sub-hero__title">Отзывы </h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                  Успешное выполнение работ подтверждают многочисленные отзывы довольных клиентов. Мы высоко ценим Ваше доверие и никогда не обманываем ожидания.</a>
                </p>
              </div>
            </div>
          </div>
          <div class="arrow-down-wrapper">
            <div class="arrow-down-wrp">
              <div class="arrow-down"> </div>
            </div>
          </div>
        </div>
    </section>
  </div>

  <section class="section-std">
    <div class="container">
      <div class=" wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow section-subtitle">фидбэк</h4>
      <h2 class="wow section-title ms-720">
        Отзывы о работе с нами:
      </h2>

      <div class="reviews-pages-items-wrp">

        <?php




        $loop = CFS()->get('reviews');
        foreach ($loop as $row) { ?>

          <div class="reviews-page-item">

            <?php

            if (trim(!empty($row['reviewerLogo']))) {
            ?>
              <img class="reviews-page-item__bg-img" src="<?php echo $row['reviewerLogo']; ?>" alt="bg">
            <?php
            }
            ?>
            <h3><?php echo $row['reviewerName']; ?></h3>
            <p class="reviews-page-item__sub-title">
              <?php echo $row['reviewerPosition']; ?>
            </p>
            <p class="reviews-page-item__text">
              <?php echo $row['reviewText']; ?>
            </p>
            <?php

            if (trim(!empty($row['reviewImage']))) {
            ?>
              <a data-lightbox="<?php echo $row['reviewerName']; ?>" href="<?php echo $row['reviewImage']; ?>" class="reviews-page-item__doc-link">
                <span>посмотреть документ</span>
              </a>

            <?php
            }
            ?>
          </div>
        <?php
        }
        ?>

      </div>
    </div>
  </section>


  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>



</main>
<?php get_footer() ?>