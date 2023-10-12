
<?php
/*
    Template Name: razrabotka-web-prilozhenii
    Template post type:  page
    */
?>

<?php get_header() ?>
<main>
  <div class="sub-hero-wrp">
    <lottie-player class="bg-animation contekst" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/arrows.json" loop speed="1" autoplay></lottie-player>
    <section class="sub-hero">

      <div class="container">
        <div class="sub-hero-wrapper">

          <?php echo do_shortcode('[breadcrumb_simple]') ?>
          <h1 class="sub-hero__title">Разработка web-приложений</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Разработка веб приложений актуальна для нуждающихся в этом деятелей бизнеса, которые размещают заказы для аутсорсинговых компаний. Работа по созданию приложений состоит из ряда пунктов и последовательных действий, в которых задействуются целые группы и подразделения компании.

                </p>
              </div>
            </div>

            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость разработки web-приложений:</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">2400</span> BYN</h4>
                </div>
                <div class="coast-convert">
                  <span>?</span>
                </div>
                <div class="coast-converting-price">
                  <p>от <span class="RUB-convert" id="convert-RUB-coast"></span> P</p>
                  <p>от <span class="USD-convert" id="convert-USD-coast"></span> $</p>
                </div>
              </div>

              <div class="price-row last">
                <h4>Срок создания:</h4>
                <div class="price-coast-converter">
                  <h4>от <span>20</span> дней</h4>
                </div>
              </div>
              <div class="linear-hover-border-btn ">
                <button type="button" class="linear-link"><span>ЗАКАЗАТЬ</span></button>
              </div>
            </div>
          </div>

          <div class="arrow-down-wrapper">
            <div class="arrow-down-wrp">
              <div class="arrow-down"> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <section class="section-std algoritm-block fifth-block">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">информация</h4>
      <h2 class="wow section-title ms-720">Аутсорсинговая компания в СНГ</h2>

      <p class="section-p ms-720">Удаленное создание применяется для решения спектра задач в сфере информационных технологий, и используется во многих сценариях и случаях в бизнесе.
      </p>

      <p class="ms-720">Если появилась необходимость спроектировать и разработать веб приложение, а штатных сотрудников в этом направлении нет ни в офисе, ни «на удаленке», то вашим выбором скорее всего станет аутсорсинговая компания. В Беларуси есть выбор среди компаний, предоставляющих услуги в сфере IT, но не каждая из них выдаст желаемый результат на выходе. Менеджеры из Веб Фокус предоставляют более десятка примеров сайтов и приложений на различных платформах, чтобы вы посмотрели на что рассчитывать при заказе услуги, и ваше решение было обоснованным и легким.</p>


    </div>
  </section>



<div class="tmpl-cases">
  <?php get_template_part('template-parts/cases'); ?>
</div>
  <?php get_template_part('template-parts/contact-form'); ?>

<section class="section-std section-std-top-0">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow section-subtitle">информация</h4>
      <h2 class="wow section-title ms-720">Что такое веб-приложение</h2>

      <div class="three-part-p three-part-p_mrg-top">
        <p>
        Веб приложения – это компьютерные интерактивные приложения, информация о которых «лежит» на сервере, а видимая для пользователя часть, User Interface, представлена веб-страницами. На этой веб-странице пользователь взаимодействует с информацией, получает её и передает. 
        </p>
        <p>
        Во время такого «серфинга» на сервер отправляются запросы пользователя. Исходя из немалого количества запросов, сервер обычно встроен в веб-страницу.
        <br>
        В 95% случаев, веб-приложение требует при входе имя пользователя и пароль аутентификации.
        </p>
        <p>
        Информация о пользователе помогает создавать контент и рекламу под него. Поэтому создание приложения, приносящего новых юзеров, даст понимание о потенциальной аудитории и новые возможности продвижения продуктов компании.
        </p>
      </div>
  </section> 

  <section class="section-std success section-std-top-0">
        <div class="container">
            <div class=" wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow section-subtitle">виды</h4>
            <h2 class="wow section-title ms-720">
            Виды веб-приложений
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">Существует три главных вида веб-приложений:</p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                            Одностраничные приложения (SPA).
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Многостраничные приложения (MPA).
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Прогрессивные приложения (PWA).
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>
                    Одностраничные приложения помещаются на одну страницу HTML. Благодаря своевременному, динамическому обновлению JavaScript, при прокуртке страницы необходимые элементы просто подргружаются к ней. Это влияет на скорость и плавность работы, показывая видимый результат по сравнению с полностью перезагружающимися страницами. Для разработки таких приложений используются: JavaScript, React, Angular.
                    </p>
                    <p>
                    Многостраничные приложения, в отличие от одностраничных, работают по классической схеме, перезагружая страницу при каких-либо изменениях данных. Приложения задействуют больше программного кода и занимают больше места в целом. Исходя из этого, они часто используются в сайтах-каталогах, или других сайтах, где необходимо отобразить большое количество информации. Тем не менее, такой вид приложений остается востребованным из-за относительной простоты в SEO-продвижении и привычного для пользователей интерфейса и способа работы.
                    </p>
                    <p class='mobile-last'>
                    Прогрессивные приложения устанавливаются на устройство как классическое приложение. Его можно поместить на начальный экран и использовать сайт насколько это возможно удобно. Одним из ярких плюссов – это кроссплатформенность. Разработчикам не нужно создавать отдельный сайт и приложения на операционные системы. Все что требуется – поддерживать сайт. PWA имеют возможность работы оффлайн, где по скорости «обгоняют» сайт. Также их не обязательно размещать в «Гугл Плэй» или «Эпп Стор». Их разработка и поддержка обходится в разы меньшую стоимость.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-std section-gray section-with-floating-bubbles">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">процесс</h4>
      <h2 class="wow section-title">Процесс веб разработки</h2>
      <p class="wow section-p ms">
      Ни один клиент не захочет получить недоделанный продукт, в котором нужно разбираться, его дополнять, доделывать. Исходя из этого, мы не оставляем заказчику в качестве сделанной работы полуготовое, едва доделанное типовое решение, которое работает из раза в раз. Мы анализируем бизнес заказчика, предлагаем оптимальные и наилучшие варианты для разработки под ключ.
      </p>

      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
            <!-- <h3></h3> -->
            <h3>Взяв заказ, работа проходит по следующим этапам:</h3>
          </div>
        </div>
        <ul class="function-list">
          <li>
            <span class="function-list-marker"></span>
            <p>Погружение в деятельность заказчика, изучение бизнеса, особенностей, фирменного стиля, нюансов. Ищем возможные пути по наибольшей автоматизации процессов.</p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>Анализ потенциальной аудитории у бизнеса. Анализ потребностей, возраста, лучших решений, предназначенных под людей, которые заходят на сайт.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Прорабатываем UX/UI части, согласовывая с заказчиком встраиваемый функционал, фирменный стиль.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Подводим дизайн, UI часть, к идеалу, связываем элементы между собой в классы и зависимости.</p>
          </li>

        </ul>
      </article>
      
  </section>

  <section class="section-std">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">преимущества</h4>
      <h2 class="wow section-title ms-720">Почему WebFocus</h2>

      <div class="three-part-p three-part-p_mrg-top">
        <p>
        Для создания веб- приложений нужна опытная команда программистов, потому что на платформу есть свой порог входа. Из-за этого не каждая команда веб-разработчиков достаточно обучена и способна справиться со всеми задачами клиента, а также дать презентабельный продукт в итоге. Исходя из отзывов наших клиентов – в 80-90% случаев, они остаются довольны продуктом и работой отдела, начиная от программистов и заканчивая менеджерами.
        </p>
        <p>
        Разработчики Веб Фокус работали и продолжают работать с различными востребованными фреймворками и другими платформами для создания веб-сайтов и приложений. Произведение на свет веб приложений –встречающийся и не раз проработанный нами запрос. После больше чем стапетядесяти проектов на JavaScript-библиотеках и PHP фреймворках, отдельные люди в команде прониклись темой веб приложений и научились делать их быстрыми, лаконичными и функциональными. 
        </p>
        <p>
        Пользуясь опытом предыдущих проектов и изученными особенностями Java библиотек и PHP фреймворков, разработчики «Веб Фокус» пользуются доверием уже у больше чем нескольких тысяч людей. На данном этапе развития компании, разработка приложений и сайтов стала легкой и приятной задачей для нас. Исходя из статистики, проекты создаются в сроки от недели до месяца. Заказывайте услугу: программирование и разработка приложений и получайте не только долгожданное приложение, но и отзывчивых, всегда готовых поделиться информацией сотрудников, сопровождающих проект.
        </p>
      </div>
  </section> 

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider' ); ?>
</main>
<?php get_footer() ?>