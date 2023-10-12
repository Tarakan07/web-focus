
<?php
/*
    Template Name: razrabotka-web-prilozheniya-vuejs
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
          <h1 class="sub-hero__title">Разработка web-приложения Vue.js</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Создание Vue js приложений начало набирать новую волну популярности с появлением третьей версии фреймворка. Vue JS – прогрессивный фреймворк для создания пользовательских веб интерфейсов, работающий на языке JavaScript, соответствует классической архитектуре MVC (Model-View-Controller).
                </p>
              </div>
            </div>

            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость разработки web-приложения Vue.js:</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">2200</span> BYN</h4>
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
                  <h4>от <span>3</span> дней</h4>
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

<section class="section-std">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">информация</h4>
      <h2 class="wow section-title ms-720">За что frontend программисты любят VueJS</h2>

      <div class="three-part-p three-part-p_mrg-top">
        <p>
        Vue.js выбирают, когда необходим быстрый и современный фреймворк для создания одностраничных приложений (SPA). Код состоит из HTML-шаблонов, реактивных свойств и способов организации кода (компоненты, ссылки, вычисляемые свойства, методы и пользовательские директивы). С появлением третьего релиза вью, разработка Vue js приложений ведется на Composition API, вместо привычного Options API. Composition API позволяет логически группировать функции, а не организовывать однофайловые компоненты по функциям.
        </p>
        <p>
        Новый API помогает писать более удобочитаемый код и дает разработчику больше гибкости. Многоразовые компоненты Vue расширяют базовые HTML-теги для изолированных элементов пользовательского интерфейса. Общение происходит через события и пропсы (props). Компоненты — это пользовательские элементы, которые связывают поведение с компилятором и представляют экземпляр с предопределенными опциями.
        </p>
        <p>
        В отличие от Angular и React, VueJS не поддерживается такими технологическими гигантами, как Facebook и Google. Фреймворк был создан бывшим разработчиком Google — Эваном Ю, чья цель состояла в том, чтобы взять понравившиеся функции и концепции Angular и построить вокруг них фреймворк. Вью был запущен менее чем через год после появления Facebook React.
        </p>
      </div>

  </section> 

<div class="tmpl-cases">
  <?php get_template_part('template-parts/cases'); ?>
</div>
  <?php get_template_part('template-parts/contact-form'); ?>

  <section class="section-std section-gray section-with-floating-bubbles">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">преимущества</h4>
      <h2 class="wow section-title ms-920">Преимущества VueJS:</h2>
      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
          <h3>Преимущества:</h3>
            
            </div>
          </div>
          
          <ul class="function-list">
            <li>
              <span class="function-list-marker"></span>
              <p>
              Сделать приложение на Vue помогает инструмент для быстрой сборки и прототипирования — VueCli.
              </p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>
              На вью легко переключиться с аналогичных фреймворков (React, Angular).
              </p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>
              Декларативный стиль написания кода.
              </p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>
              Компонентный подход.
              </p>
            </li>

            <li>
              <span class="function-list-marker"></span>
              <p>
              Реактивность доступна из коробки, без дополнительных библиотек.
              </p>
            </li>

            <li>
              <span class="function-list-marker"></span>
              <p>
              Создает объектную модель документа (DOM) для быстрых перерисовок реактивных элементов.
              </p>
            </li>

            <li>
              <span class="function-list-marker"></span>
              <p>
              Хорошая читаемость кода, благодаря тому, что каждый компонент хранится в отдельных файлах.
              </p>
            </li>

            <li>
              <span class="function-list-marker"></span>
              <p>
              Собственный отладчик на вкладке DevTools.
              </p>
            </li>

            <li>
              <span class="function-list-marker"></span>
              <p>
              Поставляется с широким спектром готовых к использованию инструментов.
              </p>
            </li>

            <li>
              <span class="function-list-marker"></span>
              <p>
              Поддерживает двухстороннюю связь.
              </p>
            </li>

            <li>
              <span class="function-list-marker"></span>
              <p>
              Дружелюбное сообщество.
              </p>
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
      <h4 class="wow  section-subtitle">библиотеки</h4>
      <h2 class="wow section-title ms-720">Популярные библиотеки, использующиеся параллельно с VueJS</h2>
      <div class="new-marked">
        <div class="wrap-market-card">
              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Bootstrap-vue</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>
                </div>
                <div class="market-card__info">
                  <p>
                  Создаем «с нуля» мощные одностраничные приложения, используя инструментарий Vue JS. Ведем проект от идеи до запуска, готовые программы отличает высокопродуктивная работа и Bootstrap-vue применяет компоненты бутстрап вместе с вью, помогая создать приложение на vue js с адаптивным дизайном. Сочетание Vue.js с популярной интерфейсной CSS-библиотекой Bootstrap, приносит силу Bootstrap в экосистему Vue. Все элементы Bootstrap, такие, как строки, столбцы и карты, становятся доступными в качестве компонентов вью. Не привязан к jQuery.
                  </p>
                </div>
              </div>

              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Vuetify</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Это библиотека пользовательского интерфейса с гармонично выполненными компонентами, использующими спецификацию Material Design. Состоит из рекомендаций пользовательского интерфейса для форм, карт, взаимодействий, глубинных эффектов тени и света.
                  <br><br>
                  Помогает ускорить кодинг с помощью набора инструментов, поддерживает большинство браузеров и Vue CLI3. Инструмент предоставляет шаблоны для примитивной HTML-разметки, CSS-стилей, Webpack, NUXT, PWA и Electron.
                  </p>
                </div>
              </div>
              
              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Quasar</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Это высокопроизводительный набор компонентов Material Design с конструкторами для SPA, SSR, PWA, настольных (Electron) и браузерных расширений. Позволяет веб-разработчику быстро создавать адаптивные веб-сайты и ПО во многих вариантах.
                  <br><br>
                  Quasar предлагает версию UMD (Unified Module Definition), которая добавляется в качестве HTML-тегов. Предоставляет встроенную поддержку SSR (Server-side Rendered App). Так же Quasar позволяет разработать приложение на vue для мобильных устройств.
                  </p>
                </div>
              </div>
              
              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Vuesax</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Это библиотека компонентов, основанная на вью, разработанная с нуля для постепенной адаптации. Предлагает многоразовые компоненты пользовательского интерфейса. Vuesax ускоряет создание приложений, улучшает дизайн. У компонентов уникальные цвета, формы и конструкции.
                  </p>
                </div>
              </div>
              
              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Nuxt</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Это прогрессивный фреймворк, основанный на Vue.js для создания современных веб-приложений. Основана на официальных библиотеках (vue, vue-router и vuex) и мощных инструментах (webpack, Babel и PostCSS). Поддерживает горячую перезагрузку, автоматическую транспиляцию и серверный рендеринг.
                  </p>
                </div>
              </div>
        </div>
      </div>
    </div> 
  </section>

  <section class="section-std section-gray algoritm-block fifth-block">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">преимущества</h4>
      <h2 class="wow section-title ms-720">Преимущества работы с WebFocus</h2>
      <div class="steps-to-goal steps-to-goal_mrg-top">
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>01.</h3> <span>Шаг 1</span>
            </div>
            <h3>Наши преимущества:</h3>
          </div>
          <div class="step-to-goal__info">
            <ul class="arrow-marked-list">
              <li>
                <p class="bold">
                У нас нет шаблонных сайтов или решений.
                </p>
              </li>
              <li>
                <p class="bold">
                Каждый проект создаем с учетом индивидуальных потребностей заказчика.
                </p>
              </li>
              <li>
                <p class="bold">
                В нашей команде только опытные фронтенд разработчики уровня Middle и Senior.
                </p>
              </li>
              <li>
                <p class="bold">
                Тщательно тестируем приложения на безопасность и производительность перед сдачей.
                </p>
              </li>
              <li>
                <p class="bold">
                Наши приложения одинаково отображаются и функционируют на всех браузерах.
                </p>
              </li>
              <li>
                <p class="bold">
                Идем в ногу с последними тенденциями UI, UX, постоянно совершенствуем наши навыки в области Vue.js, отбираем в команду лучших разработчиков.
                </p>
              </li>
            </ul>
          </div>
        </div>

        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>02.</h3> <span>Шаг 2</span>
            </div>
            <h3>Мы предлагаем:</h3>
          </div>
          <div class="step-to-goal__info">
            <ul class="arrow-marked-list">
              <li>
                <p class="bold">
                Создание одностраничных, кроссплатформенных веб и мобильных приложений.
                </p>
              </li>
              <li>
                <p class="bold">
                Миграцию с других технологий на VueJS.
                </p>
              </li>
              <li>
                <p class="bold">
                Тестирование безопасности, производительности.
                </p>
              </li>
              <li>
                <p class="bold">
                Интеграцию приложения со сторонними сервисами.
                </p>
              </li>
              <li>
                <p class="bold">
                Модернизацию существующих SPA-приложений.
                </p>
              </li>
              <li>
                <p class="bold">
                Создание прототипа приложения для оценки жизнеспособности идеи.
                </p>
              </li>
            </ul>
              <p>
              Прототипирование дает проверить концепцию до создания web application, получить обратную связь от заинтересованных сторон и оценить дизайн. Визуализация продукта помогает и на начальном этапе создания приложения, потому что позволяет оценить и подправить структуру и функциональность будущего приложения.
              <br><br>
              Мы следуем лучшим отраслевым практикам в области инноваций, архитектуры, тестирования, развертывания, миграции и переноса веб-приложений. Предоставляем услуги по разработке ПО полного цикла с тестированием качества на всех этапах создания продукта. Воспользуйтесь нашим опытом, закажите создание Vue JS приложений для решения любых задач.
              </p>
          </div>
        </div>

      </div>
    </div>
  </section>


  <section class="section-std success">
        <div class="container">
            <div class=" wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow section-subtitle">помощь</h4>
            <h2 class="wow section-title ms-720">
            Сотрудничество с WebFocus
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">
                    Разработка Vue JS приложений помогла нам решить проблемы клиентов из различных отраслевых вертикалей:
                    </p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                            Здравоохранение.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Логистика.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Медицина.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Туризм.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Электронная коммерция.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Финансы.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Образование.
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>
                    У JS большой рынок фреймворков, тенденции приходят и уходят. Существует множество фреймворков, позволяющие разработчикам создавать динамические и функциональные веб-сайты. React и Angular — два лидера рынка, однако есть и еще один растущий соперник, заслуживающий внимания разработчиков.
                    </p>
                    <p class='mobile-last'>
                    Мы помогаем бизнесу на каждом этапе разработки продукта — от стратегического планирования, прототипирования, проектирования и разработки до масштабирования и поддержки. У нас большой опыт создания адаптивных, отзывчивых, динамических веб-сайтов. Наша команда frontend-программистов специализируется на создании интуитивно понятных пользовательских интерфейсов для всех платформ.
                    </p>
                </div>
            </div>
        </div>
    </section>

  

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider' ); ?>
</main>
<?php get_footer() ?>