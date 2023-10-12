<?php
/*
    Template Name: proverka-skorosti-zagruzki-sajta
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
                    <h1 class="sub-hero__title">Проверка скорости загрузки сайта</h1>
                    <div class="sub-hero__info-wrapper">
                        <div class="sub-hero__info">
                            <div class="sub-hero__info_left">
                                <p>
                                Перед поисковой оптимизацией необходимо проверить скорость загрузки сайта, поскольку от неё в том числе зависит ранжирование в Google и Yandex, а также юзабилити. Даже если страницы открываются быстро, не лишним будет проверить скорость, так как на разных платформах, браузерах разное время открытия страницы.
                                <br><br>
                                В компании «Веб Фокус» проверку проводят на нескольких устройствах, в том числе и устаревших. Только комплексным подходом удаётся оптимизировать скорость загрузки сайта на всех возможных устройствах (как в пределах, так и за пределами Республики Беларусь).
                                </p>
                            </div>

                        </div>
                        <div class="sub-hero__info_price">
                            <div class="price-row">
                                <h4>Стоимость проверки скорости загрузки сайта:</h4>
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

    <section class="section-std success">
        <div class="container">
            <div class=" wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow section-subtitle">параметры</h4>
            <h2 class="wow section-title ms-720">
            Что влияет на скорость загрузки сайта?
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">То, сколько времени загружается страница, зависит от следующих параметров:</p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                            Количество и вес фонов, картинок, видео и иных графических элементов. Чем больше их количество, вес, разрешение, тем дольше идёт загрузка.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Движок или сложность кода (особенно, если сайт самописный).
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Особенности хостинга.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Посещаемость. Чем она выше, тем медленнее грузятся страницы.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Устройство, браузер, провайдер, скорость интернет-соединения и страна проживания пользователя.
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>
                    Исследования компании Google показывают, что если время загрузки страницы составляет три секунды, то показатель отказов почти в полтора раза выше, чем при загрузке в одну секунду. При шестисекундной загрузке доля отказов увеличивается более, чем в два раза по сравнению с загрузкой в 1 секунду. Таким образом, наша задача – не только продвинуть Вас сайт в поисковых системах, но и увеличить его посещаемость, удобство и конверсию в звонки и обращения.
                    </p>
                    <p class='mobile-last'>
                    В рамках увеличения скорости загрузки, услуги наши сотрудники затрагивают все пункты, кроме последнего. Но именно оптимизируя контент, движок и хостинг, мы добиваемся, чтобы сайт грузился максимально быстро в любой точке мира и на любом устройстве.
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
      <div class=" wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow section-subtitle">метрики</h4>
      <h2 class="wow section-title ms">Проверяемые параметры</h2>
      <p class="wow section-p ms">
      В ходе оптимизации проверяем ключевые метрики:
      </p>
      <article class="advantages">
        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>FID – ответ сервера</h3>
              <p>
              Это время через которое страница реагирует после нажатия на ссылку, картинку или кнопку проигрывания видео. Хорошим считается показатель не выше 0,1 сек.
              </p>
              <div class="advantages-number">01</div>
            </div>
          </div>
        </div>
        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>FCP – время с момента нажатия</h3>
              <p>
              (На кнопку, ссылку) до появления первых видимых элементов открывающейся страницы.
              </p>
              <div class="advantages-number">02</div>
            </div>
          </div>
        </div>

        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>CLS – коэффициент смещения элементов после загрузки</h3>
              <p>
              В лучшем варианте элементы абсолютно не смещаются после прогрузки. Оптимальным считается смещение не более, чем на 1-2%.
              </p>
              <div class="advantages-number">03</div>
            </div>
          </div>
        </div>

      </article>

      <p class="ms-720 text-top-0">
      Ещё одним ключевым параметром является полная загрузка всех элементов сайта. Она не должна превышать четырёх секунд.
      </p>

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
            <h4 class="wow section-subtitle">проверка</h4>
            <h2 class="wow section-title ms-720">
            Комплексный аудит
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">В рамках общего мониторинга проверяем:</p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                            Наличие проблем в отображении страниц и элементов ресурса на разных устройствах и при разных протоколах соединения.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Перелинковку, внешние ссылки и оптимизацию сайта (если она проводилась).
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Юзабилити, контент и маркетинговую эффективность.
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>
                    Перед тем, как оптимизировать (после того, как проверить) скорость загрузки сайта, мы проводим краткий общий аудит, чтобы понять, каковы нормальные показатели для Вашего сайта и насколько актуальные данные отклоняются от нормы.
                    </p>
                    <p class='mobile-last'>
                    Общая проверка даёт представление, каким конкретно образом ускорить загрузку сайта. Только по итогам аудита определяем пути по оптимизации скорости загрузки.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-std section-with-floating-bubbles section-gray">
        <div class="container">
            <div class="wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow  section-subtitle">причины</h4>
            <h2 class="wow section-title ms-720">Самостоятельная и профессиональная проверка</h2>
            <p class='ms-720'>Принято считать, что достаточно прогнать сайт по Google PageSpeed, а потом чуть подредачить код, картинки, другие элементы и готово.</p>
            <article class="function-list-wrp">
                <div class="function-list-left-part first">
                    <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
                    <div class="function-list-left-content">
                        <h3>Проверка лишь в одном-трёх сервисах недостаточна по следующим причинам:</h3>
                    </div>
                </div>
                <ul class="function-list">
                    <li>
                        <span class="function-list-marker"></span>
                        <p>
                        В разные часы нагрузка на хостинг разнится, поэтому единоразовый чекинг не даст полной картины;
                        </p>
                    </li>

                    <li>
                        <span class="function-list-marker"></span>
                        <p>
                        Проверка загружаемости по разным странам и устройствам требует специального технического и программного оснащения;
                        </p>
                    </li>
                    <li>
                        <span class="function-list-marker"></span>
                        <p>
                        Помимо этого принято считать, что достаточно проверить сайт один раз и успокоиться. Мониторить его нужно регулярно после добавления нового контента, редактирования, регистрации пользователей, а особенно после смены хостинга;
                        </p>
                    </li>
                    <li>
                        <span class="function-list-marker"></span>
                        <p>
                        Распространённая практика – проверять скорость загрузки сайта (и оптимизировать её) у разработчиков;
                        </p>
                    </li>
                    <li>
                        <span class="function-list-marker"></span>
                        <p>
                        Когда Вы заказываете проверку, мы имитируем заходы с разных устройств, браузеров, городов и стран. Тестируем сайт с медленных устройств, на низкоскоростном интернете и с устаревших операционных систем. Также проводим аудит в часы пиковой загруженности (наибольшее число посещений). Нам важно, чтобы Ваш ресурс быстро открывался и прогружался даже в условиях наибольшей посещаемости у любых пользователей.
                        </p>
                    </li>
                </ul>
            </article>
        </div>
    </section>

    <section class="section-std fourth-block">
        <div class="container">
            <div class="wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow  section-subtitle">этапы</h4>
            <h2 class="wow section-title">Ускорение</h2>
            <p class="section-p wow ms-720">Ускорение веб-ресурса требует отдельной специализации, и в компании «Веб Фокус» им занимается специальный отдел. Мы располагаем программным          обеспечением и техническим оснащением, которое реализует всестороннюю проверку.
                <br><br>
                Так как мобильного трафика в полтора-два раза больше, чем десктопного, в первую очередь стараемся оптимизировать скорость загрузки сайта на мобильных устройствах. Далее идёт адаптация улучшений под десктоп.
                <br><br>
                В рамках оптимизации добиваемся снижения веса страницы до 1 мегабайта (оптимальное значение для мобайла). Для этого:   
            </p>
            <div class="fourth-block__content">
                <div class="floating-card">
                    <div class="floating-card-img">
                        <div class="floating-card-img-wrp">
                            <div class="floating-card-gray-layer">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/proverka-skorosti/proverka-1-1.svg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="floating-card-info-wrp">
                        <h3>Подбираем формат и разрешение видео и картинок</h3>
                        <div class="floating-card-arrow">
                        </div>
                        <p>Если допустимо, сжимаем.</p>
                    </div>
                </div>

                <div class="floating-card">
                    <div class="floating-card-img">
                        <div class="floating-card-img-wrp">
                            <div class="floating-card-gray-layer">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/proverka-skorosti/proverka-1-2.svg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="floating-card-info-wrp">
                        <h3>Изучаем код и переписываем устаревшие элементы</h3>
                        <div class="floating-card-arrow">
                        </div>
                        <p>Так как регулярно выходят новые кодовые обновления, устаревший код замедляет загрузку страниц.</p>
                    </div>
                </div>

                <div class="floating-card">
                    <div class="floating-card-img">
                        <div class="floating-card-img-wrp">
                            <div class="floating-card-gray-layer">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/proverka-skorosti/proverka-1-3.svg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="floating-card-info-wrp">
                        <h3>Оптимизируем работу CMS (подбираем плагины и расширения)</h3>
                        <div class="floating-card-arrow">
                        </div>
                        <p>Вопреки распространённому мнению движок мало влияет на скорость загрузки. На многих CMS сайт будет «летать», если сделать корректную настройку.</p>
                    </div>
                </div>

            </div>
            <p class="ms-720">Если представляется возможным, кэшируем страницы. Кэширование сокращает время открывания сайта до десятых долей секунды.
                <br><br>
                Чтобы сайт загружался меньше, чем за секунду на любом браузере, работаем с CSS- и JS-кодами (убираем или откладываем до загрузки страницы все лишние кодовые вставки – многие из них лучше запустить уже после отображения сайта).
                <br><br>
                Важно! Сайты на конструкторах не ускоряем, так как доступ к кодовой части и хостингу невозможен. Простое сжатие картинок и видео практически не даёт эффекта.
                <br><br>
                Пока мы ведём проверку и ускорение сайта, делается резервная копия, на которую и идут посетители – пока ведутся технические работы, Ваш сайт исправно принимает трафик, конвертирует его в обращения и исправно выполняет работу.
                <br><br>
                Хотите проверить скорость загрузки сайта, чтобы не терять свои конверсии и мегабайты интернета у пользователей? Обратитесь в компанию «Веб Фокус» по номерам, указанным на сайте.
            </p>
        </div>
    </section>



    <?php get_template_part('template-parts/request-form'); ?>
    <?php get_template_part('template-parts/last-posts'); ?>
    <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>