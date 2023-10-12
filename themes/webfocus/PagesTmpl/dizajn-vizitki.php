<?php
/*
    Template Name: dizajn-vizitki
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
          <h1 class="sub-hero__title">Дизайн визитки</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Разработка дизайна визитки – процесс, сводящий пожелания заказчика и требования к функциональности карточки на небольшом отрезке бумаги. После передачи карточки в начале знакомства получатель к ней еще вернется, поэтому главные свойства этого печатного изделия – краткость и информативность.
                </p>
              </div>
            </div>
            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость дизайна визитки:</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">350</span> BYN</h4>
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

  <section class="section-std algoritm-block fifth-block">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">функции</h4>
      <h2 class="wow section-title ms-720">Значение</h2>

      <div class="steps-to-goal steps-to-goal_mrg-top">

        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>01.</h3> <span>Шаг 1</span>
            </div>
            <h3>Ее создание сложно наличием сразу несколько функций, отличающихся друг от друга:</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
            Визитная карточка (в обыденной речи – «визитка») используется в сфере бизнеса, деловых кругах коммерческой и административной направленности. Услуги по дизайну визитки пользуются спросом повсеместно.
            </p>
            <p>
            Так, пользуются ею менеджеры и контактные специалисты на деловых встречах, представители бизнеса и отдельные специалисты государственных структур, а также отдельные персоны, кому изделие требуется для личных встреч.
            </p>
            <ul class="arrow-marked-list">
              <li>
                <p class="bold">Информирование собеседника о своей контактной информации для дальнейшего обмена сведениями и сотрудничества;</p>
              </li>
              <li>
                <p class="bold">Предоставление сведений о полном имени и должности, месте работы и основных задачах;</p>
              </li>
              <li>
                <p class="bold">Передача основной информации о целевой направленности компании, услугах и товарах.</p>
              </li>
            </ul>

          </div>
        </div>

        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>02.</h3> <span>Шаг 2</span>
            </div>
            <h3>На основе такого подхода выделяются карточки:</h3>
            </div>
          <div class="step-to-goal__info">

            <ul class="arrow-marked-list">
              <li>
                <p class="bold">Личная — только с Ф.И.О. владельца и личными контактами.</p>
              </li>
              <li>
                <p class="bold">Корпоративная — сведения личного характера дополняются контактами, названием и профилем организации, в которой работает владелец карты.</p>
              </li>
              <li>
                <p class="bold">Презентационная (рекламная) – несут функцию представления организации, услуги и товара в публичных местах.</p>
              </li>
            </ul>

            <p>
            При выдерживании стилистики, задающей каждый вид визитки, наибольшее значение имеет отсутствие визуальной перегрузки информацией.
            </p>
          </div>
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
      <h4 class="wow  section-subtitle">состовляющие</h4>
      <h2 class="wow section-title ms-720">Дизайн визитки</h2>
      <p class="section-p wow ms-720">При составлении ансамбля карты главную роль играют отсутствие перегруженности и одновременно подача именно целевой информации. Для получения эффектной карточки, которая будет соответствовать своей задаче, есть несколько правил.
      <br><br>
      Специалисты компании “Веб Фокус” буду рады помочь в создании визитных карточек, на все 100 выполняющих свою роль и не забывающихся сразу после вручения собеседнику. Создание дизайна визитки требует знаний в ряде отраслей, и мы владеем ими.
      </p>
      <div class="tmpl-third-block_content">
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Задействование одной стороны</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-vizitki/object-1.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Принято наносить целевую информацию на одну сторону, а вторую оставлять пустой. Вторая задумана для нанесения личных пометок, поэтому наличие списка услуг или карты метро снизит практичность карточки.
            </p>
            <p>
            При задумке показать сразу значительное количество информации применяется соответствующий презентационный материал. Выносить к контактам историю компании и основные ее проекты – некомильфо.
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Иностранные языки</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-vizitki/object-2.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            При появлении необходимости раздачи на встрече создаются одинаковые карты на требуемых языках. Печатать информацию даже на паре языков считается дурным тоном: это снижает принятие данных и мельчит шрифт.
            </p>
            <p>
            Тираж печати на иностранном языке зависит от плотности проведения и периодичности встреч. Для редких знакомств оптимально заказать дизайн визитки в одностороннем варианте хотя бы на английском языке.
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Размер</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-vizitki/object-3.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Оптимальный формат – подходящий для стандартной визитницы (бизнес-холдера) или портмоне. Так, шаблон размером 85х55 или 50х90 мм подойдет всем владельцам в любой сфере. Создание увеличенных или уменьшенных вариантов потребует дополнительных усилий производителя, что повысит стоимость печати.
            </p>
    
            <p>
            Для владельца и пользователя нестандартный размер приведет к излишнему поиску места хранения, что не очень удобно. Сама карточка достаточно скоро будет утеряна – об этом говорит опыт.
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Форма</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-vizitki/object-4.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Несмотря на внешнюю привлекательность необычных форм и вырезов с их запоминаемостью главный недостаток заключается в дороговизне изготовления. Основной плюс – изделие точно удастся в своей уникальности.
            </p>
            <p>
            Необычная форма подходит для рекламных целей, для личных контактов достаточно классического прямоугольника. Создание дизайна визитки напрямую зависит от целей будущего продукта.
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Качественная бумага</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-vizitki/object-5.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Основной критерий удобства применения изделия – простота написания обычной ручкой на готовой карте. Если бумага с тиснением или глянцевая, на визитке будет не оставить примечание или дополнительную информацию.
            </p>
            <p>
            Для карточек рекламных подходят все типы бумаги – на них не пишут, они несут только передающую функцию.
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Дизайн</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-vizitki/object-6.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Удачная визитка служит для получения ответа на вопросы об имени человека, его работе и задачах, а также способе связи с ним (телефон, сайт). Для усиления внешнего эффекта добавляется логотип, стилизованное изображение товара (услуги) и корпоративный цвет.
            </p>
            <p>
            Встречаются дизайнерские варианты, включающие и иную информацию: о личных предпочтениях человека и его деятельности, не несущей полезности в текущем случае. Такие подборки перегружают внимание и мешают коммуникации.
            </p>
            <p>
            Встречаются дизайнерские варианты, включающие и иную информацию: о личных предпочтениях человека и его деятельности, не несущей полезности в текущем случае. Такие подборки перегружают внимание и мешают коммуникации.
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Шрифты</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dizajn-vizitki/object-7.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Пункт не просто так вынесен отдельно. «Классическим» пожеланием заказчика при верстке макета является использование оригинальных или рукописных букв. Восприятию информации способствуют шрифты простые – без завитушек, засечек, декора и быстро узнаваемые.
            </p>
            <p>
            Мы рекомендуем задействование простых на вид шрифтов – для узнавания букв с первого взгляда. Достаточный размер символов (порядка 10-12 размера для имени и 8-10 размер — для прочих сведений), усиление жирным или полужирным начертанием и контраст с цветом фона – ключи успеха прочтения.
            </p>
            <p>
            Исключением являются специальные корпоративные шрифты – они бывают с наличием дополнительных выступающих элементов или с повышенным объемом символов. Восприятие таких визитных карточек обеспечивается немного увеличенным интервалом между буквами.
            </p>
            <p>
            Для визитки дизайн играет первоочередную роль, поэтому мы рекомендуем сдержанность стиля и наиболее применимые варианты конструкторов.
            </p>
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
            <h4 class="wow section-subtitle">достоинства</h4>
            <h2 class="wow section-title ms-720">
            Достоинства наших <br> предложений
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">Мы гарантируем Вашей визитке:</p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                            Эффектное, но несложное оформление с приятной ценой;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Запоминающийся, но не экспрессивно-вычурный вид;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Приятную цветовую гамму и легко читаемые надписи.
                            </p>
                        </li>
            
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>
                    Компания “Веб Фокус” поможет любому заказчику с проработкой и созданием визитной карточки в требуемом объеме и с учетом всех пожеланий. От Вас требуются только контактная информация и пожелания по общему наполнению, остальные мы сделаем сами.
                    </p>
                    <p>
                    Разработка желаемого дизайна не занимает много времени. Мы пользуемся не только типовыми решениями (ускоряют получение результата), а и создаем уникальные наработки, придающими изюминку именно Вашей визитке.
                    </p>
                    <p>
                    <p class='mobile-last'>
                    Создание визиток выполняем под заказ для любого заказчика – хоть из Минска, хоть из Санкт-Петербурга. Напечатать технически возможно в любом городе, а создать полноценный макет, устраивающий всех, способны далеко не все. Разработка дизайна визитки – наша профессия, поэтому мы гарантируем результат.
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