
<?php
/*
    Template Name: napisanie-prodayushhih-tekstov
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
          <h1 class="sub-hero__title">Написание продающих текстов</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Написание продающих текстов – задача для опытных копирайтеров. Чтобы сайт компании хорошо себя чувствовал в плане принесения прибыли владельцу, необходимо заказать продающий текст. Это надо делать на постоянной основе, так как регулярное обновление – лакомое блюдо для поисковых систем, которые постараются ставить веб-ресурс повыше в выдачах. Соответственно, он будет чаще заметен большему числу пользователей, которые с помощью умелых инструментов от компании «Веб Фокус» конвертируются в покупателей.
                </p>
              </div>
            </div>

            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость написания продающих текстов:</h4>
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
            <h4 class="wow section-subtitle">вопросы</h4>
            <h2 class="wow section-title ms-720">
            Вопросы для продающих текстов
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">Он формируется из ответов на вопросы:</p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                            Какова польза услуги или товара, предлагаемых организацией?
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Есть ли почва для доверия?
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Почему стоит дальше оставаться на этом сайте?
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>
                    Продающие тексты важны для каждой страницы. Но особенно значимы они для разделов, рассказывающих об организации. Чаще всего они называются «О нас» или «О компании». В расположенных на них текстах читатель обязан найти ответ на вопрос: «Почему я должен иметь дело именно с этой компанией?».
                    </p>
                    <p class='mobile-last'>
                    Общие ответы а-ля «компания с динамичным развитием», «работают профессионалы своего дела» или «практика индивидуального подхода» не принимаются. Видя эти заштампованные фразы, человек не получает ответов на свои вопросы и просто закрывает сайт, уходя к конкурентам.
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
      <h4 class="wow  section-subtitle">проблемы</h4>
      <h2 class="wow section-title ms-720">Проблемы написания</h2>
      <p class="section-p wow ms-720">Начинающие копирайтеры часто грешат двумя проблемами в текстах, которые мешают увеличить продажи:</p>
      <div class="tmpl-third-block_content">
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Заштампованностью</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/napisanie-prodayushhih-tekstov/object1.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Иногда «писатели» настолько увлекаются использованием корпоративных штампов, что смысл этих словосочетаний теряется. Клиентам они не нужны, так как в них нет ничего о ценности товара, его пользе. Если «затёртые до дыр» фразы присутствуют в большом количестве в тексте, то может появиться впечатление, что компания не знает, что о себе рассказать. Это минус, который содействует оттоку целевых пользователей. Помимо вышеуказанных штампов, способствуют оттоку вероятных покупателей «гибкая система скидок», «доставка в кратчайшие сроки», «продукция высокого качества», «расширенная география продаж» и так далее;
            </p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Формализмом</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/napisanie-prodayushhih-tekstov/object2.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Такие тексты создаются без цели, а для того, чтобы заполнить пустоты на странице.
            </p>
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
      <h4 class="wow  section-subtitle">признаки</h4>
      <h2 class="wow section-title ms-720">Признаки текста «для галочки»</h2>

      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
            <h3>Есть критерии, позволяющие его вычленить:</h3>
          </div>
        </div>
        <ul class="function-list">
          <li>
            <span class="function-list-marker"></span>
            <p>
            Не обозначены интересы целевых пользователей, их потребности;
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Ничего не сказано об особенностях деятельности компании;
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Отсутствует конкретное обоснование того, почему клиент должен купить этот товар или заказать услугу;
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Язык написания изобилует сухостью и канцеляризмами;
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            После того, как человек почитал текст, он не может понять, возникло у него доверие к компании или нет.
            </p>
          </li>

        </ul>

      </article>

  </section>

  <section class="section-std">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">информация</h4>
      <h2 class="wow section-title ms-720">Подсказки от профессионалов</h2>

      <div class="three-part-p three-part-p_mrg-top">
        <p>
        Опытные копирайтеры перед написанием текста проводят маленькое исследование маркетингового характера. После ознакомления с деятельностью компании-заказчика они формируют портрет, каким должен быть покупатель: его половая принадлежность, возраст, доходы и образование. Но главное – надо ответить на вопрос: «Какая проблема должна быть решена с покупкой товара или заказом услуги?». Портрет покупателя не должен вылетать из головы в ходе написания текста. Так будет проще рассказать в материале о компании для него.
        </p>
        <p>
        Можно ознакомиться с конкурентскими статьями, обратив внимание как на положительные, так и на отрицательные решения. Они помогают выработать индивидуальный стиль написания. Немало свежих решений можно найти в текстах зарубежных фирм.
        </p>
        <p>
        Нелишне будет собрать максимум информации о бизнесе заказчика. Упоминание о значимых достижениях, интересных проектах, крупных партнёрах допускается.
        </p>
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
      <h4 class="wow section-subtitle">блоки</h4>
      <h2 class="wow section-title ms-720">Что должно быть в тексте о фирме?</h2>
      <p class="section-p wow ms-720">Его можно структурировать, разбив на блоки для простоты прочтения:</p>
      <div class="fourth-block__content">
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/napisanie-prodayushhih-tekstov/grayblock1.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Чем компания занимается</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            Перечисляется то, что предлагается покупателю. Пользователь должен видеть, что предлагается и как это ему может помочь;
            </p>
          </div>
        </div>

        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/napisanie-prodayushhih-tekstov/grayblock2.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Оценка миссии организации</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            Миссией называют причину, по которой появилась компания. Не секрет, что основная задача кроется в получении прибыли. Но посетителям напоминать об этом не стоит. Они хотят знать, к чему компания стремится;
            </p>
          </div>
        </div>

        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/napisanie-prodayushhih-tekstov/grayblock3.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Что продаётся или предлагается</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            Здесь идут рассказы об услугах, продукции. Если наименований много, то целесообразнее будет объединить их в небольшие по размеру группы;
            </p>
          </div>
        </div>

        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/napisanie-prodayushhih-tekstov/grayblock4.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Каковы преимущества компании и чем отличается от конкурентов</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            Чтобы потенциальный покупатель остановил свой выбор на этом сайте, ему надо знать о преимуществах перед другими организациями. Возможно, есть свежие технологии, новые методы в работе. Это то, что привлекает покупателей, так как подобных моментов они нигде не видели;
            </p>
          </div>
        </div>

        
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/napisanie-prodayushhih-tekstov/grayblock5.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Как именно работает компания</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            Это не график будней и выходных. Здесь стоит рассказать о подходе к деятельности: как зарождается сотрудничество с клиентами, как начинается производственный процесс, до какой степени отлажен контроль качества, что можно сказать о послепродажной поддержке покупателя (например, если компания продаёт обувь, то на какой срок даётся гарантия);
            </p>
          </div>
        </div>

        
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/napisanie-prodayushhih-tekstov/grayblock6.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Деятельность в цифрах</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            Не секрет, что цифры придают вес серьёзности текста. Можно диаграммами или инфографикой рассказать о работе – количество завершённых по итогам года проектов, проданных товаров и услуг, новых структурных подразделений, положительных мнений и так далее;
            </p>
          </div>
        </div>

        
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/napisanie-prodayushhih-tekstov/grayblock7.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Демонстрация достижений</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            Если есть блок с наградами – грамотами, благодарностями, дипломами, кубками – это хорошо. Когда их несколько десятков, то размещают в отдельной странице сайта;
            </p>
          </div>
        </div>

        
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/napisanie-prodayushhih-tekstov/grayblock8.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Фотографии руководящего состава и работников</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            Подобные фотоснимки делают сайт более человечным. Они повышают доверие к компании, так как покупатели видят, с кем им придётся общаться при совершении сделки. Люди понимают, что это не однодневка, которая завтра может закрыться, а серьёзная организация со штатом сотрудников. Рядом с фотоснимками должны быть имена с фамилиями, должности и способы с ними связаться. Как изюминка на торте – видео с директором, в котором он обращается к покупателям;
            </p>
          </div>
        </div>

        
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/napisanie-prodayushhih-tekstov/grayblock9.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Клиенты</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            Если они разрешат, то внизу размещаются логотипы организаций-партнёров;
            </p>
          </div>
        </div>

        
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/napisanie-prodayushhih-tekstov/grayblock10.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Отзывы</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            Это мощное оружие, повышающее доверие потенциальных покупателей к компании;
            </p>
          </div>
        </div>

        
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/napisanie-prodayushhih-tekstov/grayblock11.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Призыв к совершению действия</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            После того как человек прочитал текст (это необязательно должен быть раздел «О нас» — материалы о товарах и услугах, расположенные на других страницах сайта, тоже должны побуждать читателя к положительному для компании действию), он обязан получить сигнал о необходимости совершения покупки или заказа услуги. Форм выражения призывов много. Есть даже всплывающие варианты в виде телефонной трубки и других рисунков. Но главное: call-to-action не должен содержать навязчивости – это раздражает.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="section-std section-gray">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow section-subtitle">информация</h4>
      <h2 class="wow section-title ms-720">Продающие тексты – у профессионалов</h2>

      <div class="three-part-p three-part-p_mrg-top">
        <p>
        Не все сотрудники организации – искусные мастера в «плетении словес». Если у человека технический склад ума, то ему будет сложнее подготовить хороший продающий текст. К тому же работа занимает немало времени. 
        <p>
        Так что вариант — заказать продающий текст у нас, в компании «Веб Фокус». Сотрудники специализируются на написании статей любой тематики и объёма. «Веб Фокус» ставит цену продающего текста адекватную, так как дорожит клиентами.
        </p>
        <p>
        Есть проблемы с наполнением сайта продающим контентом? Звоните в компанию «Веб Фокус» и увеличивайте продажи с нашей помощью!
        </p>
      </div>
  </section>

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider' ); ?>
</main>
<?php get_footer() ?>