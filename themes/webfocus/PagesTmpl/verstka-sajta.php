
<?php
/*
    Template Name: verstka-sajta
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
          <h1 class="sub-hero__title">Верстка сайта</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                В цифровую эпоху трудно представить компанию, фирму или частного предпринимателя без своего сайта. Он нужен для ведения любого бизнеса. На данный момент офлайн выбор продукции, его просмотр и покупка становятся все большей редкостью. Также сайт обеспечивает единую платформу для размещения всей продукции, обозначения ее наличия. Веб ресурс позволяет клиенту связаться с менеджерами, консультантами, узнать базовую и углубленную информацию, цену.

                </p>
              </div>
            </div>

            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость верстки сайта:</h4>
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
      <h2 class="wow section-title ms-720">Как мы работаем</h2>

      <div class="three-part-p three-part-p_mrg-top">
        <p>
        Очевидно, чтобы дела шли в гору, предпринимателю следует обеспечить немалое внимание сайту, его созданию, верстке, дизайну, продвижению. Заказать верстку сайта — дело не трудное, но найти подходящих специалистов, которые преобразуют дизайн макет в нечто по-настоящему прекрасное-ответственная и важная задача для сотрудников нуждающейся в этом компании.

        </p>
        <p>
        Чтобы клиент не попал в трудную ситуацию, потратив деньги и не получив результат-перед началом выполнения работы мы не просто берем заказ, а проводим анализ желаний заказчика, предлагаем лучшие пути развития, предоставляем референсы, примеры сайтов, обсуждаем и утверждаем все технические решения и реализуемые возможности ресурса.

        </p>
        <p>
        На протяжении работы мы также поддерживаем связь и даем промежуточные фреймворки, предварительные рендеры изображений, подборки иконок и прочее, убеждаясь, что клиент доволен вырисовывающейся картиной. Команда Веб Фокус старается и для клиента, и для своей репутации на рынке услуг. Нам очень приятно читать положительные отзывы разовых и постоянных клиентов.
        </p>
      </div>
  </section> 

<div class="tmpl-cases">
  <?php get_template_part('template-parts/cases'); ?>
</div>
  <?php get_template_part('template-parts/contact-form'); ?>



  <section class="section-std section-std-top-0 section-with-floating-bubbles">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">информация</h4>
      <h2 class="wow section-title">Что представляет собой верстка сайтов</h2>
      <p class="wow section-p ms">
      Верстка сайтов находится в среде Front-end разработки. Фронтенд невозможен без знаний о единой системе отображения информации на веб страницах. HTML дает браузеру увидеть» страницу и контент на ней, структурированный верстальщиком.
      </p>

      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
            <!-- <h3></h3> -->
            <h3>В задачи верстальщика входят:</h3>
          </div>
        </div>
        <ul class="function-list">
          <li>
            <span class="function-list-marker"></span>
            <p>Верстка лендингов.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Извлечение изображений и иных графических единиц из макета страницы.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Сохранение и сортировка извлеченных изображений.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Верстка почты для рассылки по электронной почте.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Настройка отображения графических элементов и шрифтов.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Устранение ошибок в верстке.Устранение ошибок в верстке.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Оптимизация HTML и CSS кода для оптимизации работы сайта (скорость, производительность, стабильность).</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Интерпретируемая под разные браузеры верстка.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Создание CSS для улучшения дизайна веб-ресурса.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Тестирование написанной верстки.</p>
          </li>
          <li style="margin-bottom:0;"> 
            <span class="function-list-marker"></span>
            <p>Подключение JavaScript библиотек.</p>
          </li>
          <li>
        </ul>
      </article>
      <p class="wow ms-720 mob-top-24">
      Отметим, что хоть верстальщик и обладает знаниями в области Frontend-разработки, он не полноценный разработчик. Frontend-разработчик — человек, который умеет писать скрипты для функционирования визуальной части сайта. Разработчик способен не просто верстать макеты по готовым скриптам, но и создавать их.
      </p>
  </section>

  <section class="section-std section-gray algoritm-block fifth-block">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">типы</h4>
      <h2 class="wow section-title ms-720">Типы вёрстки</h2>
      <div class="steps-to-goal steps-to-goal_mrg-top">
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>01.</h3> 
              <!-- <span>Шаг 1</span> -->
            </div>
            <h3>Табличная верстка</h3>
          </div>
          <div class="step-to-goal__info">
          <p>
          Такой тип верстки самый старый. В данном методе используются таблицы, в которых содержится информация об элементах страницы. Сами таблицы представляют собой модульную сетку, в которой удобно эту самую информацию размещать. Каждый элемент такой таблицы определен под свои цели, а элементы HTML, которые не используются по назначению, нельзя заменить другими. Это не соответствует нынешним стандартам сложных веб-сайтов, которые иногда состоят только из таких элементов.
            </p>
            <p>
            Несмотря на кажущуюся неактуальность, методдо сих пор используется для простых и типовых сайтов, чтобы детализировать и преобразить их. Отлично подходит для создания множества похожих сайтов, где необходимо лишь немного поменять стилистику и отображение элементов.
            </p>
          </div>
        </div>

        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>02.</h3> 
              <!-- <span>Шаг 2</span> -->
            </div>
            <h3>Блочная верстка</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
            Блочная верстка представляет собой более современный и удобный вид создания сайта. Этот вид используется в современных компаниях и дает создавать объемные и качественные страницы, не теряя в возможностях и способах реализаций идей UX/UI-дизайнеров. Элементы страницыс информацией располагаются в блоках, которые можно настраивать и регулировать, задавая цвета, размеры, шрифты, отступы, тени и другое. Блоки также хороши тем, что они адаптируются под различные платформы как лаптопы, десктопы, мобильные устройства, планшеты.

            </p>
            <p>
            Преимущества блочной верстки:
            </p>
            <ul class="arrow-marked-list">
              <li>
                <p class="bold">
                Возможность наложения слоев, что дает реализовывать большее количество дизайнерских решений и просто удобно располагать элементы.
                </p>
              </li>
              <li>
                <p class="bold">
                Отличная индексация поисковыми системами.
                </p>
              </li>
              <li>
                <p class="bold">
                Скорость загрузки страниц.
                </p>
              </li>
              <li>
                <p class="bold">
                Простота в создании визуальных эффектов.
                </p>
              </li>
            </ul>
          </div>
        </div>

        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>03.</h3> 
              <!-- <span>Шаг 1</span> -->
            </div>
            <h3>Адаптивная верстка</h3>
          </div>
          <div class="step-to-goal__info">
          <p>
          Адаптивная верстка названа так не просто так. Она направлена на правильное и корректное отображение информации веб-страницы на распространенных видах устройств (лаптопы, десктопы, мобильные устройства, планшеты). Такая верстка на 2021 год является наиболее популярной, потому что люди приблизительно в равной степени просматривают веб-ресурсы на 4 распространенных видах устройств. Исходя из такой тенденции, адаптивную верстку перестают разделять как отдельный вид, потому что и в блочной, и в табличной представлениях стараются учитывать адаптивность сайта. Адаптивность экономит время пользователя, не отрисовывая под каждое новое разрешение новый дизайн страницы. Размеры и расположения меняются автоматически под размер экрана устройства.
            </p>
          </div>
        </div>

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
      <h4 class="wow  section-subtitle">преимущества</h4>
      <h2 class="wow section-title ms-720">Почему WebFocus</h2>

      <div class="three-part-p three-part-p_mrg-top">
        <p>
        Разработчики Веб Фокус работают с практически со всеми востребованными фреймворками и другими платформами для создания и верстки веб-сайтов, их дизайна. Услуги верстки сайта – часто встречающийся, многократно проработанный нами запрос.
        </p>
        <p>
        После больше сотни сделанных сайтов нашими фронтенд специалистами и верстальщиками, они видят, что такое производительный, лаконичный и функциональный цифровой продукт. 
        </p>
        <p>
        Пользуясь опытом предыдущих проектов и изученными особенностями работы с макетами, верстальщики от «Веб Фокус» пользуются доверием больше чем нескольких сотен людей. Исходя из статистики, проекты создаются в сроки от недели до месяца. Заказывайте услуги верстки и получайте ежедневную радость от веб-ресурса.
        </p>
      </div>
  </section> 

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider' ); ?>
</main>
<?php get_footer() ?>