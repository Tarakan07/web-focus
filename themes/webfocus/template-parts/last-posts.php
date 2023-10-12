<section class="section-std">
  <div class="container">
    <div class=" wow arrow-fall-down">
      <div class="arrow-fall"></div>
      <div class="arrow-fall"></div>
      <div class="arrow-fall"></div>
      <div class="arrow-fall"></div>
    </div>
    <h4 class="wow section-subtitle">интересное</h4>
    <div class="title-wrp">
      <h2 class="wow section-title">Наши статьи и новости</h2>
      <a class="title-link reviews-link" href="/blog/">Все статьи</a>
    </div>
    <p class="wow section-p">
      В нашем блоге собрали для вас на 100% полезную информацию. Лекции, лонгриды, вопросы и ответы. Всё, что может
      интересно как клиенту, так и тому, кто работает в digital-сфере!
    </p>
    <div class="post-preview-block">

      <?php
      $posts = get_posts(array(
        'numberposts' => 2,
        'category'    => array(4, 5), //posts/news(domen4,5)
      ));
      rsort($posts);

      foreach ($posts as $post) {
        setup_postdata($post);
      ?>
        <a href="<?php the_permalink(); ?>" class="post-preview">
          <div class="post-preview__img">
            <img src="<?php
                      if (the_post_thumbnail_url()) {
                        echo the_post_thumbnail_url();
                      } ?>" alt="post-img">
          </div>
          <div class="post-preview-text">
            <h3><?php the_title() ?></h3>
            <?php the_excerpt(); ?>
            <button aria-label="Read More" type="button" class="reviews-read-more">Читать далее</button>
          </div>
        </a>
      <?php
      }
      ?>
    </div>
  </div>
</section>