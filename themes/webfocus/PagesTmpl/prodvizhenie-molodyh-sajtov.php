<?php
/*
    Template Name: prodvizhenie-molodyh-sajtov
    Template post type:  page
    */
?>
<?php get_header() ?>

<main>
  <div class="sub-hero-wrp">
    <lottie-player class="bg-animation contekst" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/seo.json" loop speed="1" autoplay></lottie-player>
    <section class="sub-hero">
      <div class="container">
        <div class="sub-hero-wrapper">
          <?php echo do_shortcode('[breadcrumb_simple]') ?>
          <h1 class="sub-hero__title">Продвижение <br> молодых сайтов</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Вряд ли компании, недавно появившиеся на рынке, смогут сходу снискать к себе доверие и набрать множество клиентов. К ним поначалу люди относятся с осторожностью. Их поведение в чём-то схожее с действиями поисковых систем относительно молодых сайтов. Опытные копирайтеры из компании «Веб Фокус» знают, что seo молодого сайта требует значительных усилий, а также времени и терпения. 
                <br><br>
                Дело в том, что популярные на постсоветском пространстве поисковики Яндекс и Google не допустят появления новых веб-ресурсов в топе выдач. И это нормально, так как необходимо завоевать доверие этих систем. Так что оптимизация юных веб-ресурсов по времени тянется дольше, чем те же действия, но с имеющими историю сайтами.
                </p>
              </div>

            </div>
            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость продвижения молодых сайтов:</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">550</span> BYN</h4>
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
                <h4>Срок продвижения:</h4>
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
    </section>
  </div>

  <section class="section-std ">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">причины</h4>
      <h2 class="wow section-title ms-720">Проблемы seo продвижения молодого сайта</h2>
      <p class="wow section-p ms-720">Причины, из-за которых новым порталам долго не удаётся получить позиции трафика в Гугле или Яндексе, исчисляются десятками. Часто встречаются следующие:</p>
      <div class="wrap-market-card">
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Веб-ресурс содержит ошибки</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <!-- <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seo/soderzit-oshibki.svg" alt="img">
            </div> -->
          </div>
          <div class="market-card__info">
            <p>Прежде чем что-то предъявлять поисковым системам, надо воспользоваться техническим аудитом от компании «Веб Фокус» и поработать над исправлением если не всех, то основных недочётов в функционировании веб-ресурса. Если его индексация настроена неверно (что легко заметить специалистам и сложно тем, кто мало что смыслит в seo), продвижения его в топ можно не ждать годы.
            </p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Внешняя seo-оптимизация</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <!-- <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seo/optimizatsiya.svg" alt="img">
            </div> -->
          </div>
          <div class="market-card__info">
            <p>
            Об её эффективности существуют полярные мнения. Но по сей день она остаётся влиятельным инструментом ранжирования в Гугле. Новые домены являются главной причиной в отсутствии позиций. Ресурс может долго копаться в «Песочнице Гугла» (фильтр, не позволяющий высоко ранжироваться), при этом эффективность внутреннего продвижения будет равна нулю.
            </p>
          </div>
        </div>
      </div>
  </section>

  <div class="tmpl-cases">
      <?php get_template_part('template-parts/cases'); ?>
    </div>
    <?php get_template_part('template-parts/contact-form'); ?>

   <section class="section-std fourth-block section-std-top-0">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">этапы</h4>
      <h2 class="wow section-title">Этапы seo-оптимизации юного веб-ресурса</h2>
      <p class="section-p wow ms-720">Продвижение данной категории сайтов состоит из:</p>
      <div class="fourth-block__content">
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seo/vnytrennie-seo.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Внутреннего seo</h3>
            <div class="floating-card-arrow">
            </div>
            <p>Первое, на что обращают внимание, это внутренняя seo-оптимизация. Если теги не приведены в порядок, не подготовлено семантическое ядро и имеются дубли, то за продвижение молодого сайта в Минске и других городах Беларуси браться не стоит;</p>
          </div>
        </div>
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seo/vnytrennie-seo-2.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Контента</h3>
            <div class="floating-card-arrow">
            </div>
            <p>На нём экономить не нужно. Копирайтеры компании «Веб Фокус» пишут тексты для людей. Если нравятся они пользователям, то поисковые роботы тоже не найдут в них ничего запрещённого. Главное в текстах – качество и регулярность их появления. Хороший контент найдёт больше поклонников посредством ссылок, а частота публикаций увеличит семантический охват и количество новых пользователей;</p>
          </div>
        </div>
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seo/vnytrennie-seo-3.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Работа с обратными ссылками</h3>
            <div class="floating-card-arrow">
            </div>
            <p>Привлечение тематических ссылок будет плюсом. Но важно не их количество, а качество. Они безопаснее для поисковиков. Особенно это касается Гугла;</p>
          </div>
        </div>
        <div class="floating-card ">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seo/vnytrennie-seo-4.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Анализа деятельности конкурентов</h3>
            <div class="floating-card-arrow">
            </div>
            <p>Его надо проводить перед началом продвижения молодого сайта в Минске. Анализ десяти первых компаний в выдаче поможет понять, что и как они делают, и каким образом их работа оказывает влияние на конечный результат. Здесь важно провести изучение, как обратных ссылок, так и источников трафика, контента;</p>
          </div>
        </div>
        <div class="floating-card ">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seo/vnytrennie-seo-5.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Факторов социального характера</h3>
            <div class="floating-card-arrow">
            </div>
            <p>Трафик такого толка (со страниц соцсетей) проще привлекать с помощью контента. Главное – чтобы он регулярно появлялся на страницах и был полезен целевым пользователям и просто читателям.</p>
          </div>
        </div>
      </div>
      <p class="ms-720">Рекомендаций может быть больше в плане продвижения молодого сайта в Яндексе, Гугле. Но выполнение на практике хотя бы этих советов уже поспособствует появлению приемлемых результатов.</p>
      </br>
      <p class="ms-720">В Интернете есть веб-ресурсы, которые не уже не работают (чаще из-за окончания сроков регистрации домена), но имеют неплохой ссылочный профиль. Их можно использовать во внешнем продвижении. Но такая работа – для опытных копирайтеров компании «Веб Фокус». Дропы помогают улучшить результаты поисковой выдачи, не увеличивая затрат на проведение внешнего seo.</p>
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
      <h4 class="wow  section-subtitle">что мы делаем</h4>
      <h2 class="wow section-title ms">Как не попасть под поисковый фильтр?</h2>

      <div class="three-part-p">
        <p>
        Упоминавшаяся в начале текста «Песочница» не должна игнорироваться во время seo нового сайта. Её накладывает Google, не позволяющий высоко проникать в ТОП недавно созданным страницам (минимум полгода, максимум год). Дело вот в чём: Гугл обращает внимание при ранжировании на репутацию со времени создания. Но так как новый ресурс не имеет возможности похвастать богатой историей работы с целевыми и другими пользователями, то неясна его репутация. Чтобы не попасть в «Песочницу Google», надо ресурс оптимизировать комплексно, работать со ссылками с тематических трастовых веб-страниц. Таким образом Google быстро узнает о существовании нового веб-сайта.
        </p>
        <p>
        Продвижение только что «родившегося» сайта от «Веб Фокус» — это комплекс действий. Мы анализируем конкурентов, проводим аудит, подготавливаем и размещаем уникальные тексты, регулярно их обновляем. А также работаем со ссылочной массой, чтобы быстрее вызвать доверие поисковиков.
        </p>
        <p>
        Если нет опыта в seo-оптимизации, то самостоятельная работа по продвижению молодого сайта в Минске с нуля – сложное дело. Не стоит зря тратить время. Лучше довериться профессионалам с «Веб Фокуса». Мы продвинем сайт с любой тематикой с нуля и добьёмся того, чтобы он стал приносить прибыль владельцу. За счёт грамотного использования эффективной методики увидим его в скором времени в ТОПе выдачи поисковых систем Yandex и Google. Хотите раскрутить юный сайт с нуля – ваш путь лежит в «Веб Фокус»!

        </p>
      </div>
    </div>
  </section>

  <section class="section-std">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">особенности и плюсы</h4>
      <h2 class="wow section-title">Как продвинуть новичка?</h2>
      <p class="wow section-p ms">
        Работа с молодыми веб-ресурсами – это интересные особенности и плюсы. Чтобы поскорее их увидеть в ТОП выдачи, надо:
      </p>
      <div class="wrap-market-card">
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Обезопасить его от индексации</h3>
              <div class="market-card__title_arrow"></div>
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Не надо, чтобы неготовый ресурс индексировали поисковые системы;
            </p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Поработать над составом семантического ядра</h3>
              <div class="market-card__title_arrow"></div>
            </div>

          </div>
          <div class="market-card__info">
            <p>
            Оно должно быть полным. Подбор запросов надо делать на действующие страницы, а также на те, добавление которых запланировано в процессе оптимизации. Этот пункт можно выполнять с помощью сервисов serpstat, just-magik, wordstat (Yandex wordstat), rush-analytics и других;
            </p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Работа с уникальными мета-тегами – description, title для запросов</h3>
              <div class="market-card__title_arrow"></div>
            </div>

          </div>
          <div class="market-card__info">
            <p>
            Они пишутся под запросы для поисковых систем. Недопустимы повторы и перебивка друг друга;
            </p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Написание текстов, оптимизированных под «ключи»</h3>
              <div class="market-card__title_arrow"></div>
            </div>

          </div>
          <div class="market-card__info">
            <p>
            Их размещают на важных страницах. Материалы готовятся в строгом соответствии с техзаданием;
            </p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Настройка</h3>
              <div class="market-card__title_arrow"></div>
            </div>

          </div>
          <div class="market-card__info">
            <p>
            Корректная настройка индексации веб-ресурса и открытие его для этого процесса;
            </p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Добавление молодого сайта в Яндекс и Гугл</h3>
              <div class="market-card__title_arrow"></div>
            </div>

          </div>
          <div class="market-card__info">
            <p>
            В Яндексе настраивается необходимый регион.
            </p>
          </div>
        </div>
      </div>
      <p class="ms" style="margin-top: 4rem;">Эту работу грамотно выполняют специалисты «Веб Фокуса». С момента начала сотрудничества с ними и до достижения конечного результата проходит около месяца.</p>
    </div>
  </section>




  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>