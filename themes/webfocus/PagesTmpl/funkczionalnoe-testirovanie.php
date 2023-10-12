<?php
/*
    Template Name: funkczionalnoe-testirovanie
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
          <h1 class="sub-hero__title">Функциональное тестирование</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Тестирование функциональности сайта – это самый эффективный способ понять уровень его работоспособности. Этот шаг нельзя пропускать, поскольку именно он определяет дальнейшую судьбу проекта. Если все в порядке и показатели производительности в норме, веб-страница сдается заказчику, другое дело – выявление ошибок и последующую оптимизацию.
                </p>
              </div>
            </div>
            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость функционального тестирования:</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">1050</span> BYN</h4>
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

  <section class="section-std">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">информация</h4>
      <h2 class="wow section-title ms-720">Тестирование функциональности сайта </h2>

      <div class="three-part-p three-part-p_mrg-top">
        <p>
        Не секрет, что даже самый талантливый разработчик в процессе допускает ошибки, не роковые, но влияющие на структуру сайта. Иногда бывают случаи, когда проект приходится серьезно переделывать из-за огромного количества недочетов. Это происходит потому, что заказчик, стараясь сэкономить, обратился к новичкам IT-сферы и получил низкобюджетный проект с плохой производительностью.
        </p>
        <p>
        Тестирование функциональности сайта, обнаружение и исправление ошибок в компании «Веб Фокус» помогают преображать страницы до неузнаваемости. В ходе процедур делается все возможное, чтобы превратить ресурс в привлекательный, вызывающий интерес у целевой аудитории. Мы работаем с веб-страницами любой направленности. Проекты, разработанные нами, проходят ряд тестирований в обязательном порядке, после чего доводятся до совершенства и сдаются клиенту.
        </p>
        <p>
        Если у Вас есть готовый сайт – обращайтесь! Наши сотрудники с удовольствием помогут улучшить конверсию пользователей и иные показатели, влияющие на продвижение в интернете. Достаточно оставить заявку на странице и дождаться обратной связи от менеджера организации.
        </p>
      </div>

  </section> 

  <div class="tmpl-cases">
    <?php get_template_part('template-parts/cases'); ?>
  </div>
  <?php get_template_part('template-parts/contact-form'); ?>

  <section class="section-std success section-std-top-0">
        <div class="container">
            <div class=" wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow section-subtitle">этапы</h4>
            <h2 class="wow section-title ms-720">
            С чего начинается тестирование веб-страницы
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">Этапы проверки в «Веб Фокус» такие:</p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                            Тестирование функциональности сайта.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Usability-тест (удобство применения).
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Проверка производительности.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Проверка безопасности.
                            </p>
                        </li>
                        <li>
                        <p class="bold">
                        Проверка интерфейса и показателей.
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>
                    Главная задача процесса – проверить работу ресурса с функциональной стороны и понять, насколько проект соответствует заявленным требованиям. Проанализировать работу программного обеспечения в новом проекте можно с помощью создания ситуаций, чем и занимаются тестировщики в студии «Веб Фокус».
                    </p>
                    <p>
                    Наши сотрудники работают над моделированием случаев, которые могут возникнуть при работе ресурса, и наблюдают за реакцией системы. В процессе создается список ошибок и передается в другой отдел. Затем разработчики вносят правки и снова передают проект тестировщикам. Эта процедура длится до тех пор, пока работа сайта и его соответствие ТЗ не будет совершенным.
                    </p>
                    <p>
                    При тестировании применяются разные инструменты и методы. Первый шаг – создание плана действий и пошаговой инструкции.
                    </p>
                    <p>
                    Проводить тестирование функциональности сайта должны только специально обученные люди, обладающие аналогичным опытом работы. Иначе Вы рискуете получить проект, не доведенный до конца и работающий с перебоями.
                    </p>
                    <p class='mobile-last'>
                    Работники digital-агентства проводят профессиональный юзабилити-тест, благодаря чему все веб-страницы взаимодействуют с пользователями без проблем.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-std section-std-top-0">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">типы</h4>
      <h2 class="wow section-title ms-720">Разновидности проверок на функциональность</h2>
      <p class="wow section-p ms-720">
      Тестирование функционала бывает разным. Каждая проверка решает конкретные задачи и улучшает производительность ресурса. Сотрудники студии «Веб Фокус» проводят следующие типы работ:
      </p>

      <div class="tmpl-third-block_content">
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Ad-hock</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testirovanie-bezopasnosti-sajta/group-1.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Эта проверка позволяет узнать, насколько корректно работает контактная форма, имеются ли обязательные поля. По сути, это экспресс-тест, выявляющий основные проблемы за короткое время.
            </p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Отрицательный тест</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testirovanie-bezopasnosti-sajta/group-2.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Проверяет готовность ресурса к сбою системы. Вводится неверная информация, чтобы проверить работоспособность. Цель – обнаружить ошибки и их расположение.
            </p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Эквивалентное тестирование</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testirovanie-bezopasnosti-sajta/group-3.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Здесь применяется ряд проверок с одинаковым результатом. Если обнаружится ошибка, все итоги будут одинаковыми.
            </p>
          </div>
        </div>

        </div>
        <p class="wow section-p ms-720">Это только базовые виды – тестирование функциональности сайта может применяться по-разному в зависимости от структуры и типа проекта. Подобрать грамотный инструментарий способен только опытный специалист, знающий, как нужно проводить проверку, чтобы обнаружить главные и дополнительные ошибки.
        <br><br>
        Такие сотрудники работают в студии «Веб Фокус». В нашем штате состоят способные работники, которые каждый день выполняют аналогичные задачи, помогая находить и исправлять ошибки в проектах.
        </p>
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
      <h4 class="wow  section-subtitle">особенности</h4>
      <h2 class="wow section-title ms-720">Особенности тестирования функциональности сайта</h2>
      <p class="wow section-p ms-720">
      Проверка функционала сетевого ресурса необходима.
      </p>

      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
            <h3>Это целый комплекс работ, включающий в себя:</h3>
          </div>
        </div>
        <ul class="function-list">
          <li>
            <span class="function-list-marker"></span>
            <p>
            Проверку правильности выполнения функций веб-страницы;
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Проверку внутренних ссылок на корректность;
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Устранение «битых» ссылок;
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Проверку форм связи (прием заявок на странице, появление комментариев);
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Проверку кнопок «Авторизация», «Регистрация»;
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Тестирование кнопок «Покупка товара», «Бронь», «Добавление в корзину», «Оформление заказа»;
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Проверка контента на соответствие ТЗ.
            </p>
          </li>

        </ul>
      </article>
        <p class="wow section-p ms-720">
        Многие владельцы сетевых ресурсов недооценивают такую услугу, как тестирование, но именно она способствует продвижению страницы в социальных сетях и поисковиках. Без оптимизации и исправления ошибок пользователи будут быстро уходить и отправляться на сайты конкурентов, что снижает эффективность продвижения.
        <br><br>
        Проверка на функциональность от компании «Веб Фокус» – хороший и недорогой способ создать веб-страницу под запросы целевой аудитории. Свяжитесь с нашим представителем, чтобы обсудить детали!
        </p>
  </section>


    <section class="section-std success">
        <div class="container">
            <div class=" wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow section-subtitle">алгоритм</h4>
            <h2 class="wow section-title ms-720">
            Проверка веб-ресурса на работоспособность от студии «Веб Фокус»
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">Приблизительный алгоритм работы выглядит так:</p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                            Тестировщики анализируют веб-страницу и подбирают набор инструментов.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Составляется список устройств, требующих проверки (ПО, ОС и пр.).
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Проводится ряд проверок. Результаты отправляются менеджеру, оттуда – разработчикам.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Программисты вносят правки и отправляют проект обратно на проверку.
                            </p>
                        </li>
                        <li>
                        <p class="bold">
                        Вторичные тесты дают положительные результаты, после чего проект сдается заказчику (или отправляется обратно на доработку, пока не подтвердится полное соответствие требованиям клиента).
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>
                    Тестирование функциональности – сложная, многоэтапная процедура. От ее результатов зависит реакция целевой аудитории на новую компанию. Если результаты будут не самыми лучшими, команда специалистов исправит ошибки, сведя к минимуму появление негатива со стороны пользователей.
                    </p>
                    <p>
                    Сотрудники студии «Веб Фокус» работают слаженно, благодаря чему проверка проходит в нужные сроки и без головной боли.
                    </p>
                    <p class='mobile-last'>
                    Тестирование функциональности сайта в компании «Веб Фокус» — важный шаг к получению готового бизнеса в интернете! Заказывайте недорогую услугу у нас и развивайте собственный веб-ресурс, привлекая посетителей.
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