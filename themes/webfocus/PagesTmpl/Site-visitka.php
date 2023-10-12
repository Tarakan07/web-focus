<?php
/*
    Template Name: Site-visitka
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
          <h1 class="sub-hero__title">Сайт - визитка</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>Сайт визитка поможет предпринимателям и компаниям быстро увеличить продажи и прибыль с помощью интернета. Это небольшой веб-ресурс, состоящий из 5-7 страниц. Он содержит общую информацию о фирме или конкретном специалисте, предлагаемых услугах, ценах и контактной информации.</p>
                <br>
                <p>Если Вы еще не пробовали привлекать клиентов через интернет, тогда стоит создать сайт визитку. Вы быстро убедитесь, насколько это удобный и действенный инструмент привлечение клиентов.</p>
              </div>

            </div>
            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Сайт-визитка <br>
                  на шаблоне:</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">2500</span> BYN</h4>
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
                <h4>Сайт-визитка с уникальным дизайном:</h4>
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
                <h4>Срок разработки:</h4>
                <div class="price-coast-converter">
                  <h4>от <span>8</span> дней</h4>
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
      <h2 class="wow section-title">Сайт-визитка — доступная цена <br>
        и широкие возможности</h2>
      <p class="wow section-p ms">Специалисты компании «Веб Фокус» готовы сделать сайт визитку по доступной цене за несколько дней. С нашей помощью вы сделаете первые шаги в освоении интернет-маркетинга, получите больше клиентов, новые заявки, укрепите свой имидж профессионала. <br>
        <br>
        Если разработка сайта визитки выполняется профессионалами, то для Вашего бизнеса открываются широкие перспективы:
      </p>

      <div class="tmpl-third-block_content">
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Понятность</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-visitka/understood-icon.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>Вы можете заказать сайт визитку на базе популярнейших систем управления (CMS) и сможете самостоятельно, без помощи разработчиков редактировать информацию на своем сайте.
            </p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Качество</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-visitka/stars-icon.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>Продуманный сайт визитка с нуля полностью готова к <a href="/seo/" class="link">поисковому продвижению (SEO)</a>. Настройка под SEO не займет много времени и позволит быстро привлечь на веб-площадку целевой трафик, получить больше заявок и покупателей.</p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Эффективность</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-visitka/effectness-icon.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>Готовый ресурс отличается высокой конверсией. Большая часть посетителей ресурса становится Вашими клиентами. Такой эффект достигается с помощью продуманной структуры, <a href="/testirovanie-udobstva-polzovatelej/" class="link">удобной навигации</a> и <a href="/dizajn-interfejsov/" class="link">понятного интерфейса</a>, а также специальных элементов функционала и <a href="/dizajn-sajta/" class="link">дизайна</a>, призванных увеличить конверсию.</p>
          </div>
        </div>
      </div>
  </section>
  <div class="tmpl-cases">
    <?php get_template_part('template-parts/cases'); ?>
  </div>
  <section class="section-std success">
    <div class="container">
      <div class=" wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow section-subtitle">плюсы</h4>
      <h2 class="wow section-title">Преимущества работы с компанией <br> Web Focus
      </h2>
      <div class="float-second quality-service">
        <div class="left-part">

          <ul class="quality-service-list">
            <li>
              <p class="bold">Цена сайта всегда соответствует его качеству</p>
            </li>
            <li>
              <p class="bold">Внимание к каждому заказчику</p>
            </li>
            <li>
              <p class="bold">Ответственный подход
                к срокам выполнения</p>
            </li>
            <li>
              <p class="bold">Возможность дальнейшего сотрудничества</p>
            </li>
          </ul>
        </div>
        <div class="quality-service_info">
          <p>Если Вы поручаете создание сайта визитки компании «Веб Фокус», то получите в результате действенный инструмент продвижения своего бизнеса. Мы внедряем в структуру и дизайн ресурса проверенные маркетинговые элементы, способные привлекать пользователей и превращать их в клиентов.</p>

          <p class="mobile-last">В отличие от <a href="/korporativnyj-sajt/" class="link">корпоративного интернет-ресурса</a> сайт визитка необходим в первую очередь небольшим компаниям, стратапам, фрилансерам и специалистом, которые работают с клиентами напрямую. Сайт визитка «под ключ» состоит из небольшого количества страниц (от 5 до 10) и не требует частого редактирования контента. Такой мини-ресурс дешевле в разработке и обслуживании, чем интернет-площадки других типов.</p>

          <p class="floating-p-appear_dis">Структура такого ресурса проста, здесь нет сложного меню, большого количества разделов, потому что цель визитки — лаконично и при этом респектабельно представить бизнес или конкретного специалиста интернет-аудитории. Это помогает найти новых клиентов, сформировать имидж эксперта в своей области, повысить <a href="/upravlenie-reputacziej/" class="link">доверие со стороны целевой аудитории</a>.</p>

          <p class="floating-p-appear_dis">Сайт визитка нужен не для продвижения товаров, скорее такой формат подойдет и специалистам сферы услуг (мастерам бьюти-сферы, фотографам, программистам, дизайнерам, фитнес-тренерам, психологам и т.д.) и небольшим компаниям, желающим рассказать пользователям Интернета о своей работе в целом.</p>
        </div>
        <p class="floating-p-appear">Структура такого ресурса проста, здесь нет сложного меню, большого количества разделов, потому что цель визитки — лаконично и при этом респектабельно представить бизнес или конкретного специалиста интернет-аудитории. Это помогает найти новых клиентов, сформировать имидж эксперта в своей области, повысить <a href="/upravlenie-reputacziej/" class="link">доверие со стороны целевой аудитории</a>.</p>
        <p class="floating-p-appear">Сайт визитка нужен не для продвижения товаров, скорее такой формат подойдет и специалистам сферы услуг (мастерам бьюти-сферы, фотографам, программистам, дизайнерам, фитнес-тренерам, психологам и т.д.) и небольшим компаниям, желающим рассказать пользователям Интернета о своей работе в целом.</p>
      </div>
    </div>
  </section>
  <section class="section-std fourth-block section-std-bottom-0 section-std-top-0 ">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">преимущества</h4>
      <h2 class="wow section-title">Почему работать с компанией «Веб Фокус» <br> выгодно и удобного</h2>
      <p class="wow section-p ms">Мы создаем сайт визитку с нуля по привлекательной цене всего за несколько дней. Сотрудничая с нами, вы получаете не шаблонное решение, а полноценный интернет-ресурс, где <a href="/dizajn-sajta/" class="link">яркий дизайном</a> удачно сочетается с <a href="/razrabotka-sajtov/" class="link">передовыми технологиями веб-разработки</a>.</p>
      <p class="ms">Для нас нет неважных проектов и клиентов. Мы готовы одинаково тщательно и ответственно создать сайт визитку для фрилансера и большой ресурс со сложной структурой для крупного бизнеса. Преимущества создаваемых нами интернет-ресурсов:</p>
      <div class="fourth-block__content">
        <div class="floating-card">
          <div class="floating-card-img">

            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-visitka/grayblock.svg" alt="img">
              </div>

            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Адаптивность под любые устройства и платформы.</h3>
            <div class="floating-card-arrow">
            </div>
            <p>При разработке веб-ресурсов мы изначально строим работу так, чтобы готовый сайт корректно работал и отображался на устройствах, независимо от размера экрана и используемого браузера. Ваш сайт будет одинаково удобен при просмотре с ПК, смартфонова или планшета.</p>
          </div>
        </div>
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-visitka/grayblock-1.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Оптимальный набор функций.</h3>
            <div class="floating-card-arrow">
            </div>
            <p>Для каждого проекта предлагаем оптимальный набор функций, а также по желанию заказчика снабжаем интернет-ресурс дополнительными возможностями взаимодействия с клиентами. <a href="/razrabotka-programmnogo-modulya-dlya-sajta/" class="link">Разрабатываем и внедряем необходимые модули</a> и расширения.</p>
          </div>
        </div>
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-visitka/grayblock-2.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Быстрая скорость работы.</h3>
            <div class="floating-card-arrow">
            </div>
            <p>Клиенты и поисковые роботы одинаково любят быстрые, производительные сайты. Мы создадим отзывчивый, быстрый ресурс, с необходимыми инструментами и возможностями для <a href="/seo/" class="link">действенного SEO-продвижения</a> и максимального охвата целевой аудитории.</p>
          </div>
        </div>
        <div class="floating-card last-without-p">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hovered3d/catalog-grayblock.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Привлекательная стоимость.</h3>
            <div class="floating-card-arrow">
            </div>
            <p>Наши цены на создание мини-сайтов одни из самых доступных на рынке. Стоимость каждого проекта рассчитывается индивидуально и прописывается в договоре. Никаких скрытых платежей, мы — за честные и прозрачные финансовые отношения с заказчиками.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/contact-form'); ?>
  <section class="section-std section-gray section-with-floating-bubbles">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">успех</h4>
      <h2 class="wow section-title">Из чего состоит успешный сайт-визитка</h2>
      <p class="wow section-p ms">
        Много лет компания «Веб Фокус» работает на рынке веб-разработки и продвижения интернет-проектов и готовы поделиться с Вами секретами успеха сайтов-визиток. Основа высоких результатов таких проектов — яркий имидж продвигаемой компании, ее миссия должна быть близка потребностям и жизненным ценностям целевой аудитории. Только так ресурсам сможет привлечь и удержать внимание интернет-пользователей и заставит их стать Вашими клиентами. Мы учитываем это и используем провеременные правила интернет-маркетинга при создании веб-ресурсов.
      </p>
      <p class="ms">Интернет-ресурс в формате визитки — своеобразная витрина, где компания может представить интернет-сообществу свои товары и услуги, рассказать о своей работе и целях. И оформление этой виртуальной витрины должно быть одновременно привлекательным и реалистичным.
      </p>
      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
            <h3>01.</h3>
            <h3>Веб-ресурсы такого типа состоит из небольшого числа страниц, среди которых:</h3>
          </div>
        </div>
        <ul class="function-list">
          <li>
            <span class="function-list-marker"></span>
            <p>Главная страница — первая страница ресурса, куда попадает посетитель. </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>О нас — страница, где коротко рассказывается о компании в целом, ее миссии и принципах работы.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Страница со списком продуктов или услуг — раздел с кратким обзором предложений компании, короткой презентацией товаров или описанием доступных услуг.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Контакты — страница, где указаны все способы связи с представителями фирмы: телефоны, карта проезда, ссылки на группы в соцсетях.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Обратная связь — контактная форма, через которую интернет-пользователи могут обратиться за дополнительной информацией и оставить свои контакты для связи.</p>
          </li>

        </ul>
      </article>
      <article class="function-list-wrp">
        <div class="function-list-left-part second">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
            <h3>02.</h3>
            <h3>Грамотно созданный, продуманный ресурс поможет: </h3>
          </div>
        </div>
        <ul class="function-list">
          <li>
            <span class="function-list-marker"></span>
            <p><a href="/upravlenie-reputacziej/" class="link">Сформировать позитивный имидж, репутацию эксперта;</a></p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>Понятные и производительные инструменты для управления заказами и ассортиментом для администраторов веб-ресурса.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Продемонстрировать ответственное отношение к делу;</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Сэкономить время сотрудников на однотипные консультации клиентов по поводу цен и услуг;
            </p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Доносить информацию о компании круглые сутки и без перерывов.</p>
          </li>
        </ul>
      </article>
      <p class="ms">Обратившись в компанию «Веб Фокус», Вы получите сайт-визитку, который понятно и доступной манере расскажет, чем Ваш бизнес, опыт, знания и навыки помогут улучшить жизнь интернет-пользователей.</p>
  </section>

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>