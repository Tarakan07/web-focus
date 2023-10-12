<?php
/*
    Template Name:rekvizity

    Template post type:  page
    */
?>


<?php get_header() ?>
<main>
  <section class=section-contacts>
    <div class="container">
      <div class="contacts-page-map">
        <div class="contacts-half">
          <h4 class="wow section-subtitle">инфо</h4>
          <h2 class="wow section-title ms-720">
            Наши реквизиты:
          </h2>
          <ul class="contacts-list big-mrg">
            <li class="user">
              <p>
                Общество с ограниченной ответственностью «Веб Фокус»
              </p>
            </li>
            <li class="mail">
              <p>УНП: 193104886
              </p>
            </li>

            <li class="location"><a target="_blank" rel="nofollow" href="https://yandex.by/maps/-/CCU4EITFCC">
                <p>Юридический и почтовый адрес: ул. Широкая, 3, пом. 146, 220090, г. Минск, Республика Беларусь. </p>
              </a></li>

            <li class="document">
              <p>
                Расчетный счет: BY74ALFA30122365530010270000 в ОАО «Альфа-банк».
              </p>
            </li>
            <li class="location"><a target="_blank" rel="nofollow" href="https://yandex.by/maps/-/CCU4QCA-sA">
                <p>Адрес банка: Минск, Логойский тракт, 10</p>
              </a>
            </li>
            <li class="mail">
              <p>BIC: ALFABY2X
              </p>
            </li>

          </ul>

        </div>
      </div>
    </div>
    <div class="yandex-map">
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6f663b0ba2cbd4acbd22e7faa69c5047070a9f1da9e566899e5d5b69d1ba51ef&width=100%25&height=400&lang=ru_RU&scroll=true"></script>
    </div>
  </section>



</main>
<?php get_template_part('template-parts/request-form'); ?>
<?php get_template_part('template-parts/last-posts'); ?>
<?php get_template_part('template-parts/reviews-slider'); ?>
<?php get_footer() ?>