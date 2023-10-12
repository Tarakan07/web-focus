<?php
/*
    Template Name: Dizayn-illyustratsiy
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
          <h1 class="sub-hero__title">Дизайн иллюстраций</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                  Профессиональная разработка иллюстраций позволяет бренду сформировать яркий, запоминающийся визуальный образ корпоративного персонажа. Это помогает наглядно отобразить рыночное позиционирование компании, привлечь к себе внимание целевой аудитории, отстроиться от конкурентов и повысить продажи.
                </p>
              </div>
            </div>
            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость дизайна иллюстрации:</h4>
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
                <h4>Срок создания:</h4>
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
      <h4 class="wow section-subtitle">внимание</h4>
      <h2 class="wow section-title ms-720">
        Искусство привлекать внимание с помощью иллюстраций
      </h2>
      <div class="float-second quality-service">
        <div class="left-part">
          <p class="bold">В повседневной работе собственного сайта они пригодятся для:</p>
          <ul class="quality-service-list">
            <li>
              <p class="bold">
                Оформления меню веб-ресурса;
              </p>
            </li>
            <li>
              <p class="bold">
                Знакомства пользователей сайта с командой сотрудников;
              </p>
            </li>
            <li>
              <p class="bold">
                Демонстрации выгод от сотрудничества, преимущества продвигаемых товаров и услуг;
              </p>
            </li>
            <li>
              <p class="bold">
                Рассказа о работе, истории и достижений компании или бренда;
              </p>
            </li>
            <li>
              <p class="bold">
                Демонстрации этапов работы над заказом клиента;
              </p>
            </li>
            <li>
              <p class="bold">
                «Разбавления» сплошной текстовый контент на сайте привлекательными картинками для облегчения восприятия.
              </p>
            </li>
          </ul>
        </div>
        <div class="quality-service_info">
          <p>Оригинальные иллюстрации дополняет и помогают лучше раскрыть и передать смысл любого текстового рекламного сообщения, будь то статья на сайте и почтовая рассылка. В компании «Веб Фокус» Вы сможете заказать создание иллюстраций профессиональными художниками для повышения эффективности рекламы, обновления дизайна сайта или компонентов фирменного стиля. Мы придадим Вашему общению с целевой аудиторией большую эмоциональную составляющую. А это прямой пусть к росту продаж.</p>
          <p>Задача хорошо выполненной иллюстрации — привлекать к себе внимание зрителя. Поэтому создание графических иллюстраций так востребовано для визуализации текстового контента в виртуальном пространстве.</p>
          <p>Графические изображения необходимы, что посыл, главная мысль текстового сообщения обрела визуальное воплощение, стала ближе и понятнее пользователю. Иллюстрированный контент лучше привлекает внимание, вызывает большую заинтересованность и помогает сформировать мотивацию к совершению целевого действия.</p>
          <p>Профессиональные иллюстрации помогают продвижению бизнеса и развитию брендов, становятся «визиткой» рекламных кампаний.</p>
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
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">преимущества</h4>
      <h2 class="wow section-title ms">Разновидности и преимущества иллюстрированной графики</h2>

      <div class="float-second quality-service">
        <div class="left-part">
          <p class="bold">Все разнообразие иллюстрированной графики можно разделить на несколько типов:</p>
          <ul class="quality-service-list">
            <li>
              <p class="bold">
                Фотографии;
              </p>
            </li>
            <li>
              <p class="bold">
                Схемы;
              </p>
            </li>
            <li>
              <p class="bold">
                Рисунки;
              </p>
            </li>
            <li>
              <p class="bold">
                Графики;
              </p>
            </li>
            <li>
              <p class="bold">
                Диаграммы.
              </p>
            </li>
          </ul>
        </div>
        <div class="quality-service_info">
          <p>Изображения также классифицируются по стилистике, технике исполнения и множеству других критериев. Один из главных параметров — цветопередача.</p>
        </div>
      </div>
      <h3 class="two-row-advantages-title">По этому признаку иллюстрированная графика делится на 4 вида:</h3>
      <div class="tmpl-third-block_content">
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Полноцветные</h3>
              <div class="market-card__title_arrow"></div>
            </div>
          </div>
          <div class="market-card__info">
            <p>
              Красочные яркие изображения без ограничений на количество оттенков в одном рисунке. Воспринимаются и запоминаются пользователями существенно лучше, чем монохромные.
            </p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Ограниченные по цветовой гамме</h3>
              <div class="market-card__title_arrow"></div>
            </div>

          </div>
          <div class="market-card__info">
            <p>
              В дизайне изображений такого типа художник использует строго определенные цвета (обычно не больше пяти). Обычно такие ограничения важны для компаний и брендов, строго следующих в оформлении любых материалов фирменному стилю и бренд-буку.
            </p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Монохромные</h3>
              <div class="market-card__title_arrow"></div>
            </div>

          </div>
          <div class="market-card__info">
            <p>
              Сюда относятся черно-белые изображения.
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Градиентные</h3>
              <div class="market-card__title_arrow"></div>
            </div>

          </div>
          <div class="market-card__info">
            <p>
              В создании таких иллюстраций дизайнер пользуется градиентными растяжками (плавный переход из одного цвета в другой).
            </p>
          </div>
        </div>
      </div>
      <p class="ms-720">Какой подход к стилю и цветовому решению при подготовке иллюстрированной графики выбрать, зависит от конкретного проекта, портрета целевой аудитории и ее предпочтений и пожеланий компании-клиента.</p>
    </div>
  </section>



  <section class="section-std section-std-top-0 custom_section-mobil-bottom-0">
    <div class="container">
      <div class=" wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow section-subtitle">преимущества</h4>
      <h2 class="wow section-title ms">Преимущества перед конкурентами</h2>
      <p class="section-p wow ms-720">Компании и бренды, использующие на своих веб-сайтах и в других рекламных материалах, получают следующие важные преимущества перед конкурентами:</p>
      <div class="fourth-block__content">
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seo-audit/grayblock-5.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>«Оживляют» тексты</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
              Делают их более динамичными и легкими для восприятия. Согласитесь, тексты с красивыми картинками читать легче и приятнее.
            </p>
          </div>
        </div>
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/smm/grayblock-9.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Эмоциональный отклик</h3>
            <div class="floating-card-arrow">
            </div>
            <p>Вызывают эмоциональный отклик у пользователей, который можно успешно конвертировать в продажи или другие полезные действия (регистрация на сайте, подписка на рассылку, вступление в сообщество, распространение понравившихся публикаций).</p>
          </div>
        </div>
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/designe/grayblock.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Повышение доверия</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
              Повышают уровень доверия, лояльности аудитории к бренду. Если компания уделяет время проработке качественной графики для своих промо-материалов, то наверняка относится также ответственно к своей продукции и сервису.
            </p>
          </div>
        </div>

        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/designe/grayblock-2.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Позитивный имидж</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
              Формируется позитивный имидж прогрессивного, дружественного людям бренда.
            </p>
          </div>
        </div>
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/designe/grayblock-1.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Стимул совершать действие</h3>
            <div class="floating-card-arrow">
            </div>
            <p>Естественным образом стимулируют пользователей совершать необходимые бизнесу действия.</p>
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
      <h4 class="wow  section-subtitle">разработка</h4>
      <h2 class="wow section-title ms-720">Как происходит разработка иллюстрированной графики</h2>
      <p class="section-p ms-720">
        Разработка иллюстраций для клиентов компании «Веб Фокус» состоит из нескольких последовательных этапов:
      </p>

      <div class="steps-to-goal steps-to-goal_mrg-top">
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>01.</h3> <span>этап 1</span>
            </div>
            <h3>Обсуждение целей, стратегии, нюансов работы.</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
              До начала активных работ наши специалисты совместно с представителями фирмы-заказчика проговаривают цели проекта, стратегию рекламной кампании, предпочтения клиента.
            </p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>02.</h3> <span>этап 2</span>
            </div>
            <h3>Изучение целевой аудитории и текущей ситуации на рынке.</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
              Чтобы готовая графика «била» точно в цель, мы подробно изучаем особенности рынка клиента, сильные стороны его продуктов и услуг, предложения конкурентов, специфику целевой аудитории, ее ожидания и предпочтения. Пропускать этап исследования недопустимо, иначе готовые иллюстрации не помогут достичь поставленных целей проекта. Полагаться на интуицию или прошлый опыт в таки проектах — недальновидное решение.
            </p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>03.</h3> <span>этап 3</span>
            </div>
            <h3>Проработка основной концепции, определение стилистики изображений.</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
              Художники и маркетологи продумывают концепцию будущих иллюстраций, выбирают наиболее подходящий стиль для проекта.
            </p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>04.</h3> <span>этап 4</span>
            </div>
            <h3>Визуализация контента</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
              Профессиональный художник визуализирует подготовленную концепцию, создает несколько вариантов эскизов и макетов.
            </p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>05.</h3> <span>этап 5</span>
            </div>
            <h3>Утверждение основного варианта, доработка.</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
              Совместно с заказчиком утверждаем лучший вариант из представленных эскизов. Художник дорабатывает согласованный макет, иллюстрации приобретают окончательный внешний вид.
            </p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>06.</h3> <span>этап 6</span>
            </div>
            <h3>Презентация итогов работы и передача файлов клиенту.</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
              Представляем заказчику готовую графику, сохраняем изображения во всех необходимых форматах и размерах. Клиент получает доступ ко всем форматам готового изображения.
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
      <h4 class="wow section-subtitle">цена</h4>
      <h2 class="wow section-title ms-720">
        Цена на создание профессиональных иллюстраций
      </h2>
      <div class="float-second quality-service">
        <div class="left-part">
          <p class="bold">Цена на создание профессиональных иллюстраций зависит от нескольких обстоятельств:</p>
          <ul class="quality-service-list">
            <li>
              <p class="bold">
                Какое разрешение необходимо (чем выше разрешение, тем больше времени займет работа);
              </p>
            </li>
            <li>
              <p class="bold">
                Вид графики (цветовое решение, плоское или трехмерное изображение необходимо);
              </p>
            </li>
            <li>
              <p class="bold">
                Степень детализации (чем больше мелких деталей требуется прорисовать, тем выше стоимость);
              </p>
            </li>
            <li>
              <p class="bold">
                Стилистика изображения;
              </p>
            </li>
            <li>
              <p class="bold">
                Число площадок для размещения изображений;
              </p>
            </li>
            <li>
              <p class="bold">
                Количества изображений в заказе.
              </p>
            </li>
          </ul>
        </div>
        <div class="quality-service_info">
          <p>Узнать точную стоимость работ Вы можете по телефону или через онлайн-форму обратной связи на нашем сайте. Специалисты «Веб Фокус» свяжутся с Вами и рассчитают точную цену на разработку иллюстраций для Вашего проекта.</p>
        </div>
      </div>
    </div>
  </section>


  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>