<?php

/*
    Template Name: Vacancies
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
          <h1 class="sub-hero__title">Вакансии</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                  Мы всегда открыты для людей, которые умеют хорошо делать свое дело и развиваться дальше. Пришлите своё резюме на интересующую позицию и напишите нам о себе, приложив свои лучшие работы на <a href="mailto:kj@webfocus.by">kj@webfocus.by</a>
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
    <div class="container custom_drop-down-overflow-hidden">
      <div class=" wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow section-subtitle">поиск работы</h4>
      <h2 class="wow section-title ms-720">
        Нашей компании требуются:
      </h2>
      <div class="accardion-block vacancies">

        <?php

        $loop = CFS()->get('vacancy');
        foreach ($loop as $row) { ?>


          <details>
            <summary>
              <h3><?php echo $row['vacancyName']; ?></h3>
            </summary>
            <div class="summary-content">
              <?php echo $row['vacancyDescription']; ?>

              <div class="order-btn-wrp">
                <div class="linear-hover-border-btn ">
                  <button type="button" class="linear-link"><span>ОТКЛИКНУТЬСЯ</span></button>
                </div>
              </div>

            </div>

          </details>
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