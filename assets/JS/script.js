      const swiper = new Swiper(".mySwiper", {
        loop: true,
        effect: "slide",
        autoplay: { 
            delay: 3000, 
            disableOnInteraction: false 
        },
        pagination: { 
            el: ".swiper-pagination", 
            clickable: true 
        },
        navigation: { 
            nextEl: ".swiper-button-next", 
            prevEl: ".swiper-button-prev" 
        },
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
