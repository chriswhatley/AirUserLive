import Swiper from 'swiper/bundle';

const swiper = new Swiper('.swiper-container', {
  slidesPerView: 5,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },   
    grabCursor: true, 
    breakpoints: {
      // when window width is >= 0px
      0: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      // when window width is >= 768px
      768: {
        slidesPerView: 3,
        spaceBetween: 40
      },
      // when window width is >= 1024px
      1024: {
        slidesPerView: 4,
        spaceBetween: 40
      },
      // when window width is >= 1280px
      1280: {
        slidesPerView: 5,
        spaceBetween: 50
      }
    }
});
