<?php
/*
    Template Name: testirovanie-bezopasnosti-sajta
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
          <h1 class="sub-hero__title">Тестирование безопасности сайта</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Часть комплексного тестирования веб-ресурсов – проверка сайта на безопасность. Это анализ защищённости от взлома, атак вредоносным ПО и сохранности конфиденциальных данных. Также безопасность означает защищённость файлов сайта от повреждения (а также копирования и скачивания, если они находятся в платном доступе). Чтобы найти и исправить уязвимости, тестировщики компании «Веб Фокус» проводят тестирование безопасности.
                </p>
              </div>
            </div>
            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость тестирования безопасности сайта:</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">650</span> BYN</h4>
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

  <section class="section-std algoritm-block fifth-block">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">типы</h4>
      <h2 class="wow section-title ms-720">Возможные угрозы</h2>
      <!-- <p class="section-p ms-720">
        Грамотное тестирование веб приложений помогает решать бизнесу важные практические задачи:
      </p> -->

      <div class="steps-to-goal steps-to-goal_mrg-top">
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>01.</h3> <span>Шаг 1</span>
            </div>
            <h3>Существует три типа угроз:</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
            По статистике в день проводится сотни тысяч сетевых атак только в русскоязычном интернет-сегменте. Тест безопасности сайтов нужен не только, чтобы защитить данные и уберечь пользователей от вредоносного ПО. Чем безопаснее и защищённее веб-ресурс, тем он привлекательнее для Google и Yandex и тем выше его позиции в поисковой выдаче (при прочих равных условиях).
            </p>
            <ul class="arrow-marked-list">
              <li>
                <p class="bold">Нарушение конфиденциальности – злоумышленники получают доступ к учётным записям пользователей и администраторов, а также приватной информации о них. Защиту данных обходят с помощью вирусов или разными уловками вроде фишинга. Корпоративные сайты (и учётки сотрудников) используются, чтобы войти в корпоративную сеть для промышленного шпионажа, кражи интеллектуальной собственности и т.п.</p>
              </li>
              <li>
                <p class="bold">Нарушение целостности и работоспособности – веб-ресурс может некорректно отображаться, вовсе «лечь» или же из-за стороннего вмешательства распространять вредоносное ПО.</p>
              </li>
              <li>
                <p class="bold">Сбои в доступности – сайт некорректно отображается (везде или в некоторых браузерах/городах/странах или на отдельных устройствах)</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>02.</h3> <span>Шаг 2</span>
            </div>
            <h3>Атаки на Ваш веб-ресурс бывают:</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
            Ещё одна распространённая угроза – уязвимый веб-сайт используют для рассылки спама, фишинга или DDos-атак на другие ресурсы.
            </p>
            <ul class="arrow-marked-list">
              <li>
                <p class="bold">Целевыми (мошенник нацелен именно на ваш ресурс).</p>
              </li>
              <li>
                <p class="bold">Нецелевыми (атакуется несколько ресурсов, затем эксплуатируется наиболее слабый и уязвимый).</p>
              </li>

            </ul>
            <p>
            Проверка сайта на безопасность и поиск уязвимостей сделают Ваш ресурс наиболее защищённым в сравнении с остальными и наименее привлекательным для хакеров.
            </p>

            <p>
            Даже если сайт уже проблемно работает, Вы можете этого не знать, но тестирующие специалисты «Веб Фокус» выявят любые скрытые проблемы. В ходе проверки мы анализируем отображение страниц на разных устройствах, браузерах, а также имитируем заходы с других городов и стран.
            </p>

          </div>
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
      <h4 class="wow  section-subtitle">пункты</h4>
      <h2 class="wow section-title ms-720">Пункты тестирования</h2>
      <p class="wow section-p ms-720">
      У сайта проверяем следующие параметры:
      </p>

      <div class="tmpl-third-block_content">
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Возможность несанкционирован-ного доступа</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testirovanie-bezopasnosti-sajta/object-1.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Проверяется то, насколько лёгок или сложен несанкционированный доступ пользователей в защищённые разделы или чужие учётные записи. Если речь о CRM, форумах или других системах (где пользователям согласно статусу или роли выдаются разные уровни доступа), проверка выявляет возможность воспользоваться функциями, на которых нет прав доступа.
            </p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Защищённость от Dos- и DDos-атак</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testirovanie-bezopasnosti-sajta/object-2.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Проверяется то, выдержит ли страница и сервер большой наплыв посетителей (сотни тысяч, миллионы уников), их запросов и действий в один момент.
            </p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Шифрование</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testirovanie-bezopasnosti-sajta/object-3.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Изучаем надёжность протоколов шифровки и дешифрования, проверяем шифрование файловой системы и ищем её уязвимости, чтобы предотвратить несанкционированный доступ и изменение данных.
            </p>
          </div>
        </div>

        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Аутентификация</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testirovanie-bezopasnosti-sajta/object-4.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Проверяем защищённость разделов сайта для авторизованных пользователей от доступа в обход регистрации. Проверку проходят разделы, к которым открывается доступ только после регистрации.
            </p>
          </div>
        </div>
     
          <div class="market-card">
            <div class="market-card__left">
              <div class="market-card__title">
                <h3>Валидация входящих данных</h3>
                <div class="market-card__title_arrow"></div>
              </div>
              <div class="market-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testirovanie-bezopasnosti-sajta/object-5.svg" alt="img">
              </div>
            </div>
            <div class="market-card__info">
              <p>
              Изучаем и тестируем то, насколько корректно алгоритмы сайта обрабатывают данные, которые вводят пользователи, а также хорошо ли распознаются некорректные значения.
              </p>
            </div>
          </div>

          <div class="market-card">
            <div class="market-card__left">
              <div class="market-card__title">
                <h3>Защищённость сервера</h3>
                <div class="market-card__title_arrow"></div>
              </div>
              <div class="market-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testirovanie-bezopasnosti-sajta/object-6.svg" alt="img">
              </div>
            </div>
            <div class="market-card__info">
              <p>
              Проверяем ошибки и уязвимости на сервере веб-сайта, благодаря которым данные могут стать доступными третьим лицам.
              </p>
            </div>
          </div>


        <div class="market-card">
            <div class="market-card__left">
              <div class="market-card__title">
                <h3>Защищённость интеграций</h3>
                <div class="market-card__title_arrow"></div>
              </div>
              <div class="market-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testirovanie-bezopasnosti-sajta/object-7.svg" alt="img">
              </div>
            </div>
            <div class="market-card__info">
              <p>
              Веб-ресурс интегрирован со сторонними сервисами (платёжные системы, социальные сети, мобильные приложения). Осуществляем проверку защиты передачи данных между Вашим сайтом и внешними сервисами.
              </p>
            </div>
          </div>

          <div class="market-card">
            <div class="market-card__left">
              <div class="market-card__title">
                <h3>Обработка системных багов</h3>
                <div class="market-card__title_arrow"></div>
              </div>
              <div class="market-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testirovanie-bezopasnosti-sajta/object-8.svg" alt="img">
              </div>
            </div>
            <div class="market-card__info">
              <p>
              Если при открытии страницы или другом действии на сайте происходит ошибка, система выдаёт соответствующее уведомление. Мы проверяем, насколько легко злоумышленник получит несанкционированный доступ к информации через уведомления об ошибках.
              </p>
            </div>
          </div>
        </div>
        <p class="wow section-p ms-720">Администраторов устраивает разработка сайта на cms wordpress. Они довольны потому, что в администрировании веб-ресурсов, выполненных на этой системе, сложного ничего нет</p>
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
      <h4 class="wow  section-subtitle">методики и порядок</h4>
      <h2 class="wow section-title ms-720">Тест безопасности сайтов: методики и порядок</h2>
      <p class="wow section-p ms-720">
        Для начала работы определяем объекты проверки, сроки, дополнительные требования (например, съёмка процесса аудита). После переговоров отражаем в договоре все наши соглашения.
      <br><br>
      <b>Важно!</b> Перед началом работы мы подписываем договор о неразглашении конфиденциальной информации. Во время тестирования Вам не придётся останавливать работу веб-ресурса – мы создадим резервные копи, которые будут доступны юзерам и клиентам.
      <br><br>
      Аудит веб-безопасности начинаем с пассивного изучения страниц и сбора информации. Мы знакомимся с кодом сайта, скрипты, проводим HTTP-запросы и изучаем куки. Если ресурс на движке, анализируем общие уязвимости самой CMS, её плагинов и индивидуальные настройки.
      <br><br>
      После всестороннего ознакомления проводим сканирование сайта на ошибки в коде и скриптах, устаревшие элементы.
      </p>

      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
            <h3>Далее:</h3>
          </div>
        </div>
        <ul class="function-list">
          <li>
            <span class="function-list-marker"></span>
            <p>
            Анализируем окружение веб-разработки (дистрибутивы, веб-сервера, системы управления базами данных).
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Ищем по баннерам публичные эксплойты, через которые злоумышленники обычно получают несанкционированный доступ.
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Выявляем слабости в доступе к сервисам, обслуживающим ваш веб-ресурс (домен- и хостинг-провайдер, учётные записи в платёжных системах и т.д.).
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Анализируем сам контент страниц.
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Определяем возможности внедрения стороннего кода, ищем пути обхода регистрации и взлома администрирующих аккаунтов.
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Подбираем способы обхода защиты к конфиденциальной информации.
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Имитируем вероятные сценарии хакерских атак и внедрения вредоносного ПО.
            </p>
          </li>

        </ul>
      </article>
      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
            <h3>По итогам работ Вы получаете отчёт, где содержится информация о:</h3>
          </div>
        </div>
        <ul class="function-list">
          <li>
            <span class="function-list-marker"></span>
            <p>
            Найденных уязвимостях (их особенностях и классификации).
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Возможных сценариях атак и взлома.
            </p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>
            Методах устранения и повышения безопасности сайта.
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Владельцам среднего и малого бизнеса кажется, что сайт неинтересен для взлома. Но даже если веб-ресурс малоинтересен, его могут взломать для других злонамеренных действий (например, рассылки спама). Чтобы провести проверку сайта на безопасность, позвоните в «Веб Фокус» по номерам на наших страницах.
            </p>
          </li>

        </ul>
      </article>
  </section>

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>