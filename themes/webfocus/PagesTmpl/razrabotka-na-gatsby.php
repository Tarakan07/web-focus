<?php
/*
    Template Name: razrabotka-na-gatsby
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
          <h1 class="sub-hero__title">Разработка <br>на Gatsby</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Разработка на Gatsby пользуется повышенным спросом среди заказчиков PWA-приложений и сайтов. Основа JS-фреймворка Gatsby — платформа «Реакт». Изначально «Гэтсби» являелся программой для оперативного создания статических веб-сайтов на базе React.
                </p>
              </div>
            </div>

            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость разработки на Gatsby:</h4>
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

<section class="section-std">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">информация</h4>
      <h2 class="wow section-title ms-720">Специфика платформы для веб-разработки Gatsby</h2>

      <div class="three-part-p three-part-p_mrg-top">
        <p>
        Фреймворк Gatsby нашел применение в области создания самых разноплановых веб-ресурсов. Начиная от мини-сайтов портфолио, и заканчивая сложными интернет-магазинами и остальными ресурсами с развитым функционалом для электронной коммерции. Студия «Веб Фокус» в Минске профессионально занимается созданием ПО на Gatsby. Чтобы узнать подробные условия сотрудничества в этой области, созвонитесь с нами или отправьте заявку на обратный звонок. Наш менеджер проконсультирует Вас по интересующим вопросам.
        </p>
        <p>
        Популярность «Гэтсби» завоевал, благодаря скоростной загрузке web-страниц. Секрет в том, что в этом фреймворке реализована опция предварительной загрузки. То есть уже в момент, когда пользователь заходит на первую страницу сайта, браузер в фоновом режиме загружает и информацию для рендеринга остальных web-страниц. В итоге, переходя на другую страницу, клиентский браузер грузит ее не целиков, а лишь отличия между предшествующей страницей и страницей перехода. В этот момент обновляется онлайн-DOM, и человек получает моментальную загрузку.
        </p>
        <p>
        Разработка на Gatsby – доказавший сосбвтенную продуктивность метод генерации веб-ресурсов и приложений, отвечающих критериям PWA. В итоге собственнику сайта не потребуется отдельно адаптировать его под требования для прогрессивных веб-приложений. Помимо уже упомянутых особенностей, платформа «Гэтсби» умеет быстро загружать элементы графики, интерфейса, другие визуальные компоненты, способные улучшить внешнее оформление веб-ресурса и вызвать у пользователя яркий позитивный отклик.
        </p>
      </div>

  </section> 

<div class="tmpl-cases">
  <?php get_template_part('template-parts/cases'); ?>
</div>
  <?php get_template_part('template-parts/contact-form'); ?>

  <section class="section-std section-gray algoritm-block fifth-block">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">бонусы</h4>
      <h2 class="wow section-title ms-720">Что умеют веб-ресурсы, созданные с помощью «Гэтсби»?</h2>
      <div class="steps-to-goal steps-to-goal_mrg-top">
        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>01.</h3> <span>Шаг 1</span>
            </div>
            <h3>Таким ресурсам Gatsby дает ряд ощутимых бонусов:</h3>
          </div>
          <div class="step-to-goal__info">
            <ul class="arrow-marked-list">
            <p>
            Как уже было сказано, Gatsby.JS представляет собой понятный и прогрессивный инструмент для экспресс-создания SSG – статических интернет-сайтов. Используя тот инструмент веб-разработки, можно быстро сделать новый либо адаптировать под требования PWA действующий веб-ресурс, где страницы будут загружаться практически мгновенно, за миллисекунды.
              <br><br>
            Применение «Гэтсби» целесообразно в первую очередь для создания контентных, информационных сайтов (новостные ресурсы, блогосфера, тематические, развлекательные, инфопорталы).
            </p>
              <li>
                <p class="bold">
                Совершенствование характеристик, важных для СЕО;
                </p>
              </li>
              <li>
                <p class="bold">
                Уменьшение числа отказов;
                </p>
              </li>
              <li>
                <p class="bold">
                Надежная бесперебойная работа вне зависимости от уровня нагрузки.
                </p>
              </li>
            </ul>
          </div>
        </div>

        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>02.</h3> <span>Шаг 2</span>
            </div>
            <h3>Gatsby для виртуальных магазинов:</h3>
          </div>
          <div class="step-to-goal__info">
            <ul class="arrow-marked-list">
            <p>
            Для виртуальных магазинов использование Gatsby также полезно, поскольку платформа помогает улучшить опыт и впечатления пользователей от взаимодействия с ресурсом, благодаря:
              </p>
              <li>
                <p class="bold">
                Мгновенному переходу с одной страницы на другую;
                </p>
              </li>
              <li>
                <p class="bold">
                Возможности быстро оформить покупку, независимо от скорости и качества соединения с сетью.
                </p>
              </li>
            </ul>
              <p>
              Согласитесь, эти параметры играют ключевую роль с точки зрения конвертации посетителей онлайн-магазина в лиды.
              </p>
          </div>
        </div>

      </div>
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
      <h4 class="wow  section-subtitle">сильные стороны</h4>
      <h2 class="wow section-title ms-720">Сильные стороны применения Gatsby для создания сайтов</h2>
      <p class="section-p wow ms-720">
      Широкое распространение платформы Gatsby на рынке веб-разработки связано также с тем, что она облегчила задачу программистам на наиболее трудных стадиях создания сайтов в части пользовательского опыта. При использовании «Гэтсби» в итоге клиент получает плавно работающий веб-ресурс, который точно придется по душе интернет-пользователям. К списку преимуществ веб-ресурсов, разработанных на Gatsby, относятся:
      </p>
      <div class="new-marked">
        <div class="wrap-market-card">
              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Непревзойденная производительность</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>
                </div>
                <div class="market-card__info">
                  <p>
                  Во фреймворке реализована автоматизация таких рабочих процессов, как разделение кода на отдельные блоки и файлы, адаптация графики и внедрение стилей, загрузка страниц в фоне, предварительная фильтрация ресурсов. По сути заказчик максимально быстро получает полностью оптимизированный веб-ресурс, не требующий дополнительного вмешательства для полноценной работы.
                  </p>
                </div>
              </div>

              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Опции для легкого масштабирования</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Gatsby-ресурсам не нужны сложные в реализации доработки или дорогие услуги хостинг-провайдеров для масштабирования. Это можно делать постепенно с развитием проекта и изменении в его потребностях.
                  </p>
                </div>
              </div>
              
              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Надежная защита готового ресурса</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  HTM-код статического сайта создается в ходе сборки за счет рендеринга на «Гэтсби» бессерверного типа. Это сразу отсекает возможность DDOS-нападений и прочих атак, поскольку базы данных и серверы, которые можно взломать, просто отсутствуют.
                  </p>
                </div>
              </div>
              
              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Универсальные решения для бизнес-проектов любого типа</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Фреймворк «Гэтсби» завоевал почетное звание наиболее доступного в мире. Создатели платформы используют для развития проекта новейшие инструменты и методики. Благодаря этому к прогрессивной платформе для воплощения интернет-проектов получает доступ все больше и больше специалистов.
                  </p>
                </div>
              </div>
              
              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Комплект дополнительных полезных инструментов</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Gatsby – это больше, чем просто инструмент для быстрого создания статических сайтов. Фреймворк обладает также широким списком предустановленных расширений и плагинов. С их помощью легко интегрировать в проект разнообразные внешние сервисы. Также у платформы большой набор готовых тем, позволяющих за несколько минут кардинально поменять дизайн веб-сайта. И, конечно, в «Гэтсби» реализовано множество готовых решений, позволяющих автоматизировать значительный процент действий для создания новых веб-ресурсов.
                  </p>
                </div>
              </div>
        </div>
      </div>
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
      <h4 class="wow section-subtitle">выгода</h4>
      <h2 class="wow section-title ms">Поручите разработку на Gatsby опытным профи</h2>
      <p class="wow section-p ms-720">
      Чтобы готовый веб-ресурс обладал всеми преимуществами, которые способна дать ему платформа Gatsby, заниматься его созданием должна команда опытных программистов, детально разбирающихся в специфике этого фреймворка и вообще создании сайтов на базе «Реакт». Получить гарантированно высокий результат Вы сможете, обратившись в компанию «Веб Фокус». У нас каждый клиент получает:
      </p>
      <article class="advantages">
        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>Комплексный подход к реализации идей</h3>
              <p>
              Мы заинтересованы в создании для своих заказчиков программных продуктов, которые эффективно отвечают на актуальные вызовы рынка.
              </p>
              <div class="advantages-number">01</div>
            </div>
          </div>
        </div>
        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>Высококлассные услуги в области web-разработки</h3>
              <p>
              До начала непосредственно программирования ресурса, мы тщательно анализируем специфику бизнеса заказчика, портрет целевых пользователей, смотрим, что делают конкуренты. Исходя из собранной информации, мы определяем набор инструментов, подходящих для наилучшего решения задачи клиента.
              </p>
              <div class="advantages-number">02</div>
            </div>
          </div>
        </div>

        <div class="advantages-item">
          <div class="advantages-item-wrapper">
            <div class="advantages__item">
              <h3>Соблюдение сроков и приятные расценки</h3>
              <p>
              Тарифы на создание сайтов в студии «Веб Фокус» полностью отвечают рыночной ситуации и всегда конкурентны. Мы уверены в качестве собственных программных решений и гарантируем неукоснительно соблюдение оговоренных сроков работы.
              </p>
              <div class="advantages-number">03</div>
            </div>
          </div>
        </div>

      </article>
      <p class="wow section-p ms-720">
      Разработка на Gatsby — доказавший свою эффективность метод получения полноценных веб-ресурсов, продуктивный и скоростной. Результаты его применения точно придутся по душе конечным пользователям сайтов.
      </p>
    </div>
  </section>

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider' ); ?>
</main>
<?php get_footer() ?>