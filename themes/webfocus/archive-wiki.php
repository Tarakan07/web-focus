<?php
get_header();
?>
<main id="primary" class="site-main">
	<?php if (have_posts()) : ?>

		<div class="sub-hero-wrp">
			<lottie-player class="bg-animation contekst" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/other-animation.json" loop speed="1" autoplay></lottie-player>
			<section class="sub-hero blog-first-screen">
				<div class="container">
					<div class="sub-hero-wrapper">
						<?php echo do_shortcode('[breadcrumb_simple]'); ?>
						<h1 class="sub-hero__title"><?php the_archive_title(); ?></h1>
						<div class="sub-hero__info-wrapper">
							<div class="sub-hero__info">
								<div class="sub-hero__info_left">
									<?php the_archive_description(); ?>
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
				<h4 class="wow section-subtitle">словарь</h4>
				<h2 class="wow section-title ms-720">
					Энциклопедия для интернет-
					маркетолога.
				</h2>
				<form class="form-search" method="get" action="<?php echo esc_url(home_url('/wiki/')); ?>">
					<input class="input-search" type="text" value="" name="search_query">
					<div><input class="input-submit" type="submit" id="searchsubmit" value="" /></div>
				</form>
				<!-- <section><?php get_search_form(); ?></section> -->
				<!-- <?php
						$terms = get_terms([
							'taxonomy'      => ['wiki-category'],
							'orderby'       => 'count',
							'order'         => 'DESC',

						]);
						?> -->
				<div class="cities-grid wiki">
					<?php
					foreach ($terms as $term) {
					?>
						<div class="city-card">
							<h3><a href='<?php echo $term->slug ?>'><?php echo $term->name ?></a></h3>
							<ul class="contacts-list">
								<?php
								$args = array(
									'post_type' => 'wiki',
									'wiki-category' => $term->slug
								);
								$query = new WP_Query($args);

								if ($query->have_posts()) {
									while ($query->have_posts()) : $query->the_post(); ?>
										<li><span><?php the_title(); ?></span></li>
										<!-- <li><a id="post-<?php the_ID(); ?>" href=" <?php the_permalink(); ?>"><?php the_title(); ?></a></li> -->

								<?php endwhile;

									echo '</ul>';
								}
								wp_reset_postdata();
								?>
								<a href="<?php echo $term->slug ?>" class="reviews-read-more">Посмотреть <?php echo $term->count ?> записей</a>
								<span class="advantages-number"><?php echo $term->count ?></span>

						</div>

					<?php
					} ?>
				</div>
		</section>
	<?php
	endif;
	?>
	<?php get_template_part('template-parts/request-form'); ?>
	<?php get_template_part('template-parts/last-posts'); ?>
	<?php get_template_part('template-parts/reviews-slider'); ?>
</main><!-- #main -->

<?php
get_footer();
