<?php

/*
    Template Name: vse-kursy
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
          <h1 class="sub-hero__title">Все курсы</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Компания Веб Фокус создала курсы по разным направлениям, основываясь на своем многолетнем опыте. Они подойдут как начинающим, так и тем, кто хочет расширить список своих навыков и углубить знания.
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
  
  <div class="tmpl-cases">
    <?php get_template_part('template-parts/course-cases'); ?>
  </div>

  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>