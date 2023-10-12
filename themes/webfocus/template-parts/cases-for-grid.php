<div class="<?php the_field('color-type'); ?> <?php the_field('custom-class'); ?>" id="<?php the_field('custom-id'); ?>">



  <?php if (get_field('case_page_is_ready')) : ?>

    <a class="full-case-img" href="<?php the_permalink(); ?>">

    <?php else : ?>

      <a class="full-case-img" href="<?php the_field('link'); ?>" target="_blank">


      <?php endif ?>

      <img src="<?php
                if (the_post_thumbnail_url()) {
                  echo the_post_thumbnail_url();
                } ?>" alt="case-img" loading="lazy">
      </a>

      <?php if (get_field('case_page_is_ready')) : ?>

        <a href="<?php the_permalink(); ?>">

        <?php else : ?>

          <a href="<?php the_field('link'); ?>" target="_blank">

          <?php endif ?>
          <h2><?php the_title(); ?></h2>
          <?php // echo gettype(get_field('case_page_is_ready')); ?>
          </a>
          <div class="offer-cases__tags">
            <?php
            the_terms(get_the_ID(), 'case-tag', '', '', '');
            ?>
          </div>
</div>