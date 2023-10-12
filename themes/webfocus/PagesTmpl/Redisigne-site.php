<?php
/*
    Template Name: Redizayn-sayta
    Template post type:  page
    */
?>


<?php get_header() ?>
<main>
  <div class="sub-hero-wrp">
    <lottie-player class="bg-animation contekst" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/design.json" loop speed="1" autoplay></lottie-player>
    <section class="sub-hero">

      <div class="container">
        <div class="sub-hero-wrapper">

          <?php echo do_shortcode('[breadcrumb_simple]') ?>
          <h1 class="sub-hero__title">Редизайн сайта</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <h3>Редизайн сайта: идем в ногу со временем</h3>
                <p>
                  Каждый сетевой ресурс периодически нуждается в редизайне – обновлении. Дизайнерские решения и технологии устаревают, утрачивают актуальность, и сайт становится скучным и уже не столь популярным у пользователей. Встаёт вопрос о редизайне, незначительном или комплексном.</p>
                <br>
                <p>
                  Заказав услугу по редизайну сайта у ООО «Веб Фокус» (г. Минск), Вы получите комплексный подход, удобную навигацию и эффективный и стильный обновлённый сайт.
                </p>
              </div>

            </div>
            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость редизайна сайта: </h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">1700</span> BYN</h4>
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
                <h4>Срок изготовления сайта:</h4>
                <div class="price-coast-converter">
                  <h4>от <span>10</span> дней</h4>
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

  <section class="section-std fourth-block ">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">оптимизация</h4>
      <h2 class="wow section-title">Когда необходим редизайн</h2>
      <p class="wow section-p ms">Есть мнение, что проводить редизайн следует не реже одного раза в пять лет. Но так ли это? Прежде чем начинать паниковать по поводу отсталости ресурса и планировать выполнение любых работ, надо чётко понять, нуждается ли сайт в редизайне. Для этого необходимо задать себе следующие вопросы и честно ответить на них:
      </p>
      <div class="fourth-block__content">
        <div class="floating-card">
          <div class="floating-card-img">

            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/internet-magazin/shop-grayblock.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Производительность.</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
              Падает ли конверсия, действительно ли уменьшается число реальных покупателей Ваших товаров к количеству потенциальных покупателей? Уменьшается ли время, которое вероятные клиенты проводят на Вашем сайте?
            </p>
          </div>

        </div>
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hovered3d/catalog-grayblock.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Внешний вид.</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
              Современно ли выглядит Ваш ресурс? Уступает ли дизайну конкурентов?
            </p>
          </div>
        </div>
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/internet-magazin/shop-grayblock-3.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Адаптивность.</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
              Есть ли у Вашего сайта адаптивный дизайн или мобильная версия?
            </p>
          </div>
        </div>


        <p class="ms-720">
          Если на все вопросы Вы ответили «да», значит редизайн неизбежен.
        </p>
      </div>
    </div>
  </section>

  <div class="tmpl-cases">
    <?php get_template_part('template-parts/cases'); ?>
  </div>
  <?php get_template_part('template-parts/contact-form'); ?>

  <section class="section-std   bubbles-block-with-section-p six-block bubbles-block">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">пояснения</h4>
      <h2 class="wow section-title ms">Что же это — редизайн? </h2>
      <p class="section-p ms">
        Редизайн сайта – это технология, которая позволяет существенно изменить и улучшить внешний облик сайта и его функциональность. При этом ресурс сохраняет привычный образ, например логотип или корпоративные цвета.
        <br>
        <br>
        От создания нового сайта редизайн отличается тем, что сохраняется часть контента, не отвергаются действующие верные наработки. В процессе редизайна лучшее из прошлого логично соединяется с новыми современными решениями.
        При выполнении редизайна сайта:

      </p>
    </div>
    <div class="bubbles-main-line six-bubles">
      <div class="container">
        <div class="bubble-wrp bubble-wrp-1">
          <div class="bubbles bubbles-1">
          </div>
          <p class="bubbles-info">Изменяется внешний облик страниц;</p>
        </div>
        <div class="bubble-wrp bubble-wrp-2">
          <div class="bubbles bubbles-2">
          </div>
          <p class="bubbles-info">Добавляется новые рубрики и актуальный контент;</p>
        </div>
        <div class="bubble-wrp bubble-wrp-3">
          <div class="bubbles bubbles-3">
          </div>
          <p class="bubbles-info">Улучшается всё, что называется юзабилити (меню, поисковые фильтры, навигационные решения);</p>
        </div>
        <div class="bubble-wrp bubble-wrp-4">
          <div class="bubbles bubbles-4">
          </div>
          <p class="bubbles-info">Обновляются логотип и баннеры;</p>
        </div>
        <div class="bubble-wrp bubble-wrp-5">
          <div class="bubbles bubbles-5">
          </div>
          <p class="bubbles-info">Оптимизируется код, используемый для структурирования и визуализации страницы – html-код;</p>
        </div>
        <div class="bubble-wrp bubble-wrp-6">
          <div class="bubbles bubbles-6">
          </div>
          <p class="bubbles-info">Иногда сайт переносится на более современную и функциональную CMS (систему управления контентом).</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h3 class="two-row-advantages-title">Обобщая сказанное, выделим виды редизайна:</h3>
      <article class="advantages two-row">
        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>Визуальный.</h3>
              <p>
                Визуальный, сконцентрированный на внешних изменениях и модных дополнениях. Сайт становится современнее;
              </p>
              <div class="advantages-number">01</div>
            </div>
          </div>
        </div>
        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>Функциональный.</h3>
              <p>
                Функциональный, затрагивающий навигацию, разделы, меню, поисковые фильтры. Сайт становится более удобным для пользователей;
              </p>
              <div class="advantages-number">02</div>
            </div>
          </div>
        </div>

        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>Технический.</h3>
              <p>
                Технический, затрагивающий программный код. Грамотно выполненный улучшает позиции сайта в поисковых системах;
              </p>
              <div class="advantages-number">03</div>
            </div>
          </div>
        </div>
        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>Комлексный.</h3>
              <p>
                Глубокий или комплексный, сочетающий элементы трёх названых видов. Происходят визуальные, технические, функциональные изменения.
              </p>
              <div class="advantages-number">04</div>
            </div>
          </div>
        </div>
      </article>
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
      <h4 class="wow  section-subtitle">алгоритм</h4>
      <h2 class="wow section-title">Этапы редизайна: идем постепенно и последовательно</h2>
      <p class="section-p ms-720">
        Когда сформировано чёткое понимание того, что редизайн необходим, принято решение, в каком объёме он необходим, нужно воплотить задуманное в жизнь и сделать это правильно. Как же проходит грамотный редизайн? Рассматриваем основные шаги.
      </p>

      <div class="algoritm-block__exercise">
        <h3 class="exercise__summa">
          Дизайн
        </h3>
        <h3 class="exercise__symbol">
          =
        </h3>
        <div class="algoritm-block__parth">
          <h3>концепция</h3>
          <h3 class="exercise__symbol">+</h3>
          <h3>планирование</h3>
          <h3 class="exercise__symbol">+</h3>
          <h3>реализация</h3>
        </div>
      </div>
      <div class="steps-to-goal">
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>01.</h3> <span>Шаг 1</span>
            </div>
            <h3>Начало работы.</h3>
          </div>
          <div class="step-to-goal__info">
            <h4>
              Работа начинается с планирования предстоящих изменений, то есть с разработки концепции.
            </h4>
            <p>
              Для начала просматриваются и анализируются сайты конкурентов (и не один – два, а несколько десятков) и у каждого отмечаются и берутся на заметку лучшие решения, будь то удобные подсказки или ссылки, неординарные решения информационных блоков, привлекающие внимание иконки. Время, затраченное на изучение конкурирующих ресурсов, окупится неоднократно.
            </p>
            <p>
              <strong>Анализируется и собственный сайт.</strong> Чтобы не утратить и не испортить жизнеспособные наработки, не растерять, «всё, что нажито непосильным трудом», решается, какие элементы останутся неизменными.
            </p>
            <p>
              <strong>Принимается стратегическое решение,</strong> останется ресурс на прежней CMS (системе управления сайтом) или будет перенесён на новую. Причиной замены становится сложность внесения изменений или частые взломы. Первое характерно для сайтов на HTML, второе – для сайтов на Joomla.
            </p>
            <p>
              Выводы обобщаются и формируется концепция будущего продукта.
            </p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>02.</h3> <span>Шаг 2</span>
            </div>
            <h3>Оптимизация и создание дизайна.</h3>
          </div>
          <div class="step-to-goal__info">
            <h4>
              Второй логичный шаг – улучшение восприятия информации на страницах сайта: оптимизация текстового наполнения, подготовка нового контента – статей, таблиц, призывов к действию, фото- и видеоматериалов, инфографики.
            </h4>
            <p>
              Здесь учитываются лучшие находки и оптимальные решения, принятые на предыдущем этапе.
            </p>
            <p>
              Затем на основе сформированной концепции создаётся дизайн-макет будущего портала: разрабатывается структура, продумываются пропорции, принимаются решения по расположению всех блоков на странице, выбирается стилистическое оформление (классика, гранж, винтаж, минимализм, готика – список обширен), подбирается цветовая гамма и шрифты, графические элементы и иллюстрационные материалы. Учитываются лучшие решения изменяемого сайта, остаются необходимые элементы брендбука и фирменного стиля организации. Создается готовый дизайн.
            </p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>03.</h3> <span>Шаг 3</span>
            </div>
            <h3>Вертска и программирование.</h3>
          </div>
          <div class="step-to-goal__info">
            <h4>
              Следующий этап – вёрстка.
            </h4>
            <p>
              Вёрстка состоит из нарезки дизайна и кодирования в HTML. Загадочный для непрофессионала этап, итог которого – свёрстанные шаблоны главной, второстепенных и служебной страниц. Статичный макет наполняется жизнью.
            </p>
            <p>
              Затем следует программирование, то есть внесение изменений в программный код, оптимизируется работа сайта, выполняются изменения для ускорения загрузки страниц.
            </p>

          </div>
        </div>

        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>04.</h3> <span>Шаг 4</span>
            </div>
            <h3>Тестирование.</h3>
          </div>
          <div class="step-to-goal__info">
            <h4>
              Предпоследний этап – тестирование.
            </h4>
            <p>
              Аудит работоспособности и жизнеспособности сайта после внесённых изменений и доработок. Проверяются комфорт и практичность для пользователей и отсутствие ошибок.
            </p>

          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>05.</h3> <span>Шаг 5</span>
            </div>
            <h3>Запуск проекта.</h3>
          </div>
          <div class="step-to-goal__info">
            <h4>
              И вот он – запуск проекта.
            </h4>
            <p>
              Ресурсы с небольшой посещаемостью (несколько сот пользователей в день) запускаются в работу сразу, одномоментно.
            </p>
            <p>
              А если выполнялся редизайн портала с высокой посещаемостью, запуск нового продукта идёт поэтапно с акцентом на безопасность. Происходит тестирование нагрузкой и реальными пользователями.
            </p>
          </div>
        </div>
      </div>
      <p class="ms">
        <dt><strong>Редизайн</strong></dt>
        <dd>– полномасштабное изменение сайта, для которого необходимы комплексный подход и профессиональные решения. Справиться самостоятельно – практически нереально. Лучше обратиться к профессионалам, обсудить весь спектр изменений, контролировать ход работ на каждом этапе, получить готовый проект и наслаждаться результатом.
        </dd>
      </p>
    </div>
  </section>

  <section class="section-std service">
    <div class="container">
      <div class=" wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow section-subtitle">преимущества</h4>
      <h2 class="wow section-title">Редизайн изменяет жизнь <br> ресурса</h2>
      <div class="service-info">
        <div class="service-info__column">
          <p>Если надо переделать портал, добавить и описать новые работы и услуги, которые будет выполнять Ваша фирма, внедрить новые системы, чтобы Ваш ресурс заработал по-новому, быстрее, мощнее и успешнее, редизайн сайта неизбежен. И с этим как нельзя лучше справится ООО «Веб Фокус» (г. Минск), webfocus.by.
          </p>
        </div>
        <div class="service-info__column">
          <p>Специалисты агентства сохранят особенности Вашего бренда, но внесут кардинальные изменения и дадут устаревшему порталу новую жизнь. После грамотно проведённого редизайна появятся новые посетители сайта, а затем и новые покупатели.
          </p>
        </div>
        <div class="service-info__column">
          <p>
            Детально продуманный и филигранно проведенный редизайн сайта от ООО «Веб Фокус», выполненный с учетом пожеланий компании и современных тенденций виртуальной моды, позволит оставаться в тренде, выходить на лидирующие позиции и составлять сильную конкуренцию.
          </p>
          <a class="to-offer-link" href="#">
            <h3>Давайте вместе работать над этим!</h3>
            <svg viewBox="0 0 16 45" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.3 44.7c.4.4 1 .4 1.4 0l6.4-6.4a1 1 0 00-1.4-1.4L8 42.6l-5.7-5.7A1 1 0 001 38.3l6.4 6.4zM7 0v44h2V0H7z" fill="url(#paint-serv_linear)" />
              <defs>
                <linearGradient id="paint-serv_linear" x1="6.9" y1="-7.2" x2="9.3" y2="-7.1" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#AB85FF" />
                  <stop offset=".5" stop-color="#EBA3E3" />
                  <stop offset="1" stop-color="#FFDBE4" />
                </linearGradient>
              </defs>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>