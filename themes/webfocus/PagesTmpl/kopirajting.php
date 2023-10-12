
<?php
/*
    Template Name: kopirajting
    Template post type:  page
    */
?>


<?php get_header() ?>
<main>
  <div class="sub-hero-wrp">
    <lottie-player class="bg-animation contekst" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/context.json" loop speed="1" autoplay></lottie-player>
    <section class="sub-hero">

      <div class="container">
        <div class="sub-hero-wrapper">

          <?php echo do_shortcode('[breadcrumb_simple]') ?>
          <h1 class="sub-hero__title">Копирайтинг</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Необходимость заказать копирайтинг возникает периодически у любого бизнеса, от индивидуальных предпринимателей до крпных компаний, работающих на международном рынке. Качественный разноплановый текстовый контент сегодня жизненно необходим бизнесу для успеха.
                </p>
              </div>
            </div>

            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость копирайтинга:</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">430</span> BYN</h4>
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
            <h4 class="wow section-subtitle">минусы</h4>
            <h2 class="wow section-title ms-720">
            Минусы фриланс-копирайтинга
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">Фрилансер в сайта вакансий или биржи может:</p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                            Нарушить дедлайн заказа;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Перестать выходить на связь в любой момент;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Не соблюдать при подготовке текста условия ТЗ;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Написать некачественный текст с многочисленными ошибками;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Не обладать необходимыми знаниями в интересующей Вас области;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Недостаточно глубоко раскрыть тему.
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>
                    Чтоб заказать услуги копирайтера можно обратиться к фрилансерам, на биржи контента, искать автора текстов через сайты для поиска работы. Но все эти способы чреваты многочисленными «подводными камнями».
                    </p>
                    <p>
                    Кроме того, заказывая услуги копирайтера напрямую у исполнителя, Вам приходится тратить дополнительное время на подготовку заданий и проверку готовых текстов. Не говоря уже о том, что поиск добросовестного ответственного и пунктуального автора может затянуться. Все это время Ваш проект не сможет полноценно развиваться.
                    </p>
                    <p class='mobile-last'>
                    Намного более дальновидное решение — заказать копирайтинг в специализированном агентстве. В минской студии «Веб Фокус» Вы сможете заказать услуги копирайтера любого уровня сложности. Обращаясь к нам, Вы можете быть уверены, что заказ будет выполнен качественно, в точном соответствии с параметрами ТЗ, вовремя и по привлекательной цене. Чтобы обсудить конкретные условия работы над проектом, звоните по телефону или свяжитесь с нами через форму онлайн-заявки на сайте.
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
      <h4 class="wow section-subtitle">разновидности</h4>
      <h2 class="wow section-title ms-720">Разновидности текстов в копирайтинге</h2>
      <p class="section-p wow ms-720">Под услугами копирайтинга сегодня подразумевают подготовку текстов для рекламы, продвижения или формирования имиджа конкретной компании, ее продуктов и сервисов. Также сюда относится подготовка текстового наполнения для сайтов, их продвижения в поисковиках, а также различных PR-кампаний.
      <br><br>
      Развитие инструментов онлайн-рекламы, постоянный рост количества сайтов, регулярное совершенствование и усложнение алгоритмов ранжирования веб-ресурсов поисковыми системами — все это привело к тому, что главным инструментом результативного продвижения веб-ресурсов стал текстовый контент. Без содержательных и полезных  публикаций стало нереально рассчитывать на высокие позиции в поисковой выдаче, рост трафика на сайт и повышение продаж.
      <br><br>
      Все виды текстовых материалов, которые создают копирайтеры, можно разделить на 4 типа:
      </p>
      <div class="fourth-block__content">
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kopirajting/grayblock1.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Информационные</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            Традиционный формат статей как для печатных изданий, так и для онлайн-журналов, блогов, тематических и корпоративного блога. Задача информационный материалов — простыми словами, легко и доходчиво раскрыть в статье тему, интересную целевой аудитории. Главный критерий качества информационных статей — насколько полно материал отвечает на запросы читателей, насколько полезная информация в нем содержится. Такие материалы при продвижении сайта помогают охватить низкочастотные поисковые запросы, повысить видимость сайта в поиске, привлечь дополнительный трафик и занять лидирующие позиции в результатах поисковой выдачи.
            </p>
          </div>
        </div>

        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kopirajting/grayblock2.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Коммерческие или продающие</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            К этому типу относятся емкие, четко структурированные тексты, предназначенные для рекламы и прямых продаж. Такие тексты используются на лендингах, корпоративных сайтах, сайтах-визитках, онлайн-каталогах, презентациях, коммерческих предложениях, в рассылках и не только. Цель продающих текстов — побудить читателя купить товар, заказать услугу или совершить другое целевое действие. Такие тексты помогают вызвать интерес целевой аудитории к конкретным продуктам, прямо влияют на продажи, формируют позитивное мнение о компании и ее продукции. Также к коммерческим текстам относятся бизнес-легенды и материалы для PR, хотя у этого контента есть своя специфика.
            </p>
          </div>
        </div>

        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kopirajting/grayblock3.png" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Тексты товарных описаний</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            Бурное развитие интернет-магазинов вызвало необходимость в наполнении оригинальными текстами страниц, посвященных отдельным товарам. В крупном онлайн-магазине таких страниц может быть сотни и даже тысячи. И каждой из них требуется текст, где лаконично и информативно будут раскрыты все особенности и преимущества конкретного товара.
            </p>
          </div>
        </div>

        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kopirajting/grayblock4.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Тексты для SMM</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            Тексты для социальных сетей нужны специфические. Они должны формировать имидж бренда, сближать его с покупателями, вовлекать пользователей в жизнь сообщества, развлекать и информировать о новостях компании. Это особый формат копирайтинга, более живой, менее формальный, где важно чувствовать настроение пользовательской аудитории здесь и сейчас.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="section-std success section-std-top-0">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">преимущества</h4>
      <h2 class="wow section-title ms-720">Достоинства профессионального копирайтинга от «Веб Фокус»</h2>
 
      <p class="wow section-p ms-720" style="padding-bottom: 4rem;">
      Работу над текстами для продвижения сайта, PR или рекламной кампании лучше всего доверить профессиональным копирайтерам с большим опытом работы. В компании «Веб Фокус» работают авторы, которые не только мастерски пишут тексты любых типов и форматов, и разбираются в самых разных сферах. Какой бы ни была специфика Вашего бизнеса, мы найдем копирайтера, который с ней знаком.
      <br><br>
      Другое важное преимущество сотрудничества с агентством «Веб Фокус» в сфере копирайтинга заключается в том, что мы владеем не только базовыми знаниями и навыками создания эффективных текстов, но и постоянно отслеживанием изменение тенденций в этой сфере. Это очень важно, когда требуется подготовить LSI/SEO тексты для продвижения веб-ресурса заказчика в поисковиках. Алгоритмы и факторы ранжирования постоянно меняются и усложняются. Незнание и несоблюдение требований поисковиков при подготовке текстов делают такой контент бесполезным для достижения целей заказчика. Заказчикам «Веб Фокус» такой поворот событий не грозит, потому что мы регулярно изучаем изменения, внедряемые поисковиками.
      <br><br>
      К другим преимуществам сотрудничества с агентством «Веб Фокус» относятся:
      </p>
    <div class="new-marked">
      <div class="wrap-market-card">
        <div class="market-card" style="padding-top: 0">
          <div class="market-card__left">
            <div class="market-card__title" >
              <h3>Большой штат опытных копирайтеров</h3>
  
              <div class="market-card__title_arrow"></div>
            </div>
          </div>
          <div class="market-card__info">
            <p>
            В команде авторы с большим опытом успешной работы в копирайтинге. Мы точно подберем нужного автора, знакомого со спецификой Вашей отрасли.
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Строгое соблюдение дедлайнов</h3>
              <div class="market-card__title_arrow"></div>
            </div>

          </div>
          <div class="market-card__info">
            <p>
            Это ключевое отличие между переписанными статьями и авторскими текстами. Если заказчик не указал отдельно в ТЗ на рерайт, что в текст нужно добавить собственные мысли и выводы, то делать этого копирайтер не должен.
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Отсутствие ошибок</h3>
              <div class="market-card__title_arrow"></div>
            </div>

          </div>
          <div class="market-card__info">
            <p>
            Мы ценим время наших клиентов, поэтому готовые тексты будут у Вас точно с обозначенный срок.
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Оригинальные грамотные авторские тексты</h3>
              <div class="market-card__title_arrow"></div>
            </div>

          </div>
          <div class="market-card__info">
            <p>
            Все тексты проходят тщательную проверку не только на ошибки, но и на уникальность. Это гарантирует Вашему сайту быстрое продвижение Вашего веб-ресурса на топовые позиции в поиске.
            </p>
          </div>
        </div>


        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Содержательные и полезные материалы для людей</h3>
              <div class="market-card__title_arrow"></div>
            </div>
          </div>

          <div class="market-card__info">
            <p>
            Мы создаем тексты, ориентированные в первую очередь для людей, реальных пользователей и читателей. Именно это сегодня самая выигрышная тактика, которая позволяет сайтам легко продвигаться в поисковиках.
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Демократичная стоимость услуг копирайтинга</h3>
              <div class="market-card__title_arrow"></div>
            </div>
          </div>

          <div class="market-card__info">
            <p>
            Конечно, наши авторы не работают бесплатно, но расценки на услуги коприайтеров в «Веб Фокус» более, чем адекватны.
            </p>
          </div>
        </div>
      </div>
    </div>  
        <p class="wow section-p ms-720" style="padding-top: 4rem;">
      Работу над текстами для продвижения сайта, PR или рекламной кампании лучше всего доверить профессиональным копирайтерам с большим опытом работы. В компании «Веб Фокус» работают авторы, которые не только мастерски пишут тексты любых типов и форматов, и разбираются в самых разных сферах. Какой бы ни была специфика Вашего бизнеса, мы найдем копирайтера, который с ней знаком.
      <br><br>
      Другое важное преимущество сотрудничества с агентством «Веб Фокус» в сфере копирайтинга заключается в том, что мы владеем не только базовыми знаниями и навыками создания эффективных текстов, но и постоянно отслеживанием изменение тенденций в этой сфере. Это очень важно, когда требуется подготовить LSI/SEO тексты для продвижения веб-ресурса заказчика в поисковиках. Алгоритмы и факторы ранжирования постоянно меняются и усложняются. Незнание и несоблюдение требований поисковиков при подготовке текстов делают такой контент бесполезным для достижения целей заказчика. Заказчикам «Веб Фокус» такой поворот событий не грозит, потому что мы регулярно изучаем изменения, внедряемые поисковиками.
      <br><br>
      К другим преимуществам сотрудничества с агентством «Веб Фокус» относятся:
      </p>

  </section>
 
  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider' ); ?>
</main>
<?php get_footer() ?>