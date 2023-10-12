
<?php
/*
    Template Name: kontekstnaja-reklama
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
          <h1 class="sub-hero__title">PPC (Контекстная реклама)</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Контекстная реклама сопровождает пользователей интернета постоянно, появляется на экране монитора либо мобильного устройства, выполнена в виде объявления, видео, графики. Пользователь всемирной паутины видит ее при вводе запросов в поисковую строку Яндекс или Гугл.
                </p>
              </div>
            </div>

            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость PPC (контекстной рекламы):</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">750</span> BYN</h4>
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
            <h4 class="wow section-subtitle">содержание</h4>
            <h2 class="wow section-title ms-720">
            Содержание контекстной <br>рекламы
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">Исходя из принципа донесения полной информации до потребителя, рекламный продукт содержит:</p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                            Заголовки;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Ссылки;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Описание;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Доменное имя;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Визитку.
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>
                    Профессионализм составителя рекламной продукции подразумевает умение донести  до пользователя информацию в сжатой форме, при этом не упуская основных мыслей по содержанию. По этому принципу работают специалисты нашей компании, основываясь на опыте и применяя собственные методики.
                    </p>
                    <p>
                    Заголовок обычно состоит из двух частей, например: «Ремонт ванной комнаты под ключ – гарантия результата». Ссылки выполняются в виде гиперактивных закладок, помогающих перейти на подвиды выполняемых работ, например: «установка раковины», «установка ванны», «замена труб», «под ключ».
                    </p>
                    <p>
                    Описание включает информацию о времени работы компании и призыв к действию. Например, «Работаем 24 часа. Звоните, оставляйте заявку». Помимо этого, рекламный продукт нацелен на указание преимуществ компании и создание лояльности у потребителя. Например, «Выполнено более 100 проектов», «Отличное качество», «Материалы только из Европы».
                    </p>
                    <p class='mobile-last'>
                    Доменное имя указывает путь к сайту, а визитка дает реквизиты, по которым потребитель имеет возможность обратиться по телефону или приехать в офис компании.
                    </p>
                </div>
            </div>
        </div>
    </section>

<div class="tmpl-cases">
  <?php get_template_part('template-parts/cases'); ?>
</div>
  <?php get_template_part('template-parts/contact-form'); ?>

  <section class="section-std algoritm-block fifth-block section-std-top-0">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">достоинства и недостатки</h4>
      <h2 class="wow section-title ms-720">Достоинства и недостатки</h2>

      <div class="steps-to-goal steps-to-goal_mrg-top">

        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>01.</h3> <span>Шаг 1</span>
            </div>
            <h3>Достоинства:</h3>
          </div>
          <div class="step-to-goal__info">

            <ul class="arrow-marked-list">
              <li>
                <p class="bold">Невысокая стоимость;</p>
              </li>
              <li>
                <p class="bold">При правильном определении целевой аудитории дает большой охват заинтересованных пользователей;</p>
              </li>
              <li>
                <p class="bold">Возможность отслеживать состав аудитории по возрасту, месту проживания;</p>
              </li>
              <li>
                <p class="bold">Возможность установить время и регион показа;</p>
              </li>
              <li>
                <p class="bold">Статистика позволяет проанализировать установленные настройки и исправить;</p>
              </li>
              <li>
                <p class="bold">Ненавязчивость вызывает лояльное отношение потребителя.</p>
              </li>
            </ul>
          </div>
        </div>

        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>02.</h3> <span>Шаг 2</span>
            </div>
            <h3>Недостатки незначительны:</h3>
          </div>
          <div class="step-to-goal__info">

            <ul class="arrow-marked-list">
              <li>
                <p class="bold">Не охватывает потребителей, не имеющих выхода в интернет;</p>
              </li>
              <li>
                <p class="bold">Требует анализа и изменения настроек;</p>
              </li>
              <li>
                <p class="bold">В настройках легко ошибиться.</p>
              </li>
            </ul>
            <p>
            Для  проведения анализа целевой аудитории и внесения изменений в настройки рекламы предусмотрено ведение контекстной рекламы на весь период ее жизни в интернете.
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
      <h4 class="wow  section-subtitle">алгоритм</h4>
      <h2 class="wow section-title ms-720">Алгоритм настройки</h2>

      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
          <h3>Настройка контекстной рекламы происходит по определенному алгоритму:</h3>
            
            </div>
          </div>
          
          <ul class="function-list">
            <li>
              <span class="function-list-marker"></span>
              <p>
              Установка аналитических сервисов: Яндекс.Метрика и Гугл. Аналитик, при этом настраиваются цели, делается привязка к аккаунтам;
              </p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>
              Указываются ключевые слова и стоп-слова;
              </p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>
              Настраивается рекламная кампания;
              </p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>
              Создается объявление;
              </p>
            </li>

            <li>
              <span class="function-list-marker"></span>
              <p>
              Настраиваются ценовые показатели;
              </p>
            </li>

            <li>
              <span class="function-list-marker"></span>
              <p>
              Кампания направляется на модерацию.
              </p>
            </li>

            <li>
              <span class="function-list-marker"></span>
              <p>
              Учитывая ценность проведения рекламной кампании, нужно учитывать, что рекламный продукт тщательно проверяется модератором, а эффективность оценивается поведением целевой аудитории.
              </p>
            </li>
  
          </ul>
        </article>

        <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
          <h3>Услуги нашей компании:</h3>
            
            </div>
          </div>
          
          <ul class="function-list">
            <li>
              <span class="function-list-marker"></span>
              <p>
              Специалисты компании «Вэб Фокус» на основании опыта проведения рекламных кампаний, выделили основные направления при подготовке:
              </p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>
              Проведение анализа. При этом анализируется целевая аудитория, сайт, потребительский спрос и аналогичная продукция конкурентов;
              </p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>
              Настройка аналитики на поисковых площадках;
              </p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>
              Подбор ключевых слов;
              </p>
            </li>

            <li>
              <span class="function-list-marker"></span>
              <p>
              Составление рекламных объявлений с дизайнерским оформлением, графикой;
              </p>
            </li>

            <li>
              <span class="function-list-marker"></span>
              <p>
              Прохождение модерации;
              </p>
            </li>

            <li>
              <span class="function-list-marker"></span>
              <p>
              Сопровождение рекламного продукта с целью анализа и изменения настроек.
              </p>
            </li>

            <li>
              <span class="function-list-marker"></span>
              <p>
              Оставляйте заявку на нашем сайте, рассмотрим в течение 24 часов, цена контекстной рекламы оговаривается на этапе составления договора, проект которого высылается на электронную почту заказчика, указанную в заявке.
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
            <h4 class="wow section-subtitle">виды</h4>
            <h2 class="wow section-title ms-720">
            Виды контекстной рекламы
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">Рекламный продукт, выполненный в виде контекстной рекламы, подразделяется по видам:</p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                            Тематическая или поисковая;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Статическая и динамическая;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Простая текстовая и с элементами графики.
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>
                    Когда в поисковике набирается запрос, автоматически появляются окна с контекстной рекламой. Причем предлагаемый товар либо услуга соответствуют набранному в поисковой строке запросу. По способу оформления рекламы существует объявление или баннер, в которых содержится текст и картинка. Причем изображение может быть статическим и динамическим. Картинки лучше воспринимаются аудиторией, дольше остаются в памяти. От вида оформления и качества подачи материала зависит стоимость контекстной рекламы.
                    </p>
                    <p>
                    Привлекательность рекламных продуктов в том, что они не мешают просмотру текста, выполнены в виде небольших объявлений, при этом привлекая интерес пользователя интернета. От качества выполненного рекламного продукта зависит заинтересованность аудитории.
                    </p>
                    <p>
                    Если рекламируемый продукт преподносится, не вызывая раздражения, то реклама сделана хорошо. В противном случае реклама может превратиться в антирекламу. Поэтому профессиональные составители рекламных продуктов обучаются не только дизайну и способам оформления, а изучают психологию и способы воздействия на разум человека. Заказывать контекстную рекламу нужно только у проверенных специалистов в этой области. Умелое сочетание простоты и эффективности подачи материала дает положительный эффект по увеличению продаж и привлечению новых клиентов.
                    </p>
                    <p class='mobile-last'>
                    Умение донести информацию ненавязчиво и глубоко становится отличительной чертой хорошего копирайтера и дизайнера. В повседневной жизни потребитель замечает, какие объявления вызывают положительные эмоции и желание перейти по указанным ссылкам, а какие вызывают отторжение. Основной задачей контекстной рекламы сайта является привлечь внимание потенциальных потребителей к продукту и вызвать желание перейти на сайт, где находится каталог товаров, из которых посетитель что-то выберет и приобретет.
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
      <h4 class="wow  section-subtitle">информация</h4>
      <h2 class="wow section-title ms-720">Размещение</h2>

      <div class="three-part-p three-part-p_mrg-top">
        <p>
        Размещаются рекламные продукты в системах Яндекс и Гугл. Яндекс охватывает  преимущественно русскоязычную аудиторию, а Гугл – англоязычную. Цена размещения зависит от стоимости клика и количества ключевых слов, использованных в ролике.
        </p>
        <p>
        Гугл привлекает рекламодателей дополнительным охватом аудитории, имеющей смартфоны, выполненные на платформе андроид, в которых Гугл установлен по умолчанию.
        </p>
        <p>
        В обязанности рекламодателя входит соблюдение Закона «О рекламе», поэтому создание рекламного продукта следует доверять профессионалам. Рассчитать стоимость контекстной рекламы можно самостоятельно, воспользовавшись расценками интернет – площадок, но учесть тонкости сложно, поэтому приходится обращаться в специализированные компании, которые занимаются настройкой и размещением.
        </p>
      </div>

  </section> 

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider' ); ?>
</main>
<?php get_footer() ?>