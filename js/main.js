$(document).ready(function() {
  // Начало кода яндекс карт на сайте
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
  // Конец кода яндекс карт

  // Код слайдера в секции отель
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
  // Конец кода слайдера в секции отель 
  
  // Код для слайдера в секции отзывов
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
  // Конец кода слайдера в секции отзывов

  // Код для эффекта параллакса в секции newsletter
  $('.newsletter-parallax').parallax({imageSrc: 'img/newsletter-bg.jpg', speed: 0.7});
  // Конец кода эффекта параллакса в секции newsletter

  // Код для главного меню на мобильной версии
  var navbarButton = $('.menu-button');
  navbarButton.on('click', function(){
    $('.navbar-bottom').toggleClass('navbar-bottom--visible');
  });
  // Конец кода главного меню

  // Код для модального окна
  var modalOpenButton = $('[data-toggle=modal]');
  var modalCloseButton = $('.modal__close');
  var modalOverlay = $('.modal__overlay');
  var modalDialog = $('.modal__dialog');
  modalOpenButton.on('click', openModal);
  modalCloseButton.on('click', closeModal);

  function openModal(){
    modalOverlay.addClass('modal__overlay--visible')
    modalDialog.addClass('modal__dialog--visible')
    $(document).on('keydown', function(e){
      if (e.which === 27) closeModal()
    });
  }

  function closeModal(event){
    // Проверка на сущестовавание event, потому что вызов данного метода из метода open,
    // когда мы нажимаем esc не передает нам event
    if (event !== undefined) event.preventDefault()
    modalOverlay.removeClass('modal__overlay--visible')
    modalDialog.removeClass('modal__dialog--visible')
  }

  // Закрытие модального окна при клике вне области модального окна
  $(document).mouseup(function (event){ // событие клика по веб-документу
		if (!modalDialog.is(event.target) // если клик был не по нашему блоку
      && modalDialog.has(event.target).length === 0) { // и не по его дочерним элементам
      closeModal(); // скрываем его
    }
  });
  // Конец кода модального окна
});