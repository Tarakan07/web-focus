<?php
get_header();
use AnyComment\Rest\AnyCommentSocialAuth;
$urlPost = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>

<main class='post-template'>
	<div class="container">
		<section class="post-wrapper post-section__wrapper">
			<article class="post-content__wrapper">
				<div class='post-image'><?php echo get_the_post_thumbnail(); ?></div>
				<div class='post-info'>
					<div class='post-info__item-wrapper'>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/postsIcon/user(1)1.svg" alt="img">
						<div>
							<?php
							$author = get_the_author();
							echo $author;
							?>
						</div>
					</div>
					<div class='post-info__item-wrapper'>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/postsIcon/calendar2.svg" alt="img">
						<div>
							<?php
							$date = get_the_date();
							echo $date;
							?>
						</div>
					</div>
					<div class='post-info__item-wrapper'>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/postsIcon/speech-bubble2.svg" alt="img">

						<div>
							<?php
							$comments_number = comments_number();
							echo $comments_number;
							?>
						</div>
					</div>
					<div class='post-info__item-wrapper'>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/postsIcon/clock2.svg" alt="img">

						<div>
							<?php
							echo do_shortcode('[rt_reading_time postfix="минут"]')
							?>
						</div>
					</div>
				</div>
				<div class="post-content">
					<h1 class="post-content__title"><?php the_title(); ?></h1>
					<div class='post-content__share'>
						<div class='share__title'>Рассказать друзьям: </div>
						<div class='share__item-area-wrapper'>
							<a href="https://t.me/share/url?url=<?php echo get_permalink(); ?>">
								<svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.89498 12.8827L8.52003 18.1565C9.05648 18.1565 9.28881 17.926 9.56742 17.6493L12.0825 15.2457L17.2939 19.0622C18.2497 19.5949 18.9231 19.3144 19.1809 18.1829L22.6017 2.15381L22.6026 2.15287C22.9058 0.739977 22.0917 0.187477 21.1605 0.534088L1.05326 8.23225C-0.319022 8.76492 -0.298244 9.52992 0.819978 9.87653L5.96059 11.4755L17.9012 4.00398C18.4631 3.63187 18.9741 3.83775 18.5538 4.20987L8.89498 12.8827Z" fill="url(#post-share-icon__telegram)" />
									<defs>
										<linearGradient id="post-share-icon__telegram" x1="-3.68605" y1="21.209" x2="16.8009" y2="-10.5693" gradientUnits="userSpaceOnUse">
											<stop stop-color="#AB85FF" />
											<stop offset="0.526042" stop-color="#EBA3E3" />
											<stop offset="1" stop-color="#FFDBE4" />
										</linearGradient>
									</defs>
								</svg>
							</a>
							<!-- <a href="https://www.instagram.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>">
								<svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#post-share-icon__instagram)">
										<path d="M18.7644 0.194824H3.23742C1.46376 0.194824 0.0205078 1.64289 0.0205078 3.42246V19.0012C0.0205078 20.7807 1.46376 22.2288 3.23742 22.2288H18.7644C20.538 22.2288 21.9813 20.7807 21.9813 19.0012V3.42246C21.9813 1.64289 20.538 0.194824 18.7644 0.194824ZM11.0438 16.9785C7.85084 16.9785 5.25335 14.3724 5.25335 11.1688C5.25335 7.96518 7.85084 5.35904 11.0438 5.35904C14.2367 5.35904 16.8342 7.96518 16.8342 11.1688C16.8342 14.3724 14.2367 16.9785 11.0438 16.9785ZM17.4776 6.65009C16.4134 6.65009 15.5475 5.78132 15.5475 4.71351C15.5475 3.6457 16.4134 2.77693 17.4776 2.77693C18.5419 2.77693 19.4078 3.6457 19.4078 4.71351C19.4078 5.78132 18.5419 6.65009 17.4776 6.65009Z" fill="url(#post-share-icon__instagram0_linear)" />
										<path d="M17.4779 4.06787C17.1228 4.06787 16.8345 4.35718 16.8345 4.7134C16.8345 5.06961 17.1228 5.35892 17.4779 5.35892C17.8329 5.35892 18.1212 5.06961 18.1212 4.7134C18.1212 4.35718 17.8329 4.06787 17.4779 4.06787Z" fill="url(#post-share-icon__instagram1_linear)" />
										<path d="M11.0432 6.65039C8.56017 6.65039 6.53955 8.67775 6.53955 11.1691C6.53955 13.6604 8.56017 15.6878 11.0432 15.6878C13.5263 15.6878 15.5469 13.6604 15.5469 11.1691C15.5469 8.67775 13.5263 6.65039 11.0432 6.65039Z" fill="url(#post-share-icon__instagram2_linear)" />
									</g>
									<defs>
										<linearGradient id="post-share-icon__instagram0_linear" x1="-3.55178" y1="24.4293" x2="21.8659" y2="-8.31809" gradientUnits="userSpaceOnUse">
											<stop stop-color="#AB85FF" />
											<stop offset="0.526042" stop-color="#EBA3E3" />
											<stop offset="1" stop-color="#FFDBE4" />
										</linearGradient>
										<linearGradient id="post-share-icon__instagram1_linear" x1="16.6252" y1="5.48786" x2="18.1145" y2="3.56907" gradientUnits="userSpaceOnUse">
											<stop stop-color="#AB85FF" />
											<stop offset="0.526042" stop-color="#EBA3E3" />
											<stop offset="1" stop-color="#FFDBE4" />
										</linearGradient>
										<linearGradient id="post-share-icon__instagram2_linear" x1="5.07435" y1="16.5903" x2="15.4996" y2="3.15877" gradientUnits="userSpaceOnUse">
											<stop stop-color="#AB85FF" />
											<stop offset="0.526042" stop-color="#EBA3E3" />
											<stop offset="1" stop-color="#FFDBE4" />
										</linearGradient>
										<clipPath id="clip0">
											<rect width="21.9608" height="22.034" fill="white" transform="translate(0.0205078 0.194824)" />
										</clipPath>
									</defs>
								</svg>
							</a> -->
							<a href="https://vk.com/share.php?url=<?php echo get_permalink(); ?>">
								<svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M25.7765 13.544C25.7084 13.43 25.2872 12.5147 23.2604 10.6336C21.1385 8.66376 21.4236 8.98362 23.9793 5.57762C25.5358 3.5033 26.1581 2.23654 25.9633 1.695C25.7781 1.17879 24.6332 1.31497 24.6332 1.31497L20.8266 1.33714C20.8266 1.33714 20.5448 1.29913 20.3342 1.42423C20.1299 1.54773 19.9985 1.83276 19.9985 1.83276C19.9985 1.83276 19.3952 3.43837 18.5908 4.80331C16.8949 7.68361 16.2156 7.83562 15.9385 7.65669C15.294 7.24024 15.4555 5.9814 15.4555 5.08833C15.4555 2.29671 15.8783 1.13287 14.6306 0.832015C14.2157 0.732257 13.9117 0.665752 12.8524 0.654668C11.4938 0.640417 10.3426 0.659419 9.69179 0.977692C9.25793 1.18987 8.92382 1.66333 9.12809 1.69025C9.37985 1.7235 9.9499 1.84384 10.2523 2.25554C10.6434 2.78599 10.6292 3.97992 10.6292 3.97992C10.6292 3.97992 10.854 7.26558 10.1051 7.67411C9.59045 7.95438 8.88582 7.38275 7.37362 4.76847C6.59932 3.43046 6.01344 1.94993 6.01344 1.94993C6.01344 1.94993 5.90102 1.67441 5.69992 1.52715C5.45607 1.34822 5.11404 1.29122 5.11404 1.29122L1.49428 1.31338C1.49428 1.31338 0.951153 1.32922 0.751638 1.56515C0.574292 1.77575 0.737387 2.20962 0.737387 2.20962C0.737387 2.20962 3.57176 8.83953 6.77983 12.1822C9.72346 15.2462 13.0645 15.0451 13.0645 15.0451H14.5783C14.5783 15.0451 15.0359 14.9944 15.2687 14.7426C15.4841 14.5114 15.4761 14.0776 15.4761 14.0776C15.4761 14.0776 15.446 12.046 16.3898 11.7467C17.3193 11.4522 18.5132 13.7102 19.7784 14.5795C20.7348 15.2367 21.4616 15.0926 21.4616 15.0926L24.8454 15.0451C24.8454 15.0451 26.6157 14.9358 25.7765 13.544Z" fill="url(#post-share-icon__vk0_linear)" />
									<defs>
										<linearGradient id="post-share-icon__vk0_linear" x1="-3.45195" y1="16.5495" x2="9.26536" y2="-12.2621" gradientUnits="userSpaceOnUse">
											<stop stop-color="#AB85FF" />
											<stop offset="0.526042" stop-color="#EBA3E3" />
											<stop offset="1" stop-color="#FFDBE4" />
										</linearGradient>
									</defs>
								</svg>
							</a>
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>">
								<svg width="13" height="26" viewBox="0 0 13 26" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M8.06348 8.95654V5.83154C8.06348 4.96904 8.76348 4.26904 9.62598 4.26904H11.1885V0.362793H8.06348C5.47441 0.362793 3.37598 2.46123 3.37598 5.05029V8.95654H0.250977V12.8628H3.37598V25.3628H8.06348V12.8628H11.1885L12.751 8.95654H8.06348Z" fill="url(#post-share-icon__facebook0_linear)" />
									<defs>
										<linearGradient id="post-share-icon__facebook0_linear" x1="-1.78236" y1="27.8595" x2="25.3611" y2="10.3158" gradientUnits="userSpaceOnUse">
											<stop stop-color="#AB85FF" />
											<stop offset="0.526042" stop-color="#EBA3E3" />
											<stop offset="1" stop-color="#FFDBE4" />
										</linearGradient>
									</defs>
								</svg>
							</a>
							<a href='mailto:?subject=Best site ever&body=<?php echo get_permalink(); ?>'>
								<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0)">
										<path d="M12.2034 8.59301C11.9665 8.35469 11.7038 8.14344 11.4203 7.96312C10.6691 7.48215 9.79594 7.22657 8.90403 7.22657C7.66609 7.22427 6.47845 7.71613 5.60462 8.59301L1.36538 12.8356C0.493038 13.7096 0.0027352 14.8938 0.00195409 16.1287C0.000313761 18.7055 2.08791 20.7958 4.66479 20.7975C5.90082 20.8018 7.08736 20.3122 7.96088 19.4377L11.4602 15.9383C11.5238 15.8753 11.5593 15.7893 11.5588 15.6998C11.5578 15.5157 11.4077 15.3674 11.2236 15.3684H11.0903C10.3592 15.371 9.6346 15.2306 8.95738 14.9552C8.83259 14.9038 8.68918 14.9328 8.59412 15.0285L6.07789 17.5481C5.29655 18.3294 4.02975 18.3294 3.2484 17.5481C2.46706 16.7667 2.46706 15.4999 3.2484 14.7186L7.50432 10.466C8.28504 9.68625 9.54977 9.68625 10.3305 10.466C10.8566 10.9612 11.6774 10.9612 12.2035 10.466C12.4298 10.2394 12.5671 9.93894 12.5901 9.61946C12.6144 9.2377 12.4736 8.86382 12.2034 8.59301Z" fill="url(#post-share-icon__share0_linear)" />
										<path d="M18.6326 2.16402C16.8104 0.34181 13.856 0.34181 12.0338 2.16402L8.53776 5.65672C8.44176 5.75318 8.41407 5.89827 8.46777 6.02333C8.52085 6.14874 8.64489 6.22923 8.78104 6.22661H8.90434C9.6346 6.22529 10.358 6.36678 11.034 6.64322C11.1587 6.69458 11.3021 6.6656 11.3972 6.56991L13.9068 4.06368C14.6881 3.28234 15.9549 3.28234 16.7363 4.06368C17.5176 4.84503 17.5176 6.11183 16.7363 6.89317L13.6101 10.0159L13.5835 10.0459L12.4903 11.1324C11.7096 11.9122 10.4449 11.9122 9.66416 11.1324C9.13801 10.6372 8.31729 10.6372 7.79118 11.1324C7.56337 11.3607 7.42601 11.6638 7.40457 11.9856C7.3802 12.3673 7.52099 12.7412 7.79118 13.0121C8.17693 13.3995 8.62825 13.7154 9.12426 13.9452C9.19425 13.9785 9.26423 14.0052 9.33422 14.0352C9.40421 14.0652 9.47752 14.0885 9.5475 14.1152C9.61749 14.1419 9.6908 14.1652 9.76078 14.1852L9.95743 14.2385C10.0907 14.2718 10.2241 14.2985 10.3607 14.3218C10.5253 14.3462 10.691 14.3618 10.8573 14.3685H11.0905H11.1105L11.3105 14.3452C11.3838 14.3418 11.4605 14.3252 11.5471 14.3252H11.6604L11.8904 14.2918L11.9971 14.2718L12.1903 14.2319H12.227C13.0457 14.0262 13.7932 13.6024 14.39 13.0054L18.6325 8.76284C20.4548 6.94063 20.4548 3.98623 18.6326 2.16402Z" fill="url(#post-share-icon__share1_linear)" />
									</g>
									<defs>
										<linearGradient id="post-share-icon__share0_linear" x1="-2.04616" y1="22.1528" x2="13.8508" y2="3.08749" gradientUnits="userSpaceOnUse">
											<stop stop-color="#AB85FF" />
											<stop offset="0.526042" stop-color="#EBA3E3" />
											<stop offset="1" stop-color="#FFDBE4" />
										</linearGradient>
										<linearGradient id="post-share-icon__share1_linear" x1="5.35267" y1="15.7238" x2="21.2484" y2="-3.34975" gradientUnits="userSpaceOnUse">
											<stop stop-color="#AB85FF" />
											<stop offset="0.526042" stop-color="#EBA3E3" />
											<stop offset="1" stop-color="#FFDBE4" />
										</linearGradient>
										<clipPath id="clip0">
											<rect width="20" height="20" fill="white" transform="translate(0.000976562 0.797363)" />
										</clipPath>
									</defs>
								</svg>
							</a>
						</div>
					</div>
					<div class='post-content__table-of-content'>
						<?php
						echo do_shortcode('[lwptoc]')
						?>
					</div>
					<div class="post-content"><?php the_content(); ?></в>
					</div>
			</article>
			<aside class="post-sidebar">
				<h3>Вам может быть интересно</h3>
				<?php
				$posts = get_posts(array(
					'numberposts' => 10,
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
			</aside>
		</section>
	</div>

	<section class='post-section__wrapper'>
		<div class="container">
			<div class='subscribe'>
				<h2>Понравилась статья?</h2>
				<p>Подписывайся на наши новости!</p>
				<div class='subscribe__icon-area'>
					<a>
						<svg width="46" height="39" viewBox="0 0 46 39" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M17.788 25.3416L17.0381 35.8891C18.111 35.8891 18.5757 35.4282 19.1329 34.8748L24.163 30.0676L34.5859 37.7006C36.4974 38.7659 37.8442 38.2049 38.3599 35.942L45.2014 3.88379L45.2033 3.8819C45.8097 1.05613 44.1814 -0.0488746 42.319 0.644348L2.10456 16.0407C-0.639997 17.106 -0.598442 18.636 1.638 19.3292L11.9192 22.5271L35.8004 7.58413C36.9243 6.8399 37.9462 7.25168 37.1057 7.9959L17.788 25.3416Z" fill="url(#subscribe__icon-area__vk0_linear)" />
							<defs>
								<linearGradient id="subscribe__icon-area__vk0_linear" x1="-7.37405" y1="41.9942" x2="33.5998" y2="-21.5625" gradientUnits="userSpaceOnUse">
									<stop stop-color="#AB85FF" />
									<stop offset="0.526042" stop-color="#EBA3E3" />
									<stop offset="1" stop-color="#FFDBE4" />
								</linearGradient>
							</defs>
						</svg>
					</a>
					<a>
						<svg width="44" height="46" viewBox="0 0 44 46" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#subscribe__icon-area__instagram)">
								<path d="M37.5268 0.966064H6.47289C2.92557 0.966064 0.0390625 3.86219 0.0390625 7.42133V38.5788C0.0390625 42.1379 2.92557 45.034 6.47289 45.034H37.5268C41.0741 45.034 43.9606 42.1379 43.9606 38.5788V7.42133C43.9606 3.86219 41.0741 0.966064 37.5268 0.966064ZM22.0856 34.5334C15.6997 34.5334 10.5047 29.3212 10.5047 22.914C10.5047 16.5068 15.6997 11.2945 22.0856 11.2945C28.4715 11.2945 33.6665 16.5068 33.6665 22.914C33.6665 29.3212 28.4715 34.5334 22.0856 34.5334ZM34.9533 13.8766C32.8248 13.8766 31.093 12.1391 31.093 10.0034C31.093 7.86782 32.8248 6.13028 34.9533 6.13028C37.0818 6.13028 38.8136 7.86782 38.8136 10.0034C38.8136 12.1391 37.0818 13.8766 34.9533 13.8766Z" fill="url(#subscribe__icon-area__instagram0_linear)" />
								<path d="M34.9533 8.71216C34.2432 8.71216 33.6665 9.29078 33.6665 10.0032C33.6665 10.7156 34.2432 11.2943 34.9533 11.2943C35.6633 11.2943 36.24 10.7156 36.24 10.0032C36.24 9.29078 35.6633 8.71216 34.9533 8.71216Z" fill="url(#subscribe__icon-area__instagram1_linear)" />
								<path d="M22.0855 13.8767C17.1194 13.8767 13.0781 17.9314 13.0781 22.9141C13.0781 27.8967 17.1194 31.9515 22.0855 31.9515C27.0516 31.9515 31.0928 27.8967 31.0928 22.9141C31.0928 17.9314 27.0516 13.8767 22.0855 13.8767Z" fill="url(#subscribe__icon-area__instagram2_linear)" />
							</g>
							<defs>
								<linearGradient id="subscribe__icon-area__instagram0_linear" x1="-7.10552" y1="49.4351" x2="43.7298" y2="-16.0598" gradientUnits="userSpaceOnUse">
									<stop stop-color="#AB85FF" />
									<stop offset="0.526042" stop-color="#EBA3E3" />
									<stop offset="1" stop-color="#FFDBE4" />
								</linearGradient>
								<linearGradient id="subscribe__icon-area__instagram1_linear" x1="33.2479" y1="11.5521" x2="36.2265" y2="7.71456" gradientUnits="userSpaceOnUse">
									<stop stop-color="#AB85FF" />
									<stop offset="0.526042" stop-color="#EBA3E3" />
									<stop offset="1" stop-color="#FFDBE4" />
								</linearGradient>
								<linearGradient id="subscribe__icon-area__instagram2_linear" x1="10.1477" y1="33.7566" x2="30.9982" y2="6.89346" gradientUnits="userSpaceOnUse">
									<stop stop-color="#AB85FF" />
									<stop offset="0.526042" stop-color="#EBA3E3" />
									<stop offset="1" stop-color="#FFDBE4" />
								</linearGradient>
								<clipPath id="subscribe__icon-area__instagram">
									<rect width="43.9216" height="44.068" fill="white" transform="translate(0.0390625 0.966064)" />
								</clipPath>
							</defs>
						</svg>
					</a>
					<a>
						<svg width="51" height="30" viewBox="0 0 51 30" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M50.5485 26.6641C50.4124 26.4361 49.57 24.6056 45.5163 20.8433C41.2727 16.9037 41.8427 17.5434 46.9541 10.7314C50.0672 6.58277 51.3118 4.04924 50.9222 2.96616C50.5517 1.93375 48.2621 2.20611 48.2621 2.20611L40.6488 2.25044C40.6488 2.25044 40.0851 2.17444 39.6639 2.42462C39.2554 2.67164 38.9925 3.24168 38.9925 3.24168C38.9925 3.24168 37.7859 6.45292 36.1772 9.18279C32.7854 14.9434 31.4268 15.2474 30.8726 14.8895C29.5837 14.0567 29.9067 11.539 29.9067 9.75283C29.9067 4.16959 30.7523 1.84191 28.2568 1.2402C27.427 1.04069 26.819 0.907677 24.7003 0.885508C21.9831 0.857006 19.6808 0.895009 18.3792 1.53156C17.5115 1.95592 16.8432 2.90283 17.2518 2.95666C17.7553 3.02317 18.8954 3.26385 19.5003 4.08725C20.2825 5.14816 20.254 7.536 20.254 7.536C20.254 7.536 20.7037 14.1073 19.2058 14.9244C18.1765 15.4849 16.7672 14.3417 13.7429 9.11312C12.1942 6.43709 11.0225 3.47604 11.0225 3.47604C11.0225 3.47604 10.7976 2.92499 10.3954 2.63047C9.90774 2.27261 9.22369 2.1586 9.22369 2.1586L1.98416 2.20294C1.98416 2.20294 0.897911 2.23461 0.498882 2.70648C0.144189 3.12768 0.47038 3.99541 0.47038 3.99541C0.47038 3.99541 6.13913 17.2552 12.5553 23.9406C18.4425 30.0685 25.1247 29.6663 25.1247 29.6663H28.1522C28.1522 29.6663 29.0675 29.565 29.533 29.0614C29.9637 28.5991 29.9479 27.7313 29.9479 27.7313C29.9479 27.7313 29.8877 23.6682 31.7752 23.0697C33.6341 22.4806 36.022 26.9966 38.5523 28.7352C40.4651 30.0495 41.9188 29.7613 41.9188 29.7613L48.6864 29.6663C48.6864 29.6663 52.227 29.4478 50.5485 26.6641Z" fill="url(#subscribe__icon-area__vk0_linear)" />
							<defs>
								<linearGradient id="subscribe__icon-area__vk0_linear" x1="-7.90829" y1="32.6753" x2="17.5263" y2="-24.948" gradientUnits="userSpaceOnUse">
									<stop stop-color="#AB85FF" />
									<stop offset="0.526042" stop-color="#EBA3E3" />
									<stop offset="1" stop-color="#FFDBE4" />
								</linearGradient>
							</defs>
						</svg>
					</a>
					<a>
						<svg width="24" height="48" viewBox="0 0 24 48" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M15 16.5V10.5C15 8.844 16.344 7.5 18 7.5H21V0H15C10.029 0 6 4.029 6 9V16.5H0V24H6V48H15V24H21L24 16.5H15Z" fill="url(#subscribe__icon-area__fb0_linear)" />
							<defs>
								<linearGradient id="subscribe__icon-area__fb0_linear" x1="-3.904" y1="52.7937" x2="48.2114" y2="19.1098" gradientUnits="userSpaceOnUse">
									<stop stop-color="#AB85FF" />
									<stop offset="0.526042" stop-color="#EBA3E3" />
									<stop offset="1" stop-color="#FFDBE4" />
								</linearGradient>
							</defs>
						</svg>

					</a>
				</div>
			</div>
		</div>
	</section>
	<section class='post-section__wrapper'>
		<div class="container">
			<div class='comments'>
				<h2>Комментарии</h2>
				<?php
				if(!is_user_logged_in())
				{
				?>
				<div class="block-authorization no-login">
				    				<p>Чтобы оставить комментарий, <b>войдите через соцсеть</b></p>
			    	<div class='comments__icon-area'>
				     <a href="https://webfocus.by/wp-json/anycomment/v1/auth/facebook?redirect=<?php echo $urlPost;?>">
						<svg width="13" height="26" viewBox="0 0 13 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M8.06348 8.95654V5.83154C8.06348 4.96904 8.76348 4.26904 9.62598 4.26904H11.1885V0.362793H8.06348C5.47441 0.362793 3.37598 2.46123 3.37598 5.05029V8.95654H0.250977V12.8628H3.37598V25.3628H8.06348V12.8628H11.1885L12.751 8.95654H8.06348Z" fill="url(#comments-icon__facebook0_linear)" />
							<defs>
								<linearGradient id="comments-icon__facebook0_linear" x1="-1.78236" y1="27.8595" x2="25.3611" y2="10.3158" gradientUnits="userSpaceOnUse">
									<stop stop-color="#AB85FF" />
									<stop offset="0.526042" stop-color="#EBA3E3" />
									<stop offset="1" stop-color="#FFDBE4" />
								</linearGradient>
							</defs>
						</svg>
					</a>
			    	<a href="https://webfocus.by/wp-json/anycomment/v1/auth/vkontakte?redirect=<?php echo $urlPost;?>">
						<svg width="27" height="16" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M25.7765 13.544C25.7084 13.43 25.2872 12.5147 23.2604 10.6336C21.1385 8.66376 21.4236 8.98362 23.9793 5.57762C25.5358 3.5033 26.1581 2.23654 25.9633 1.695C25.7781 1.17879 24.6332 1.31497 24.6332 1.31497L20.8266 1.33714C20.8266 1.33714 20.5448 1.29913 20.3342 1.42423C20.1299 1.54773 19.9985 1.83276 19.9985 1.83276C19.9985 1.83276 19.3952 3.43837 18.5908 4.80331C16.8949 7.68361 16.2156 7.83562 15.9385 7.65669C15.294 7.24024 15.4555 5.9814 15.4555 5.08833C15.4555 2.29671 15.8783 1.13287 14.6306 0.832015C14.2157 0.732257 13.9117 0.665752 12.8524 0.654668C11.4938 0.640417 10.3426 0.659419 9.69179 0.977692C9.25793 1.18987 8.92382 1.66333 9.12809 1.69025C9.37985 1.7235 9.9499 1.84384 10.2523 2.25554C10.6434 2.78599 10.6292 3.97992 10.6292 3.97992C10.6292 3.97992 10.854 7.26558 10.1051 7.67411C9.59045 7.95438 8.88582 7.38275 7.37362 4.76847C6.59932 3.43046 6.01344 1.94993 6.01344 1.94993C6.01344 1.94993 5.90102 1.67441 5.69992 1.52715C5.45607 1.34822 5.11404 1.29122 5.11404 1.29122L1.49428 1.31338C1.49428 1.31338 0.951153 1.32922 0.751638 1.56515C0.574292 1.77575 0.737387 2.20962 0.737387 2.20962C0.737387 2.20962 3.57176 8.83953 6.77983 12.1822C9.72346 15.2462 13.0645 15.0451 13.0645 15.0451H14.5783C14.5783 15.0451 15.0359 14.9944 15.2687 14.7426C15.4841 14.5114 15.4761 14.0776 15.4761 14.0776C15.4761 14.0776 15.446 12.046 16.3898 11.7467C17.3193 11.4522 18.5132 13.7102 19.7784 14.5795C20.7348 15.2367 21.4616 15.0926 21.4616 15.0926L24.8454 15.0451C24.8454 15.0451 26.6157 14.9358 25.7765 13.544Z" fill="url(#comments-icon__vk0_linear)" />
							<defs>
								<linearGradient id="comments-icon__vk0_linear" x1="-3.45195" y1="16.5495" x2="9.26536" y2="-12.2621" gradientUnits="userSpaceOnUse">
									<stop stop-color="#AB85FF" />
									<stop offset="0.526042" stop-color="#EBA3E3" />
									<stop offset="1" stop-color="#FFDBE4" />
								</linearGradient>
							</defs>
						</svg>
					</a>
					<a href="https://webfocus.by/wp-json/anycomment/v1/auth/odnoklassniki?redirect=<?php echo $urlPost;?>">
						<svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<g clip-path="url(#comments-icon__ok)">
								<path d="M12.9999 0.48999C9.55308 0.48999 6.75 3.15378 6.75 6.42932C6.75 9.70486 9.55308 12.3686 12.9999 12.3686C16.4467 12.3686 19.2498 9.70486 19.2498 6.42932C19.2498 3.15378 16.4467 0.48999 12.9999 0.48999ZM12.9999 9.39898C11.2765 9.39898 9.87495 8.06709 9.87495 6.42932C9.87495 4.79155 11.2765 3.45966 12.9999 3.45966C14.7233 3.45966 16.1249 4.79155 16.1249 6.42932C16.1249 8.06709 14.7233 9.39898 12.9999 9.39898Z" fill="url(#comments-icon__ok0_linear)" />
								<path d="M21.2872 12.204C20.6763 11.6234 19.6888 11.6234 19.0779 12.204C15.7279 15.3875 10.2749 15.3875 6.9234 12.204C6.31247 11.6234 5.32498 11.6234 4.71406 12.204C4.10313 12.7846 4.10313 13.723 4.71406 14.305C6.65777 16.1522 9.1218 17.2049 11.6624 17.4796L7.20777 21.7129C6.59684 22.2934 6.59684 23.2319 7.20777 23.8124C7.81869 24.393 8.80618 24.393 9.41711 23.8124L12.9999 20.4077L16.5826 23.8124C16.8873 24.102 17.2873 24.2475 17.6873 24.2475C18.0873 24.2475 18.4873 24.102 18.792 23.8124C19.4029 23.2319 19.4029 22.2934 18.792 21.7129L14.3373 17.4796C16.8779 17.2049 19.342 16.1522 21.2857 14.305C21.8966 13.7245 21.8966 12.7846 21.2872 12.204Z" fill="url(#comments-icon__ok1_linear)" />
							</g>
							<defs>
								<linearGradient id="comments-icon__ok0_linear" x1="4.7167" y1="13.555" x2="18.2177" y2="-4.80987" gradientUnits="userSpaceOnUse">
									<stop stop-color="#AB85FF" />
									<stop offset="0.526042" stop-color="#EBA3E3" />
									<stop offset="1" stop-color="#FFDBE4" />
								</linearGradient>
								<linearGradient id="comments-icon__ok1_linear" x1="1.41111" y1="25.4942" x2="13.9857" y2="2.71507" gradientUnits="userSpaceOnUse">
									<stop stop-color="#AB85FF" />
									<stop offset="0.526042" stop-color="#EBA3E3" />
									<stop offset="1" stop-color="#FFDBE4" />
								</linearGradient>
								<clipPath id="comments-icon__ok">
									<rect width="25" height="23.7577" fill="white" transform="translate(0.5 0.48999)" />
								</clipPath>
							</defs>
						</svg>

					</a>
			    	</div>   
				</div>
				<?php } else{?>
				<div class="is-login-block">
				 
				    <img src="<?php  echo AnyCommentSocialAuth::get_user_avatar_url( wp_get_current_user()->ID); ?>"/>
				    <p>Здравствуйте, <b><?php
				    $user_info = get_userdata(1);
				    echo $user_info->user_login; ?></b>!</p>
				</div>
				<?php }?>

				<!-- <h3>Добавить комментарий</h3> -->
				<!-- <form class='form' onsubmit="alert('submit!');return false">
                        <textarea name="comment" class='textarea'></textarea>
                        <button><p class='bold'>ОПУБЛИКОВАТЬ КОММЕНТАРИЙ</p></button>
                    </form> -->
				<?php get_template_part('comments'); ?>
			</div>
			<div class='comments__content-area'>
				<h3>
					Предыдущие комментарии:<?php echo ' '; comments_number('нет комментариев', '1', '%'); ?>
				</h3>
				<div class='comments__area-wrapper'>
					<?php
					$post_id = get_the_ID();
					$args = array(
						'author_email'        => '',
						'author__in'          => '',
						'author__not_in'      => '',
						'include_unapproved'  => '',
						'fields'              => '',
						'comment__in'         => '',
						'comment__not_in'     => '',
						'karma'               => '',
						'number'              => '',
						'offset'              => '',
						'no_found_rows'       => true,
						'orderby'             => '',
						'order'               => 'DESC',
						'parent'              => '',
						'post_author__in'     => '',
						'post_author__not_in' => '',
						'post_id'             => $post_id,
						'post__in'            => '',
						'post__not_in'        => '',
						'post_author'         => '',
						'post_name'           => '',
						'post_parent'         => '',
						'post_status'         => '',
						'post_type'           => '',
						'status'              => 'approve',
						'type'                => '',
						'type__in'            => '',
						'type__not_in'        => '',
						'user_id'             => '',
						'search'              => '',
						'count'               => false,
						'meta_key'            => '',
						'meta_value'          => '',
						'meta_query'          => '',
						'date_query'          => null, // See WP_Date_Query
						'hierarchical'        => false,
						'update_comment_meta_cache'  => true,
						'update_comment_post_cache'  => false,
					);

					if ($comments = get_comments($args)) {
						foreach ($comments as $comment) {
			
	
	$avatarCommentsUrl=AnyCommentSocialAuth::get_user_avatar_url( $GLOBALS['comment']->user_id );
 
					?>
				
							<div class='comments__comment-wrapper'>
								<div class='comments__autour-avatar'><img src="<?php echo $avatarCommentsUrl; ?>"/></div>
								<div class='comments__content'>
									<div class='comments__content__title'>
										<p class='comments__content__title__author-name bold'><?php echo $comment->comment_author; ?></p>
										<p class='comments__content__title__date small'><?php echo mysql2date('d.m.Y', $comment->comment_date); ?></p>
									</div>
									<div class='comments__content__text'>
										<?php echo $comment->comment_content; ?>
									</div>
								</div>
							</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
	</section>
	<section class='section-std reviews'>
		<div class="container">
			<div class='other-posts'>
				<h2>Другие статьи</h2>
				<div class='other-posts__wrapper'>
					<div class=" other-posts-slider">
						<?php
						$posts = get_posts(array(
							'numberposts' => 20,
							'post_type'   => 'post',
							'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
						));
						foreach ($posts as $post) {
							setup_postdata($post);
						?>
							<div>
								<a href="<?php the_permalink() ?>" class="other-posts-slide">
									<div class="other-posts-slide__content">
										<div class='other-posts-slide__image'><?php echo get_the_post_thumbnail(); ?></div>
										<p class="other-posts-slide__date"><?php echo get_the_date() ?></p>
										<h3 class="other-posts-slide__title"><?php the_title() ?></h3>
										<button class="reviews-read-more">Читать дальше</button>
									</div>
								</a>
							</div>
						<?php
						}
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>
	</section>


	<?php get_template_part('template-parts/request-form'); ?>
	<?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>