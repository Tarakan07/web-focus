<?php

/*
Template Name: ЖК Морская симфония

Template Post Type: post, pages, case
*/
get_header();
$thisCat = get_queried_object();
?>

<main class="casewf casewf_10">
  <section class="section-std case_wf_hero sub-hero case_wf_color">
    <div class="case_wf_hero_container case_wf_hero_inner">
      <div class="case_wf_hero_wrapper">
        <div class="sub-hero-wrapper case">
          <div class="breadcrumb">
            <?php
            if (function_exists('bcn_display')) {
              bcn_display();
            }
            ?>
          </div>
          <h1 class="sub-hero__title case-page"><?php the_title(); ?></h1>
          <div class="sub-hero__info-wrapper case-page__subtitle">
            <?php the_field('sub_title2'); ?>
          </div>
        </div>
        <div class="case-info-wrapper">
          <div class='case-info'>
            <div class='case-info__item-wrapper'>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/postsIcon/calendar2_white.svg" alt="img">
              <div>
                <?php
                $date = get_the_date();
                echo $date;
                ?>
              </div>
            </div>
            <div class='case-info__item-wrapper'>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/postsIcon/view1_white.svg" alt="img">
              <?php echo do_shortcode('[post-views]'); ?>
            </div>
            <div class='case-content__share'>
              <div class='share__title'>Поделиться: </div>
              <div class='share__item-area-wrapper'>
                <a href="https://t.me/share/url?url=<?php echo get_permalink(); ?>">
                  <svg width="14" height="11" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                <a href="https://www.instagram.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>">
                  <svg width="14" height="14" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                </a>
                <a href="https://vk.com/share.php?url=<?php echo get_permalink(); ?>">
                  <svg width="15" height="9" viewBox="0 0 27 16" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                  <svg width="7" height="15" viewBox="0 0 13 26" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                  <svg width="13" height="13" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
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
          </div>
        </div>
        <div class="offer-cases__tags case-tag">
          <?php
          the_terms(get_the_ID(), 'case-tag', '', '', '');
          ?>
        </div>
      </div>
    </div>
    <div class="case_wf_hero_image">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/case/case10_1.png" alt="" class='hide_image_1090'>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/case/case10_1_1090.png" alt="" class='show_image_1090'>
    </div>
  </section>

  <section class="section-std case_wf_task case_wf_color casewf_top0 casewg_pb0_650">
    <div class="container">
      <div class="case-info-wrapper">
        <div class="case-task-wrapper">
          <div>
            <h3>Задача:</h3>
            <p>ЖК Морская Симфония — новый жилой комплекс бизнес-класса, расположенный на берегу Черного моря в городе Сочи. Застройщик обратился к нам за разработкой сайта для презентации комплекса и привлечения покупателей.</p>
          </div>
          <div>
            <h3>Реализация:</h3>
            <p>При реализации проекта мы делали акцент на преимуществах новостройки, использовали качественный контент, который демонстрировал привлекательность жилого комплекса, продумали процесс подачи через сайт, чтобы он был удобен, как потенциальному покупателю, так и менеджеру, обрабатывающему заявки.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-std section-wf-std casewf_top112 case_wf_color casewf_w651">
    <div class="container">
      <h2 class="section-title">Разработка сайта</h2>
      <p class='section-p ms-740'>Чтобы сделать сайт наиболее удобным для его будущих посетителей мы продумали его грамотную структуру, предусмотрели фильтры для поиска квартир и функционал для просмотра их планировки.</p>
      <div class='case-main-screen__img'>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/case/case10_2.png" alt="" class=''>
      </div>
    </div>
  </section>

  <section class="section-std section-wf-std casewf576 case_wf_color casewf_w692">
    <div class="container">
      <h2 class="section-title">Адаптивная версия сайта</h2>
      <p class='section-p ms-740'>Так как большая часть трафика приходится на мобильные устройства, мы предусмотрели адаптивную версию сайта, чтобы он корректно отображался с любого размера экрана.</p>
      <div class='case-main-screen__img'>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/case/case10_3.png" alt="" class='hide_image_650'>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/case/case10_3_650.png" alt="" class='show_image_650'>
      </div>
    </div>
  </section>

  <section class="section-std section-wf-std casewf576 case_wf_color casewf_w1422 casewf_bottom0">
    <div class="container">
      <h2 class="section-title">Блоки на сайте</h2>
      <p class='section-p ms-740'>На сайте мы реализовали такие важные информационные блоки, как данные о параметрах квартир, их планировка, окружение комплекса, инфраструктура и т.д.</p>
    </div>
    <div class='case-main-screen__img'>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/case/case10_4.png" alt="" class=''>
    </div>

  </section>

  <section class="section-std section-wf-std section-std-bottom-0 case_wf_color">
    <div class="container custom-style__padding-bottom-50">
      <h2 class="section-title">Результат</h2>
      <p class='section-p ms-740'>Разработанный сайт выглядит современно и презентабельно, а также реализует свои основные задачи: помогает легко найти необходимую информацию о жилом комплексе, выбрать понравившуюся планировку квартиры и записаться на просмотр.</p>
      <div class="casewf_link">
        <a href="https://morskayasymphonya.ru/">Перейти на сайт</a>
      </div>
      <a href="/case/" class='custom-style__other-case__wrapper custom-style__flex-row'>
        <h3>Смотрите другие кейсы</h3>
        <div>
          <svg width="46" height="15" viewBox="0 0 46 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M45.0465 8.19051C45.437 7.79998 45.437 7.16682 45.0465 6.77629L38.6825 0.412331C38.292 0.0218062 37.6588 0.0218062 37.2683 0.412331C36.8778 0.802855 36.8778 1.43602 37.2683 1.82654L42.9251 7.4834L37.2683 13.1403C36.8778 13.5308 36.8778 14.1639 37.2683 14.5545C37.6588 14.945 38.292 14.945 38.6825 14.5545L45.0465 8.19051ZM0.339355 8.4834L44.3394 8.4834V6.4834L0.339355 6.4834L0.339355 8.4834Z" fill="#fff" />
            <defs>
              <linearGradient id="paint0_linear" x1="-6.81798" y1="8.58327" x2="-6.77612" y2="6.20241" gradientUnits="userSpaceOnUse">
                <stop stop-color="#AB85FF" />
                <stop offset="0.526042" stop-color="#EBA3E3" />
                <stop offset="1" stop-color="#FFDBE4" />
              </linearGradient>
            </defs>
          </svg>

        </div>
      </a>
    </div>
  </section>

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>

</main>


<?php
get_footer();
