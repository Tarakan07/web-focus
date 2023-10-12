<?php
/*
    Template Name: testirovanie-sajta
    Template post type:  page
    */
?>

<?php get_header() ?>
<main>

  <div class="sub-hero-wrp">
    <lottie-player class="bg-animation contekst" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/arrows.json" loop speed="1" autoplay></lottie-player>
    <section class="sub-hero sub-hero-min-block">

      <div class="container">
        <div class="sub-hero-wrapper">

          <?php echo do_shortcode('[breadcrumb_simple]') ?>
          <h1 class="sub-hero__title">Тестирование сайта</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Тестирование – проверка сайта на соответствие его составляющих требованиям технического задания по эксплуатации с нагрузками на сервер, безопасности и удобству использования.
                <br><br>
                Проверка защиты программного ядра CMS и модулей сайта, нагрузочное тестирование сервера, на котором он располагается и настройки безопасности данного сервера позволит в будущем избежать повышенных расходов на восстановление работоспособности сайта.
                </p>
              </div>
            </div>
            <!-- <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость транскрибаций текста:</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">120</span> BYN</h4>
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
            </div> -->

          </div>
          <div class="arrow-down-wrapper">
            <div class="arrow-down-wrp">
              <div class="arrow-down"> </div>
            </div>
          </div>
        </div>
    </section>
  </div>

  <section class="section-std section-std-bottom-0">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
            <h4 class="wow  section-subtitle">инфо</h4>
            <h2 class="wow section-title ms-720">Когда проводится тестирование сайта</h2>
            <p class="wow section-p ms-720">
            Тестирование сайта необходимо проводить после внесения изменений в код. Этим лучше не пренебрегать, поскольку даже незначительные поправки могут оказать влияние на работу всего веб-сайта. Даже после разработки web-сайта следует провести его тестирование и оценить качество разработки, а не сразу запускать бизнес-проект в массы. В дальнейшем пропуск этого этапа почти всегда приводит к необходимости доработок, которые займут не мало времени.
            </p>
    </div> 
  </section>

  <?php get_template_part('template-parts/services-slider'); ?>

  <?php get_template_part('template-parts/contact-form'); ?>

  <section class="section-std section-std-top-0">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">инфо</h4>
      <h2 class="wow section-title ms-720">Виды тестирования сайта</h2>
      <p class="wow section-p ms-720">
      Важнейший жизненный этап любого проекта – тестирование, можно проводить в разных направлениях.
      </p>
      <div class="new-marked">

        <div class="wrap-market-card">

              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Функциональное</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>
                </div>
                <div class="market-card__info">
                  <p>
                  Проверяется корректность работы функционала проекта: поиска, навигации, кнопок, публикации комментариев, перехода по ссылкам, формы оформления заказа, аутентификации, счетчиков и пр. Также учитывается соответствие утвержденного ТЗ проекта на соответствие выполненным пунктам.
                  </p>
                </div>
              </div>

              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Юзабилити</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Мероприятия по обеспечению удобного и понятного для пользователей взаимодействия с веб-сайтом, например, определение ненужных элементов дизайна, анализ впечатлений пользователей и соответствие ожиданиям и пр.
                  </p>
                </div>
              </div>
              
              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Производительности</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Проводится специальными программами по сценарию с определенной нагрузкой сервера и определяет максимально возможную нагрузку. По итогам составляется отчет с зафиксированными результатами. К нему прикрепляются рекомендациями по ускорению исходного времени загрузки страниц. Такое тестирование сайта поможет предотвратить внезапное прекращение работы при большом потоке посетителей.
                  </p>
                </div>
              </div>
              
              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Совместимости</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Проверка корректного отображения сайта на различных версиях браузеров, устройств и операционных системах.
                  </p>
                </div>
              </div>
              
              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Интерфейсов</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Оценка графического интерфейса тестировщиками на соответствие стандартам, на корректное отображение элементов в различных разрешениях, браузерах, устройствах и пр
                  </p>
                </div>
              </div>

              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Безопасности</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Залог надежности веб-сайта и его устойчивости к несанкционированным проникновениям в систему управления. Включает мероприятия по поиску уязвимостей в: конфигурации, аутентификации, управлении сессией, обработке данных, введенных посетителями и многое другое. Проверяет сайт в следующих направлениях:
                  </p>
                </div>
              </div>
              
              <p class="wow section-p ms-720" style="margin-top: 4rem">
              Нагрузка – оценка функционирования веб-сайта при нагрузке определенным числом одновременно работающих посетителей для определения времени отклика функционала.
              <br><br>
              Быстродействие – проверка времени загрузки страниц, графического контента, обработки скриптов для дальнейшей оптимальной настройки сервера.
      </p>

        </div>
      </div>

    </div> 
  </section>

  <section class="section-std section-gray">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">инфо</h4>
      <h2 class="wow section-title ms-720">Итоги отладки</h2>

      <div class="three-part-p three-part-p_mrg-top">
        <p>
        Проведение комплексного тестирования сайта поможет выявить ошибки, исправление которых обеспечит корректную работу на любом устройстве и платформах. Заказать услугу можно у агентства интернет-маркетинга. Наши эксперты гарантируют качественный результат анализа и обеспечение полной безопасности вашего проекта.
        </p>
        <p>
        Перед предоставлением услуги составляется детальный чек-лист, где прописываются все предстоящие аналитические действия. Как только они будут проведены, вы получите подробный отчет о текущем состоянии проекта, выявленных недочетах и слабых местах. Далее составляется график исправления каждого бага, и эксперты приступают к работе по совершенствованию web-ресурса. После проведения эффективных мероприятий по оптимизации, проводится повторное тест, чтобы убедиться в полном устранении ошибок.
        </p>
        <p>
        В итоге в вашем распоряжении будет оптимизированный и понятный для посетителей web-сайт, который способен выдержать максимальную нагрузку на сервер и готов к полноценной, эффективной работе.
        </p>
      </div>

  </section> 

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>

