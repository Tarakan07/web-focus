
<?php
/*
    Template Name: nyusmejking
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
          <h1 class="sub-hero__title">Ньюсмейкинг</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                Ньюсмейкинг как действенное оружие в продвижении. Чтобы Google, Yandex и другие поисковики давали веб-ресурсу высокий рейтинг, информация на них должна обновляться регулярно. К тому же написание новостей позволяет привлечь больше гостей на страницу. Благодаря «живучести» сайта его хочется посещать чаще, что и делают регулярно пользователи, когда на нём размещена свежая информация. Они раздают ссылки на него друзьям.
                <br><br>
                Но не всегда у владельцев сайта есть время для постоянного мониторинга новинок в продукции, предлагаемой компанией. К тому же написание новостей (интересных и неизвестных) тоже требует навыков и свободных минут-часов.
                </p>
              </div>
            </div>

            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость ньюсмейкинга:</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">250</span> BYN</h4>
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
            <h4 class="wow section-subtitle">ньюсмейкинг</h4>
            <h2 class="wow section-title ms-720">
            Зачем нужен ньюсмейкинг?
            </h2>
            <div class="float-second quality-service">
                <div class="left-part">
                    <p class="bold">Например, часто публикуются новости о:</p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                            Только что появившихся услугах – для компаний из этой сферы;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Внедрении новых технологических процессов и отраслей – для промышленного производства;
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                            Акциях, привозе товаров – для торговли (в том числе и в Интернете).
                            </p>
                        </li>
                    </ul>

                </div>
                <div class="quality-service_info">
                    <p>
                    Чтобы реализовать подобные инициативы, организации нанимают профессиональных копирайтеров – одного или нескольких. Есть они и в штате компании «Веб Фокус». Копирайтеры работают в соответствии с пожеланиями клиентов – занимаются регулярным поиском информации и готовят, взяв её за основу, материалы со стопроцентной уникальностью. Тем самым рейтинг сайта повышается. Такие новости не имеют большого объёма. На цену написания новостей на сайт влияет специфика информации и периодичность размещения материалов.
                    </p>
                    <p>
                    Термин «ньюсмейкинг» в переводе с английского – «создание новостей». Он включает в себя процесс поиска, написания небольших (чаще всего) сообщений в информационно-новостном стиле. Главная задача ньюсмейкеров – проинформировать целевую аудиторию о том, что произошло в мире и имеет социальную важность. Ньюсмейкинг используется не только в традиционной журналистике. Он давно «обжился» на просторах Интернета, причём не только на сайтах СМИ и информагентств. Интернет-маркетинг тоже активно им занимается. Дело в том, что новости на сайте – это хорошая возможность привлечь к бренду необходимое внимание. Они не подойдут любому бизнесу, особенно это касается полноценных материалов. Однако каждая компания знает, о чём она может рассказать клиентам.
                    </p>
                    <p class='mobile-last'>
                    Новости ориентированы преимущественно на новую аудиторию. Они должны её заинтересовать и удержать. Заодно и контент обновляется с их помощью. Кстати, такие сообщения с рассылкой смотрятся. Если на сайте настроена отправка новостных анонсов – хорошо: клиенты не должны забывать о бренде, а продолжать его покупать в новых вариантах.
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
      <h4 class="wow  section-subtitle">причины</h4>
      <h2 class="wow section-title ms-720">Ошибки в ньюсмейкинге</h2>
      <p class="section-p wow ms-720">Ими грешат начинающие копирайтеры. Поэтому лучше обращаться за написанием новостей сайта в компанию «Веб Фокус», где огрехи исключены. Специалисты компании не напишут материалы, в которых:</p>
      <div class="tmpl-third-block_content">
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Не прослеживается повод публикации</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nyusmejking/object1.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Эти материалы переполнены «водой». Их пишут для того чтобы написать. Они не преследуют конкретную цель, полезной информацией тоже не богаты. Сайт с такими материалами продвигаются, но читателям подобные новости не нравятся, и если их на портале много, то он рискует потерять популярность.
            </p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Много самолюбования</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nyusmejking/object2.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>
            Это тексты, где уделяется столько внимания компании, сколько не должно быть. Аргументов мало, прямые «кейсы» отсутствуют. Редакторы, размещающие подобные новости на сайте, не понимают, что главное для читателя – найти выгоду.
            </p>
          </div>
        </div>
        <p class="section-p wow ms-720">Каждая новость может быть подана грамотно. Главное – знать, как это сделать, в чём помогут представители компании «Веб Фокус». Заметка принесёт пользу как читателю, так и компании в плане увеличения количества продаж.</p>
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
      <h4 class="wow section-subtitle">план</h4>
      <h2 class="wow section-title ms-720">Правильная подготовка новостных заметок</h2>
      <p class="section-p wow ms-720">В написании новостей на сайт важно выдерживать определённый план в построении материала:</p>
      <div class="fourth-block__content">
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nyusmejking/grayblock1.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Структура</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            Копирайтеры при написании используют принцип «перевёрнутой пирамиды». Важную мысль располагают в начале новости, затем идёт описание вспомогательных элементов. Выводы находятся в конце материала. Такая структура позволяет пользователю получить требуемую информацию, а уж потом разбираться в деталях. Он может прочитать заметку не до конца, но при этом всё равно будет иметь от неё пользу. Если читатель понимает, в чём для него заключается выгода, то есть вероятность, что он посмотрит и на другие товары, услуги в процессе чтения. Появившийся интерес побудит его ознакомиться с другими заметками. Подобная структура написания новостей сайта позволяет процессу их подготовки считаться техникой продаж;
            </p>
          </div>
        </div>

        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nyusmejking/grayblock2.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Лид</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            Как подготовить стартовый абзац? Этот вопрос часто тревожит начинающих копирайтеров-ньюсмейкеров. Лид пишут или неправильно, или на него вообще не обращают внимания. Но опытные копирайтеры знают, что эта часть новости – важна. Она должна «зацепить» читателя. Если это произошло, то он не успокоится, пока не дочитает текст до конца. Суть новости описывается кратко, в одном или двух предложениях (максимум три либо четыре). Абстрактность в лиде не приветствуется. Сразу стоит указать о выгоде, которую получит тот, кто новость читает. Подробности не прописываются – интригу никто не отменял. За пять секунд копирайтер обязан заинтересовать пользователя, иначе он закроет сайт и откроет страницу конкурентов;
            </p>
          </div>
        </div>

        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nyusmejking/grayblock3.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Заглавие</h3>
            <div class="floating-card-arrow">
            </div>
            <p>
            Именно так – сначала грамотно пишется лид, а затем придумывается заголовок. В нём кратко даётся суть заметки и её польза для читающего. Заглавие отвечает на вопрос: «Почему человек должен ознакомиться с новостью?». Яркое начало – работающая годами техника. С учётом определённых слов и словосочетаний такие заголовки привлекают пользователей и побуждают их ознакомиться с новостью.
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
      <h4 class="wow  section-subtitle">варианты</h4>
      <h2 class="wow section-title ms-720">Возможные варианты заглавий</h2>

      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
            <h3>Чаще всего копирайтеры работают по одному из четырёх вариантов:</h3>
          </div>
        </div>
        <ul class="function-list">
          <li>
            <span class="function-list-marker"></span>
            <p>
            Стандартному. Его задача – описать суть новости. Его выбирают, когда тема интересна сама по себе, и нет острой необходимости в привлечении внимания;
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Интригующему. Здесь должна присутствовать недосказанность. Она играет на повышение интереса, мотивации на дальнейшее прочтение заметки. Пользователь заинтересован в прочтении после ознакомления с таким заглавием;
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            Вопросительному. Интересный вариант с вопросом в теле заглавия и ответом дальше по тексту. Главное – не ставить более одного вопроса;
            </p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>
            В виде комментария. Чаще всего структура следующая: имя-фамилия человека – его слова. Он применяется, если новость посвящена отдельному человеку, чаще всего – медийной персоне, в том числе представителю власти.
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
      <h2 class="wow section-title ms-720">За ньюсмейкингом – к профессионалам</h2>

      <div class="three-part-p three-part-p_mrg-top">
        <p>
        Ньюсмейкинг – это лишь этап. Новости надо грамотно разместить, провести перелинковку с товарами, услугами для увеличения ссылочной массы и ранжирования. Автору надо помнить об использовании description, title, а главное – о смысловом введении в тело новости «ключей». Если стоит задача вызвать интригу, то ключевым словам не место в заголовке. Но когда новость имеет вспомогательную функцию для seo-оптимизации, то «ключ» надо грамотно прописать в заголовке. Иногда копирайтеры совмещают два этих метода. Но так могут делать опытные ньюсмейкеры компании «Веб Фокус».
        </p>
        <p>
        Новость – привлекательный инструмент для продаж, когда подобрана верная техника их написания. Текст готовится одновременно и для систем поиска, и для людей. Чтобы человек остался на странице, подача новости, раскрываемая в ней тема должны его заинтересовать. С такой задачей специалисты компании «Веб Фокус» справляются без проблем. Написанные нами новости заинтересовывают читателя с первых слов, вызывают доверие и мотивируют к совершению покупки товара или заказа услуги.
        </p>
        <p>
        «Веб Фокус» давно и успешно продвигает компании в поисковых системах. Нам подвластны все методы поднятия сайта любой тематики в поисковой выдаче. Мы создаём контент стопроцентной уникальности для seo-продвижения. Желаете, чтобы продажи выросли, а репутация бренда повысилась? Ждём Ваших звонков и обращений!
        </p>
      </div>

  </section> 

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider' ); ?>
</main>
<?php get_footer() ?>