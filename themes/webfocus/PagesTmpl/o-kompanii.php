<?php
/*
    Template Name: o-kompanii
    Template post type:  page
    */
?>


<?php get_header() ?>
<main>
    <div class="sub-hero-wrp">
        <lottie-player class="bg-animation contekst" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/other-animation.json" loop speed="1" autoplay></lottie-player>
        <section class="sub-hero blog-first-screen">
            <div class="container">
                <div class="sub-hero-wrapper">
                    <?php echo do_shortcode('[breadcrumb_simple]') ?>
                    <h1 class="sub-hero__title">О компании</h1>
                    <div class="sub-hero__info-wrapper">
                        <div class="sub-hero__info">
                            <div class="sub-hero__info_left">
                                Команда Web Focus — объединение деловых и творческих людей, деятельность которых посвящена разработке успешной рекламы. Консалтинг и аудит брендов, брендинг и ребрендинг, разработка рекламных концепций, графический дизайн и создание сайтов, цифровые коммуникации и продвижение — это ключевые компетенции компании.
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

    <section class="section-std success">
        <div class="container">
            <div class=" wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow section-subtitle">о нас</h4>
            <h2 class="wow section-title ms-720">
                Web Focus
            </h2>
            <div class="float-second quality-service quality-service_mrg-top">
                <div class="left-part">
                    <p class="bold">Наши ценности:</p>
                    <ul class="quality-service-list">
                        <li>
                            <p class="bold">
                                Ответственность
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                                Серьезность
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                                Творческий подход
                            </p>
                        </li>
                        <li>
                            <p class="bold">
                                Новаторство
                            </p>
                        </li>

                    </ul>
                </div>
                <div class="quality-service_info">
                    <p class="bold">Мы поможем вам открыть новый мир доступных интернет технологий.</p>
                    <p>Веб-сайты, дизайн которых соответствует ожиданиям самых требовательных заказчиков и будет оставаться актуальным многие годы. Кроcсбраузерная верстка позволяет корректно отображать ваш сайт во всех браузерах и на всех устройствах. Объединяя лучшее в мире разработки, дизайна и маркетинга мы создаём продукты, с которым ваша компания выйдет на новый уровень продаж, ранее казавшийся невозможным.</p>
                    <!-- <p class="mobile-last">Выполненная профессионально обработка фотографий дает им полностью новый вид.</p>

                    <p class="floating-p-appear_dis">Снимки выглядят ярче, выразительнее, мы удаляем с изображения лишние области с помощью кадрирования. Опыт работы «Веб Фокус» подтверждает на практике, что после обработки фото выглядят привлекательнее и лучше воспринимаются зрителями.</p>
                    <p class="floating-p-appear_dis">Кроме обработки коммерческих фотоснимков для компании, «Веб Фокус» оказывает услуги профессиональной ретуши фотографии и фотопортретов. Снимки такого типа пригодятся для документов, презентаций, резюме, внутрикорпоративных изданий и стендов.</p>
                    <p class="floating-p-appear_dis">Последняя услуга пользуется повышенным вниманием заказчиков. Многие стремятся придать современный вид, подарить новую жизнь фото, сделанным на любительскую камеру много лет назад.</p> -->
                </div>
            </div>
        </div>
    </section>
    <?php echo do_shortcode('[section_team]') ?>
    
    <style>
        .creative-line.about-us .creative-line-word::after{
            left: -25.4375rem;
        }
    </style>
    <section class="section-std reviews">
        <div class="container">
            <div class=" wow arrow-fall-down">
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
                <div class="arrow-fall"></div>
            </div>
            <h4 class="wow section-subtitle">услуги</h4>
            <div class="title-wrp">
                <h2 class="wow section-title">Направления работы</h2>
            </div>
            <div class="reviews-slider-wrp seo-slider-wrp">
                <div class="seo-cards">
                    <div class="reviews-card seo-card">
                        <h3>Разработка сайтов</h3>
                        <p>
                            Представительство в Интернете должно быть у каждого! Аксиома! Закажите такой сайт, который станет полноценным инструментом продаж, не требуя при этом пристального внимания.
                        </p>
                        <a href="/razrabotka/" class="reviews-read-more">Перейти к услуге</a>
                    </div>
                    <div class="reviews-card seo-card">
                        <h3>SEO-продвижение</h3>
                        <p>
                            Главный инструмент интернет-маркетинга, ядро успеха в Сети. Обеспечим стабильное присутствие на высоких позициях в поисковой выдаче. В процесс включаются опытные специалисты.
                        </p>
                        <a href="/seo/" class="reviews-read-more">Перейти к услуге</a>
                    </div>
                    <div class="reviews-card seo-card">
                        <h3>Реклама</h3>
                        <p>
                            Двигатель торговли. Хотите, чтобы акция или выход нового продукта стали известна даже обладателям кнопочных телефонов? Решение напрашивается автоматически. Делайте заказ!
                        </p>
                        <a href="/kontekstnaja-reklama/" class="reviews-read-more">Перейти к услуге</a>
                    </div>
                    <div class="reviews-card seo-card">
                        <h3>Дизайн</h3>
                        <p>
                            Провожают по уму, но встречают все же по одежке. Важно добиться не только привлекательного внешнего облика, но и продумать до мелочей структуру. Легко справимся с такой задачей!
                        </p>
                        <a href="/brending-i-dizajn/" class="reviews-read-more">Перейти к услуге</a>
                    </div>
                    <div class="reviews-card seo-card">
                        <h3>Управление репутацией</h3>
                        <p>
                            Известно немало случаев, когда на одной репутации обеспечиваются отменные продажи. Боремся с негативом, обеспечиваем позитивное восприятие бренда.
                        </p>
                        <a href="/upravlenie-reputacziej/" class="reviews-read-more">Перейти к услуге</a>
                    </div>
                    <div class="reviews-card seo-card">
                        <h3>SMM продвижение</h3>
                        <p>
                            Есть сайт, но нет социальных сетей? Тогда зачем сайт? SMM – серьезная составляющая успеха в Интернете. Создадим, наполним и продвинем Ваш бизнес ВК, FB, Instagram и т.д. Вперед!
                        </p>
                        <a href="/smm/" class="reviews-read-more">Перейти к услуге</a>
                    </div>
                    <div class="reviews-card seo-card">
                        <h3>Поддержка</h3>
                        <p>
                            Техподдержка важна владельцам веб-ресурсов. Гарантируем своевременный отклик на обращения, рабочие решения и минимальное участие заказчика в жизни сайта. Сделаем за Вас!
                        </p>
                        <a href="/tehnicheskaya-podderzhka-sajta/" class="reviews-read-more">Перейти к услуге</a>
                    </div>
                </div>
                <div class="seo-slider-nav">
                    <button class=" seo-slider-prev-btn"></button>
                    <div class=" seo-slider-dots-wrp slider-dots-wrp "></div>
                    <button class=" seo-slider-next-btn"></button>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/request-form'); ?>
    <?php get_template_part('template-parts/last-posts'); ?>
    <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>