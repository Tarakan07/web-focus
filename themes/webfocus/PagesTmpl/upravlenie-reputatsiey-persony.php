upravlenie-reputatsiey-persony
<?php
/*
    Template Name: Upravlenie-reputatsiey-persony
    Template post type:  page
    */
?>
<?php get_header() ?>
<main>
  <div class="sub-hero-wrp">
    <lottie-player class="bg-animation contekst" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/other.json" loop speed="1" autoplay></lottie-player>
    <section class="sub-hero">
      <div class="container">
        <div class="sub-hero-wrapper">
          <?php echo do_shortcode('[breadcrumb_simple]') ?>
          <h1 class="sub-hero__title">Управление репутацией персоны</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                  Воспользуйтесь комплексом услуг по восстановлению и защите репутации частного лица в интернете.
                  <br>
                  <br>
                  Если вы фрилансер или предприниматель, вы и являетесь брендом. Научиться управлять репутацией – то, что вам нужно, если вы хотите получить популярность в интернете и не только. Вместе с тем, управление репутацией персоны поможет при трудоустройстве в крупную компанию. HR-менеджеры перед приемом новых сотрудников изучают кандидатов в социальных сетях, что позволяет рассмотреть их с другой стороны и выйти за рамки резюме.
                </p>
              </div>

            </div>
            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость управление репутацией персоны:</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">1500</span> BYN</h4>
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
                  <h4>от <span>30</span> дней</h4>
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
      <h4 class="wow  section-subtitle">этап</h4>
      <h2 class="wow section-title">Подготовительный этап</h2>

      <div class="tmpl-third-block_content">
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Определить цели и целевую аудиторию</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/targeting/pinkblock-5.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
              Цель привлечение инвесторов, актуальна для начинающего бизнесмена с идеями, но без финансов. Целевая аудитория – внушительные компании, с желанием инвестировать бизнес-проекты.
            </p>
            <p>Цель получить больше поклонников, сторонников объединяет фанатов и людей интересующихся популярной личностью. Цель признание в профессиональной сфере.
            </p>
            <p>Целевая аудитория – авторитетные специалисты в области деятельности.</p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Составить список ценностей для продвижения</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/serm/pinkblock.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
              Инвесторы хотят видеть целеустремленность и перспективы, избиратели обратят внимание на вашу деятельность, например, участие в благотворительных акциях и новые взгляды на актуальные события в мире, HR-специалист оценит профессионализм и ответственность.
            </p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Открытость для публики
              </h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/razavoe-seo/seo-grow.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
              Как только о вас начнут говорить, люди захотят узнать о вас все. Также они склонны додумывать некоторые моменты, если в интернете нет никакой достоверной информации на какие-то вопросы. Поэтому делитесь с пользователями новостями, предоставляйте больше фактов. Не давайте поводы для вымыслов.
            </p>
          </div>
        </div>
      </div>
  </section>

  <div class="tmpl-cases">
    <?php get_template_part('template-parts/cases'); ?>
  </div>
  <?php get_template_part('template-parts/contact-form'); ?>

  <section class="section-std  section-gray algoritm-block fifth-block">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">инструменты</h4>
      <h2 class="wow section-title ms-720">
        Инструменты SERM для управления репутацией персоны
      </h2>
      <div class="steps-to-goal steps-to-goal_mrg-top">
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>01.</h3> <span>Шаг 1</span>
            </div>
            <h3>Нейтрализация негатива</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
              Становление положительного имиджа невыполнимо без привлечения инструментов контроля, если в сети есть отрицательные отзывы о вас. Большое число просмотров и приличный срок размещения негативного отзыва, может обеспечить ему выход в топ поисковых систем и площадок. Поэтому такие отзывы нельзя оставлять без внимания и нужно реагировать на них сразу.
            </p>
            <p>Только постоянный контроль поможет добиться лояльности от пользователей и защитит вас от черного пиара.</p>
            <p>
              И хотя для каждого создается своя уникальная стратегия раскрутки в интернете, обычно сформировать положительное мнение можно только комплексным подходом: публикация статей, пресс-релизов, новостей, положительных комментариев и отзывов и пр.
            </p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>02.</h3> <span>Шаг 2</span>
            </div>
            <h3>
              Инфоповоды
            </h3>
          </div>
          <div class="step-to-goal__info">
            <p>
              Часто случается, что о репутации вспоминают, когда она подпорчена конкурентами или обиженным заказчиком. Тогда нужно устроить яркое публичное появление! Участие в международных мероприятиях, благотворительности, упоминание в рамках новостей с популярной личностью/событием, пресс-релизы и тд.
            </p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>03.</h3> <span>Шаг 3</span>
            </div>
            <h3>Личный сайт</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
              Персональный сайт – лучший помощник в управлении репутацией персоны. При его создании учитывают следующие моменты:
            </p>
            <p>Адрес личного сайта выбирают исходя из имени. Для больших показов в поиске в название добавляют ключевое слово.</p>
            <p>
              Что касается структуры, предпочтение отдается сайтам-многостраничникам, поскольку через них можно осветить все темы, касающиеся известной личности. А внутренняя перелинковка сайта многостаночника позволит занять несколько позиций в поиске даже по одному вопросу.
            </p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>04.</h3> <span>Шаг 4</span>
            </div>
            <h3>Личный блог</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
              Личный блог не выстрелит без постоянного обновления контента. Помимо персональной информации, блог разбавляется постами об актуальных событиях.
            </p>
            <p>После появления первых реальных читателей, появятся все шансы на завидную позицию в поисковой выдаче.</p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>05.</h3> <span>Шаг 5</span>
            </div>
            <h3>Страницы на тематических сайтах</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
              Тематические сайты можно использовать как отличный вариант собственной рекламы. Разместить свою карточку среди других специалистов и через ее заполнение доказать свое преимущество перед конкурентами.</p>
          </div>
        </div>

        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>06.</h3> <span>Шаг 6</span>
            </div>
            <h3>Социальные сети</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
              Социальные сети Facebook, Vkontakte, Instagram захватили большую часть времени досуга пользователей и стали отличными средствами управления имиджем. Если у популярного человека нет профилей в социальных сетях, то с большей вероятностью их заведет кто-то другой и отнюдь не доброжелатель. Поэтому не медлите и создавайте официальные профили.</p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>07.</h3> <span>Шаг 7</span>
            </div>
            <h3>PR-статьи</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
              PR-статьи позволяют рассказать о персоне в выгодном для заказчика свете. Нужно подобрать такую рекламную площадку для размещения, где показатель доверия поисковиков и посещаемости будет высок.
            </p>
            <p>
              Для продвижения статьи в топ важно, чтобы площадка присваивала URL адрес из заголовка, а не бессмысленные рандомные символы.
            </p>
            <p>Присутствие выбранной рекламной площадки в Google News и Яндекс Новостях понизит количество негативной информации в интернете.</p>
            <p>
              Идеальная PR-стратегия и грамотный выбор методов управления репутацией персоны действительно укрепит ваш бренд, а заказать такие услуги можно в агентстве-интернет маркетинга.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-std ">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">управление</h4>
      <h2 class="wow section-title ms-720">Заказать управление репутацией персоны</h2>

      <div class="three-part-p">
        <p>
          Мы работаем на результат и вкладываем душу в каждый наш проект.
        </p>
        <p>
          Поэтому уверены, что наша работа сможет эмоционально затронуть чувства людей, расположить их и сложить образ успешной и авторитетной организации.
        </p>
        <p>
          Перед тем как заказать услугу управления репутацией, проконсультируйтесь с сотрудниками Web Focus и согласуйте концепцию работы.
        </p>
      </div>
    </div>
  </section>


  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>