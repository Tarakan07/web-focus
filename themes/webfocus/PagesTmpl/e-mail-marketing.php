
<?php
/*
    Template Name: e-mail-marketing
    Template post type:  page
    */
?>


<?php get_header() ?>
<main>
  <div class="sub-hero-wrp">
    <lottie-player class="bg-animation contekst" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/other.json" loop speed="1" autoplay></lottie-player>
    <section class="sub-hero">

      <div class="container">
        <div class="sub-hero-wrapper">

          <?php echo do_shortcode('[breadcrumb_simple]') ?>
          <h1 class="sub-hero__title">E-mail маркетинг</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                E—mail маркетинг признается самым дешевым и эффективным способом продвижения товара, выполняющим основную функцию бизнеса – привлечение покупателей. Это не мертвый рекламный проспект, а живое общение с каждым существующим и потенциальным заказчиком.
                </p>
              </div>
            </div>

            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость E-mail маркетинга::</h4>
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

  <section class="section-std">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">отличия</h4>
      <h2 class="wow section-title ms-720">Что такое email маркетинг</h2>
      <p class="wow section-p ms-720">
      Общение по электронной почте стало повседневностью. Поэтому нетрудно достучаться до потребителя, пользуясь подобным видом связи. Однако e—mail рассылками следует пользоваться осторожно. В противном случае вместо пользы и привлечения клиентов получится обратный эффект: получатель вместо заинтересованности в прочтении будет выражать раздражительность, и расценивать, как спам. Отличия:
      </p>
      <div class="new-marked">

        <div class="wrap-market-card">

              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>e-mail маркетинг и спам</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>
                </div>
                <div class="market-card__info">
                  <p>
                  Маркетинговый подход предусматривает изучение целевой аудитории, заинтересованной в получении информации о продукте, а спам – автоматическая рассылка без учета интересов получателя;
                  </p>
                </div>
              </div>

              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>e-mail маркетинг и e-mail рассылка</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Суть двух понятий одинакова, только маркетинг представляет собой стратегию, а рассылка – инструмент для осуществления.
                  </p>
                </div>
              </div>

        </div>
      </div>

                  <p class="wow section-p ms-720" style="margin-top: 4rem">
                  Для осуществления стратегических планов по продвижению рекламируемого продукта маркетологи изучают целевую аудиторию, которой продукт интересен. Сбор информации происходит при помощи поисковых запросов и социальных сетей.
                  <br><br>
                  Во время проведения исследования потенциальных клиентов определяют готовность аудитории к приобретению рекламируемого товара. От степени осведомленности аудитории определяется содержание письма клиенту. Если товар новый, то в тексте внимание уделяется подробному описанию проблемы, которую продукт в состоянии решить, для более зрелой аудитории нужны технические подробности и сравнение с аналогами.
                </p>

    </div> 
  </section>

<div class="tmpl-cases">
  <?php get_template_part('template-parts/cases'); ?>
</div>
  <?php get_template_part('template-parts/contact-form'); ?>

  <section class="section-std success section-std-top-0">
        <div class="container">
            <div class=" wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow section-subtitle">задачи</h4>
            <h2 class="wow section-title ms-720">
            Задачи e-mail маркетинга
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">Исходя из потребностей бизнеса, маркетологи выполняют задачи:</p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                            Увеличение клиентской базы;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Повышение лояльности целевой аудитории;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Двустороннее общение предпринимателя и клиента;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Привлечение трафика.
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>
                    Именно это становится отличительной чертой: покупатель понимает, что происходит живое общение, при котором имеется возможность задать вопрос, запросить уточнения и получить разъяснения по возникающим вопросам.
                    </p>
                    <p>
                    В основе бизнеса лежит стремление к увеличению продаж. Товар либо продукт, появляющийся на рынке, знаком узкому кругу потенциальных заказчиков. Чтобы заявить о нем, необходимо проинформировать целевую аудиторию, что он появился на рынке, за сколько и каким образом можно приобрести и рассказать о характеристиках и ценности для потребителя.
                    </p>
                    <p class='mobile-last'>
                    E—mail маркетинг позволяет ознакомить ЦА, дать обратную связь и обеспечить прямое взаимодействие потребителя и продавца. Учитывая наличие реквизитов для обратной связи,  у покупателя возникает доверие и появляется уверенность, что при возникающих проблемах можно обратиться за советом, разъяснениями и претензиями.
                    </p>
                </div>
            </div>
        </div>
    </section>

  <section class="section-std section-gray algoritm-block fifth-block">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">инструменты</h4>
      <h2 class="wow section-title ms-720">Как измерить эффективность</h2>

      <div class="steps-to-goal steps-to-goal_mrg-top">

        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>01.</h3> <span>Шаг 1</span>
            </div>
            <h3>Для этого предусмотрены показатели и инструменты:</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
            После создания информационных писем и рассылок необходимо убедиться в эффективности выбранного формата, правильного подбора целевой аудитории и грамотности составленного текста послания.
            </p>
            <ul class="arrow-marked-list">
              <li>
                <p class="bold">Количество подписчиков. От величины подписавшихся на получение писем зависит дальнейшее продвижение продукта. С ростом аудитории канала возрастает вероятность продвижения продукта и достижение результата;</p>
              </li>
              <li>
                <p class="bold">Клик помогает понять, скольких пользователей привлекло название, дает ли оно глубокое понимание проблемы читателя и вызывает интерес;</p>
              </li>
              <li>
                <p class="bold">Количество отписок и спама характеризует качество контента и результативность работы менеджера;</p>
              </li>
              <li>
                <p class="bold">Конверсия характеризует заинтересованность потребителя в предлагаемом продукте и измеряется числом переходов по ссылке.</p>
              </li>
            </ul>
          </div>
        </div>

        <div class="step-to-goal">
          <div class="step-to-goal__left">
            <div class="step-to-goal__number">
              <h3>02.</h3> <span>Шаг 2</span>
            </div>
            <h3>Помимо прямых продаж:</h3>
          </div>
          <div class="step-to-goal__info">
            <p>
            Чтобы e—mail маркетинг приносил пользу компании, необходим грамотный подход к продвижению товара. Компания «ВЭБ Фокус» в г. Минске предлагает услуги по подбору целевой аудитории для отправки информационных писем и ссылок.
            </p>
            <ul class="arrow-marked-list">
              <li>
                <p class="bold">Научим читателей пользоваться товарам или услугой;</p>
              </li>
              <li>
                <p class="bold">Объясним, какие потребности аудитории удовлетворит рекламируемый продукт;</p>
              </li>
              <li>
                <p class="bold">Активизируем пассивных пользователей;</p>
              </li>
              <li>
                <p class="bold">Составим контент, не содержащий спама и исключающий отписки от рассылок;</p>
              </li>
              <li>
                <p class="bold">Подведем потенциальных потребителей к воронке продаж.</p>
              </li>
            </ul>
            <p>
            Если вашей компании нужен качественный e—mail маркетинг, оставляйте заявку на нашем сайте, которая будет рассмотрена в течение суток. Стоимость оговаривается, исходя из позиций, указанных в заявке.
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
      <h4 class="wow  section-subtitle">виды</h4>
      <h2 class="wow section-title ms-720">Виды сообщений</h2>
      <p class="wow section-p ms-720">
      В зависимости от целей, преследуемых распространителем сообщений, выделяется несколько видов:
      </p>
      <div class="new-marked">

        <div class="wrap-market-card">

              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>«Добро пожаловать» (welcome)</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>
                </div>
                <div class="market-card__info">
                  <p>
                  Простое сообщение, предлагающее подтвердить намерение подписаться на рассылки. Легкий формат помогает привлечь потенциальных покупателей и заказчиков на сайт, такие сообщения наиболее часто открываются, читаются пользователями и повышают конверсию;
                  </p>
                </div>
              </div>

              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Информационное письмо</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Самый распространенный вид: качественный контент привлекает покупателя, создает атмосферу доверия;
                  </p>
                </div>
              </div>

              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Дайджест</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>
                </div>
                <div class="market-card__info">
                  <p>
                  Представляет собой обзорную статью о новых товарах и услугах, предназначен для «теплой» аудитории;
                  </p>
                </div>
              </div>

              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Commercial letter</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Письма данного формата предназначены для прямых продаж. Так как момент покупки становится для получателя сообщения ответственным моментом и требует осмотрительности, не следует «давить» и настойчиво навязывать рекламируемый товар, так как чрезмерное давление и навязывание отпугнет потенциального заказчика и уронит в его глазах престиж фирмы;
                  </p>
                </div>
              </div>

              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Cерийная рассылка</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>
                </div>
                <div class="market-card__info">
                  <p>
                  Представляет собой грамотно составленную цепочки писем, приводящих целевую аудиторию к принятию решения о покупке. Ценность рассылки заключается в последовательном воздействии на сознание потенциального потребителя, она должна содержать честную и понятную информацию;
                  </p>
                </div>
              </div>

              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Триггеры</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Отправляются с целью донести до пользователя определенную информацию, содержит советы, напоминает подписчикам о совершенных им ранее действиях. Например, в корзине остался невыкупленный товар либо пользователь давно не читал рассылок;
                  </p>
                </div>
              </div>

              <div class="market-card">
                <div class="market-card__left">
                  <div class="market-card__title">
                    <h3>Личные послания куратора</h3>
                    <div class="market-card__title_arrow"></div>
                  </div>

                </div>
                <div class="market-card__info">
                  <p>
                  Преподавателя, консультанта. Формат предусматривает личное знакомство с получателем письма, вызывает лояльность и желание сотрудничать.
                  </p>
                </div>
              </div>

        </div>
      </div>

                  <p class="wow section-p ms-720" style="margin-top: 4rem">
                  В каком бы формате не предусматривались письма и рассылки, необходимо соблюдать принцип персонификации и находить индивидуальный подход к потребителю. Эксперты нашей компании помогут определить состав целевой аудитории, подобрать необходимый формат для каждого сегмента и составить план оповещения пользователей.
                </p>

    </div> 
  </section>

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider' ); ?>
</main>
<?php get_footer() ?>