// сделать поле email
$(document).ready(function() {
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


  $('.newsletter-parallax').parallax({imageSrc: 'img/newsletter-bg.jpg', speed: 0.7});

  var navbarButton = document.querySelector('.menu-button');
  navbarButton.addEventListener('click', function(){
    document.querySelector('.navbar-bottom').classList.toggle('navbar-bottom--visible');
  });

  var modalOpenButton = $('[data-toggle=modal]');
  var modalCloseButton = $('.modal__close');
  var modalOverlay = $('.modal__overlay');
  var modalDialog = $('.modal__dialog');
  modalOpenButton.on('click', openModal);
  modalCloseButton.on('click', closeModal)
  function openModal(){
    modalOverlay.addClass('modal__overlay--visible')
    modalDialog.addClass('modal__dialog--visible')
  }

  function closeModal(event){
    event.preventDefault()
    modalOverlay.removeClass('modal__overlay--visible')
    modalDialog.removeClass('modal__dialog--visible')
  }
});