<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package web-focus
 */

?>
<!doctype html>
<html lang="ru">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body>
	<?php wp_body_open(); ?>
	<header>
		<div class="header-top-wrp">
			<div class="header-top">
				<?php if (!is_front_page()) {
					echo '<a href="/" class="site-logo-wrp">';
				}
				?>
				<svg id="header-logo" viewBox="0 0 170 53" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M22.71 28.92l4.63-19.43 6.04 21.99-4.98 18.33H14.36L.46 3.46h15.4l6.85 25.46zm32.82 20.89H40.78L28.05 3.46h15.6l11.88 46.35zm.15-46.35h14.1L57.18 47.4l-6.3-24.7 4.8-19.24z" fill="url(#paint0_linear)" />
					<path d="M126.88 23.93l-.1.25c-.05.05-.15.1-.2.15-.1.05-.2.05-.35.05h-1.06c-.15 0-.25-.05-.35-.05-.1-.05-.15-.05-.2-.15a.38.38 0 01-.1-.25l-2.77-9.99-2.57 10c0 .1-.05.14-.1.24a.7.7 0 01-.2.15c-.1.05-.2.05-.35.05h-1.11c-.15 0-.25-.05-.35-.05-.1-.05-.15-.05-.2-.15a.38.38 0 01-.1-.25l-3.48-12.2c-.05-.15-.05-.3-.05-.35 0-.1 0-.15.1-.2.05-.05.15-.1.3-.1h1.01c.1 0 .2.05.3.05.05.05.1.05.16.1 0 .05.05.1.05.2l2.97 11.05 2.81-11.05c0-.05.05-.15.1-.2.05-.05.1-.1.15-.1.06-.05.16-.05.3-.05h.96c.1 0 .2.05.25.05.05.05.1.05.16.1.05.05.05.1.1.2l3.02 11.05 2.92-11.05c0-.05.05-.15.05-.2 0-.05.05-.1.15-.1.05-.05.15-.05.25-.05h.45c.2 0 .35 0 .5.05.1 0 .2.05.26.1.05.05.1.1.1.2s0 .2-.05.35l-3.73 12.15zM140.17 23.58v.3c0 .1-.05.15-.05.25-.05.05-.05.1-.1.16-.05.05-.1.05-.15.05h-6.4a.81.81 0 01-.45-.16c-.15-.1-.2-.3-.2-.55v-11.8c0-.25.05-.45.2-.55.15-.1.3-.15.45-.15h6.3c.05 0 .1 0 .15.05.05.05.1.05.1.15.05.05.05.15.05.25s.05.2.05.35c0 .1 0 .25-.05.3 0 .1-.05.15-.05.2-.05.05-.05.1-.1.16-.05.05-.1.05-.15.05h-5.19v4.06h4.43c.05 0 .1 0 .15.05.05.05.1.05.1.15.05.05.05.15.05.2V17.76c0 .1-.05.15-.05.2-.05.05-.05.1-.1.1s-.1.05-.15.05h-4.43v4.72h5.24c.05 0 .1 0 .15.05.05.05.1.05.1.15.05.05.05.15.05.2.05.1.05.25.05.35zM151.8 20.52c0 .4-.05.8-.15 1.15a3.34 3.34 0 01-1.16 1.71 3.92 3.92 0 01-2.02.85c-.4.05-.8.1-1.3.1h-3.48a.81.81 0 01-.45-.15c-.15-.1-.2-.3-.2-.55v-11.8c0-.25.05-.45.2-.55.15-.1.3-.15.45-.15h3.02c.8 0 1.46.05 1.97.2.5.15.9.35 1.25.65.36.3.6.66.76 1.06.15.4.25.9.25 1.4 0 .3-.05.6-.1.9-.05.3-.2.56-.35.81-.15.25-.35.45-.56.65-.2.2-.45.35-.75.45.35.06.7.2 1 .36.3.2.61.4.81.7.25.3.4.6.55 1 .16.36.26.76.26 1.2zm-2.67-5.88c0-.3-.05-.6-.15-.85-.1-.25-.25-.5-.4-.65-.16-.15-.46-.3-.76-.4-.3-.1-.7-.15-1.2-.15h-1.82v4.26h2.01c.46 0 .8-.05 1.11-.2.3-.1.5-.3.7-.5.2-.2.3-.45.4-.7.06-.25.1-.55.1-.8zm.8 5.98a2.32 2.32 0 00-.75-1.8c-.25-.2-.55-.36-.9-.46-.36-.1-.81-.15-1.37-.15h-2.1v4.67h2.56c.4 0 .75-.05 1.06-.15.3-.1.55-.25.8-.4.25-.2.4-.4.55-.7.05-.3.16-.6.16-1.01zM121.14 36.94v.35c0 .1-.05.15-.05.25-.05.05-.05.1-.1.15-.05.05-.1.05-.15.05h-4.83v4.47h4.58c.05 0 .1 0 .15.05.05 0 .1.05.1.1.05.05.05.15.05.2v.7c0 .1-.05.15-.05.2-.05.05-.05.1-.1.16-.05.05-.1.05-.15.05H116v5.52c0 .05 0 .1-.05.15-.05.05-.05.1-.15.1-.05 0-.16.05-.25.05-.1 0-.26.05-.46.05-.15 0-.3 0-.4-.05-.1 0-.2-.05-.25-.05-.05 0-.1-.05-.15-.1-.05-.05-.05-.1-.05-.15v-12.3c0-.25.05-.46.2-.56.15-.1.3-.15.45-.15h5.94c.05 0 .1 0 .15.05.05.05.1.05.1.15.05.05.05.16.05.26v.3zM134.74 42.66c0 1.05-.16 2-.4 2.91a5.23 5.23 0 01-2.97 3.62c-.76.3-1.67.5-2.68.5-1 0-1.86-.15-2.56-.45-.7-.3-1.31-.7-1.81-1.3a5.92 5.92 0 01-1.06-2.12c-.25-.85-.35-1.8-.35-2.9 0-1.06.15-2.02.4-2.82.25-.85.65-1.56 1.16-2.16.5-.6 1.15-1.05 1.9-1.36.76-.3 1.67-.5 2.68-.5.95 0 1.8.15 2.56.45a4.73 4.73 0 012.87 3.36c.1.71.25 1.67.25 2.77zm-1.87.1c0-.75-.05-1.46-.2-2.1a4.96 4.96 0 00-.65-1.67 3 3 0 00-1.26-1.1c-.5-.25-1.16-.4-1.91-.4-.76 0-1.41.15-1.92.45-.5.3-.95.65-1.26 1.15a5.5 5.5 0 00-.7 1.66c-.15.65-.2 1.3-.2 2.01 0 .75.05 1.5.2 2.16.15.65.35 1.2.65 1.7.3.5.7.86 1.21 1.11.5.25 1.16.4 1.92.4.75 0 1.4-.15 1.96-.45.5-.3.95-.65 1.26-1.15.3-.5.55-1.06.7-1.71.1-.65.2-1.36.2-2.06zM146.3 47.53v.3c0 .1 0 .15-.04.2 0 .05-.05.1-.05.15-.05.05-.05.1-.15.15-.05.05-.2.16-.46.3-.2.16-.5.26-.8.4a5.63 5.63 0 01-2.47.5c-.85 0-1.6-.14-2.31-.44a4.91 4.91 0 01-2.87-3.32 10.17 10.17 0 010-5.72c.3-.85.7-1.6 1.2-2.16.51-.6 1.11-1.05 1.82-1.36.7-.3 1.5-.45 2.36-.45.4 0 .76.05 1.11.1.35.05.7.15 1 .25.31.1.61.25.81.4a2.72 2.72 0 01.7.56c.06.05.06.1.06.15 0 .05.05.15.05.25V38.44c0 .1-.05.15-.05.25-.05.05-.05.1-.1.15-.05.05-.1.05-.15.05-.1 0-.25-.05-.4-.2a6.53 6.53 0 00-1.66-.9c-.4-.15-.86-.2-1.42-.2a3.45 3.45 0 00-2.86 1.4c-.36.46-.6 1-.81 1.66a9.54 9.54 0 00-.05 4.47c.2.65.45 1.2.8 1.6.36.46.76.76 1.26 1.01a4.46 4.46 0 003.02.15c.4-.15.76-.25 1.01-.45.3-.15.5-.3.7-.45.2-.15.3-.2.4-.2.06 0 .1 0 .1.05.06 0 .06.05.1.1 0 .05.06.15.06.25.1.05.1.2.1.35zM158.6 44.52c0 .8-.11 1.5-.36 2.16a4.36 4.36 0 01-1 1.6c-.46.46-.97.76-1.62 1a6.9 6.9 0 01-4.13.06c-.6-.2-1.1-.5-1.56-.96a3.8 3.8 0 01-1-1.55 5.71 5.71 0 01-.36-2.16v-8.24c0-.05 0-.1.06-.15.05-.05.05-.05.15-.1.05 0 .15-.05.25-.05s.25-.05.45-.05c.15 0 .3 0 .4.05.1 0 .2.05.25.05.06 0 .1.05.16.1.05.05.05.1.05.15v7.99c0 .6.05 1.15.2 1.6a2.9 2.9 0 001.66 1.86c.4.15.85.25 1.36.25.5 0 .95-.05 1.36-.2.4-.15.75-.35 1-.65.26-.3.5-.65.66-1.1.15-.46.2-.96.2-1.56v-8.19c0-.05 0-.1.05-.15.05-.05.05-.05.15-.1.05 0 .15-.05.25-.05s.25-.05.4-.05c.16 0 .3 0 .4.05.1 0 .2.05.26.05.05 0 .1.05.15.1.05.05.05.1.05.15v8.09h.1zM164.73 49.59c-.45 0-.85-.05-1.2-.1-.4-.05-.7-.15-1.01-.25-.3-.1-.56-.2-.76-.35-.2-.1-.35-.2-.4-.3-.1-.1-.15-.2-.15-.3-.05-.16-.05-.3-.05-.5v-.36c0-.1.05-.2.05-.25.05-.05.05-.1.1-.15.05-.05.1-.05.15-.05.1 0 .25.05.4.15l.66.4c.25.15.6.25 1 .4.4.1.81.2 1.36.2.4 0 .76-.05 1.06-.15.3-.1.6-.25.8-.45.26-.2.41-.4.51-.7.1-.25.2-.6.2-.9 0-.36-.1-.7-.25-.96-.15-.25-.4-.5-.65-.7-.3-.2-.6-.4-.96-.56-.35-.15-.7-.35-1.1-.5-.36-.15-.76-.35-1.12-.55a4.5 4.5 0 01-.95-.75c-.3-.3-.5-.6-.7-1a3.9 3.9 0 01.04-2.87c.2-.45.5-.8.86-1.1.35-.3.8-.5 1.26-.66.5-.15 1-.25 1.6-.25.31 0 .61.05.92.1.3.05.55.1.85.2.25.1.5.2.7.3.2.1.36.2.4.25l.16.16c0 .05.05.1.05.15 0 .05 0 .15.05.2V38.04c0 .1-.05.15-.05.25 0 .05-.05.1-.1.15-.05.05-.1.05-.15.05a.87.87 0 01-.35-.15c-.16-.1-.36-.2-.6-.3-.26-.1-.51-.25-.81-.35a3.35 3.35 0 00-2.02 0c-.25.1-.5.25-.65.4-.2.15-.3.35-.4.6-.1.2-.16.45-.16.7 0 .36.1.7.26.96.15.25.4.5.7.7.3.2.6.4.96.55.35.16.7.36 1.1.5.4.16.76.36 1.11.56.35.2.7.45.96.75.3.3.5.6.7 1 .15.4.25.86.25 1.36a3.63 3.63 0 01-2.71 3.62c-.7.1-1.31.2-1.92.2z" fill="#484848" />
					<path d="M67.1 20.58H79.1l2.97-17.12H96.1l-8.15 46.15H59.1l3.92-11.8h13.04l1.05-6.18H65.15l1.96-11.05z" fill="url(#paint1_linear)" />
					<path d="M104.79.53h-.81v52.12h.8V.53z" fill="#484848" />
					<defs>
						<linearGradient id="paint0_linear" x1="10.18" y1="49.76" x2="66.46" y2="7.2" gradientUnits="userSpaceOnUse">
							<stop offset="0" stop-color="#F1C0CC" />
							<stop offset="1" stop-color="#A57CFE" />
						</linearGradient>
						<linearGradient id="paint1_linear" x1="94.39" y1="3.46" x2="63.38" y2="46.56" gradientUnits="userSpaceOnUse">
							<stop stop-color="#E9B9D1" />
							<stop offset="1" stop-color="#A57CFE" />
						</linearGradient>
					</defs>
				</svg>
				<?php if (!is_front_page()) {
					echo '</a>';
				} ?>
				<div class="header-top__links">
					<a class="company-tel" href="tel:+375291544000">
						<h3>+375 (29) 15-44-000</h3>
					</a>
					<ul class="header-top__menu">
						<li><a class="gradient-text" href="/o-kompanii/">О компании</a></li>
						<li><a class="gradient-text" href="/blog/">Блог</a></li>
						<li><a class="gradient-text" href="/kontakty/">Контакты</a></li>
						<li><a class="gradient-text" href="/case/">Портфолио</a></li>
					</ul>
				</div>
				<div class="btn-border-wrp header-menu-btn">
					<button aria-label="btn" class="main-menu-btn">Все услуги <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 7" fill="none">
							<path d="M1 1L5 6L9 1" stroke="black" stroke-linecap="round" />
						</svg></button>

					<div class="header-nav-wrapper">
						<div class="container">
							<div class="header-nav-content">
								<div class="header-menu__aside">
									<h2>Приглашаем на курсы!</h2>
									<p>Приглашаем вас на курсы от компании “Веб Фокус”. Предлагаем ознакомиться с нашими программами. </p>
									<div class="linear-hover-border-btn">
										<a href="#" class="linear-link"><span>Выбрать курс</span></a>
									</div>

									<div class="header-menu__aside_social">
										<a href="tel:+375291544000" class="tel-number">+375 (29) 15-44-000</a>
										<ul class="social-links-small social-links_header">
											<li><a class="social-links__item whats" href="https://wa.me/375291544000" target="_blank"></a></li>
											<li><a class="social-links__item viber" href="viber://chat?number=%2B375291544000" target="_blank"></a></li>
											<li><a class="social-links__item instagramm" href="https://www.instagram.com/webfocus.by/" target="_blank"></a></li>
											<li><a class="social-links__item skype" href="https://join.skype.com/invite/jY1Z8exhC1eS" target="_blank"></a></li>
										</ul>
									</div>
								</div>

								<?php wp_nav_menu([
									'menu' => 'Primary',
									'menu_class' => 'primary-menu',
									'menu_id' => 'header-menu',
									'depth' => 3,
								]); ?>
							</div>
						</div>

					</div>
				</div>
				<input type="checkbox" id="mobile-menu-check">
				<div class="menu-btn-wrp"><button aria-label="btn" id="menu-btn" class="menu-button"></button>
					<label for="mobile-menu-check">
					</label>

				</div>
				<div class="mobile-menu-wrapper">
					<ul class="main-small-mobile-menu">
						<li><a class="menu-active-link" href="/o-kompanii/">О компании</a></li>
						<li><a href="/blog/">Блог</a></li>
						<li><a href="/kontakty/">Контакты</a></li>
						<li><a href="/case/">Портфолио</a></li>
					</ul>
					<?php wp_nav_menu([
						'menu' => 'Primary',
						'menu_class' => 'primary-menu-mobile',
						'menu_id' => 'header-menu-mobile',
						'depth' => 3,
					]); ?>
					<div class="mobile-socials-wrp">
						<a href="tel:+375291544000" class="tel-number">+375 (29) 15-44-000</a>
						<ul class="social-links-small social-links_header">
							<li><a class="social-links__item whats" href="https://wa.me/375291544000" target="_blank"></a></li>
							<li><a class="social-links__item viber" href="viber://chat?number=%2B375291544000" target="_blank"></a></li>
							<li><a class="social-links__item instagramm" href="https://www.instagram.com/webfocus.by/" target="_blank"></a></li>
							<li><a class="social-links__item skype" href="https://join.skype.com/invite/jY1Z8exhC1eS" target="_blank"></a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
		<template id="mobile-menu-back">
			<button aria-label="back" type="button" class="back-to-main-menu-btn" onclick="backToMenu(this)">Назад</button>
			<a href="" class="menu-active-link"></a>
		</template>
		<template class="floating-card-img-wrp">
			<div class="floating-card-gray-layer">
				dont touch it!
			</div>
		</template>
	</header>