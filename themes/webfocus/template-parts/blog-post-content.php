<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article">
		<div class="content">
			<a href="<?php the_permalink() ?>" class='post-image'><?php echo get_the_post_thumbnail(); ?></a>
			<div class='post-info'>
				<p class="date small"><?php echo get_the_date() ?></p>
				<p class="category small"><?php
					foreach (get_the_category() as $category) {
						if ($category->name !== 'Блог') {
							printf(
								'<a href="%s" class="link link_text">%s</a>', // Шаблон вывода ссылки
								esc_url(get_category_link($category)), // Ссылка на рубрику
								esc_html($category->name) // Название рубрики
							);
						}
					}
					?>
				</p>
			</div>
			<h3 class="title"><?php the_title() ?></h3>
			<a href="<?php the_permalink() ?>" class="reviews-read-more">Читать дальше</a>

		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->