<?php
/*
    Template Name: adaptivnaya-versiya-sajta
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
          <h1 class="sub-hero__title">Адаптивная (мобильная) версия</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>Современного человека трудно представить без гаджетов. Практически каждый пользуется мобильным устройством ежедневно. Для того, чтобы выход в интернет с телефона или планшета был удобным и не составлял труда для пользователя разработчики сайтов трудятся над созданием мобильных версий и адаптируют Интернет ресурс для использования с мобильных устройств. Компания «Веб-фокус» занимается разработкой мобильной версии сайта и зарекомендовала себя как надежный партнер. Оформите заказ у нас и вы получите гарантированный результат, который повысит охваты  и будет полезен пользователям.
                </p>
              </div>

            </div>
            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость адаптивной (мобильной) версии:</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">2000</span> BYN</h4>
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

  <section class="section-std success">
    <div class="container">
      <div class=" wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow section-subtitle">факторы</h4>
      <h2 class="wow section-title ms-720">
      Что такое мобильная версия
      </h2>
      <div class="float-second quality-service">
        <div class="left-part">
          <p class="bold">Это обусловлено наличием следующих факторов:
          <ul class="quality-service-list">
            <li>
              <p class="bold">
              Иная ориентация экрана;
              </p>
            </li>
            <li>
              <p class="bold">
              Неудобное размещение информационных блоков;
              </p>
            </li>
            <li>
            <p class="bold">
            Небольшие кнопки;
              </p>
            </li>
            <li>
              <p class="bold">
              Избыток тяжелых элементов и т.д.
              </p>
            </li>
          </ul>
        </div>

        <div class="quality-service_info">
          <p>
          Мобильная версия Интернет ресурса по сути представляет собой дубликат основного сайта, для создания которой используется специализированная верстка. Благодаря этому просматривать странички и переходить от одной к другой становится удобнее с мобильного устройства. Информация подается наглядно. Достаточно пролистнуть вниз и найти искомые данные.
          </p>

          <p>
          В отличии от мобильной версии сайта стандартная верстка, которая предназначена для стационарных компьютеров и используется на телефоне или планшете, крайне неудобна для восприятия.
          </p>

          <p>
          Это приводит к серьезным неудобствам для посетителя страницы. В итоге, потенциальный покупатель или заказчик покидает страничку, а создатель Интернет ресурса теряет клиента, снижается конверсия и сокращается трафик. Подобное положение дел крайне нежелательно.
          </p>

          <p>
          Чтобы снизить риски потери клиентов специалисты рекомендуют сделать адаптивную версию сайта.
          </p>

          <p>
          Принцип работы прост. Когда посетитель заходит на сайт, устройство автоматически идентифицируется. Если это компьютер, то страничка остается в прежнем формате. Если ширина экрана соответствует той, которая характерна для телефона или планшета, то посетитель переадресуется на мобильную версию, размещенную на отдельном поддомене.
          </p>

          <p>
          Вы можете заказать адаптивную версию сайта или мобильную в компании «Веб-фокус». Чтобы новая версия не воспринималась поисковыми системами как отдельный ресурс рекомендуем разместить поддомен на том же домене, что и основной источник. Это необходимо для эффективного продвижения.
          </p>

          <p class='mobile-last'>
          При возникновении вопросов по поводу разработки мобильного или адаптивного дизайна и стоимости работ просим связаться с нашими менеджерами по работе с клиентами, которые ответят на интересующие вопросы.
          </p>
        </div>
      </div>
    </div>
</section>


<div class="tmpl-cases">
  <?php get_template_part('template-parts/cases'); ?>
</div>
  <?php get_template_part('template-parts/contact-form'); ?>

  
  <section class="section-std section-std-top-0 section-std-bottom-0">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">преимущества</h4>
      <h2 class="wow section-title ms-720">Мобильная версия и адаптивный дизайн</h2>
      <!-- <p class="wow section-p ms-720">
        <strong>Дизайн полиграфии</strong> — это также оформление товарной упаковки и этикетки. Именно на упаковку и этикетку первым делом обращает внимание покупатель, впервые увидевший товар в магазине. Их внешний вид должен быть безупречен, и мы позаботимся об этом.
      </p> -->

      <div class="three-part-p three-part-p_mrg-top">
        <p>
        Для тех владельцев web-ресурсов, которые заботятся о продвижении и повышении заинтересованности пользователей к их сайтам, отдельное внимание следует уделить адаптивной верстке. Наряду с мобильной версией она позволяет сделать сайт удобнее для использования, более наглядным. При этом перевод на адаптивную версию не требует глубокой проработки самостоятельного интерфейса.
        </p>
        <p>
        Суть адаптивного дизайна состоит в том, что ресурс в автоматическом режиме подстраивается под экран мобильного телефона или планшета. При этом просмотр содержания страниц и переход от одной к другой максимально удобен. По сравнению с мобильной <b>разработка адаптивной версии сайта</b> немного проще. Дело в том, что страницы будут иметь один и тот же адрес. Это, в свою очередь, предоставляет ряд преимуществ в процессе продвижения.
        </p>
        <p>
        Если перед вами стоит вопрос о том, какой вариант оптимальнее, то рекомендуем обратить внимание на то, что сайт может стать слишком тяжелым. Это влияет на скорость загрузки контента, рисунков, графиков, таблиц и других иллюстраций. А потеря времени негативно воспринимается посетителем.
        </p>
      </div>

  </section>

  <section class="section-std section-std-top-0  ">
    <div class="container">
      <div class=" wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <!-- <h4 class="wow section-subtitle"></h4>
      <h2 class="wow section-title ms"></h2> -->
      <!-- <p class="section-p wow ms-720"></p> -->

      <div class="sub-hero__info_left" style="margin-top: 6rem">
                <p><b>Мобильная версия сайта предоставляет его владельцам колоссальные преимущества. Среди них выделяются следующие:</b>
                </p>
              </div>

      <div class="fourth-block__content">
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/targeting_new/grayblock-2-1.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Создание комфортных условий для пользователей;</h3>
            <div class="floating-card-arrow">
            </div>
          </div>
        </div>
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/targeting_new/grayblock-3-2.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Повышение лояльности среди посетителей;</h3>
            <div class="floating-card-arrow">
            </div>
          </div>
        </div>
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/targeting_new/grayblock-3-3.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Максимальный охват целевой аудитории;</h3>
            <div class="floating-card-arrow">
            </div>
          </div>
        </div>

        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/targeting_new/grayblock-3-4.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Увеличение оценки поисковиков;</h3>
            <div class="floating-card-arrow">
            </div>
          </div>
        </div>
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/targeting_new/grayblock-3-5.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Удобство навигации и др.</h3>
            <div class="floating-card-arrow">
            </div>
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
      <h4 class="wow  section-subtitle">правила</h4>
      <h2 class="wow section-title ms-720">Полезные советы</h2>
      <p class="wow section-p ms-720">Если вы планируете самостоятельно заняться разработкой мобильной версии сайта, то необходимо руководствоваться удобством для конечного пользователя.
      <br><br>
      Это означает, что в процессе подготовки мобильной верстки, рекомендуется подбирать удобочитабельный шрифт, который воспринимается не только в спокойной обстановке, но и «на ходу». Шрифт должен быть без засечек, не менее 12 пикселей, контрастным в сравнении с фоном.
      </p>

      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
            <h3>Для этого требуется  учитывать следующие правила:</h3>
          </div>
        </div>
        <ul class="function-list">
          <li>
            <span class="function-list-marker"></span>
            <p>Вертикальное расположение экранов мобильных устройств (ориентация стандартна и меняется только по личному усмотрению пользователя);</p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>Нецелесообразно игнорировать внешние факторы, которые прямо или косвенно влияют на пользователя.</p>
          </li>
        </ul>
      </article>
      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
            <h3>Кроме того, следует соблюдать следующие правила:</h3>
          </div>
        </div>
        <ul class="function-list">
          <li>
            <span class="function-list-marker"></span>
            <p>Минимальное количество информации для запроса при заполнении формы обратной связи (подумайте, какая информация является приоритетной для первого контакта с клиентом);</p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>Тщательная проверка предложенных к заполнению форм (если предполагается введение номера телефона, то в предусмотренной для этого графе должно быть достаточное количество символов и т.д);</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Крупные интерактивные элементы. Это понадобится для того, чтобы посетитель мобильного сайта мог без труда нажать на нужную ему кнопку даже на ходу;</p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>Снижение времени загрузки страницы за счет сжатия картинок, сокращения текстового наполнения без потери функциональности и содержательности;</p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>Кликабельность контактной информации (при нажатии на указанные телефоны и адреса электронной почты автоматически открываются странички или приложения, запустив которые клиент смоет без труда связаться с владельцем Интернет-ресурса);</p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>Избегание горизонтальных прокруток (необходимо обеспечить одну колонку элементов, которые рассчитаны на вертикальный экран).</p>
          </li>

        </ul>
      </article>

      <div class="ms-720" style="margin-top:4.375rem">
                <p>Соблюдение представленных рекомендаций позволит сделать сайт удобнее для использования с мобильных телефонов и планшетов, что положительно отразится на привлечении новых клиентов.
                <br><br>
                Если разработать мобильную версию Интернет ресурса за счет собственных сил не представляется возможным, предлагаем воспользоваться услугами компании «Веб-фокус» и <b>заказать мобильную версию сайта</b>. Наши прогаммисты и IT-шники в кратчайшие сроки выполнят возложенные на них задачи и в конечном итоге вы получите адаптированную версию собственного портала для мобильных устройств. В результате посетители по достоинству оценят портал.
                </p>
              </div>

  </section>


  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider' ); ?>
</main>
<?php get_footer() ?>