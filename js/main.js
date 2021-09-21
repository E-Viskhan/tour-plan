const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,
  keyboard: {
  enabled: true,
},

  // Navigation arrows
  navigation: {
    nextEl: '.slider-button--next',
    prevEl: '.slider-button--prev',
  },
});
