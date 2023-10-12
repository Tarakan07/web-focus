
<?php
/*
    Template Name: sozdanie-sajta-pod-klyuch
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
          <h1 class="sub-hero__title">Создание сайта «под ключ»</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Создать сайт с нуля – не самая легкая задача. С одной стороны, в Интернете масса пошаговых инструкций, на YouTube видим много визуального контента на данную тематику. Казалось бы, легко разобраться самостоятельно и бесплатно. С другой позиции, бизнес по-прежнему предпочитает обращаться к специалистам. Почему?
                <br><br>
                Скажите, способен ли человек, имеющий в кармане водительские права считать себя экспертом в области перевозок? Конечно нет. Водить машину – одно, работать профессионально – другое. Каждый обязан заниматься собственным делом.
                </p>
              </div>
            </div>

            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость создания сайта «под ключ»:</h4>
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

  <!-- section-gray -->

  <section class="section-std section-with-floating-bubbles">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">ресурс</h4>
      <h2 class="wow section-title ms-720">Создать сайт с нуля – не самая легкая задача</h2>
      <p class="wow section-p ms-720">Создание сайта под ключ – одна из услуг ООО «Веб Фокус». Широко известны в Минске. Скажем больше, присутствует немало клиентов из ближнего зарубежья. Например, компания завоевала доверие в столице России – Москве. Предлагаем не набор действий, а комплексное решение, что дает гарантию получения работающего продукта, а не очередной наспех сверстанный ресурс.</p>

      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
          <h3>Грамотно разработанный ресурс:</h3>
            
            </div>
          </div>
          
          <ul class="function-list">
            <li>
              <span class="function-list-marker"></span>
              <p>Великолепно отображается на мобильных устройствах;</p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>Корректно запускается на всех браузерах;</p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>Отличается быстрой загрузкой страниц;</p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>Надежно защищен от взлома и вирусов;</p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>«Заточен» под потребности целевой аудитории;</p>
            </li>
  
            <li>
              <span class="function-list-marker"></span>
              <p>Отлично продвигается в поисковой выдаче и т.д.</p>
            </li>
  
          </ul>
        </article>
    </section>

    <div class="tmpl-cases">
  <?php get_template_part('template-parts/cases'); ?>
</div>
  <?php get_template_part('template-parts/contact-form'); ?>

  <section class="section-std  section-gray algoritm-block fifth-block">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">задачи</h4>
      <h2 class="wow section-title ms-720">Только квалифицированный подход</h2>
      <div class="steps-to-goal steps-to-goal_mrg-top">
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>01.</h3> <span>Шаг 1</span>
            </div>
            <h3>Специалисты в самых различных областях:</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
            Беремся за создание сайтов с нуля даже в нишах со сложными условиями для разработки и продвижения. Секрет успеха кроется в том, что команда компании включает в себя специалистов в самых различных областях:
            </p>
            <ul class="arrow-marked-list">
              <li>
                <p class="bold">Программирование;</p>
              </li>
              <li>
                <p class="bold">Дизайн;</p>
              </li>
              <li>
                <p class="bold">Копирайтинг;</p>
              </li>
              <li>
                <p class="bold">SEO и т.д.</p>
              </li>
            </ul>
            <p>
              Внутри присутствует четкое распределение обязанностей. Каждый получает ТЗ, согласно которому трудится для достижения конечного результата. В нашем штате соцветие интересных личностей. У каждого характер и амбиции, но это не становится причиной разобщения. Наоборот, способствует покорению новых вершин.
            </p>
          </div>
        </div>

        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>02.</h3> <span>Шаг 2</span>
            </div>
            <h3>Осуществляем создание сайтов под любые потребности:</h3>
          </div>
          <div class="step-to-goal__info">

            <ul class="arrow-marked-list">
              <li>
                <p class="bold">Портал СМИ;</p>
              </li>
              <li>
                <p class="bold">Блог;</p>
              </li>
              <li>
                <p class="bold">Форум;</p>
              </li>
              <li>
                <p class="bold">Интернет-магазин;</p>
              </li>
              <li>
                <p class="bold">Визитка;</p>
              </li>
              <li>
                <p class="bold">Корпоративный ресурс и т.д.</p>
              </li>
            </ul>
            <p>
            Обратите внимание, предлагаем не набор шаблонных решений, а то, что наиболее выигрышно смотрится в конкретном контексте. Присутствует масса собственных наработок, способствующих ускорению решения задач, повышению качества работы.
            </p>
            <p>
            Отличаемся пристальным акцентом на детали. Площадка украсит выдачу только при условии, что продуманы мельчайшие нюансы. Гордимся, что некоторые наши проекты уже сегодня ставят в пример. Уверены, что впереди еще более серьезные достижения. Иное представить сложно, ведь неустанно совершенствуемся.
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="section-std success">
    <div class="container">
      <div class=" wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow section-subtitle">выбор</h4>
      <h2 class="wow section-title ms-720">
      Полный набор решений для бизнеса!
      </h2>
      <div class="float-second quality-service">
        <div class="left-part">
          <p class="bold">
          Например, если нужен сайт под ключ, клиент располагает правом выбрать:
          </p>
          <ul class="quality-service-list">
            <li>
              <p class="bold">
              CMS (WordPress, Drupal и т.д.);
              </p>
            </li>
            <li>
              <p class="bold">
              Конструктор (Tilda и др.);
              </p>
            </li>
            <li>
              <p class="bold">
              Сапомисные площадки, когда происходит разработка с нуля (требуется редко, ведь обычно системы управления контентом отменно справляются).
              </p>
            </li>
          </ul>
        </div>

        <div class="quality-service_info">
          <p>
          Работаем так, что заказчик получает все в одном месте. Больше не приходится никуда обращаться.
          </p>

          <p>
          Большинство проектов предполагает использование CMS. Уместное решение, ведь присутствует масса плагинов и модулей, появляется автономность, возможность уникализировать даже шаблон. Современные системы отвечают самым жестким требованиям, постоянно развиваются. Даже культовые бренды прибегают к их помощи.
          </p>

          <p>
          Конструктор уместен, если только начинаете бизнес, собираетесь протестировать новую нишу, хотите запустить лендинг по случаю акции и т.д. Ситуаций, когда привлекательнее заказать разработку сайта под ключ на конструкторе, в нынешних условиях немало. При этом следует понимать, что по сути получаете ресурс не во владение, а в аренду. Зато хлопот минимум.
          </p>

          <p class='mobile-last'>
          «Самописец» – решение, которое все больше становится частью истории. Разрабатывается под потребности конкретного клиента, когда типовые варианты недостаточны. Самый сложный путь, ведь нужно периодически выпускать обновления, продумывать все сервисы и т.д. В 2021 году сложно назвать сферу, в которой действительно не обойтись без такого подхода.
          </p>
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
      <h2 class="wow section-title ms-720">Качество, ответственность, репутация!</h2>

      <div class="three-part-p three-part-p_mrg-top">
        <p>
        Каждый новый проект – повод применить собственные знания под другим углом. Не ищем легких путей, а тщательно прорабатываем нишу, чтобы сделать не очередной безликий ресурс, а площадку, которая станет продавать даже в неблагоприятных условиях. Не обещаем конверсию в 1000%, но гарантируем, что интерес к бренду стабильно вырастет. Система контроля такова, что работа на каждом этапе отслеживается по нескольким показателям. Например, тексты копирайтера проверяются маркетологами и специалистами по SEO. Мало того, их адаптируют под решения, созданные дизайнерами. Никакой топорной работы, только современные методики!
        <p>
        Создание сайта под ключ будет завершено исключительно в оговоренные сроки. Понимаем значимость дедлайнов, ведь часто запуск площадки приурочен к определенному событию. Не исчезаем в неизвестном направлении, ведь сотрудничаем исключительно по договору. Репутация безупречна, что подтверждается отзывами обратившихся. Умеем «слышать» потребности клиента! Как результат – теплые слова в адрес ООО «Веб Фокус». Второстепенных заказов не бывает!
        </p>
        <p>
        Цена услуг дружелюбна. Рынок подкошен пандемией. Понимаем, поэтому формируем прайс в соответствии с ожиданиями целевой аудитории. Даже если делаете первые шаги в бизнесе, легко позволите себе покупку веб-ресурса здесь. Настало время решать: хотите и дальше терять покупательский трафик из Сети или собираетесь разорвать выдачу выходом собственной марки из тени. Если второе, придется не просто создать сайт с нуля, а найти профессионалов. Это легко! Только поговорите с представителем ООО «Веб Фокус»!
        </p>
      </div>

  </section> 

  <section class="section-std success">
    <div class="container">
      <div class=" wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow section-subtitle">предположение</h4>
      <h2 class="wow section-title ms-720">
      Концепция 360 в действии!
      </h2>
      <div class="float-second quality-service">
        <div class="left-part">
          <p class="bold">
          Предполагается:
          </p>
          <ul class="quality-service-list">
            <li>
              <p class="bold">
              Раскрутка бренда в Сети посредством SEO, SMM, контекстной рекламы.
              </p>
            </li>
            <li>
              <p class="bold">
              Формирование деловой репутации.
              </p>
            </li>
            <li>
              <p class="bold">
              Проверяются настройки и присоединение Яндекс Метрики;
              </p>
            </li>
            <li>
              <p class="bold">
              Грамотное сочетание классических рекламных возможностей с достижениями нового времени (например, видеоролики в метро и hidden-маркетинг).
              </p>
            </li>
          </ul>
        </div>

        <div class="quality-service_info">
          <p>
          Разработка сайта с нуля – лишь первый шаг навстречу успеху. В нынешних условиях этого мало. Требуется сделать полноценную маркетинговую кампанию, которая охватит все точки соприкосновения с заказчиками.
          </p>

          <p class='mobile-last'>
          Давайте будем честны, клиент приходит не за интернет-ресурсом, а для решения проблемы. Только от Вас зависит, насколько основательно погрузимся в решение задачи. Разработка сайта под ключ способна стать началом комплексного сотрудничества.
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