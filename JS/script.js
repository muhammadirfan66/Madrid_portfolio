// Hero Split Swiper
var heroSwiper = new Swiper('.hero-swiper', {
  slidesPerView: 1,
  loop: true,
  speed: 700,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: '.hero-btn-next',
    prevEl: '.hero-btn-prev',
  },
  pagination: {
    el: '.hero-pagination',
    clickable: true,
  },
});

// Card Swiper (section anggota tim)
var swiper = new Swiper('.slide-container', {
  slidesPerView: 1,
  spaceBetween: 24,
  grabCursor: true,
  centeredSlides: false,
  keyboard: {
    enabled: true,
  },
  breakpoints: {
    480: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 24,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 28,
    },
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});
