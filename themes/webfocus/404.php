<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package web-focus
 */

get_header();
?>


<main class="content-404">
	<h1 class="title-404"><?php esc_html_e('404', 'web-focus'); ?></h1>
	<h3>Страница недоступна :(</h3>
	<div class="linear-hover-border-btn bg-white">
		<a href="/" type="button" class="linear-link"><span>на главную</span></a>
	</div>
</main>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>