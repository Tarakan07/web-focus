
<?php
/*
    Template Name: autsorsing-veb-razrabotki
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
          <h1 class="sub-hero__title">Аутсорсинг веб разработки</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Аутсорсинг разработки — это бизнес стратегия, при которой компания выполняет основные бизнес-задачи с помощью собственного (внутреннего) штата сотрудников и передает непрофильные задачи в руки внешних подрядчиков — аутсорсинговых компаний.
                </p>
              </div>
            </div>

            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость аутсорсинга веб разработки:</h4>
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
      <h2 class="wow section-title ms-720">Почему аутсорсинг стал популярным решением</h2>

      <div class="three-part-p three-part-p_mrg-top">
        <p>
        Аутсорсингом пользуются даже такие IT-гиганты, как Google, Slack, Microsoft, Alibaba и GitHub.  Outsource экономит деньги, время, дает гибкость персонала, высокую скорость внедрения инноваций, усиление контроля над внутренними ресурсами.
        </p>
        <p>
        Все больше компаний нуждаются в узкоспециализированных разработчиках. Тенденция обусловлена стремительной эволюцией технологического пространства. Нелегко построить собственную команду, которая идет в ногу с инновациями, появляющимися каждый день. 
        </p>
        <p>
        Компании ищут поставщиков аутсорсинговых услуг, которые специализируются на достижении качества, и без проблем работают с несколькими поставщиками для достижения желаемого результата. В качестве альтернативы инвестициям в ПО и найму новых сотрудников, аутсорсинг веб разработки дает предприятиям создавать профессиональный программный продукт и получить помощь, не формируя постоянную внутреннюю команду.
        </p>
      </div>

  </section> 

<div class="tmpl-cases">
  <?php get_template_part('template-parts/cases'); ?>
</div>
  <?php get_template_part('template-parts/contact-form'); ?>

  <section class="section-std">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">модели</h4>
      <h2 class="wow section-title ms-720">Модели аутсорсинга</h2>
      <div class="tmpl-third-block_content">

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Модель 1 — Фиксированная цена</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/autsorsing-veb-razrabotki/object-1.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Модель аутсорсинга с фиксированной ценой используется, когда определены требования к проекту и сроки. При фиксированной цене заказчик и сторонняя команда согласуют и тщательно вписывают в контракт требования, этапы, сроки и стоимость создания ПО.
            </p>
            <p>
            Подписывая договор, клиент доверяет удаленным программистам проект от А до Я, но с гарантией того, что цена не изменится во время работ или после развертывания проекта. Один контракт с фиксированной ценой также подразумевает, что в процессе разработки клиенту не доступны изменение или добавление требований, которые не были утверждены и записаны в контракте.
            </p>
            <p>
            Контракт рекомендуется для проектов любого масштаба: от аутсорсинга тестирования до аутсорсинга разработки конструкторов сайтов.
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Модель 2 — Время и материалы</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/autsorsing-veb-razrabotki/object-2.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Иногда руководителям трудно предсказать успех или неудачу проекта на начальном этапе. Некоторые заказчики чувствуют себя беспомощными, пытаясь четко определить, что будет хорошо работать для проекта, а что нет.
            </p>
            <p>
            Чтобы учесть неожиданные изменения, необходимо подписать гибкий контракт, который обеспечивает модель аутсорсинга времени и материалов. Контракт на время и материалы позволяет изменять требования в соответствии с потребностями бизнеса в любое время в процессе разработки и оплаты только за фактическое время и усилия, затраченные на разработку.
            </p>
          </div>
        </div>

        
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Модель 3 — Специальная команда</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/autsorsing-veb-razrabotki/object-3.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            В большинстве случаев для реализации сложных долгосрочных проектов необходима собственная команда разработчиков. Но что делать, если навыков внутренних разработчиков недостаточно для реализации проекта и нет времени участвовать в трудоемком процессе поиска технических талантов?
            </p>
            <p>
            Выделенная модель аутсорсинга команды поможет выйти из затруднительного положения.
            </p>
            <p>
            В соответствии требованиями, аутсорсинговая компания быстро выбирает кандидатов и после одобрения формирует команду. Как и собственная команда, сторонняя команда работает только над вашим проектом.
            </p>
            <p>
            Заказчик ежемесячно платит за каждого специалиста, которого “одолжил”, включая фиксированную плату за услуги аутсорсинговой компании. Контроль за ходом проекта, вместе с количеством программистов остается в руках заказчика.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="section-std  section-gray algoritm-block fifth-block">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">преимущества</h4>
      <h2 class="wow section-title ms-720">Аутсорсинг web разработки с «Веб Фокус»</h2>
      <div class="steps-to-goal steps-to-goal_mrg-top">

        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>01.</h3> <span>Шаг 1</span>
            </div>
            <h3>Преимущества работы с «Веб Фокус»:</h3>
          </div>
          <div class="step-to-goal__info">
          <p>
          Мы знакомы с корпоративными правилами, придерживаемся стандартов качества, разделяем рвение, олицетворяемое стартапами.
            </p>
            <ul class="arrow-marked-list">
              <li>
                <p class="bold">
                С помощью гибкой методологии, разбиваем проект на спринты для облегчения непрерывного сотрудничества и снижения риска ошибок. Разбиение этапов на спринты улучшает коммуникацию между всеми сторонами и гарантирует, что все участники понимают цели и задачи каждого этапа и проекта в целом.
                </p>
              </li>
              <li>
                <p class="bold">
                Применяем живые инструменты управления проектами, такие как Asana, Basecamp, Slack и Trello для поддержания контакта с внутренней командой заказчика. Инструменты позволяют быстро поднимать любые вопросы, предлагать изменения в продукте и делиться информацией.
                </p>
              </li>
              <li>
                <p class="bold">
                Постоянный запас программистов всех направлений позволяет быстро выделить укомплектованную команду разработчиков, использующую проверенные методологии. Мы избавляем от трудоемкого найма, адаптации и мотивации новых сотрудников.
                </p>
              </li>
              <li>
                <p class="bold">
                Аутсорсинг веб разработки с «Веб Фокус» освобождает время сотрудников, чтобы сосредоточиться на прямых обязанностях.
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
            <h3>У нас в штате:</h3>
          </div>
          <div class="step-to-goal__info">
          <p>
          Наши команды программисты полного стека охватывают все стороны создания мобильного или веб приложения. У наших разработчиков больше 5 лет опыта работы с тремя или более родственными технологиями. Мы также предлагаем отдельные услуги по тестированию, дизайну, разработке и продвижению.
            </p>
            <ul class="arrow-marked-list">
              <li>
                <p class="bold">
                FullStack-программисты.
                </p>
              </li>
              <li>
                <p class="bold">
                Бэкенд-программисты.
                </p>
              </li>
              <li>
                <p class="bold">
                Frontend-разработчики.
                </p>
              </li>
              <li>
                <p class="bold">
                Разработчики мобильных приложений.
                </p>
              </li>
              <li>
                <p class="bold">
                Дизайнеры UI, UX.
                </p>
              </li>
              <li>
                <p class="bold">
                QA тестировщики.
                </p>
              </li>
              <li>
                <p class="bold">
                Инженеры DevOps.
                </p>
              </li>
              <li>
                <p class="bold">
                Инженеры баз данных.
                </p>
              </li>
              <li>
                <p class="bold">
                Руководители проектов.
                </p>
              </li>
              <li>
                <p class="bold">
                Инженеры по машинному обучению.
                </p>
              </li>
              <li>
                <p class="bold">
                Инженеры AI.
                </p>
              </li>
              <li>
                <p class="bold">
                Инженеры AR, VR.
                </p>
              </li>
              <li>
                <p class="bold">
                Инженеры Big Data.
                </p>
              </li>
            </ul>
          </div>
        </div>

        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>03.</h3> <span>Шаг 3</span>
            </div>
            <h3>Этапы сотрудничества:</h3>
          </div>
          <div class="step-to-goal__info">
            <ul class="arrow-marked-list">
              <li>
                <p class="bold">
                Идея – клиенты показывают виденье будущего приложения. Любое приложение начинается с идеи, необходимости решения проблемы или автоматизации бизнес-процессов.
                </p>
              </li>
              <li>
                <p class="bold">
                Каждый проект требует детального анализа перед передачей разработчикам. Мы работаем вместе с заинтересованными сторонами проекта, чтобы подготовить подробный анализ конкурентов, определить краткосрочные и долгосрочные бизнес-цели, подготовить список функций и разделить их на запланированные выпуски. Результат фазы исследования — первоначальный список основных этапов разработки и план развертывания с предварительными оценками сроков.
                </p>
              </li>
              <li>
                <p class="bold">
                Постоянный запас программистов всех направлений позволяет быстро выделить укомплектованную команду разработчиков, использующую проверенные методологии. Мы избавляем от трудоемкого найма, адаптации и мотивации новых сотрудников.
                </p>
              </li>
              <li>
                <p class="bold">
                Работа делится на 2-4-недельные спринты. Каждый спринт включает в себя проектирование, разработку, тестирование и выпуск ряда функций, таким образом, мы постепенно добавляем запланированный функционал в продукт.
                </p>
              </li>
              <li>
                <p class="bold">
                Для обеспечения производительности, безопасности, качества взаимодействия и надежности ПО, используется множество методов тестирования приложений, от модульного до регрессионного тестирования. Тесты максимизируют производительность, повышают масштабируемость и поддерживают качество продуктов.
                </p>
              </li>
              <li>
                <p class="bold">
                Готовое веб-приложение — это не только часть функционирующего кода. Это также техническая документация, надежная команда поддержки, которая решает технические проблемы или проблемы с пользовательским интерфейсом. Мы предоставляем техническую и клиентскую поддержку для продуктов.
                </p>
              </li>
            </ul>
            <p>
            Закажите аутсорсинг разработки оставив заявку с помощью формы обратной связи.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider' ); ?>
</main>
<?php get_footer() ?>