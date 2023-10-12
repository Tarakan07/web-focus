
<?php
/*
    Template Name: razrabotka-na-symfony
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
          <h1 class="sub-hero__title">Разработка <br>на Symfony</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Разработка на Symfony – проверенный способ для создания прогрессивных программных продуктов, веб-ресурсов с повышенной производительностью и скоростью работы. Этот PHP-фреймфорк обладает полным комплектом опций для профессионального разработчика.
                </p>
              </div>
            </div>

            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость разработки на Symfony:</h4>
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

  <section class="section-std success">
        <div class="container">
            <div class=" wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow section-subtitle">баланс</h4>
            <h2 class="wow section-title ms-720">
            Баланс высокой производительности и надежной защиты данных в ресурсах «Симфони»
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">
                    Также скоростную работу веб-ресурсов на Symfony обеспечивает:
                    </p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                            Использование http Cache и ESI-поддержка, чтобы воспользоваться выгодами дополнительного кеширования.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Стремительный отклик кеша из-за специфики ядерной архитектуры ПО.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Легкость работы даже с очень большими объемами информации в базах данных.
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>
                    Получить квалифицированное создание сайта на Symfony по привлекательной стоимость можно в студии «Веб Фокус» в Минске. Наши цены не ударят по бюджету компании, а Вы можете не сомневаться — наши опытные профи сделают все, чтобы воспользоваться преимуществами фреймворка на благо будущего решения.
                    </p>
                    <p>
                    Несмотря на то, что Symfony появился на рынке инструментов веб-разработки в уже далеком 2005 году, создание сайта на Symfony не теряет популярности. Все потому, что этот фреймворк до сих пор уверенно удерживает репутацию стабильной, безопасной и производительной платформы, которая отлично подходит для повседневного использования профессиональными веб-разработчиками.
                    </p>
                    <p>
                    Базовый программный пакет поддерживается авторами около 4 лет, потом появляется обновленная версия. В каждой новой версии повышается качество защиты данных, становятся лучше и сложнее встроенные защитные алгоритмы ПО. Подобный подход к развития платформы сводит к минимуму вероятность понести ущерб от действий кибер-преступников и других возможных угроз безопасности ПО.
                    </p>
                    <p class='mobile-last'>
                    Еще одно значимое преимущество, которое дает разработка на Symfony — высокие показатели производительности. Платформа не увеличивает нагрузку на веб-ресурс или приложение, что дает конечному пользователю максимальную скорость. На таких сайтах обновленная информация подгружается и обрабатываются браузером постепенно без полной перезагрузки.
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
      <h2 class="wow section-title ms-720">Сильные стороны платформы для веб-разработки Symfony</h2>
      <p class="section-p wow ms-720">
      Symfony состоит из ряда составляющих PHP. Этот инструмент относится к числу лидеров среди ПО для веб-разработчиков с открытым кодом. Используя Symfony, можно в разы уменьшить время, нужное для создания полноценного веб-сайта. Такой эффект возможен из-за использования MVC-парадигмы и универсальных блоков.
      <br><br>
      Для процедуры создания веб-ресурсов на базе «Симфони» характерна намного большая продуктивность, чем при ручном кодировании. На этой платформе создают «с нуля», развивают и дорабатывают оригинальные новаторские веб-ресурсы и приложения, созданные на базе языка программирования PHP. Стремление сделать сайт на Symfony охватило предпринимателей, поскольку у этой платформы есть определяющие успешное воплощение онлайн-проектов преимущества:
      </p>
      <div class="new-marked">
        <div class="wrap-market-card">
              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Неограниченный потенциал с точки зрения настройки сайта</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>
                </div>
                <div class="market-card__info">
                  <p>
                  Разработка сайта на Symfony не предполагает никаких ограничений или хотя бы единого направления, задающего вектор работы будущего веб-ресурса. Эта платформа как нельзя лучше подходит для воплощения персонализованных программных решений, от начала и до конца созданных четко под потребности каждого отдельно взятого заказа.
                  </p>
                </div>
              </div>

              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Легкое внесение правок в структуру на каждой стадии</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  «Симфони» обладает разделенной объектно-ориентированной (ОО) структурой. То есть каждый входящий в состав фреймворка компонент расширяется, настраивается под потребности сайта или убирается при необходимости.
                  </p>
                </div>
              </div>
              
              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Работа с базами данных всех популярных типов</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Проекты, созданные Symfony, легко сочетаются со всеми популярными сегодня типами БД. Можно применять как обычные SQL, так и NoSQL, графические базы, хранилища ключей и значений и др.
                  </p>
                </div>
              </div>
              
              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Высокий уровень безопасности готового сайта</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Фреймворк «Симфони» отличается более продвинутыми настройками защиты данных и процессов. Здесь можно тщательнее контролировать ход авторизации пользователей на сайте и разграничение прав на доступ к содержимому ресурса разным категориям пользователей и администраторов.
                  </p>
                </div>
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
      <h4 class="wow  section-subtitle">значение</h4>
      <h2 class="wow section-title ms-720">Специфика разработки web-ресурсов на Symfony</h2>
      <p class="section-p wow ms-720">
      Если Вам срочно требуется грамотная, высокопрофессиональная разработка на Symfony, то команда программистов минской студии «Веб Фокус» готова оперативно создать, масштабировать, доработать или развить действующий продукт для достижения целей клиента.
      <br><br>
      Предварительно скомпилированные блоки обеспечивают корректную обработку элементов, которые присутствуют в любом ПО. Это освобождает команде разработчиков дополнительное время для воплощения более сложных опций, где нужен творческий подход.
      </p>
      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
          <h3>Инструменты фреймворка делают проще реализацию и прочих задач, имеющих большое значение для web-разработки:</h3>  
            </div>
          </div>
          <ul class="function-list">
            <li>
              <span class="function-list-marker"></span>
              <p>
              Есть все необходимые встроенные защитные инструменты против популярных уязвимостей с точки зрения информационной безопасности.
              </p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>
              Программистами удобно настроить автоматическую генерацию кода через специализированные консоли.
              </p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>
              Легко контролировать метрики продуктивности буквально для всех запросов, сделанного с web-страницы с помощью специализированной панели инструментов.
              </p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>
              Работа с Twig-шаблонами сокращает время, нужное для создания пользовательского интерфейса будущего сайта.
              </p>
            </li>

            <li>
              <span class="function-list-marker"></span>
              <p>
              Возможности фреймворка «Симфони» задействуют себе на пользу признанные флагманы интернет-бизнеса, включая Google, Facebook, CMS Magento и Drupal.
              </p>
            </li>
          </ul>
        </article>
  </section>

  <section class="section-std success">
        <div class="container">
            <div class=" wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow section-subtitle">нюансы</h4>
            <h2 class="wow section-title ms-720">
            «Веб Фокус» — верный выбор для реализации проектов на «Симфони»
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">
                    Повышенное внимание мы уделяем таким нюансам как:
                    </p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                            Увеличение производительности веб-ресурса.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Масштабируемость решения.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Надежная защита ПО от сторонних опасностей.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Минимизация стоимости техобслуживания готового продукта.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Оперативное внедрение новых инструментов и устранения найденных недочетов.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Комфортной работе конечных пользователей в работе с проектом.
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>
                    Грамотно разработать проект на Symfony способны только профи с высоким уровнем подготовки и большим накопленным опытом. Такие разработчики трудятся в коллективе «Веб Фокус». Доверяя нам воплощение собственного проекта, Вы получите совершенное с технической и маркетинговой точки зрения программное решение.
                    </p>
                    <p>
                    Мы справимся с воплощением любых идей, где требуется задействовать инструменты «Симфони», будь то рефакторинг устаревшего кода либо редактирование структуры работающего сайта.
                    </p>
                    <p class='mobile-last'>
                    Заказывая разработка на Symfony в проверенной студии «Веб Фокус», Вы максимально быстро обзаведетесь собственным скоростным веб-ресурсом со всеми нужными опциями для полноценной работы пользователей. Узнать больше об условиях совместной работы можно по телефону или, заказав обратный звонок на сайте.
                    </p>
                </div>
            </div>
        </div>
    </section>

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider' ); ?>
</main>
<?php get_footer() ?>