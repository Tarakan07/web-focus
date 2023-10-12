<?php
/*
    Template Name: Internet-Magazine
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
          <h1 class="sub-hero__title">Интернет-магазин</h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>Если Вы хотите стать владельцем собственного бизнеса, то стоит обратить внимание на интернет магазин. <a href="/sozdanie-sajta-pod-klyuch/" class="link">Создание сайта с нуля</a> и до запуска занимает относительно немного времени и не требует масштабных стартовых вложений. Это удачный способ развить собственное дело при минимальных затратах.</p>
              </div>
            </div>
            <div class="sub-hero__info_price">
              <div class="price-row">
                <h4>Стоимость разработки сайта-каталога:</h4>
                <div class="price-coast-converter">
                  <h4>от <span class="byn-price">5000</span> BYN</h4>
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
                  <h4><span>30</span> дней</h4>
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
  <section class="section-std  ">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">главное</h4>
      <h2 class="wow section-title">Что необходимо интернет-магазину для <br> успеха на рынке</h2>
      <p class="ms">Чтобы создать сайт под интернет магазин, который быстро начнет приносить прибыль и станет лидером в своей бизнес-нише, учитывайте классический маркетинговый подход. Например, концепцию 4Р, которая состоит из нескольких компонентов:</p>

      <div class="tmpl-third-block_content">
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Place или место.</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/internet-magazin/shop-place.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>Определитесь, где будет разрабатываться и размещаться интернет-магазин. Поручайте эту задачу только опытным профессионалам веб-разработки. Тогда результат не разочарует.</p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Product или продукт.</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/internet-magazin/shop-product.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>Перед тем, как создать сайт интернет магазин, определитесь, что Вы будете предлагать покупателям. Выберите подходящую нишу в онлайн-торговле и тщательно подбирайте ассортимент. Закупайте только качественные товары, за которыми покупатели станут возвращаться снова и снова. Тестируйте новинки, избавляйтесь от лишнего, регулярно устраивайте распродажи — это повышает интерес к магазину и укрепляет лояльность аудитории.</p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Price или цена.</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/internet-magazin/shop-price.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>Следите за тем, чтобы цены в онлайн-магазине оставались актуальными и конкурентными. Если цены не обновляются вовремя, Вы сразу теряете клиентов и их доверие. Постоянно контролируйте баланс цены и качества. Как только он нарушается, бизнес несет убытки.</p>
          </div>
        </div>
        <div class="market-card">
          <div class="market-card__left">
            <div class="market-card__title">
              <h3>Promotion или продвижение.</h3>
              <div class="market-card__title_arrow"></div>
            </div>
            <div class="market-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/internet-magazin/shop-production.svg" alt="img">
            </div>
          </div>
          <div class="market-card__info">
            <p>Чтобы интернет-магазин начал приносить прибыль, он нуждается в грамотном <a href="/seo/" class="link">продвижении через SEO</a>, <a href="/kontekstnaja-reklama/" class="link">контекстную рекламу</a>, <a href="/smm/" class="link">социальные сети</a> и другие инструменты онлайн-продвижения.</p>
          </div>
        </div>
      </div>
  </section>
  <div class="tmpl-cases">
    <?php get_template_part('template-parts/cases'); ?>
  </div>
  <section class="section-std section-gray section-with-floating-bubbles">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">успех</h4>
      <h2 class="wow section-title">Интернет-магазин от компании «Веб Фокус» — <br> Ваш путь к успеху в бизнесе</h2>
      <p class="wow section-p ms">
        Специалисты компании «Веб Фокус» готовы разработать сайт интернет магазин любой тематики в короткие сроки и по приятным ценам. Обратившись к нам, Вы получите полностью готовую к работе торговую онлайн-площадку с большим коммерческим потенциалом. Выполним все необходимые работы «под ключ» в короткие сроки и по привлекательным ценам. <br> <br>
        Принимая решение заказать разработку сайта интернет магазина в компании «Веб Фокус», можете не сомневаться в высоком качестве готового ресурса. Мы снабдим Ваш будущий онлайн-магазин всем комплексом функций, необходимых для успешной работы на рынке:
      </p>
      <article class="function-list-wrp">
        <div class="function-list-left-part first">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
            <h3>01.</h3>
            <h3>Комплекс функций, необходимых для успешной работы на рынке:</h3>
          </div>
        </div>
        <ul class="function-list">
          <li>
            <span class="function-list-marker"></span>
            <p>Подключаем к ресурсу популярные платежные сервисы (ЕРИП, Яндекс-Касса, Robokassa, PayPal, Webpay).</p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>Удобный товарный каталог с неограниченным числом товарных позиций с возможностью поиска и настройкой фильтров по различным характеристикам и атрибутам.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Коммерческие блоки и модули. При создании сайта интернет магазина сразу подключаем необходимые функциональные модули для полноценной работы (оплаты, доставки и не только). При необходимости <a href="/razrabotka-programmnogo-modulya-dlya-sajta/" class="link">разрабатываем нужные модули</a> самостоятельно.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Настраиваем дисконтные системы и программы лояльности. Это полезный функционал позволяет владельцу интернет-магазина гибко настраивать систему скидок, купонов и промокодов прямо в администраторской панели.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p><a href="/rassylka-sms-soobshhenij/" class="link">SMS-оповещения</a> помогают оперативно информировать клиентов о состоянии их заказов, рассылать им уведомлениях об акциях, распродажах и рекламных играх.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Только самые передовые технологии для <a href="/zashhita-sajtov-ot-vzlomov/" class="link">защиты сайта магазина от взлома</a> и <a href="/testirovanie-bezopasnosti-sajta/" class="link">обеспечения безопасности</a> финансовых операций и личных данных покупателей.</p>
          </li>
        </ul>
      </article>
      <article class="function-list-wrp">
        <div class="function-list-left-part second">
          <lottie-player class="image-box-bubbles" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/empty.json" loop speed="1" autoplay></lottie-player>
          <div class="function-list-left-content">
            <h3>02.</h3>
            <h3>Особенности современных сайтов интернет-магазинов:</h3>
            <p>Интернет-торговля становится популярнее с каждым годом. Все больше людей предпочитают совершать покупки онлайн, не выходя из дома или офиса. Среди особенностей современных сайтов интернет магазинов:</p>
          </div>
        </div>
        <p>Интернет-торговля становится популярнее с каждым годом. Все больше людей предпочитают совершать покупки онлайн, не выходя из дома или офиса. Среди особенностей современных сайтов интернет магазинов:</p>
        <ul class="function-list">
          <li>
            <span class="function-list-marker"></span>
            <p>Простое оформление заказов для покупателей.</p>
          </li>

          <li>
            <span class="function-list-marker"></span>
            <p>Понятные и производительные инструменты для управления заказами и ассортиментом для администраторов веб-ресурса.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Обширные возможности для взаимодействия с клиентской базой.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Наличие всех необходимых функций для управления и настройки отображения товарных категорий.
            </p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Удобная панель управления, редактировать информацию на сайте можно без специальных знаний в IT-сфере.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p><a href="/adaptivnaya-versiya-sajta/" class="link">Адаптивность дизайна</a>, благодаря которому сайт одинаково хорошо функционирует и отображается на всех устройствах.</p>
          </li>
          <li>
            <span class="function-list-marker"></span>
            <p>Возможности для дальнейшего развития, модернизации сайта, добавления новых функций и перенастройки дизайна.</p>
          </li>
        </ul>
      </article>
      <p class="ms">Всех заказчиков интересует вопрос: сколько стоит разработать сайт интернет магазин? Для каждого проекта итоговая цена формируется индивидуально, исходя из целей заказчика, маркетинговых потребностей его бизнеса, сложности структуры, <a href="/dizajn-sajta/" class="link">дизайна</a>, перечня необходимых функций. Также на цену влияют сроки реализации проекта.</p>
  </section>
  <?php get_template_part('template-parts/contact-form'); ?>
  <section class="section-std fourth-block section-std-top-0">
    <div class="container">
      <div class="wow arrow-fall-down">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>
      <h4 class="wow  section-subtitle">преимущества</h4>
      <h2 class="wow section-title">Преимущества онлайн-магазинов <br>
        от компании «Веб Фокус»</h2>
      <p class="wow section-p ms">Если Вам нужен многофункциональный современный интернет магазин, создание сайта с нуля и до релиза доверьте команде профессионалов «Веб Фокуса». Сотрудничать с нами просто, выгодно и удобно.</p>
      <p class="ms">Сначала мы подробно проконсультируем Вас по стоимости проекта, функциональных возможностях решения, обсудим детали работы, концепцию будущей площадки. Все консультации бесплатны и ни к чему не обязывают. Если Вы поручаете нам создание своего онлайн-магазина, то получаете полностью готовую к продажам площадку, которая отличается:</p>

      <div class="fourth-block__content">
        <div class="floating-card">
          <div class="floating-card-img">

            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/internet-magazin/shop-grayblock.svg" alt="img">
              </div>

            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Лаконичным и одновременно «цепляющим» дизайном.</h3>
            <div class="floating-card-arrow">

            </div>
            <p>Дизайн создают профессиональные художники. В итоге оформление сайта получается приятным и запоминающимся, но одновременно оно не отвлекает пользователя от совершения покупок. Внимание акцентируется на товарах-новинках и акционных спецпредложениях.</p>
          </div>

        </div>
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/internet-magazin/shop-grayblock-1.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Подробным каталогом
              с удобной структурой.</h3>
            <div class="floating-card-arrow">

            </div>
            <p>Грамотно выстроенный каталог — половина успеха онлайн-магазина. Созданные нами торговые интернет-площадки обладают понятными и удобными в пользовании товарными каталогами. Это положительно влияет в том числе на SEO, так как поисковые роботы не любят сайты с излишне сложной внутренней структурой.</p>
          </div>

        </div>

        <div class="floating-card">
          <div class="floating-card-img">

            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/internet-magazin/shop-grayblock-2.svg" alt="img">
              </div>

            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Разнообразный функционал.</h3>
            <div class="floating-card-arrow">

            </div>
            <p>При работе над проектом мы изначально закладываем такие инструменты, как фильтрация товаров по различным признакам, кабинет пользователя с обширными возможностями, функционал для применения скидок и промокодов. Чем больше у пользователя инструментов для удобной работы с сайтом, тем больше и чаще он покупает.</p>
          </div>

        </div>
        <div class="floating-card">
          <div class="floating-card-img">
            <div class="floating-card-img-wrp">
              <div class="floating-card-gray-layer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/internet-magazin/shop-grayblock-3.svg" alt="img">
              </div>
            </div>
          </div>
          <div class="floating-card-info-wrp">
            <h3>Адаптивность под любые устройства.</h3>
            <div class="floating-card-arrow">

            </div>
            <p>Все проекты мы разрабатываем с применением адаптивного веб-дизайна. Это жизненно необходимо для успеха магазина в Интернете, ведь доля мобильного трафика неизменно растет.</p>
          </div>

        </div>
        <p class="ms">
          Закажите создание сайта интернет-магазина с нуля в компании «Веб Фокус». Ваша торговая площадка будет безопасной и надежной, собранной на основе понятной и мощной CMS. Попробуйте себя в онлайн-торговле и убедитесь, насколько это выгодный и несложный способ ведения бизнеса. </p>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>