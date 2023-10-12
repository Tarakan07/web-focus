<?php
/*
    Template Name: Kontekstnaya-reklama-v-google-ads
    Template post type:  page
    */
?>
<?php get_header() ?>
<main>
  <div class="sub-hero-wrp">
    <lottie-player class="bg-animation contekst" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/smm.json" loop speed="1" autoplay></lottie-player>
    <section class="sub-hero">
      <div class="container">
        <div class="sub-hero-wrapper">
          <?php echo do_shortcode('[breadcrumb_simple]') ?>
          <h1 class="sub-hero__title">Контекстная реклама в Google Ads</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                  Контекстная реклама в Google – это показ рекламных объявлений в сети Google (Гугл) в ответ на конкретный запрос пользователя. Объявления размещаются на тематических интернет-порталах, которые входят в контекстно-медийную сеть.
                </p>
              </div>

            </div>
            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость контекстной рекламы Google:</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">750</span> BYN</h4>
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
                <h4>Срок рекламы:</h4>
                <div class="price-coast-converter">
                  <h4>от <span>5</span> дней</h4>
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
    </section>
  </div>

  <section class="section-std success">
    <div class="container">
      <div class=" wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow section-subtitle">задачи</h4>
      <h2 class="wow section-title ms-720">
        Контекстная реклама в Google
      </h2>
      <div class="float-second quality-service quality-service_mrg-top">
        <div class="left-part">
          <p class="bold">Объявления демонстрируются с целью решения задач для бизнеса:</p>
          <ul class="quality-service-list">
            <li>
              <p class="bold">
                Увеличение количества посещений лендинга продукта
              </p>
            </li>
            <li>
              <p class="bold">
                Спрос через целевую аудиторию;
              </p>
            </li>
            <li>
              <p class="bold">
                Повышение конверсионного процесса через рекламу и повышение интереса к продукту, бренду или категории.
              </p>
            </li>
          </ul>
        </div>
        <div class="quality-service_info">
          <p>Контекстная реклама в Google – это показ рекламных объявлений в сети Google (Гугл) в ответ на конкретный запрос пользователя. Объявления размещаются на тематических интернет-порталах, которые входят в контекстно-медийную сеть.</p>
          <p class='mobile-last'>
            Контекстная реклама в Google осуществляет быстрое информирование о скидках, новостях и акциях, проводимых с помощью продукта и (или) бренда для потенциальных пользователей услуг.
          </p>
        </div>
      </div>
    </div>
  </section>

  <div class="tmpl-cases">
    <?php get_template_part('template-parts/cases'); ?>
  </div>
  <?php get_template_part('template-parts/contact-form'); ?>

  <section class="section-std section-std-top-0 ">
    <div class="container">
      <div class=" wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow section-subtitle">этапы</h4>
      <h2 class="wow section-title ms">«Веб Фокус» — это команда специалистов, которые помогут:</h2>
      <div class="fourth-block__content">
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hovered3d/catalog-grayblock-3.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Рассказать о себе на первых позициях в Google;</h3>
            <div class="floating-card-arrow">
            </div>
          </div>

        </div>
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/internet-magazin/shop-grayblock-2.svg" alt="img">

              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Разместить рекламу на баннерах в КМС;</h3>
            <div class="floating-card-arrow">
            </div>
          </div>

        </div>

        <div class="floating-card ">
          <div class="floating-card-img">

            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/targeting/grayblock-2.svg" alt="img">
              </div>

            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Запустить свои предложения в видео и рекламе в Youtube;</h3>
            <div class="floating-card-arrow">
            </div>
          </div>
        </div>

        <div class="floating-card ">
          <div class="floating-card-img">

            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/targeting/grayblock-3.svg" alt="img">
              </div>

            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Провести ретаргетинг и ремаркетинг (вернуть пользователей на сайт для повторных продаж или взаимодействия);</h3>
            <div class="floating-card-arrow">
            </div>
          </div>
        </div>
        <div class="floating-card last-without-p">
          <div class="floating-card-img">

            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/targeting/grayblock-4.svg" alt="img">
              </div>

            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Активность и установка мобильных приложений продуктов.</h3>
            <div class="floating-card-arrow">
            </div>
          </div>
        </div>
      </div>
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
      <h4 class="wow section-subtitle">плюсы</h4>
      <h2 class="wow section-title ms-720">
        Запустить контекстную рекламу в Google
      </h2>
      <div class="float-second quality-service">
        <div class="left-part">
          <p class="bold">Плюсы контекстной рекламы в Google очевидны:</p>
          <ul class="quality-service-list">
            <li>
              <p class="bold">
                Когда пользователь ищет ответы на вопросы, то он, в основном, идёт в Google.
              </p>
            </li>
          </ul>
        </div>
        <div class="quality-service_info">
          <p>Крупнейшая поисковая система выдаёт при запросе варианты ответов, из которых пользователи выбирают необходимое.</p>
          <p>Реклама Google показывается в момент поиска потребителем нужной ему информации. Услуги, товары и предложения выходят на первые позиции, чем вызывают желание просмотреть предлагаемый продукт.</p>
          <p class='mobile-last'>
            В рекламной кампании, целью которой является конверсия, будет выстраиваться привлечение аудитории с целью посещение сайта.
          </p>
        </div>
      </div>
      <div class="float-second quality-service quality-service_mrg-top">
        <div class="left-part">
          <p class="bold">Объявление, переадресованное на сайт, сможет увеличить:</p>
          <ul class="quality-service-list">
            <li>
              <p class="bold">
                Количество онлайн и оффлайн продаж;
              </p>
            </li>
            <li>
              <p class="bold">
                Заявок бронирования или подписки на e-mail-рассылку.
              </p>
            </li>
          </ul>
        </div>
        <div class="quality-service_info">
          <p>Объявления, содержащие в себе номера телефонов или кнопку призыва («call-to-action»): перейти, позвонить, в магазин, увеличат количество звонков.</p>
          <p class='mobile-last'>
            При цели рекламного объявления увеличить число посетителей оффлайн-точки, реклама поможет найти Вашу компанию или магазин на карте и сможет привлечь больше посетителей в офис, магазин или арендованное помещение.
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
      <h4 class="wow  section-subtitle">настройка</h4>
      <h2 class="wow section-title ms-720">Настройка контекстной рекламы в Google</h2>
      <p class="wow section-p ms-720">
        Для настройки рекламных кампаний необходим бюджет и у каждого бизнеса он разный.
      </p>
      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
            <h3>При планировании рекламной кампании необходимо:</h3>
          </div>
        </div>
        <ul class="function-list">
          <li>
            <span class="function-list-marker"></span>
            <p>Учитывать сумму, которую направляете на рекламные цели (без учета оплаты за работу специалистов);</p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>Определите лимит бюджета, который будет тратиться на рекламные кабинеты и расходы будут оставаться в пределе установленного уровня трат.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>​Бюджет рекламных кампаний можно изменять, а также приостанавливать показ рекламы, если возможности бюджета будут ограничены или продукт потеряет свою актуальность.</p>
          </li>
        </ul>
      </article>
      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
            <h3>В GoogleAds привлекательно:</h3>
          </div>
        </div>
        <ul class="function-list">
          <li>
            <span class="function-list-marker"></span>
            <p>Простое использование и управление рекламными кампаниями: удобный интерфейс не требует специальных знаний и значительно экономит время настройки;</p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>Быстрое привлечение посетителей на сайт или точку продаж посредством неограниченных возможностей сервиса – настройка первой рекламной кампании занимает не более, чем 1 час;</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Бюджет настраивается гибко, что позволит устанавливать бюджеты на сутки и позволит скорректировать их в зависимости от результатов рекламной кампании;</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Проверка качества объявлений: какие позиции они занимают при запросе пользователя и какую стоимость клика сформируют эти объявления.</p>
          </li>
        </ul>
      </article>
  </section>

  <section class="section-std success ">
    <div class="container">
      <div class=" wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow section-subtitle">реклама</h4>
      <h2 class="wow section-title ms">
        Реклама в Google – быстро в Минске!
      </h2>
      <p class="wow section-p ms">Обзор выбора площадок для размещения, который будет очень широким. Можно подобрать подходящий сайт, входящий в контекстно-медийную сеть Google для того, чтобы выбрать его площадкой для размещения рекламных объявлений о Ваших товарах или услуг.</p>
      <div class="float-second quality-service quality-service_mrg-top">
        <div class="left-part">
          <p class="bold">Контекстная реклама в Google может быть представлена в виде:</p>
          <ul class="quality-service-list">
            <li>
              <p class="bold">
                Баннеров
              </p>
            </li>
            <li>
              <p class="bold">
                Текстовых объявлений
              </p>
            </li>
            <li>
              <p class="bold">
                Видеороликов
              </p>
            </li>
          </ul>
        </div>
        <div class="quality-service_info">
          <p>В GoogleAds стоимость клика намного ниже, чем в контекстно-медийной сети Яндекс. В сети Яндекс конкуренция держится на более высоком уровне, поэтому весь привлеченный трафик в данной КМС будет стоить дороже.</p>
          <p>Контекстная реклама в КМС может быть использована как для одного направления в проекте, так и для всего комплекса. Реклама такого типа быстро привлекает целевых посетителей на сайт, который может быть как заново созданным, так и уже давно существующим.</p>
          <p>Реклама, которая настроена верно по всем критериям (ЦА, геолокация, интересы, доход, запрос по ключевым словам, площадки размещения объявлений) поможет пользователю обратить внимание на продукт или услугу, акцию или наполнение.</p>
          <p>И демонстрироваться в мобильных приложениях также в текстово-баннерном или видеоформате.</p>
          <p></p>
          <p class='mobile-last'>
            Специалисты «Веб Фокус» настроят рекламу согласно всем необходимым пунктам для показов Ваших товаров или услуг. Функционирование рекламы мониторится ежедневно, что позволит оперативно и грамотно вносить в неё правки.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-std fourth-block ">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">эффективность</h4>
      <h2 class="wow section-title ms">Эффективность рекламных кампаний в GoogleAds</h2>
      <p class="wow section-p ms">Эффективность рекламных кампаний в GoogleAds будет повышена посредством:</p>

      <div class="fourth-block__content">
        <div class="floating-card ">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hovered3d/catalog-grayblock.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Правильный подбор ключевых слов</h3>
            <div class="floating-card-arrow">
            </div>
          </div>
        </div>
        <div class="floating-card ">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/targeting/grayblock-5.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Предложим варианты слов для грамотного рекламирования товаров или услуг Вашего бизнеса</h3>
            <div class="floating-card-arrow">
            </div>
          </div>
        </div>
        <div class="floating-card ">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/targeting/grayblock-6.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Разобраны и представлены минус-слова, которые смогут удалить нерелевантный трафик</h3>
            <div class="floating-card-arrow">
            </div>
          </div>
        </div>
      </div>
      <p class="ms next-p">Мы предоставляем статистику по всем направлениям рекламной кампании. Легко отслеживать увеличение охвата, более активный канал коммуникации, конверсию. Все действия лидов, приходящих через рекламу, сможете увидеть и в GoogleAnalytics, и в отчетах, которые предоставляются специалистами «Веб Фокус».</p>
      <p class="ms">Рекомендуем проанализировать работу и за рамками рекламного кабинета. Планирование рекламных кампаний и конкретные действия осуществляется не только на основе анализа цены за клик и стоимости осуществляемой конверсии.</p>
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
      <h4 class="wow section-subtitle">ресурсы</h4>
      <h2 class="wow section-title ms">
        Для создания новых и эффективных предложений необходимо:
      </h2>
      <div class="float-second quality-service">
        <div class="left-part">
          <ul class="quality-service-list">
            <li>
              <p class="bold">
                Полностью проследить путь клиента от клика по объявлению до покупки товара либо совершения действия в целом;
              </p>
            </li>
            <li>
              <p class="bold">
                Убедиться в том, что лид, пришедший благодаря рекламе, заинтересован в продукте больше, его не переманят предложения конкурентов.
              </p>
            </li>
          </ul>
        </div>
        <div class="quality-service_info">
          <p>Возможности продвижения бизнеса, товаров или услуг не ограничены: способы работы в КМС, социальных сетях, создание и оформление лендингов упрощает работу и уменьшает количество времени, проведённого за оптимизацией бюджета и выборе целевой аудитории. Бюджет на продвижение должен быть сформирован и распределяться в рамках медиапланирования.</p>
          <p class='mobile-last'>
            Специалисты «Веб Фокус» сделают рекламу действенной, которая покажет результаты в виде охвата, конверсии и сделает бизнес узнаваемым! Продемонстрируем результаты с конверсией и показателям, оставляйте заявку на www.webfocus.by!
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>