<?php
/*
    Template Name: dizajn-bukletov
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
          <h1 class="sub-hero__title">Дизайн буклетов</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Несмотря на интенсивное развитие цифровых технологий не стоит забывать о традиционных инструментах оффлайн маркетинга. Речь идет о рекламе в печатных изданиях, наружной рекламе, почтовых рассылках, холодных звонках и т.д. Эффективным способом продвижения выступает раздача листовок и буклетов, в которых содержится информация о хозяйствующем субъекте и предлагаемых товарах и услугах. 
                </p>
              </div>
            </div>
            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость дизайна буклетов:</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">250</span> BYN</h4>
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
            <h4 class="wow section-subtitle">характеристика</h4>
            <h2 class="wow section-title ms-720">
            Характеристики рекламного буклета
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">К ним относятся следующие:</p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                            Размер (самыми распространенными размера считаются формат А6, А5, А4);
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Фальцовка (объем транслируемой информации влияет на количество сгибов: традиционный, оконный, двойной параллельный, зигзаг, аккордеон, гармошка и др.);
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Используемая бумага (мелованная, картон, дизайнерская, фланелевая, кашемировая и др.);
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Формат печати (офсетная, цифровая, ризограф, шелкотрафарет и др.).
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>
                    Чтобы привлечь внимание клиентов к компании, необходимо уделить особое внимание дизайну рекламных буклетов. «Веб Фокус» оказывает услуги в области брендинга и дизайна и зарекомендовала себя как надежный и ответственный партнер.
                    </p>
                    <p>
                    Буклет — лист бумаги, на обе стороны которого напечатана текстовая и (или) графическая информация, сфальцованный различными способами. Он органично сочетает текст, выстроенный по заданной структуре, и нетривиальное графическое оформление, привлекающее читателя.

                    </p>
                    <p>
                    Главная цель буклета — реклама компании, предлагаемых товаров, работ и услуг. Это означает, что с помощью буклета до конечного потребителя доводится максимум информации, полезной для клиента. Продумывая дизайн рекламного буклета, требуется в обязательном порядке учесть ключевые характеристики данного инструмента.
                    </p>
                    <p>
                    Учитывая представленные характеристики, формируется цена дизайна буклета. Чем сложнее планируется оформление (нанесение глянцевого покрытия, фигурного контура, тиснения и т.д.), тем выше будет стоимость.
                    </p>
              
                    <p class='mobile-last'>
                    Для разработки дизайна буклета обратитесь в компанию «Веб Фокус», которая окажет профессиональную помощь в создании уникального эскиза рекламного инструмента. С заказчиком  тщательно обговариваются детали буклета, учитываются пожелания и предложения, а также даются реальные советы по тому, на что обратить внимание в процессе продвижения бизнеса и привлечения целевой аудитории.
                    </p>
                </div>
            </div>
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
      <h4 class="wow  section-subtitle">преимущества</h4>
      <h2 class="wow section-title ms-720">Преимущества рекламных буклетов</h2>
      <p class="section-p wow ms-720">Рекламные буклеты на протяжении длительного времени считались оптимальным способом заявить о себе и привлечь внимание к собственному бизнесу. Они характеризуются комплексом преимуществ, которые предопределяют популярность у заказчиков. К таким достоинствам относятся следующие моменты:</p>
      <div class="tmpl-third-block_content">
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Доступность создания</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-bukletov/object-1.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            (Многие рекламные агентства и типографии предлагают услуги по созданию рекламной продукции);
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Простота </h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-bukletov/object-2.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            (Создание проспектов не предполагает применение серьезной техники и труднодоступного программного обеспечения);
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Оперативность создания печатной продукции и ее распространения</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-bukletov/object-3.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            (Надежные компании, занимающиеся брендингом и дизайном выполняют данную задачу в максимально сжатые сроки);
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Компактные размеры</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-bukletov/object-4.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            (Не требуют много места для хранения, легко переносить с собой и т.д.);
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Многофункциональный характер</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-bukletov/object-5.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            (Используются в различных рыночных сегментах);
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Удобство</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-bukletov/object-6.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            (Рекламки вкладывают в пакеты с товарами, размещают на ресепшене, распространяют на выставках и конференциях, в торгово-развлекательных центрах и т.д.);
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Широкая область использования</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-bukletov/object-7.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            (Применяются в различных сегментах экономики, включая туристическую сферу, страхование, банковские услуги, культура, досуг, развлечения и т.д.).
            </p>
          </div>
        </div>

        <p class="section-p wow ms-720">Кроме того, нельзя игнорировать такое преимущество как относительно невысокая стоимость. Заказать дизайн буклета обойдется дешевле, чем установка рекламного щита или других инструментов наружной рекламы. Поручите данную задачу профессиональным дизайнерам и в ближайшее время вы сможете реально оценить результаты работы.
        <br><br>
        Компания «Веб фокус» предлагает воспользоваться услугами по дизайну рекламных буклетов по привлекательной цене. Мы готовы продумать текстовое наполнение, изображения, формат и т.д. Благодаря накопленному опыту наши сотрудники помогут выбрать самый оптимальный вариант. Мы готовы воплотить в жизнь даже самые сложные проекты и идеи. Для постоянных клиентов действуют скидки и специальные предложения. По всем интересующим вопросам свяжитесь с нашими менеджерами.
        </p>
      </div>
    </div>
  </section>

  <section class="section-std section-std-top-0">
    <div class="container">
      <div class=" wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow section-subtitle">основы</h4>
      <h2 class="wow section-title ms-720">Основные правила</h2>
      <p class="section-p wow ms-720">Создание уникального дизайна буклетов предполагает соблюдение определенных правил. Они помогут создать по-настоящему действенное средство для привлечения клиентской аудитории, которые реально будут покупать ваши товары, заказывать услуги и работы. Такими правилами являются следующие:</p>
      <div class="fourth-block__content">
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-bukletov/grayblock-1.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Лаконичность буклета</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            (Кратко и интересно проинформируйте потенциального клиента о компании, товаре, услуге или событии. Допускается краткое описание предлагаемой продукции, уникального торгового предложения. Обязательно укажите контактную информацию);
            </p>
          </div>
        </div>

        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-bukletov/grayblock-2.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Ориентированность</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            (Требуется определить целевую аудиторию и с учетом интересов данной группы подбирать цветовую гамму проспекта, стиль и т.д.);
            </p>
          </div>
        </div>

        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-bukletov/grayblock-3.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Отслеживание корректности верстки </h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            (Все элементы, включая текст, картинки, рисунки должны сочетаться как в развернутом, так и в сложенном виде);
            </p>
          </div>
        </div>

        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-bukletov/grayblock-4.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Наличие яркого визуального акцента</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            (Рекомендуется выбрать одно или несколько качественных изображений и дополнить их текстовыми фрагментами. Не допустимо включать большое количество мелких картинок, которые рассеивают внимание);
            </p>
          </div>
        </div>

        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-bukletov/grayblock-5.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Читабельность текста</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            (Целесообразно использовать не более 3 простых для восприятия шрифтов);
            </p>
          </div>
        </div>

        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-bukletov/grayblock-6.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Цепляющие моменты</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            (Если буклет содержит купон на скидку, промокод, подарочная карта, дисконт и т.д., то вероятность того, что им воспользуются вырастает в разы).
            </p>
          </div>
        </div>


        <p class="section-p wow ms-720">Рекламный буклет — это продолжение фирменного стиля компании. Поэтому если бизнес функционирует не первый год, то рекламу следует делать, применяя фирменные цвета, логотип и т.д.
        <br><br>
        Дизайнеры из команды «Веб Фокус» в процессе разработки дизайна каталогов и буклетов руководствуются перечисленными правилами, что позволяет создать по-настоящему эффективный инструмент продвижения вашего бизнеса. Среди наших клиентов есть крупные предприятия различной отраслевой направленности, небольшие фирмы и индивидуальные предприниматели, которые заботятся о процветании своего дела. Если вы хотите вывести свой бизнес на новый уровень хозяйствования, то подумайте над созданием ярких, красочных и уникальных буклетов, которые станут отличным способом привлечь новую аудиторию.
        </p>

      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>