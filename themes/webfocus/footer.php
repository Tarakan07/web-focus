<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package web-focus
 */

?>

<footer>
	<div class="container">
		<div class="footer-menu">
			<div class="footer-info">
				<div class="footer-logo__wrp">
					<a class="footer-logo" href=""></a>
					<ul class="social-links-small social-links_footer">
						<li><a class="social-links__item whats" rel="nofollow" target="_blank" href="https://wa.me/375291544000"></a></li>
						<li><a class="social-links__item viber" rel="nofollow" target="_blank" href="viber://chat?number=%2B375291544000"></a></li>
						<li><a class="social-links__item instagramm" rel="nofollow" target="_blank" href="https://www.instagram.com/webfocus.by/ "></a></li>
						<li><a class=" social-links__item skype" rel="nofollow" target="_blank" href="https://join.skype.com/invite/jY1Z8exhC1eS"></a></li>
					</ul>
				</div>

				<ul class="contact-info">
					<li><a target="_blank" href="tel:+375291544000">+375 (29) 15-44-000</a></li>
					<li><a target="_blank" href="https://yandex.by/maps/-/CCU4EITFCC">г.Минск,
							ул.Широкая, д.3, оф.146</a></li>
					<li><a href="mailto:info@webfocus.by">info@webfocus.by</a></li>
				</ul>
				<ul class="social-links_footer">
					<li><a class="social-links__item whats" rel="nofollow" target="_blank" href="https://wa.me/375291544000"></a></li>
					<li><a class="social-links__item viber" rel="nofollow" target="_blank" href="viber://chat?number=%2B375291544000"></a></li>
					<li><a class="social-links__item instagramm" rel="nofollow" target="_blank" href="https://www.instagram.com/webfocus.by/ "></a></li>
					<li><a class="social-links__item skype" rel="nofollow" target="_blank" href="https://join.skype.com/invite/jY1Z8exhC1eS"></a></li>
				</ul>
			</div>
			<nav class="footer-nav">
				<div class="footer-nav-wrp company">
					<h4 class="footer-nav-title">О компании</h4>
					<ul class="footer-nav_company">
						<li><a href="/case/">Портфолио</a></li>
						<li><a href="/otzyvy/">Отзывы</a></li>
						<li><a href="/vakansii/">Вакансии</a></li>
						<li><a href="/blog/">Блог</a></li>
						<li><a href="/rekvizity/">Реквизиты</a></li>
						<li><a href="/partnery/">Партнеры</a></li>
					</ul>
				</div>
				<div class="footer-nav-wrp services">
					<h4 class="footer-nav-title">Услуги</h4>
					<ul class="footer-nav_servces">
						<li><a href="/razrabotka-sajtov/">Разработка</a></li>
						<li><a href="/seo/">SEO</a></li>
						<li><a href="/kontekstnaja-reklama/">Контекст</a></li>
						<li><a href="/smm/">SMM</a></li>
						<li><a href="/brending-i-dizajn/">Дизайн</a></li>
						<li><a href="#">Обучающие курсы</a></li>
					</ul>
				</div>
				<div class="footer-nav-wrp chavo ">
					<ul class="footer-nav_chavo">
						<li> <a href="/chastye-voprosy/">ЧаВо</a></li>
						<li> <a href="/kontakty/">Контакты</a></li>
						<li><a href="/wiki/">Wiki</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="prod-by">
			<p>© 2023 ООО “Веб Фокус” УНП 193104886</p>
			<ul>
				<li><a href="#">Договор оферты</a></li>
				<li><a href="#">Карта сайта</a></li>
				<li><a href="#">Политика конфиденциальности</a></li>
			</ul>
		</div>
	</div>
</footer>

<div id='order-popup' class="modal-window-wrp">
	<form action="#" class="modal-window send-request__form" id="popup-form">
		<button aria-label="close" type="button" class="modal-close-btn">

		</button>
		<fieldset>
			<legend>
				<h2 class="section-title">
					Оставьте заявку!
				</h2>
				<p>

				</p>
			</legend>
			<div class="send-request-input-wrp">
				<input pattern="[A-Za-zА-Яа-я0-9_\s+]{1,}" class="request-input" type="text" placeholder="Имя *">
				<span class="input-validate">Введите имя</span>
			</div>
			<div class="send-request-input-wrp">
				<input onkeyup="this.value = this.value.replace(/[^\d]/g,'');" pattern="[0-9]{9,}" maxlength="12" class="request-input" type="tel" placeholder="Телефон *">
				<span class="input-validate">Введите телефон</span>
			</div>
			<div class="send-request-input-wrp">
				<input pattern='^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$' class="request-input" type="email" placeholder="E-mail *">
				<span class="input-validate">Введите e-mail</span>
			</div>

			<div class="send-btn-wrp">
				<div class="linear-hover-border-btn ">
					<button aria-label="submit" type="submit" class="linear-link"><span>ОТПРАВИТЬ</span></button>
				</div>
				<p>Нажимая кнопку, я соглашаюсь
					на обработку данных</p>
			</div>
		</fieldset>
	</form>
</div>

<div id="confirm-error-modal" class="modal-window-wrp ">
	<div class="modal-window">
		<button aria-label="close" type="button" class="modal-close-btn">
		</button>
		<h2></h2>
		<p></p>
	</div>
</div>

<?php wp_footer(); ?>
</body>

</html>