<?php
/*
    Template Name: blog
    Template post type:  page
*/
?>
<?php get_header();
?>
<?php

$thisCat = get_category(get_query_var('cat'));
?>
<main>
<div class="sub-hero-wrp">
<lottie-player class="bg-animation contekst" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/other-animation.json" loop speed="1" autoplay></lottie-player>
  <section class="sub-hero blog-first-screen">
    <div class="container">
      <div class="sub-hero-wrapper">
        <?php echo do_shortcode('[breadcrumb_simple]') ?>
        <h1 class="sub-hero__title"><?php echo $thisCat->name ?></h1>
        <div class="sub-hero__info-wrapper">
          <div class="sub-hero__info">
            <div class="sub-hero__info_left">
              <?php echo $thisCat->description ?>
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
  <section class='section-std'>
    <div class="container">
      <div class='blog-content'>
        <div class='blog-posts__wrapper'>
          <div class='posts'>
            <?php if (have_posts()) :
              /* Start the Loop */
              while (have_posts()) :
                the_post();

                get_template_part('template-parts/blog-post-content', get_post_type());

              endwhile;


            else :

              get_template_part('template-parts/content', 'none');

            endif;
            ?>
          </div>
          <div class='pagination'>
            <?php
            the_posts_navigation(array(
              'prev_text'          => ' <svg width="32" height="8" viewBox="0 0 32 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.961142 4.36869C0.765881 4.17343 0.765881 3.85685 0.961142 3.66158L4.14312 0.479603C4.33838 0.284341 4.65497 0.284341 4.85023 0.479603C5.04549 0.674865 5.04549 0.991447 4.85023 1.18671L2.0218 4.01514L4.85023 6.84356C5.04549 7.03883 5.04549 7.35541 4.85023 7.55067C4.65497 7.74593 4.33838 7.74593 4.14312 7.55067L0.961142 4.36869ZM31.3147 4.51514H1.3147V3.51514H31.3147V4.51514Z" fill="black"/>
                    <defs>
                    <linearGradient id="pagination_linear" x1="36.1947" y1="5.11501" x2="36.1333" y2="2.735" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#AB85FF"/>
                        <stop offset="0.526042" stop-color="#EBA3E3"/>
                        <stop offset="1" stop-color="#FFDBE4"/>
                    </linearGradient>
                    </defs>
                    </svg>
                    
                    <p>Предыдущие записи</p>',

              'next_text'          => '<p>Следующие записи</p> <svg width="31" height="8" viewBox="0 0 31 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30.3545 4.36869C30.5498 4.17343 30.5498 3.85685 30.3545 3.66158L27.1726 0.479603C26.9773 0.284341 26.6607 0.284341 26.4654 0.479603C26.2702 0.674865 26.2702 0.991447 26.4654 1.18671L29.2939 4.01514L26.4654 6.84356C26.2702 7.03883 26.2702 7.35541 26.4654 7.55067C26.6607 7.74593 26.9773 7.74593 27.1726 7.55067L30.3545 4.36869ZM0.000976562 4.51514H30.001V3.51514H0.000976562V4.51514Z" fill="black"/>
                    <defs>
                    <linearGradient id="pagination_linear" x1="36.1947" y1="5.11501" x2="36.1333" y2="2.735" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#AB85FF"/>
                        <stop offset="0.526042" stop-color="#EBA3E3"/>
                        <stop offset="1" stop-color="#FFDBE4"/>
                    </linearGradient>
                    </defs>
                    </svg>                    
                    ',));
            ?>
          </div>
        </div>
        <aside class='sidebar post-sidebar'>
          <?php dynamic_sidebar('sidebar-1'); ?>
          <section class='widget'>
            <h2 class='widget-title'>Актуальное</h2>
            <div>
              <?php
              $posts = get_posts(array(
                'numberposts' => 5,
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ));
              foreach ($posts as $post) {
                setup_postdata($post);
              ?>
                <div class="article">
                  <div class="content">
                    <p class="title"><?php the_title() ?></p>
                    <p class="bold"><a class="article-link" href="<?php the_permalink() ?>">Читать дальше</a></p>
                  </div>
                </div>
              <?php
              }
              wp_reset_postdata();
              ?>
            </div>
          </section>
        </aside>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>