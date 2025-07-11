
    const swiper = new Swiper(".mySwiper", {
      loop: true,
      effect: "slide",
      autoplay: { delay: 3000, disableOnInteraction: false },
      pagination: { el: ".swiper-pagination", clickable: true },
      navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
    });

    const swiperEl1 = document.querySelector('.mySwipercards');
    Object.assign(swiperEl1, {
      slidesPerView: 4,
      spaceBetween: 30,
      centeredSlides: true,
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination-cards', 
        clickable: true,
      }
    });
    swiperEl1.initialize();


    let appendNumber = 600;
    let prependNumber = 1;

    const swiperEl = document.querySelector('swiper-container')

    Object.assign(swiperEl, {
      slidesPerView: 3,
      centeredSlides: true,
      spaceBetween: 30,
      pagination: {
        type: 'fraction',
      },
      navigation: true,
      virtual: {
        slides: (function () {
          const slides = [];
          for (var i = 0; i < 600; i += 1) {
            slides.push('Slide ' + (i + 1));
          }
          return slides;
        })(),
      },
    });

    swiperEl.initialize();

    const swiper2 = swiperEl.swiper2;

    document
      .querySelector('.slide-1')
      .addEventListener('click', function (e) {
        e.preventDefault();
        swiper2.slideTo(0, 0);
      });

    document
      .querySelector('.slide-250')
      .addEventListener('click', function (e) {
        e.preventDefault();
        swiper2.slideTo(249, 0);
      });

    document
      .querySelector('.slide-500')
      .addEventListener('click', function (e) {
        e.preventDefault();
        swiper2.slideTo(499, 0);
      });

    document
      .querySelector('.prepend-2-slides')
      .addEventListener('click', function (e) {
        e.preventDefault();
        swiper2.virtual.prependSlide([
          'Slide ' + --prependNumber,
          'Slide ' + --prependNumber,
        ]);
      });

    document
      .querySelector('.append-slide')
      .addEventListener('click', function (e) {
        e.preventDefault();
        swiper2.virtual.appendSlide('Slide ' + ++appendNumber);
      });