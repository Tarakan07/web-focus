window.requestAnimFrame = (function() {
    return (
      window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      function(callback) {
        window.setTimeout(callback, 1000 / 60);
      }
    );
  })();
  
  const wrapSlider = document.querySelector("#js-wrapSlider");
  const widthWrap = wrapSlider.offsetWidth;
  
  let items;
  let sliders;
  let sliderList = [];
  
  const getSliderList = () => {
    sliders = document.querySelectorAll(".js-slider");
    // get the dom elements in a array to better use it
    sliderList = [...sliders];
  };
  // made a function for update later
  getSliderList();
  
  const slider = document.querySelectorAll(".js-slider")[0];
  const sliderWidth = slider.offsetWidth;
  
  const sumIsLargerThanSlider = sliderWidth >= widthWrap + sliderWidth;
  
  const iterationItems = Math.ceil((widthWrap + sliderWidth) / sliderWidth);
  
  // we clone number of slider we need
  if (iterationItems > 1) {
    for (let i = 0; i < iterationItems - 1; i++) {
      const clone = slider.cloneNode(true);
      wrapSlider.appendChild(clone);
    }
  
    getSliderList();
  }
  
  // we create an array for knowing the state of each item
  let stateList = sliderList.map((item, i) => {
    let pos = 0;
    let start = false;
  
    // here we allow the slide to start fully at left
    if (i < iterationItems - 1) {
      pos = -widthWrap + sliders[i].offsetWidth * i;
      start = true;
  
      sliders[i].style.transform = `translate(${pos}px, -50%)`;
    }
  
    return {
      pos,
      start
    };
  });
  
  // logic animation for sliding each item at a time
  const translate = () => {
    for (let i = 0; i < sliderList.length; i++) {
      const slider = sliderList[i];
      const sliderWidth = slider.offsetWidth;
      const nextIndex = i != sliderList.length - 1 ? i + 1 : 0;
      let pos;
  
      // if slider should be in movement
      if (stateList[i].start) {
        stateList[i].pos-=1;
        pos = stateList[i].pos;
  
        slider.style.transform = `translate(${pos}px, -50%)`;
      }
  
      const isComplete = pos <= -sliderWidth;
      const isOutSeen = pos <= -widthWrap - sliderWidth;
  
      // if the slider is fully on screen
      if (isComplete) {
        stateList[nextIndex].start = true;
      }
      // if the slider finished crossing the slider and has disappeared
      if (isOutSeen) {
        stateList[i].start = false;
        stateList[i].pos = 0;
      }
    }
  };
  
  let isPaused = false;
  
  function start() {
    if (!isPaused) {
      translate();
    }
  
    requestAnimFrame(start);
  }
  
  wrapSlider.addEventListener("mouseover", () => {
    isPaused = true;
  });
  wrapSlider.addEventListener("mouseout", () => {
    isPaused = false;
  });
  
  start();
  



$(document).ready(function () {
  $(".tagcloud_button").click(function () {
    if ($(".tag-cloud-link").hasClass("tag-cloud-link-show")) {
      $('.tag-cloud-link').removeClass("tag-cloud-link-show");
      $('.tagcloud_button').html("Смотреть все");
    } else {
      $('.tag-cloud-link').addClass("tag-cloud-link-show");
      $('.tagcloud_button').html("Свернуть");
    }
  });
});

//копирование url страницы по нажатию на кнопку
window.addEventListener("load", function () {
  document.querySelector('.copy_link').onclick = () => {
    window.event.preventDefault();
    let copytext = document.createElement('input')
    copytext.value = window.location.href
    document.body.appendChild(copytext)
    copytext.select()
    document.execCommand('copy')
    document.body.removeChild(copytext)
  }
});


const htmlPad =
  window.innerWidth - document.querySelector("html").offsetWidth + "px";
if (document.body.clientWidth < 632) {
  if (document.querySelector(".bg-animation"))
    document.querySelector(".bg-animation").remove();
}

const imageBoxBubbles = document.querySelectorAll(".image-box-bubbles");

if (imageBoxBubbles[0]) {
  let imageSrc = imageBoxBubbles[0].getAttribute("src").split("/");
  if (document.body.clientWidth < 555) {
    imageSrc[imageSrc.length - 1] = "image-mob.json";
    imageBoxBubbles.forEach((item) => {
      item.setAttribute("src", imageSrc.join("/"));
    });
  } else if (document.body.clientWidth < 1000) {
    imageSrc[imageSrc.length - 1] = "image-tab.json";
    imageBoxBubbles.forEach((item) => {
      item.setAttribute("src", imageSrc.join("/"));
    });
  } else if (document.body.clientWidth > 1000) {
    imageSrc[imageSrc.length - 1] = "image-pk.json";
    imageBoxBubbles.forEach((item) => {
      item.setAttribute("src", imageSrc.join("/"));
    });
  }
}

document.addEventListener("DOMContentLoaded", () => {
  //@svg animate
  const logoFirstLetter = document.querySelector("#paint0_linear");
  const logoSecondLetter = document.querySelector("#paint1_linear");
  const mainTitle = document.querySelector("h1.hero__title");
  let startPositionL1 = logoFirstLetter.getAttribute("x1");
  let startPositionL2 = logoSecondLetter.getAttribute("x1");
  let svgFlag = true;
  if (document.body.clientWidth > 1000) {
    setInterval(() => {
      if (+startPositionL2 < 10 && +startPositionL1 > 94) svgFlag = true;
      else if (+startPositionL2 > 84 && +startPositionL1 < 20) svgFlag = false;
      if (svgFlag) {
        startPositionL1--;
        startPositionL2++;
      } else {
        startPositionL1++;
        startPositionL2--;
      }
      logoFirstLetter.setAttribute("x1", `${startPositionL1}`);
      logoSecondLetter.setAttribute("x1", `${startPositionL2}`);
    }, 30);

    //@parallax
    const head = document.querySelector(".hero__title");
    if (head) {
      window.addEventListener("scroll", function (e) {
        let headerToTop = head.getBoundingClientRect().top;
        if (headerToTop > -600)
          mainTitle.style.backgroundPositionY = `${headerToTop * 0.1}%`;
      });
    }
  }

  //@menu-pk
  let activeMenuItem = document.querySelector("#header-menu > li");
  let pkMenuBtn = document.querySelector(".header-menu-btn");
  document.querySelectorAll("#header-menu > li").forEach((elem) =>
    elem.addEventListener("mouseover", (e) => {
      if (
        activeMenuItem.parentNode === e.target.closest(".menu-item").parentNode
      ) {
        activeMenuItem.classList.remove("active");
        activeMenuItem = e.target.closest(".menu-item");
        activeMenuItem.classList.add("active");
      }
    }),
  );

  pkMenuBtn.addEventListener("mouseover", (e) => {
    // console.log(e.target.closest(".header-menu-btn"));
    if (
      e.target.closest(".main-menu-btn") ||
      e.target.closest(".btn-border-wrp")
    ) {
      addHtmlPadd();
    }
  });
  pkMenuBtn.addEventListener("mouseout", (e) => {
    document.getElementsByTagName("html")[0].style.paddingRight = "0px";
    document.getElementsByTagName("html")[0].classList.remove("html-noscroll");
    if (
      e.target.closest(".header-nav-wrapper") === null ||
      e.target.classList.contains(".btn-border-wrp") ||
      e.target.classList.contains(".main-menu-btn")
    ) {
      if (activeMenuItem) activeMenuItem.classList.remove("active");
    }
  });
  // @mobile-menu
  let menuCheckBox = document.getElementById("mobile-menu-check");
  let mobileMenuWrapperWP = document.querySelectorAll(
    ".menu-menu-1-container",
  )[1];
  let headerMenuMobile = document.getElementById("header-menu-mobile");
  let serviceTitle = document.createElement("h5");
  let activeItem;

  serviceTitle.classList.add("menu-active-link");
  serviceTitle.textContent = "услуги";
  headerMenuMobile.prepend(serviceTitle);
  menuCheckBox.addEventListener("click", () => {
    document.getElementsByTagName("html")[0].classList.toggle("html-noscroll");
    if (activeItem) {
      activeItem.classList.remove("active");
      headerMenuMobile.classList.remove("mobile-menu_hide");
      document
        .querySelector(".main-small-mobile-menu")
        .classList.remove("hide");
      document
        .querySelector(".mobile-menu-wrapper")
        .classList.remove("sub-menu-open");
    }
  });

  const backBtnTpl = document.getElementById("mobile-menu-back");
  let mobileFirstLevelLinks = document.querySelectorAll(
    "#header-menu-mobile > li",
  );
  mobileFirstLevelLinks.forEach((element) => {
    let forLiBack = backBtnTpl.content.cloneNode(true);
    forLiBack
      .querySelector("a")
      .setAttribute("href", element.querySelector("a").href);
    forLiBack.querySelector("a").textContent =
      element.querySelector("a").textContent;
    element.addEventListener("click", (e) => {
      if (e.target === element && element.querySelector(".sub-menu")) {
        element.querySelector(".sub-menu").prepend(forLiBack);
        element.parentNode.classList.add("mobile-menu_hide");
        element.classList.add("active");
        activeItem = element;
        document.querySelector(".main-small-mobile-menu").classList.add("hide");
        document
          .querySelector(".mobile-menu-wrapper")
          .classList.add("sub-menu-open");
      }
    });
  });

  //@animation-tabs

  let activeAnimation = document.querySelector(".develop-tab-animation");
  document
    .querySelectorAll('input[name="animation-switch"]')
    .forEach((elem) => {
      elem.addEventListener("click", () => {
        activeAnimation.classList.remove("active");
        document.querySelector(`.${elem.id}-animation`).classList.add("active");
        activeAnimation = document.querySelector(`.${elem.id}-animation`);
      });
    });
  //@request-form/contact-form
  const requestForm = document.querySelector(".send-request__form");
  const contactForm = document.querySelector(".tmpl-contact-form");
  const popupForm = document.getElementById("popup-form");
  let validInputs = {
    text: RegExp("[A-Za-zА-Яа-я0-9_\\s+]{1,}"),
    email: RegExp("^[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$"),
    tel: RegExp("[0-9]{9,}"),

  };

  async function sendFormData(body, form) {
    try {
      let response = await fetch(
        "https://webfocus.by/wp-content/themes/webfocus/sendmail.php", {
          method: "POST",
          body: body,
        },
      );

      if (response.ok) {
        let res = await response.json();

        form.reset();
        if (form === requestForm || form === popupForm) {
          form.querySelectorAll(".request-input").forEach((elem) => {
            elem.removeAttribute("required");
          });
        } else {
          form.querySelectorAll(".format-input").forEach((elem) => {
            elem.removeAttribute("required");
          });
        }

        sendMessage(
          "Cпасибо!",
          "Ваша заявка отправлена. Дождитесь, когда консультант свяжется с вами.",
        );
        setTimeout(closeResetModal(), 2000);
      } else {
        sendMessage(
          "Произошла ошибка.",
          "Возможно, у вас отсутствует интернет-соединение. Попробуйте отправить заявку снова.",
        );
      }
    } catch (err) {
      sendMessage(
        "Произошла ошибка.",
        "Возможно, у вас отсутствует интернет-соединение. Попробуйте отправить заявку снова.",
      );
    }
  }

  if (requestForm) {
    requestForm.addEventListener("submit", (e) => {
      let flag = false;
      let validInput = 0;
      let formData = new FormData();
      e.preventDefault();
      requestForm.querySelectorAll(".request-input").forEach((elem) => {
        elem.setAttribute("required", "");
      });
      requestForm
        .querySelectorAll("input[name='project-kind']")
        .forEach((elem) => {
          if (elem.checked) {
            flag = true;
            formData.set("projectKind", elem.getAttribute("value"));
          }
        });
      Object.keys(validInputs).forEach((elem) => {
        if (
          validInputs[elem].test(
            requestForm.querySelector(`input[type="${elem}"]`).value,
          )
        ) {
          validInput++;
        }
      });

      if (
        flag &&
        validInput === 3 &&
        requestForm.querySelector("textarea").value
      ) {
        Object.keys(validInputs).forEach((elem) => {
          formData.set(
            elem,
            requestForm.querySelector(`input[type="${elem}"]`).value,
          );
        });
        formData.set(
          "description",
          requestForm.querySelector("textarea").value,
        );

        sendFormData(formData, requestForm);
      }
    });
  }
  if (contactForm) {
    contactForm.addEventListener("submit", (e) => {
      let flag = false;
      let validInput = 0;
      let formData = new FormData();
      e.preventDefault();
      document.querySelectorAll(".format-input").forEach((elem) => {
        elem.setAttribute("required", "");
      });
      contactForm
        .querySelectorAll("input[name='format-kind']")
        .forEach((elem) => {
          if (elem.checked) {
            flag = true;
            formData.set("projectKind", elem.getAttribute("value"));
          }
        });
      Object.keys(validInputs).forEach((elem) => {
        if (
          validInputs[elem].test(
            contactForm.querySelector(`input[type="${elem}"]`).value,
          )
        ) {
          validInput++;
        }
      });
      if (flag && validInput === 3) {
        Object.keys(validInputs).forEach((elem) => {
          formData.set(
            elem,
            contactForm.querySelector(`input[type="${elem}"]`).value,
          );
        });
        sendFormData(formData, contactForm);
      }
    });
  }

  if (popupForm) {
    popupForm.addEventListener("submit", (e) => {
      // let flag = false;
      let validInput = 0;
      let formData = new FormData();
      console.log('send')
      e.preventDefault();
      console.log(popupForm.querySelector('#input_file').file)
      popupForm.querySelectorAll(".request-input").forEach((elem) => {
        elem.setAttribute("required", "");
      });

      Object.keys(validInputs).forEach((elem) => {
        console.log(elem)
        if (
          validInputs[elem].test(
            popupForm.querySelector(`input[type="${elem}"]`).value,
          )
        ) {
          validInput++;
        }
      });
      if (validInput === 3) {
        Object.keys(validInputs).forEach((elem) => {
          formData.set(
            elem,
            popupForm.querySelector(`input[type="${elem}"]`).value,
          );
        });
        console.log(vacancy);
        // console.log(document.querySelector("h1.sub-hero__title").textContent);
        if (vacancy) {
          formData.set("vacancy", vacancy);
          formData.append("file", popupForm.querySelector('#input_file').files[0], popupForm.querySelector('#input_file').files[0].name)
        } else
          formData.set(
            "usluga",
            document.querySelector("h1.sub-hero__title").textContent,
          );

        sendFormData(formData, popupForm);
      }
    });
  }

  //table tabs
  let tableTabs = document.querySelectorAll(".check-box-wrp_table label");
  if (tableTabs[0]) {
    let tableTabActive = tableTabs[0];
    tableTabs.forEach((elem) => {
      elem.addEventListener("click", (e) => {
        tableTabActive.classList.remove("active");
        tableTabActive = elem;
        tableTabActive.classList.add("active");
      });
    });
  }
  //add padding

  if (
    document.body.clientWidth > 632 &&
    document.querySelector(".market-card")
  ) {
    document.querySelectorAll(".market-card").forEach((item) => {
      item.querySelector(".market-card__info").style.paddingTop = `${
        item.querySelector(".market-card__title").clientHeight - 10
      }px`;
    });
  }

  //modal-logic

  let vacancy = null;
  if (document.querySelector("section.sub-hero button.linear-link")) {
    document
      .querySelector("section.sub-hero button.linear-link")
      .addEventListener("click", (e) => {
        addHtmlPadd();
        document
          .getElementById("popup-form")
          .querySelector("legend > p").textContent =
          "Наш консультант свяжется с вами и поможет вам подобрать решение для вашей задачи.";
        document.getElementById("order-popup").classList.add("open");
      });
  }
  if (document.querySelectorAll(".table-last-row button.linear-link")) {
    document
      .querySelectorAll(".table-last-row button.linear-link")
      .forEach((elem) => {
        elem.addEventListener("click", (e) => {
          addHtmlPadd();
          document
            .getElementById("popup-form")
            .querySelector("legend > p").textContent =
            "Наш консультант свяжется с вами и поможет вам подобрать решение для вашей задачи.";
          document.getElementById("order-popup").classList.add("open");
        });
      });
  }
  if (document.querySelector(".accardion-block.vacancies")) {
    document
      .querySelectorAll(".accardion-block.vacancies .linear-hover-border-btn")
      .forEach((btn) => {
        btn.addEventListener("click", () => {
          vacancy = btn
            .closest("details")
            .querySelector("summary > h3").textContent;
          addHtmlPadd();
          document
            .getElementById("popup-form")
            .querySelector("legend > p").textContent =
            "Оставьте нам заявку с вашими данными, и наш HR свяжется с вами для дальнейших действий.";
          document.getElementById("order-popup").classList.add("open");
        });
      });
  }

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") {
      if (
        document.getElementById("order-popup").classList.contains("open") &&
        !document
        .getElementById("confirm-error-modal")
        .classList.contains("open")
      ) {
        closeResetModal();
        removeHtmlPadd();
      }
      if (
        document
        .getElementById("confirm-error-modal")
        .classList.contains("open")
      ) {
        document.getElementById("confirm-error-modal").classList.remove("open");
        if (
          !document.getElementById("order-popup").classList.contains("open")
        ) {
          removeHtmlPadd();
        }
      }
    }
  });

  if (document.getElementById("order-popup")) {
    document
      .querySelector("#order-popup .modal-close-btn")
      .addEventListener("click", closeResetModal);
    document.getElementById("order-popup").addEventListener("click", (e) => {
      if (e.target === document.getElementById("order-popup")) {
        closeResetModal();
        removeHtmlPadd();
      }
    });
  }

  if (document.getElementById("confirm-error-modal")) {
    document
      .getElementById("confirm-error-modal")
      .addEventListener("click", (e) => {
        if (e.target === document.getElementById("confirm-error-modal")) {
          document
            .querySelector("#confirm-error-modal")
            .classList.remove("open");
          if (
            !document.getElementById("order-popup").classList.contains("open")
          ) {
            removeHtmlPadd();
          }
        }
        document
          .querySelector("#confirm-error-modal .modal-close-btn")
          .addEventListener("click", () => {
            console.log("deed");
            document
              .querySelector("#confirm-error-modal")
              .classList.remove("open");
            if (
              !document.getElementById("order-popup").classList.contains("open")
            ) {
              removeHtmlPadd();
            }
          });
      });
  }

  if (
    document.body.clientWidth < 1000 &&
    document.querySelector(".partners-imgs-container")
  ) {
    document
      .querySelectorAll(".partners-imgs-container > .partner-img")
      .forEach((item) => {
        item.style.maxWidth = `${item.clientWidth * 0.9}px`;
      });
  }
  if (
    document.body.clientWidth < 555 &&
    document.querySelector(".partners-imgs-container")
  ) {
    document
      .querySelectorAll(".partners-imgs-container > .partner-img")
      .forEach((item) => {
        item.style.maxWidth = `${item.clientWidth * 0.65}px`;
      });
  }

  if (document.getElementById("question-topic")) {
    document.querySelectorAll("#labels-list li").forEach((item) => {
      item.addEventListener("click", () => {
        document.getElementById("question-topic").textContent =
          item.querySelector("span").textContent;
      });
    });
  }
});

function closeResetModal() {
  document.getElementById("order-popup").classList.remove("open");
  removeHtmlPadd();

  document
    .getElementById("popup-form")
    .querySelectorAll(".request-input")
    .forEach((elem) => {
      elem.removeAttribute("required");
    });
  document.getElementById("popup-form").reset();
}

function sendMessage(h2Content, pContent) {
  document.querySelector("#confirm-error-modal h2").textContent = h2Content;
  document.querySelector("#confirm-error-modal p").textContent = pContent;
  addHtmlPadd();
  document.querySelector("#confirm-error-modal").classList.add("open");
}

function addHtmlPadd() {
  document.getElementsByTagName("html")[0].style.paddingRight = htmlPad;
  document.getElementsByTagName("html")[0].classList.add("html-noscroll");
}

function removeHtmlPadd() {
  setTimeout(() => {
    document.getElementsByTagName("html")[0].style.paddingRight = "0px";
    document.getElementsByTagName("html")[0].classList.remove("html-noscroll");
  }, 500);
}
//
function backToMenu(element) {
  element.closest(".active").classList.remove("active");
  element.closest(".mobile-menu_hide").classList.remove("mobile-menu_hide");
  document.querySelector(".main-small-mobile-menu").classList.remove("hide");
  document
    .querySelector(".mobile-menu-wrapper")
    .classList.remove("sub-menu-open");
}

/*---------------- converter ---------------------*/

function converter() {
  if (
    !localStorage.curDateInfo ||
    new Date(JSON.parse(localStorage.curDateInfo).date).toLocaleDateString() !==
    new Date().toLocaleDateString()
  ) {
    fetch("https://www.nbrb.by/api/exrates/rates?periodicity=0")
      .then((res) => res.json())
      .then((data) => {
        let RUBCur = data.find(
          (elem) => elem.Cur_Abbreviation === "RUB",
        ).Cur_OfficialRate;
        let USDCur = data.find(
          (elem) => elem.Cur_Abbreviation === "USD",
        ).Cur_OfficialRate;
        let currency = {
          date: new Date(),
          usd: USDCur,
          rub: RUBCur,
        };
        convertPrice(RUBCur, USDCur);
        localStorage.setItem("curDateInfo", JSON.stringify(currency));
      })
      .catch((err) => {
        convertPrice(3.53, 2.63);
      });
  } else {
    convertPrice(
      JSON.parse(localStorage.getItem("curDateInfo")).rub,
      JSON.parse(localStorage.getItem("curDateInfo")).usd,
    );
  }
}

function convertPrice(rub, usd) {
  document.querySelectorAll(".price-row").forEach((elem) => {
    if (elem.querySelector(".byn-price")) {
      elem.querySelector(".RUB-convert").textContent =
        Math.round(+elem.querySelector(".byn-price").textContent / rub) * 100;
      elem.querySelector(".USD-convert").textContent = Math.round(
        Math.round(+elem.querySelector(".byn-price").textContent / usd / 10) *
        10,
      );
    }
  });
}
converter();
/*---------------- end converter ---------------------*/

wow = new WOW({
  boxClass: "wow", // default
  animateClass: "animated", // default
  offset: 0, // default
  mobile: true, // default
  live: true, // default
});
wow.init();

/*---------------- couner ---------------------*/
const statistickItems = document.querySelectorAll(".statistic-item-count");

statistickItems.forEach((item) => {
  if (item) {
    const observer = new IntersectionObserver((entries) => {
      observerCallback(entries, item.classList);
    });
    observer.observe(item);
  }
});

const observerCallback = (entries, classes) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting && innerCount[`${classes[1]}Repeat`]) {
      innerCount[`${classes[1]}Repeat`] = false;
      let count = 0;
      setInterval(() => {
        if (count < innerCount[classes[1]] + 1)
          entries[0].target.textContent = count;
        count++;
      }, innerCount[`${classes[1]}Interval`]);
    }
  });
};

let innerCount = {
  year: 10,
  staff: 50,
  clients: 500,
  yearInterval: 180,
  staffInterval: 40,
  clientsInterval: 1,
  yearRepeat: true,
  staffRepeat: true,
  clientsRepeat: true,
};

/*----------------end counter ---------------------*/

/*----------------start slick ---------------------*/

$(".reviews-slider").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  swipeToSlide: true,
  appendDots: ".reviews-slider-dots-wrp",
  prevArrow: ".reviews-slider-prev-btn",
  nextArrow: ".reviews-slider-next-btn",
  variableWidth: true,
  initialSlide: 0,
  responsive: [{
      breakpoint: 1000,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
      },
    },
  ],
});

$(".case-slider").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: ".reviews-slider-prev-btn",
  nextArrow: ".reviews-slider-next-btn",
});


//Номер слайда
// var slider = $('.case-slider');
//     total = slider.slick("getSlick").slideCount;
//     currentSlide = $('.case-slider').slick('slickCurrentSlide');
//     slide = currentSlide + 1;
//     if (total > 1) {
//       $(".sl-count__current").text(slide);
//       $('.sl-count__total').text(total);
//   }
// $(".case-slider").on('afterChange', function (event, slick, currentSlide, nextSlide) {
//   var currentSl = currentSlide + 1;
//   $(".sl-count__current").text(currentSl);
// });

// $(".seo-cards").slick({
//   infinite: false,
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   dots: true,
//   swipeToSlide: false,
//   appendDots: ".seo-slider-dots-wrp",
//   prevArrow: ".seo-slider-prev-btn",
//   nextArrow: ".seo-slider-next-btn",
//   variableWidth: true,
//   initialSlide: 0,
// });

// if ($(".seo-cards").slick("getSlick").slideCount < 3) {
//   $(".seo-cards").addClass("no-dots");
// }

// if (document.body.clientWidth < 556) {
//   $(".our-team__card-slider-wrp .our-team__cards-slider").slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     dots: true,
//     swipeToSlide: true,
//     appendDots: ".team-slider-dots-wrp",
//     prevArrow: ".team-slider-prev-btn",
//     nextArrow: ".team-slider-next-btn",
//   });
// }

// $(".other-posts-slider").slick({
//   infinite: false,
//   arrows: false,
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   dots: false,
//   swipeToSlide: true,
//   variableWidth: true,
//   initialSlide: 0,
// });

// $("#labels-list").slick({
//   infinite: true,
//   arrows: false,
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   dots: false,
//   swipeToSlide: true,
//   variableWidth: true,
//   initialSlide: 0,
// });

// $(".case-slider-wrapper>div").slick({
//   infinite: true,
//   arrows: false,
//   slidesToShow: 5,
//   dots: false,
//   swipeToSlide: true,
//   variableWidth: true,
//   initialSlide: 3,
//   centerMode: true,
//   touchThreshold:50
// });
// $(".case-slider-wrapper>div").flickity({
//   // options
//   cellAlign: 'left',
//   contain: true
// })

/*----------------end slick ---------------------*/


/*---------------- hover3d ---------------------*/
jQuery(document).ready(function ($) {
  $(".floating-card-img-wrp").hover3d({
    selector: ".floating-card-gray-layer",
    perspective: 800,
  });
});

lightbox.option({
  resizeDuration: 200,
  wrapAround: true,
  disableScrolling: true,
});

// (function () {
//   function scrollHorizontally(e) {
//     e = window.event || e;
//     var delta = Math.max(-1, Math.min(1, e.wheelDelta || -e.detail));
//     document.getElementById("labales-list").scrollLeft -= delta * 300; // Multiplied by 40
//     e.preventDefault();
//   }
//   if (document.getElementById("labales-list").addEventListener) {
//     // IE9, Chrome, Safari, Opera
//     document.getElementById("labales-list").addEventListener("mousewheel", scrollHorizontally, false);
//     // Firefox
//     document.getElementById("labales-list").addEventListener("DOMMouseScroll", scrollHorizontally, false);
//   } else {
//     // IE 6/7/8
//     document.getElementById("labales-list").attachEvent("onmousewheel", scrollHorizontally);
//   }
// })();

/*---------------- end  hover3d ---------------------*/

/*-------- start front-page animation change --------*/

function animationListLinkEditor() {
  const currentLink = document.querySelector(
    ".animated-tabs-list>input[checked]",
  ).nextSibling.nextSibling.childNodes[0].childNodes[1].href;
}

/*-------- end front-page animation change --------*/