<?php
/*
    Template Name: Landing-Page
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
          <h1 class="sub-hero__title">Лендинг</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>Landing page — сайт, состоящий из одной страницы. Цель такого мини-ресурса — побудить интернет-пользователя сделать покупку, оформить заказ на услуги или посетить продвигаемое мероприятие.
                  <br> <br>
                  Также лендинг пейдж содержит информацию о компании-продавце, рассказывает о преимуществах сотрудничества и спецпредложениях.
                </p>
              </div>

            </div>
            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость разработки <br> уникального дизайна:</h4>
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
              <div class="price-row">
                <h4>Лендинг на готовом <br> решении</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">300</span> BYN</h4>
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
                <h4>Срок разработки:</h4>
                <div class="price-coast-converter">
                  <h4><span>5</span> дней</h4>
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
      <h4 class="wow  section-subtitle">главное</h4>
      <h2 class="wow section-title">Особенности и преимущества <br> одностраничного сайта</h2>

      <div class="three-part-p">
        <p>В компании «Веб Фокус» Вы можете заказать лендинг пейдж по доступной цене. Созданный нами готовый ресурс станет действенным генератором заявок для Вашего бизнес-проекта, благодаря <a href="/dizajn-sajta/" class="link">стильному запоминающемуся дизайну</a>, ярких кнопок «Купить», продающего текста и специальных блоков (список наград, отзывов, статистические данные).</p>
        <p>В сравнении с другими видами интернет-ресурсов сайты-одностраничники имеют ряд существенных отличий. Главная особенность лендинга в том, что это сайт, состоящий из единственной страницы. Целью разработки такого ресурса обычно является желание бизнеса <a href="/seo/" class="link">сделать онлайн-продвижение</a> своей продукции или услуг максимально эффективным.</p>
        <p>Мы разрабатываем визуальное оформление и функционал landing page таким образом, чтобы с первых мгновений заинтересовать интернет-пользователя в предложении компании и побудить его сделать покупку, зарегистироваться на мероприятие или заполнить форму для сбора контактов.</p>
      </div>

  </section>
  <div class="tmpl-cases">
    <?php get_template_part('template-parts/cases'); ?>
  </div>
  <section class="section-std  section-std-bottom-0">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">процесс</h4>
      <h2 class="wow section-title mrg-bottom-0">Разработка Landing page – действенный способ <br> добиться нужного результата, если Вы стремитесь:</h2>
      <div class="tmpl-third-block_content">
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Увеличить продажи.</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/internet-magazin/shop-price.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>Конверсия качественного landing page сайта может составлять до 40%. Другие форматы коммерческих интернет-ресурсов не могут похвастаться такой результативностью, как одностраничные ресурсы.</p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Быстро и недорого получить новых клиентов.</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-visitka/effectness-icon.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>Одностраниченый ресурс — оптимальный способ в короткие сроки и при небольших вложениях в разработку и продвижение привлечь большое количество новых клиентов и увеличить продажи и прибыль.</p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Вывести на рынок
                новую продукцию.</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/internet-magazin/shop-product.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>Landing page лучше других инструментов интернет-маркетинга позволяет представить целевой аудитории новый товар или услугу. В формате одностраничной онлайн-площадки можно подробно рассказать интернет-аудитории о новинке в своем ассортименте, продемонстрировать ее сильные стороны и преимущества перед предложениями конкурентов.</p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Привлечь внимание аудитории к бренду
                или компании.</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/internet-magazin/auditor.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>Формат лендинг пейдж отлично подходит, чтобы провести яркую маркетинговую кампанию, рекламную игру, распродажу или другую активность, направленную на привлечение внимание к фирме и ее продукции.</p>
          </div>
        </div>
      </div>
  </section>
  <section class="section-std  section-std-bottom-0">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">плюсы</h4>
      <h2 class="wow section-title ">Преимущества сотрудничества с <br> компанией «Веб Фокус»</h2>
      <p class="wow section-p ms">
        Почему выгодно заказать лендинг пейдж «под ключ» в компании «Веб Фокус»? Сотрудничество с нашей компанией гарантирует нашим клиентам сразу несколько важных преимуществ:
      </p>
      <article class="advantages mrg-bottom-0">
        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>Гарантированный положительный эффект от готового лендинга.</h3>
              <p>Мы сразу заключаем с клиентами подробный договор на разработку полноценной посадочной страницы. В соглашении мы прописываем подробный список работы, сроки реализации проекта, цену услуги и четкий результат.
              </p>
              <div class="advantages-number">01</div>
            </div>
          </div>
        </div>
        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>Профессионалы высокого уровня.</h3>
              <p>
                Над Вашим проектом будет работать команда первоклассных профессионалов: дизайнеров, маркетологов, копирайтеров, программистов. Специалисты по маркетингу отвечают за коммерческую составляющую, чтобы готовый лендинг эффективно привлекал клиентов при минимальных затратах на рекламу.
              </p>
              <div class="advantages-number">02</div>
            </div>
          </div>
        </div>

        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>Закрепленный специалист.</h3>
              <p>
                За Вашим проектом закрепляется личный менеджер, отвечающий за задачу в целом и непосредственное взаимодействие с заказчиком. Наш сотрудник всегда готов подсказать заказчику проекта оптимальное решение, пояснить нюансы работы, собрать интересующие сведения. На каждом этапе менеджер проекта показывает заказчику работ наглядные результаты команды.
              </p>
              <div class="advantages-number">03</div>
            </div>
          </div>
        </div>
        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>Гарантийная поддержка.</h3>
              <p>
                Чтобы готовый продукт работал бесперебойно и регулярно приводил клиентов, недостаточно создать лендинг пейдж и забыть о нем. Важна <a href="/tehnicheskaya-podderzhka-sajta/" class="link">профессиональная техническая поддержка</a> и оперативное устранение ошибок. После релиза проекта мы контролируем работоспособность готовой посадочной страницы, <a href="/seo-audit-sajta/" class="link">оперативно устраняем выявленные технические проблемы</a>.
              </p>
              <div class="advantages-number">04</div>
            </div>
          </div>
        </div>

        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>Демократичная стоимость.</h3>
              <p>
                Мы успешно занимаемся созданием сайтов много лет и успели выработать четкий алгоритм процесса создания landing page. Это позволило компании снизить внутренние издержки и предлагать доступные цены на создание лендингов. Для нас важно, чтобы создание качественных посадочных страниц было доступно не только крупному бизнесу, но и начинающим компаниям и предпринимателям. Они особенно остро нуждаются в действенных инструментах онлайн-продвижения для своих проектов.
              </p>
              <div class="advantages-number">05</div>
            </div>
          </div>
        </div>
        <div class="advantages-item">
          <div class="advantages-item-wrapper">

            <div class="advantages__item">
              <h3>Дополнительные бонусы.</h3>
              <p>
                Мы не только оказываем услуги по созданию лендинг пейдж в Минске, но также предлагаем выгодные условия при заказе <a href="/kontekstnaja-reklama/" class="link">контекстной рекламы</a>, <a href="/seo/" class="link">SEO</a>, других услуг.
              </p>
              <div class="advantages-number">06</div>
            </div>

          </div>
        </div>
      </article>
    </div>
  </section>

  <?php get_template_part('template-parts/contact-form'); ?>
  <section class="section-std  section-gray algoritm-block fifth-block">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">процесс</h4>
      <h2 class="wow section-title">Алгоритм создания landing page</h2>
      <p class="section-p ms">
        Наша работа по созданию полноценной посадочной страницы делится на несколько этапов:
      </p>

      <div class="algoritm-block__exercise">
        <h3 class="exercise__summa">
          Лендинг
        </h3>
        <h3 class="exercise__symbol">
          =
        </h3>
        <div class="algoritm-block__parth">
          <h3>концепция</h3>
          <h3 class="exercise__symbol">+</h3>
          <h3>реализация</h3>
          <h3 class="exercise__symbol">+</h3>
          <h3>сопровождение</h3>
        </div>
      </div>
      <div class="steps-to-goal">
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>01.</h3> <span>Шаг 1</span>
            </div>
            <h3>Поставка целей лендинга. </h3>
          </div>
          <div class="step-to-goal__info">
            <h4>
              Постановка целей и задач.
            </h4>
            <p>
              Над одной страницей работают: программист; дизайнер; специалист по SEO; копирайтер; маркетолог.
              Мы создаем лендинги, которые уже нацелены удержать внимание посетителей сайта и всем своим видом и структурой подталкивают посетителей совершать покупку или совершить нужную конверсию.
              А дальнейшим нашим бонусом будет анализ поведения пользователей на сайте и внесение правок в ваш Landing Page.
            </p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>02.</h3> <span>Шаг 2</span>
            </div>
            <h3>Аудит рынка.</h3>
          </div>
          <div class="step-to-goal__info">
            <h4>
              Аудит рынка, анализ конкурентов.
            </h4>
            <p>
              Невозможно достичь успеха, если тщательно не проанализировать рынок и особенности работы компании-заказчика. Поэтому на втором этапе мы детально изучаем бизнес-нишу заказчика и его потребности, анализируем ситуацию на рынке, <a href="/analiz-konkurentov/" class="">исследуем активность</a> конкурентов.
            </p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>03.</h3> <span>Шаг 3</span>
            </div>
            <h3>Подготовка прототипа.</h3>
          </div>
          <div class="step-to-goal__info">
            <h4>
              Подготовка прототипа посадочной страницы.
            </h4>
            <p>
             <a href="/razrabotka-maketa-sajta/" class="link">Создание схемы или прототипа</a> лендинга — один из ключевых этапов работы над проектом. Мы до тонкостей продумываем структуру будущего сайта-одностраничника, разрабатываем схему каждого экрана, расположение функциональных элементов и тематических блоков. Тщательно продуманная схема уже на этапе проектирования позволяет предотвратить появление многих ошибок при верстке лендинга и наглядно продемонстрировать заказчику, какой ресурс он получит в итоге.
            </p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>04.</h3> <span>Шаг 4</span>
            </div>
            <h3>Прорисовка дизайна.</h3>
          </div>
          <div class="step-to-goal__info">
            <h4>
              Прорисовка вариантов дизайна и утверждение конечного.
            </h4>
            <p>
              На этапе подготовки визуального оформления посадочной страницы профессиональный веб-дизайнер готовит эскизы в нескольких вариантах. Заказчик выбирает наилучший дизайн, который тщательно дорабатывается нашим специалистом.
            </p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>05.</h3> <span>Шаг 5</span>
            </div>
            <h3>Верстка одностраничника.</h3>
          </div>
          <div class="step-to-goal__info">
            <h4>
              Верстка сайта.
            </h4>
            <p>
              На стадии верстки дизайн-макет, ранее созданный веб-дизайнером, превращается в реальный одностраничный сайт со всеми <a href="/dizajn-interfejsov/" class="link">функциональными элементами интерфейса</a> (кнопки для заказа, формы для сбора контактов и заказа обратного звонка).
            </p>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>06.</h3> <span>Шаг 6</span>
            </div>
            <h3>Тестирование и запуск.</h3>
          </div>
          <div class="step-to-goal__info">
            <h4>
              Тестирование мельчайших деталей и отправка в продакшн.
            </h4>
            <p>
              На заключительном этапе мы <a href="/testirovanie-sajta/" class="link">тестируем готовый</a> landing page. Проверяется как техническая составляющая, так и <a href="/testirovanie-udobstva-polzovatelej/" class="link">удобство сайта</a> и его интерфейса для интернет-пользователей. Мы оперативно устраняем выявленные в ходе тестирования недостатки и запускаем готовый сайт.
            </p>
          </div>
        </div>

      </div>

      <p>
        Сотрудничая с нами, вы быстро и недорого получаете полноценную посадочную страницу с большим потенциалом для увеличения продаж и привлечения новых покупателей. Дополнительно мы предлагаем нашим клиентам выгодные условия на <a href="/kontekstnaja-reklama/" class="link">настройку и ведения контекстной рекламы</a> и другие <a href="/seo/" class="link">услуги по онлайн-продвижению</a> landing page.
        <br> <br>
        <a href="/razrabotka-sajtov/" class="link">Разработка сайтов</a> любого типа начинается с постановки целей проекта. Вместе с заказчиком лендинга мы определяем, какой результат нужно получить от готового лендинга. Исходя их целей строится общая концепция проекта и ведутся работы на следующих этапах.
      </p>
    </div>
  </section>
  <section class="section-std   bubbles-block-with-section-p seven-block bubbles-block">
    <div class="container">
      <h4 class="wow  section-subtitle">web-production</h4>
      <h2 class="wow section-title ms">Этапы работы над лендингом.</h2>
      <p class="section-p ms">Сайт, сделанный «на коленке» и полноценный ресурс, <br> обеспечивающий хорошую конверсию – не одно и то же.</p>
    </div>
    <div class="bubbles-main-line seven-bubles">
      <div class="container">
        <div class="bubble-wrp bubble-wrp-1">
          <div class="bubbles bubbles-1">
          </div>
          <p class="bubbles-info">Определение сайта, разработка концепции, структуры и офферов</p>
        </div>
        <div class="bubble-wrp bubble-wrp-2">
          <div class="bubbles bubbles-2">
          </div>
          <p class="bubbles-info">Покупка домена (адрес в интернете) и хостинга (место в сети)</p>
        </div>
        <div class="bubble-wrp bubble-wrp-3">
          <div class="bubbles bubbles-3">
          </div>
          <p class="bubbles-info">Разработка прототипа на основе структуры, создание макета</p>
        </div>
        <div class="bubble-wrp bubble-wrp-4">
          <div class="bubbles bubbles-4">
          </div>
          <p class="bubbles-info">Вертска лендинга на HTML согласно разработанному макету</p>
        </div>
        <div class="bubble-wrp bubble-wrp-5">
          <div class="bubbles bubbles-5">
          </div>
          <p class="bubbles-info">Подключение почты вида name@site.by и загрузка фавикон</p>
        </div>
        <div class="bubble-wrp bubble-wrp-6">
          <div class="bubbles bubbles-6">
          </div>
          <p class="bubbles-info">Добавление мета-тегов для роботов поисковых систем, подключение систем аналитики Yandex, Google</p>
        </div>
        <div class="bubble-wrp bubble-wrp-7">
          <div class="bubbles bubbles-7">
          </div>
          <p class="bubbles-info">Тестирование функционала, адаптива и кроссбраузерности</p>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>