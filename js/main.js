// Функция ymaps.ready() будет вызвана, когда
// загрузятся все компоненты API, а также когда будет готово DOM-дерево.
ymaps.ready(init);
function init(){
    // Создание карты.
    var myMap = new ymaps.Map("map", {
        // Координаты центра карты.
        // Порядок по умолчанию: «широта, долгота».
        // Чтобы не определять координаты центра карты вручную,
        // воспользуйтесь инструментом Определение координат.
        center: [7.8907521,98.2947415],
        // Уровень масштабирования. Допустимые значения:
        // от 0 (весь мир) до 19.
        zoom: 17
    });
}

var hotelSwiper = new Swiper('.hotel-slider', {
  // Optional parameters
  loop: true,
  keyboard: {
  enabled: true,
},

  // Navigation arrows
  navigation: {
    nextEl: '.hotel-slider__button--next',
    prevEl: '.hotel-slider__button--prev',
  },
});

var reviewsSlider = new Swiper('.reviews-slider', {
  // Optional parameters
  loop: true,
  keyboard: {
  enabled: true,
},

  // Navigation arrows
  navigation: {
    nextEl: '.reviews-slider__button--next',
    prevEl: '.reviews-slider__button--prev',
  },
});


$('.newsletter-parallax').parallax({imageSrc: '../img/newsletter-bg.jpg', speed: 0.7});