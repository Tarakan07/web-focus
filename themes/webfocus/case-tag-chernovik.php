        <div class="tagcloud">
          <?php
          $case_tag = get_terms(array(
            'taxonomy'   => 'case-tag',
            'hide_empty' => true,
            'pad_counts'  => true,
          )); ?>
          <?php
          foreach ($case_tag as $post) {
            $curTerm = $wp_query->queried_object;
            $class = ($post->name == $curTerm->name) ? 'active' : '';
          ?>
            <a href="<?php echo esc_url(get_term_link($post)) ?>" class="<?php echo $class; ?> tag-cloud-link">
              <?php echo $post->name; ?>
            </a>
          <?php
          }
          wp_reset_postdata();
          ?>
        </div>