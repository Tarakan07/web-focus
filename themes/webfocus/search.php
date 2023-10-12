<?php

?>
<?php
get_header();
$thisCat = get_queried_object();
?>

<main>
  <div class="sub-hero-wrp">
    <lottie-player class="bg-animation contekst" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/other-animation.json" loop speed="1" autoplay></lottie-player>
    <section class="sub-hero blog-first-screen">
      <div class="container">
        <div class="sub-hero-wrapper">
          <?php echo do_shortcode('[breadcrumb_simple]'); ?>
          <h1 class="sub-hero__title">Wiki</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                Энциклопедия wiki для интернет-маркетолога. В ней Вы найдете термины и информацию по маркетингу, digital маркетингу, продвижению сайтов, разработке сайтов, контекстной рекламе, медийной рекламе, веб дизайну, cмм и другие полезные знания.
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
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow section-subtitle"><?php the_search_query(); ?></h4>

      <div>
        <?php
        $posts = get_terms(array(
          'taxonomy'   => 'wiki-category',
          'hide_empty' => true,
          'pad_counts'  => true,
          'orderby' => 'count',
          'order' => 'DESC',
        ));
        ?>

        <div class='blog-content'>
          <div>
            <h2 class='wow section-title ms-720'>Поиск по запросу “<?php the_search_query(); ?>”</h2>

            <div class='blog-posts__wrapper'>
              <div class='accardion-block vacancies wiki'>

                <ul id="labels-list" class="accardion-checkbox-labels-list wiki-categories-list">

                  <?php
                  foreach ($posts as $post) {
                    $curTerm = $wp_query->queried_object;
                    $class = ($post->name == $curTerm->name) ? 'active' : '';
                  ?>
                    <li class="<?php echo $class; ?> cat-item">
                      <a href="<?php echo esc_url(get_term_link($post)) ?>">
                        <span><?php echo $post->name; ?> </span>
                      </a>
                    </li>
                  <?php
                  }
                  wp_reset_postdata();
                  ?>

                </ul>
                <?php
                $args = array(
                  'post_type' => 'wiki',
                  'search_query' => '' . $s . '',
                  'posts_per_page' => -1,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {

                  while ($query->have_posts()) : $query->the_post(); ?>
                    <details>
                      <summary>
                        <h3><?php the_title(); ?></h3>
                      </summary>
                      <div class=" summary-content">
                        <?php the_content(); ?>
                      </div>
                    </details>
                  <?php endwhile;
                } // завершение проверки, содержатся ли записи по запросу     
                // используем сброс данных записи, чтобы восстановить оригинальный запрос
                else { ?>
                  <h3 class='wow section-title ms-720'>По вашему запросу ничего не найдено.</h3>
                <?php
                }
                wp_reset_postdata();
                ?>
              </div>
            </div>
          </div>
          <aside class='sidebar post-sidebar'>
            <section class='widget'>
              <h2 class='widget-title'>Категории</h2>
              <div>

                <ul>
                  <?php
                  foreach ($posts as $post) {
                    $curTerm = $wp_query->queried_object;
                    $class = ($post->name == $curTerm->name) ? 'active' : '';
                  ?>
                    <li class="<?php echo $class; ?> cat-item">
                      <a href="<?php echo esc_url(get_term_link($post)) ?>">
                        <?php echo $post->name; ?> (<?php echo $post->count; ?>)
                      </a>
                    </li>
                  <?php
                  }
                  wp_reset_postdata();
                  ?>
                </ul>
              </div>
            </section>
          </aside>
        </div>

      </div>

    </div>
  </section>
</main>


<?php get_template_part('template-parts/request-form'); ?>
<?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>