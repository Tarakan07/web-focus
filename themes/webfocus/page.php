<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package web-focus
 */

get_header();
?>
<main>
<div class="sub-hero-wrp">
<lottie-player class="bg-animation contekst" src="<?php echo get_template_directory_uri(); ?>/js/json-animation/other-animation.json" loop speed="1" autoplay></lottie-player>
    <section class="sub-hero sub-hero-min-block">

      <div class="container">
        <div class="sub-hero-wrapper">

          <?php echo do_shortcode('[breadcrumb_simple]') ?>
          <h1 class="sub-hero__title"><?php the_title(); ?></h1>
          <div class="sub-hero__info-wrapper">
            <div class="sub-hero__info">
              <div class="sub-hero__info_left">
                <p>
                  
                </p>
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
 


  <section class="section-std fourth-block section-std-bottom-0 ">
    <div class="container">
      <div class="wow arrow-fall-down" style="visibility: visible; animation-name: arrowDown;">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>

	  <div class="content-block">
	  </div>

      <!-- <h4 class="wow  section-subtitle" style="visibility: visible; animation-name: fadeInLeftBig;">главное</h4>
      <h2 class="wow section-title" style="visibility: visible; animation-name: fadeInLeftBig;">Что нужно знать, когда заказываете сайт?</h2>
      <p class="wow section-p ms" style="visibility: visible; animation-name: fadeInUp;">Самое главное — определиться с концепцией. Каким вы хотите видеть конечный продукт: возможно, вам нужен <a href="/sajt-vizitka/" class="link">сайт-визитка</a> или же вы нацелены на <a href="/internet-magazin/" class="link"> интернет-магазин</a>. А вы уже представляете каким в итоге должен быть созданный сайт? Это действительно важно, потому что, очерченные цели сайта помогут заказчику и разработчику удачно скооперироваться и воплотить вашу задумку в жизнь. А вы будете спокойны, зная на что тратите время и деньги. И напротив, если вы заказываете сайт просто потому, что «у всех есть, чем я хуже», то рискуете надолго застрять в бесконечном круге из сомнений и «а может здесь что-нибудь подправим?».</p>
    <p class="wow section-p ms" style="visibility: visible; animation-name: fadeInUp;">Самое главное — определиться с концепцией. Каким вы хотите видеть конечный продукт: возможно, вам нужен <a href="/sajt-vizitka/" class="link">сайт-визитка</a> или же вы нацелены на <a href="/internet-magazin/" class="link"> интернет-магазин</a>. А вы уже представляете каким в итоге должен быть созданный сайт? Это действительно важно, потому что, очерченные цели сайта помогут заказчику и разработчику удачно скооперироваться и воплотить вашу задумку в жизнь. А вы будете спокойны, зная на что тратите время и деньги. И напротив, если вы заказываете сайт просто потому, что «у всех есть, чем я хуже», то рискуете надолго застрять в бесконечном круге из сомнений и «а может здесь что-нибудь подправим?».</p> -->
    </div>
  </section>



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
        <h2 class="wow section-title">Мы предоставляем и другие услуги:</h2>
      </div>
      <div class="reviews-slider-wrp seo-slider-wrp">
        <div class="seo-cards">

          <a class="link "href="/landing-page/">
            <div class="reviews-card seo-card">
              <h3>Лэндинг</h3>
              <p>
                Как правило, это одностраничный сайт, на котором кратко и емко представлена информация об услуге или товаре, что позволяет повысить эффективность рекламы.
              </p>
              <button class="reviews-read-more">Перейти к услуге</button>
            </div>
          </a>

          <a class="link "href="/sajt-vizitka/">
          <div class="reviews-card seo-card">
            <h3>Сайт-визитка</h3>
            <p>
              Небольшой сайт, на котором размещена основная контактная информация об организации, виде деятельности, форма обратной связи.
            </p>
            <button class="reviews-read-more">Перейти к услуге</button>
          </div>
          </a>

          <a class="link "href="/adaptivnaya-versiya-sajta/">
          <div class="reviews-card seo-card">
            <h3>Мобильная версия</h3>
            <p>
              Комфортно реализованная версия полноценного сайта. Контент размещается в одну колонку, а все элементы должны иметь удобный размер для нажатия пальцем.
            </p>
            <button class="reviews-read-more">Перейти к услуге</button>
          </div>
          </a>

          <a class="link "href="/sajt-katalog/">
          <div class="reviews-card seo-card">
            <h3>Сайт-каталог</h3>
            <p>
              Представляет собой базу продаваемых товаров с подробным описанием и подкрепленными фото. Там также указывается подробная информация о компании.
            </p>
            <button class="reviews-read-more">Перейти к услуге</button>
          </div>
          </a>

          <a class="link "href="/internet-magazin/">
          <div class="reviews-card seo-card">
            <h3>Интернет-магазин</h3>
            <p>
              Сайт, содержащий информацию о товарах, включая стоимость, визуализацию, данные продавца, и позволяющий напрямую заказать и/или приобрести товар онлайн.
            </p>
            <button class="reviews-read-more">Перейти к услуге</button>
          </div>
          </a>

          <a class="link "href="/korporativnyj-sajt/">
          <div class="reviews-card seo-card">
            <h3>Корпоративный сайт</h3>
            <p>
              Официального представляет организацию в интернете. Наполняется полной информацией о компании, сфере ее деятельности, продукции и услугах.
            </p>
            <button class="reviews-read-more">Перейти к услуге</button>
          </div>
          </a>

        </div>
        <div class="seo-slider-nav">
          <button class=" seo-slider-prev-btn"></button>
          <div class=" seo-slider-dots-wrp slider-dots-wrp "></div>
          <button class=" seo-slider-next-btn"></button>
        </div>
      </div>
    </div>
  </section>

  <section class="section-std fourth-block section-std-bottom-0 section-std-top-0">
    <div class="container">
      <div class="wow arrow-fall-down" style="visibility: visible; animation-name: arrowDown;">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>

	  <div class="content-block">
	  </div>
    </div>
  </section>


  <?php get_template_part('template-parts/contact-form'); ?>

  <section class="section-std fourth-block section-std-bottom-150 section-std-top-0 for-clone-block" style="display:none">
    <div class="container">
      <div class="wow arrow-fall-down" style="visibility: visible; animation-name: arrowDown;">
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
        <div class="arrow-fall"></div>
      </div>

	  <div class="content-block">
     
	  </div>
</section>

  
<div class="php-content" style="display:none;">
	<?php the_content(); ?>
</div>



<script>
	window.onload=()=>{
	document.querySelectorAll('.content-block').forEach(item=>{
		if(item.querySelector('p')) item.querySelectorAll('p').forEach(itemP=>{itemP.classList.add('section-p')});
	})

  document.querySelectorAll('.content-block ol').forEach(item=>{
		if(item.querySelectorAll('li').length>2){
      item.classList.add('three-ol-column');
    }
    else {
      item.classList.add('two-ol-column');
    }
	})
}


  let arrayElem = new Array(
    document.querySelectorAll(".php-content>h2").length+1
  );

  for (let i = 0; i < arrayElem.length; i++) {
    arrayElem[i] = new Array();
  }
  let count = 0;
  Array.from(document.querySelector(".php-content").children).map((el,index) => {
    if (el.localName == "h2" && index!=0) {
     
      count++;
      arrayElem[count].push(el);
    } else {
		arrayElem[count].push(el);
    }
  });
console.log(arrayElem);

/*add header page*/
// arrayElem[0].forEach((el) => {
//     document.querySelector(".sub-hero__info_left").innerHTML += el.outerHTML;
//   });

for(let i=0;i<arrayElem.length;i++){
  for(let j=0;j<arrayElem[i].length;j++){
    if(arrayElem[i][j].localName == "p")
    {
      document.querySelector(".sub-hero__info_left").innerHTML=arrayElem[i][j].innerHTML;
      arrayElem[i].splice(j,1);
      if(arrayElem[i]=='') arrayElem.splice(i,1);;
      break;
    }
  }
  break;
}


/*add blocks*/
for(let i=2;i<arrayElem.length;i++){
     let newSection = document.createElement("section");
	 newSection.className = "section-std fourth-block section-std-bottom-150 section-std-top-0";
	 newSection.innerHTML=document.querySelector('.for-clone-block').innerHTML;
    document.querySelector('.contact-form-section').after( newSection);
}





/*add content page*/




  document.querySelectorAll('.content-block').forEach((elem, index)=>{

    var countDiv;
countDiv=index;
    /*h2*/ 
    (function () {  
      if (arrayElem[countDiv][0].localName == "h2") {
      let txt_h2 = document.createElement("h2");
      txt_h2.className = "wow section-title";
      txt_h2.innerHTML=arrayElem[countDiv][0].innerHTML;

      elem.append(txt_h2);
    
    let subtitle=document.createElement("h4");
    subtitle.className="wow section-subtitle";
    subtitle.innerHTML="инфо";
      elem.prepend(subtitle);
    }
    
      createBlock(countDiv,elem);

 }());
  
      })

  function createBlock(countDiv,elem){
    let div = document.createElement("div");
    div.className = "content-block__text";
    elem.append(div);
    let secondItem=false;

    arrayElem[countDiv].forEach((el) => {
      if(el.localName != "h2")
      {
        elem.querySelector('.content-block__text').innerHTML += el.outerHTML;
      }
    

  });
  //   arrayElem[countDiv].forEach((el) => {
  //  if(!secondItem || arrayElem[0][0].localName == "h2"){
  //   secondItem=true;
  //  }
  //  else{
     
  //   elem.querySelector('.content-block__text').innerHTML += el.outerHTML;
  //  }
  // });

  }



</script>

  <style>
.content-block__text{

}

.section-std.fourth-block:nth-child(7){
  background-color: #F5F5F5;
  padding-bottom: 0;
}
.section-std.fourth-block:nth-child(7) .container{
  padding-top: 9.375rem;
  padding-bottom: 9.375rem;
}
.section-std.fourth-block:nth-child(7) .arrow-fall-down {
  top:0;
}
.section-std.fourth-block:nth-child(7) .arrow-fall-down .arrow-fall{
  background: #E1E1E1;
}

.section-std.fourth-block:nth-child(8){
  margin-top: 9.5rem;
}

 .content-block ol{

   padding-top: 1.5rem;
	counter-reset: li;
}
.content-block ol li{
	margin-bottom: 3.125rem;
    position: relative;
    
}
ol.two-ol-column{
  display: flex;
  grid-column-gap:3.125rem;
}
ol.two-ol-column li{
  max-width:345px;
}

ol.three-ol-column{
  display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-column-gap: 50px;
}
.content-block ol li::before{
  position: absolute;
    top: -1.5rem;
    counter-increment: li;
    background: linear-gradient( 
37.73deg
, #ab85ff -12.73%, #eba3e3 57.91%, #ffdbe4 121.55% );
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    content: "0" counters(li, ".") ". ";
    font-weight: 600;
}
.content-block ul li a{
  display:contents;
}
.content-block ul li{
  padding-bottom: 1.5rem;
  display:flex;
}

.content-block ul li:before{
    padding-right: 1rem;
    display: block;
    content: url('<?php echo get_template_directory_uri() ?>/assets/img/float-list-color-arrow.svg');

}

@media(max-width:1280px)
{
  ol.two-ol-column{
  grid-column-gap:2.5rem;
}
ol.two-ol-column li{
  width:300px;
}
ol.three-ol-column{
  grid-column-gap: 40px;
}
}

@media(max-width:980px){
  ol.three-ol-column{
    grid-template-columns:1fr;
    grid-column-gap: 40px ;
}
}
@media(max-width:768px){
  .section-std.fourth-block:nth-child(4) .container{
    padding-top: 6.25rem;
    padding-bottom: 6.25rem;
  }
  ol.two-ol-column{
    display: block;
  }
  ol.two-ol-column li,ol.three-ol-column li{
  max-width:100%;
}

  .content-block ol li{
	margin-bottom: 2.8rem;
  width:100%;
   
}
}
@media(max-width:360px){
  .section-std.fourth-block:nth-child(4) .container{
    padding-top: 13.3rem;
    padding-bottom: 13.3rem;
  }
}
  </style>

  <?php get_template_part('template-parts/request-form'); ?>
  <?php get_template_part('template-parts/last-posts'); ?>
  <?php get_template_part('template-parts/reviews-slider'); ?>



<?php get_footer() ?>