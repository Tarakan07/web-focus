<?php
/*
    Template Name: prodvizhenie-lendiga
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
                    <h1 class="sub-hero__title">Продвижение <br>лендига</h1>
                    <div class="sub-hero__info-wrapper">
                        <div class="sub-hero__info">
                            <div class="sub-hero__info_left">
                                <p>
                                    Организации, не желающие создавать большой сайт с множеством страниц, делают одностраничную версию – landing page. Продвижение лендинга – непростая процедура, так как есть свои особенности.
                                </p>
                            </div>

                        </div>
                        <div class="sub-hero__info_price">
                            <div class="price-row">
                                <h4>Стоимость продвижения лендига:</h4>
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

    <section class="section-std success">
        <div class="container">
            <div class=" wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow section-subtitle">эффект</h4>
            <h2 class="wow section-title ms-720">
                Продвижение лендига – вариант увеличения продаж
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">Эффекты визуального характера:</p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                                Яркими кнопками.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                                Необычным дизайном.
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                                Цветовой гаммой, которая была продумана заранее.
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>Главная задача такого сайта – побудить посетителя выполнить необходимое действие. Это может быть заказ звонка от специалиста компании либо оформление покупки. Чтобы от работы лендинга был желаемый эффект в виде привлечения покупателей или заказчиков, специалисты seo-продвижения от компании «Веб Фокус» пользуются разными эффектами визуального характера:</p>
                    <p class='mobile-last'>Данные способы хорошо известны опытным «сеошникам». Насколько они эффективны? Здесь важно использовать эффекты вместе с главными методами в seo-продвижении. Профессионалы компании «Веб Фокус», работающие с лендингами (так называют посадочные страницы) и приводящие их к появлению в первых строках поисковых выдач, гарантируют эффективность в привлечении покупателей и реальном увеличении прибыли.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="tmpl-cases">
        <?php get_template_part('template-parts/cases'); ?>
    </div>
    <?php get_template_part('template-parts/contact-form'); ?>

    <!-- <section class="section-std  section-gray algoritm-block fifth-block">
        <div class="container">
            <div class="wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow  section-subtitle">важно</h4>
            <h2 class="wow section-title ms-720">Тексты и роботы в seo продвижении landing page</h2>
            <div class="steps-to-goal steps-to-goal_mrg-top">
                <div class="step-to-goal">
                    <div class="step-to-goal__left">
                        <div class="step-to-goal__number">
                            <h3>01.</h3> <span>Шаг 1</span>
                        </div>
                        <h3>Для него важно, чтобы:</h3>
                    </div>
                    <div class="step-to-goal__info">
                        <p>
                            На что обращает внимание поисковый робот?
                        </p>
                        <ul class="arrow-marked-list">
                            <li>
                                <p class="bold">Содержание материала на странице лендинга было оптимальным с точки зрения спама, уникальности, в меньшей степени – «воды»;</p>
                            </li>
                            <li>
                                <p class="bold">Description и title составлялись грамотно;</p>
                            </li>
                            <li>
                                <p class="bold">Присутствовали заголовки от h1 и до h6.</p>
                            </li>
                        </ul>
                        <p>
                            Чтобы создание и продвижение лендинга под ключ было успешным, опытные seo-оптимизаторы внимательно работают с текстами. Если они написаны грамотно, оформлены правильно и в них со смыслом вставлены ключевые слова, то оптимизация пройдёт успешно. Не секрет, что контент страниц сайтов анализируется с помощью специальных алгоритмов в поисковых системах. Они неодинаково ранжируют тексты – есть конкретные предпочтения. Соответственно, основная задача seo-продвижения – сделать так, чтобы поисковая система была удовлетворена. Тогда сайт окажется сверху в выдаче, на чётных позициях. А это даст приток новых посетителей на сайт, и там они при грамотной оптимизации лендинга перейдут в разряд покупателей товара или заказчиков услуг.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="section-std section-with-floating-bubbles section-gray">
        <div class="container">
            <div class="wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow  section-subtitle">важно</h4>
            <h2 class="wow section-title ms-720">Тексты и роботы в seo продвижении landing page</h2>
            <!-- <p class='ms-720'>Есть в запасе у seo-специалистов «Веб Фокуса» и дополнительные инструменты в создании и продвижении лендинга под ключ. Они дают весомое преимущество в «борьбе за место под солнцем» с конкурентами. С их помощью сотрудники «Веб Фокуса» работают над тем, чтобы посадочная страница не просто существовала, а приносила прибыль.</p> -->
            <article class="function-list-wrp">
                <div class="function-list-left-part first">
                    <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
                    <div class="function-list-left-content">
                        <h3>На что обращает внимание поисковый робот? Для него важно, чтобы:</h3>
                    </div>
                </div>
                <ul class="function-list">
                    <li>
                        <span class="function-list-marker"></span>
                        <p>
                        Чтобы создание и продвижение лендинга под ключ было успешным, опытные seo-оптимизаторы внимательно работают с текстами. Если они написаны грамотно, оформлены правильно и в них со смыслом вставлены ключевые слова, то оптимизация пройдёт успешно. Не секрет, что контент страниц сайтов анализируется с помощью специальных алгоритмов в поисковых системах. Они неодинаково ранжируют тексты – есть конкретные предпочтения. Соответственно, основная задача seo-продвижения – сделать так, чтобы поисковая система была удовлетворена. Тогда сайт окажется сверху в выдаче, на чётных позициях. А это даст приток новых посетителей на сайт, и там они при грамотной оптимизации лендинга перейдут в разряд покупателей товара или заказчиков услуг.
                        </p>
                    </li>

                    <li>
                        <span class="function-list-marker"></span>
                        <p>
                        Содержание материала на странице лендинга было оптимальным с точки зрения спама, уникальности, в меньшей степени – «воды»;
                        </p>
                    </li>
                    <li>
                        <span class="function-list-marker"></span>
                        <p>
                        Description и title составлялись грамотно;
                        </p>
                    </li>
                    <li>
                        <span class="function-list-marker"></span>
                        <p>
                        Присутствовали заголовки от h1 и до h6.
                        </p>
                    </li>
                </ul>
            </article>
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
            <h4 class="wow  section-subtitle">моменты</h4>
            <h2 class="wow section-title">Смысл в тексте и мета-теги</h2>
            <p class="wow section-p ms">
                К размещению текстов в лендинге надо подойти ответственно. Стоит выделить два момента:
            </p>

            <div class="tmpl-third-block_content">
                <div class="market-card">
                    <div class="market-card__left">
                        <div class="market-card__title">
                            <h3>Смысловое наполнение</h3>
                            <div class="market-card__title_arrow"></div>
                        </div>
                        <div class="market-card__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seo/napolnenie-1.svg" alt="img">
                        </div>
                    </div>
                    <div class="market-card__info">
                        <p>
                            Важный этап – определение смысловой нагрузки. Дело в том, что вместить много информации не получится – ведь одна страница, а не несколько. Ограниченный объём информации – одна из важных характеристик посадочной страницы. Поэтому важно определиться с направленностью. Далее идёт работа над подбором соответствующих тематике ключевых слов и словосочетаний. С учётом их происходит формирование увлекательного текста, который привлекал бы посетителей на landing page;
                        </p>
                    </div>
                </div>
                <div class="market-card">
                    <div class="market-card__left">
                        <div class="market-card__title">
                            <h3>Мета-теги</h3>
                            <div class="market-card__title_arrow"></div>
                        </div>
                        <div class="market-card__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seo/napolnenie-2.svg" alt="img">
                        </div>
                    </div>
                    <div class="market-card__info">
                        <p>
                            Они должны быть правильно оформлены. Хорошо, если description достигает двухсот знаков, а title – восьмидесяти. Эти показатели имеют значение для seo-оптимизации. Соответственно, им требуется уделить максимум внимания, что при продвижении лендинга понимают в компании «Веб Фокус».
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="section-std section-with-floating-bubbles section-gray">
        <div class="container">
            <div class="wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow  section-subtitle">секреты</h4>
            <h2 class="wow section-title ms-720">Другие варианты продвижения landing page</h2>
            <p class='ms-720'>Есть в запасе у seo-специалистов «Веб Фокуса» и дополнительные инструменты в создании и продвижении лендинга под ключ. Они дают весомое преимущество в «борьбе за место под солнцем» с конкурентами. С их помощью сотрудники «Веб Фокуса» работают над тем, чтобы посадочная страница не просто существовала, а приносила прибыль.</p>
            <article class="function-list-wrp">
                <div class="function-list-left-part first">
                    <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
                    <div class="function-list-left-content">
                        <h3>Вот дополнительные секреты успеха:</h3>
                    </div>
                </div>
                <ul class="function-list">
                    <li>
                        <span class="function-list-marker"></span>
                        <p>Задача лендинг педж – продать продукцию или услугу, а не стать элементом в формировании положительного имиджа организации. Поэтому необходимо сформировать ключевую фразу, входящую в URL. Чем лучше звучит адрес посадочной страницы, тем выше будет оценка от поисковиков;</p>
                    </li>

                    <li>
                        <span class="function-list-marker"></span>
                        <p>Ключевая фраза должна стать анкором, чтобы нажав на неё, пользователь совершил переход на целевую часть веб-ресурса. Анкоры делают пребывание пользователей на лендинге комфортным, предоставляя сразу нужную информацию. Грамотно сделанные, они содействуют повышению лояльности к сайту со стороны поисковых систем;</p>
                    </li>
                    <li>
                        <span class="function-list-marker"></span>
                        <p>Заголовки с подзаголовками от h1 и хотя бы до h3 должны активно использоваться в тексте. Копирайтеры компании «Веб Фокус» органично введут ключевой запрос в основное заглавие h Так тоже достигается одобрение поисковых роботов. Они же распознают и подзаголовки в качестве title. Ключевое слово в нём отражает главное содержание текста. Но не стоит увлекаться внедрением «ключей», чтобы не испортить материал и не сделать его менее привлекательным. Заголовки, подзаголовки должны нравиться читателям, а не вызывать у них отторжение и желание покинуть landing;</p>
                    </li>
                    <li>
                        <span class="function-list-marker"></span>
                        <p>На сайте надо размещать тексты, в которых ключевых слов – не много и не мало. Тексты с большим количеством «ключей» не воспринимаются позитивно поисковыми роботами. Наоборот, большая их плотность ведёт к неэффективности продвижения одностраничных сайтов. Дело в том, что в таких ситуациях Yandex и Google принимают веб-страницу в качестве средства распространения спама. Скрытый контент тоже не допускается.</p>
                    </li>
                </ul>
            </article>
        </div>
    </section> -->

    <section class="section-std fourth-block section-std-top-0 section-std-bottom-0">
        <div class="container">
            <div class="wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow  section-subtitle">секреты</h4>
            <h2 class="wow section-title">Другие варианты продвижения landing page</h2>
            <p class="section-p wow ms-720">Есть в запасе у seo-специалистов «Веб Фокуса» и дополнительные инструменты в создании и продвижении лендинга под ключ. Они дают весомое преимущество в «борьбе за место под солнцем» с конкурентами. С их помощью сотрудники «Веб Фокуса» работают над тем, чтобы посадочная страница не просто существовала, а приносила прибыль. Вот дополнительные секреты успеха:</p>
            <div class="fourth-block__content">
                <div class="floating-card">
                    <div class="floating-card-img">
                        <div class="floating-card-img-wrp">
                            <div class="floating-card-gray-layer">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seo/grayblock-seo-1.svg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="floating-card-info-wrp">
                        <h3>Задача лендинг педж</h3>
                        <div class="floating-card-arrow">
                        </div>
                        <p>Продать продукцию или услугу, а не стать элементом в формировании положительного имиджа организации. Поэтому необходимо сформировать ключевую фразу, входящую в URL. Чем лучше звучит адрес посадочной страницы, тем выше будет оценка от поисковиков;</p>
                    </div>
                </div>

                <div class="floating-card">
                    <div class="floating-card-img">
                        <div class="floating-card-img-wrp">
                            <div class="floating-card-gray-layer">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seo/grayblock-seo-2.svg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="floating-card-info-wrp">
                        <h3>Ключевая фраза должна стать анкором</h3>
                        <div class="floating-card-arrow">
                        </div>
                        <p>Чтобы нажав на неё, пользователь совершил переход на целевую часть веб-ресурса. Анкоры делают пребывание пользователей на лендинге комфортным, предоставляя сразу нужную информацию. Грамотно сделанные, они содействуют повышению лояльности к сайту со стороны поисковых систем;</p>
                    </div>
                </div>

                <div class="floating-card">
                    <div class="floating-card-img">
                        <div class="floating-card-img-wrp">
                            <div class="floating-card-gray-layer">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seo/grayblock-seo-3.svg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="floating-card-info-wrp">
                        <h3>Заголовки с подзаголовками от h1 и хотя бы до h3 должны активно использоваться в тексте</h3>
                        <div class="floating-card-arrow">
                        </div>
                        <p>Копирайтеры компании «Веб Фокус» органично введут ключевой запрос в основное заглавие h Так тоже достигается одобрение поисковых роботов. Они же распознают и подзаголовки в качестве title. Ключевое слово в нём отражает главное содержание текста. Но не стоит увлекаться внедрением «ключей», чтобы не испортить материал и не сделать его менее привлекательным. Заголовки, подзаголовки должны нравиться читателям, а не вызывать у них отторжение и желание покинуть landing;</p>
                    </div>
                </div>

                <div class="floating-card">
                    <div class="floating-card-img">
                        <div class="floating-card-img-wrp">
                            <div class="floating-card-gray-layer">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/seo/grayblock-seo-4.svg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="floating-card-info-wrp">
                        <h3>На сайте надо размещать тексты, в которых ключевых слов – не много и не мало</h3>
                        <div class="floating-card-arrow">
                        </div>
                        <p>Тексты с большим количеством «ключей» не воспринимаются позитивно поисковыми роботами. Наоборот, большая их плотность ведёт к неэффективности продвижения одностраничных сайтов. Дело в том, что в таких ситуациях Yandex и Google принимают веб-страницу в качестве средства распространения спама. Скрытый контент тоже не допускается.</p>
                    </div>
                </div>

            </div>
            <!-- <p class="ms-720">Сайт-одностраничник продвигать непросто. Но для «Веб Фокуса» не существует неразрешимых задач! Компания внимательно отслеживает все новинки в поведении поисковых роботов, предъявляемых требованиях к веб-страницам и делает всё, чтобы разрабатываемые сайты им полностью соответствовали. К тому же предлагаем услуги по приемлемой стоимости. Так что обращайтесь и получайте результат в краткие сроки!</p> -->
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
      <h4 class="wow section-subtitle">причины</h4>
      <h2 class="wow section-title ms">Три причины заказа создания и продвижения лендинга под ключ в компании «Веб Фокус»</h2>
      <p class="wow section-p ms">
          Желаете с помощью landing page увеличить продажи, повысив сайт в поисковой выдаче? Вам поможет команда «Веб Фокус»! Есть несколько причин совершения этого действия:</p>
      <article class="advantages">
        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>Работаем на получение максимального результата</h3>
              <p>
              Это не высокопарные слова. Работа компании эффективна в продвижении лендингов, о чём говорит рост их позиций в выдаче Google, Yandex и других поисковиков. Результат от сотрудничества с нами достигается быстро и на долгое время. Мы успешно решаем задачи по seo, которые ставятся клиентами;
              </p>
              <div class="advantages-number">01</div>
            </div>
          </div>
        </div>
        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>Ответственность за свои действия</h3>
              <p>
              Не было такого случая, чтобы по вине специалистов «Веб Фокуса» лендинг пейдж и другие сайты наказывались поисковыми системами с помощью санкций. Мы работаем с умом, аккуратно и бережно продвигая веб-ресурсы;
              </p>
              <div class="advantages-number">02</div>
            </div>
          </div>
        </div>

        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>Использование действенных инструментов</h3>
              <p>
              В seo продвижении пользуемся как проверенными методами, так и новые алгоритмы. Добавляем в работу собственные методики. Всё это приводит к получению ожидаемого результата за непродолжительное время.
              </p>
              <div class="advantages-number">03</div>
            </div>
          </div>
        </div>

      </article>

      <p class="ms-720 text-top-0">
      Сайт-одностраничник продвигать непросто. Но для «Веб Фокуса» не существует неразрешимых задач! Компания внимательно отслеживает все новинки в поведении поисковых роботов, предъявляемых требованиях к веб-страницам и делает всё, чтобы разрабатываемые сайты им полностью соответствовали. К тому же предлагаем услуги по приемлемой стоимости. Так что обращайтесь и получайте результат в краткие сроки!
      </p>

    </div>
  </section>

    <?php get_template_part('template-parts/request-form'); ?>
    <?php get_template_part('template-parts/last-posts'); ?>
    <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>