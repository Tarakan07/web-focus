<?php get_header();
?>
<?php
$thisTag = get_queried_object();
?>

<main>
  <div class="hero section-std case-wrapper">
    <h1 class="hero__title cases-title">
      КЕЙСЫ
    </h1>
<!--     <div class="cases-tags-arrea container">
      <div class="widget widget_tag_cloud">
        <div class="tagcloud">
          <a href="/case-tag/kopirajting/" class="active tag-cloud-link tag-link-position-1">
            копирайтинг </a>
          <a href="/case-tag/kursy-fotografii/" class=" tag-cloud-link tag-link-position-2">
            брендинг </a>
          <a href="/case-tag/internet-konsalting/" class=" tag-cloud-link tag-link-position-3">
            интернет-консалтинг </a>
          <a href="/case-tag/serm/" class=" tag-cloud-link tag-link-position-4">
            serm </a>
          <a href="/case-tag/ppc/" class=" tag-cloud-link tag-link-position-5">
            PPC </a>
          <a href="/case-tag/seo/" class=" tag-cloud-link tag-link-position-6">
            SEO </a>
          <a href="/case-tag/dizajn/" class=" tag-cloud-link tag-link-position-7">
            дизайн </a>
          <a href="/case/" class="all_case-tag tag-cloud-link tag-link-position-8">
            ВсеКейсы </a>
          <a href="/case-tag/testirovanie-sajta/" class=" tag-cloud-link tag-link-position-9">
            тестирование сайта </a>
          <a href="/case-tag/email-marketing/" class=" tag-cloud-link tag-link-position-10">
            email-маркетинг </a>
          <a href="/case-tag/razrabotka/" class=" tag-cloud-link tag-link-position-11">
            разработка </a>
          <a href="/case-tag/smm/" class=" tag-cloud-link tag-link-position-12">
            SMM </a>
          <a href="/case-tag/nagruzochnoe-testirovanie/" class=" tag-cloud-link tag-link-position-13">
            нагрузочное тестирование </a>
          <a href="/case-tag/adaptivnaya-vyorstka/" class=" tag-cloud-link tag-link-position-14">
            адаптивная вёрстка </a>
        </div>
      </div>
    </div> -->
	      <div class="cases-tags-arrea container">
      <div class="widget widget_tag_cloud">
        <div class="tagcloud">
          <a href="/case-tag/dizajn/" class=" tag-cloud-link tag-link-position-7">
            дизайн </a>
          <a href="/case-tag/smm/" class=" tag-cloud-link tag-link-position-12">
            SMM </a>
          <a href="/case-tag/ppc/" class=" tag-cloud-link tag-link-position-5">
            PPC </a>
          <a href="/case-tag/animacziya/" class=" tag-cloud-link tag-link-position-5">
            анимация </a>
          <a href="/case-tag/video/" class=" tag-cloud-link tag-link-position-5">
            видео </a>
          <a href="/case-tag/razrabotka-sajta/" class=" tag-cloud-link tag-link-position-5">
            разработка сайта </a>
          <a href="/case-tag/tilda/" class=" tag-cloud-link tag-link-position-5">
            Tilda </a>
          <a href="/case-tag/email-marketing/" class=" tag-cloud-link tag-link-position-10">
            email-маркетинг </a>
          <a href="/case-tag/3d/" class=" tag-cloud-link tag-link-position-5">
            3D </a>
          <a href="/case-tag/firmennyj-stil/" class=" tag-cloud-link tag-link-position-5">
            фирменный стиль </a>
          <a href="/case-tag/seo/" class=" tag-cloud-link tag-link-position-6">
            SEO </a>
          <a href="/case-tag/webflow/" class=" tag-cloud-link tag-link-position-6">
            Webflow </a>
          <a href="/case-tag/prilozhenie/" class=" tag-cloud-link tag-link-position-6">
            приложение </a>
          <a href="/case-tag/illyustracziya/" class=" tag-cloud-link tag-link-position-6">
            иллюстрация </a>
          <a href="/case-tag/kopirajting/" class="active tag-cloud-link tag-link-position-1">
            копирайтинг </a>
          <a href="/case-tag/portal/" class="active tag-cloud-link tag-link-position-1">
            портал </a>
          <a href="/case-tag/lending/" class="active tag-cloud-link tag-link-position-1">
            лендинг </a>
          <a href="/case-tag/korporativnyj-sajt/" class="active tag-cloud-link tag-link-position-1">
            корпоративный сайт </a>
          <a href="/case-tag/kursy/" class="active tag-cloud-link tag-link-position-1">
            курсы </a>
          <a href="/case-tag/nedvizhimost/" class="active tag-cloud-link tag-link-position-1">
            недвижимость </a>
          <a href="/case-tag/biznes/" class="active tag-cloud-link tag-link-position-1">
            бизнес </a>
          <a href="/case-tag/yurisprudencziya/" class="active tag-cloud-link tag-link-position-1">
            юриспруденция </a>
          <a href="/case-tag/buhgalteriya/" class="active tag-cloud-link tag-link-position-1">
            бухгалтерия </a>
          <a href="/case-tag/stroitelstvo-i-remont/" class="active tag-cloud-link tag-link-position-1">
            строительство и ремонт </a>
          <a href="/case-tag/turizm-i-otdyh/" class="active tag-cloud-link tag-link-position-1">
            туризм и отдых </a>
          <a href="/case-tag/digital/" class="active tag-cloud-link tag-link-position-1">
            digital </a>
          <a href="/case-tag/finansy/" class="active tag-cloud-link tag-link-position-1">
            финансы </a>
          <a href="/case-tag/kursy-fotografii/" class=" tag-cloud-link tag-link-position-2">
            брендинг </a>
          <a href="/case-tag/internet-konsalting/" class=" tag-cloud-link tag-link-position-3">
            интернет-консалтинг </a>
          <a href="/case-tag/serm/" class=" tag-cloud-link tag-link-position-4">
            serm </a>
          <a href="/case/" class="all_case-tag tag-cloud-link tag-link-position-8">
            ВсеКейсы </a>
          <a href="/case-tag/testirovanie-sajta/" class=" tag-cloud-link tag-link-position-9">
            тестирование сайта </a>
          <a href="/case-tag/razrabotka/" class=" tag-cloud-link tag-link-position-11">
            разработка </a>
          <a href="/case-tag/nagruzochnoe-testirovanie/" class=" tag-cloud-link tag-link-position-13">
            нагрузочное тестирование </a>
          <a href="/case-tag/adaptivnaya-vyorstka/" class=" tag-cloud-link tag-link-position-14">
            адаптивная вёрстка </a>
        </div>
        <button class="tagcloud_button">
          Смотреть все
        </button>
      </div>
    </div>
  </div>
  <section class="offer-cases auto-fit">

    <?php if (have_posts()) :
      /* Start the Loop */
      while (have_posts()) :
        the_post();

        get_template_part('template-parts/cases-for-grid', get_post_type());

      endwhile;


    else :

      get_template_part('template-parts/content', 'none');

    endif;
    ?>

  </section>

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>
</main>
<?php get_footer() ?>