$(document).ready(function () {
  // Начало яндекс карт
  //Переменная для включения/отключения индикатора загрузки
  var spinner = $('.ymap-container').children('.loader');
  //Переменная для определения была ли хоть раз загружена Яндекс.Карта (чтобы избежать повторной загрузки при наведении)
  var check_if_load = false;
  //Необходимые переменные для того, чтобы задать координаты на Яндекс.Карте
  var myMapTemp, myPlacemarkTemp;

  //Функция создания карты сайта и затем вставки ее в блок с идентификатором &#34;map-yandex&#34;
  function init() {
    var myMapTemp = new ymaps.Map("map", {
      center: [7.8907521, 98.2947415], // координаты центра на карте
      zoom: 17, // коэффициент приближения карты
    });

    // Получаем первый экземпляр коллекции слоев, потом первый слой коллекции
    var layer = myMapTemp.layers.get(0).get(0);

    // Решение по callback-у для определения полной загрузки карты
    waitForTilesLoad(layer).then(function () {
      // Скрываем индикатор загрузки после полной загрузки карты
      spinner.removeClass('is-active');
    });
  }

  // Функция для определения полной загрузки карты (на самом деле проверяется загрузка тайлов) 
  function waitForTilesLoad(layer) {
    return new ymaps.vow.Promise(function (resolve, reject) {
      var tc = getTileContainer(layer), readyAll = true;
      tc.tiles.each(function (tile, number) {
        if (!tile.isReady()) {
          readyAll = false;
        }
      });
      if (readyAll) {
        resolve();
      } else {
        tc.events.once("ready", function () {
          resolve();
        });
      }
    });
  }

  function getTileContainer(layer) {
    for (var k in layer) {
      if (layer.hasOwnProperty(k)) {
        if (
          layer[k] instanceof ymaps.layer.tileContainer.CanvasContainer
          || layer[k] instanceof ymaps.layer.tileContainer.DomContainer
        ) {
          return layer[k];
        }
      }
    }
    return null;
  }

  // Функция загрузки API Яндекс.Карт по требованию (в нашем случае при наведении)
  function loadScript(url, callback) {
    var script = document.createElement("script");

    if (script.readyState) {  // IE
      script.onreadystatechange = function () {
        if (script.readyState == "loaded" ||
          script.readyState == "complete") {
          script.onreadystatechange = null;
          callback();
        }
      };
    } else {  // Другие браузеры
      script.onload = function () {
        callback();
      };
    }

    script.src = url;
    document.getElementsByTagName("head")[0].appendChild(script);
  }

  // Основная функция, которая проверяет когда мы навели на блок с классом &#34;ymap-container&#34;
  var ymap = function () {
    function showCard() {
      if (!check_if_load) { // проверяем первый ли раз загружается Яндекс.Карта, если да, то загружаем

        // Чтобы не было повторной загрузки карты, мы изменяем значение переменной
        check_if_load = true;

        // Показываем индикатор загрузки до тех пор, пока карта не загрузится
        spinner.addClass('is-active');

        // Загружаем API Яндекс.Карт
        loadScript("https://api-maps.yandex.ru/2.1/?apikey=0e798ebc-5522-42c1-a008-3a000533b325&lang=ru_RU", function () {
          // Как только API Яндекс.Карт загрузились, сразу формируем карту и помещаем в блок с идентификатором &#34;map-yandex&#34;
          ymaps.load(init);
        });
      }
    }

    $('.ymap-container').mouseover(showCard);
  }

  $(function () {

    //Запускаем основную функцию
    ymap();

  });
  // Конец яндекс карт


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
  $('.newsletter-parallax').parallax({ imageSrc: 'img/newsletter-bg.jpg', speed: 0.7 });
  // Конец кода эффекта параллакса в секции newsletter

  // Код для главного меню на мобильной версии
  var navbarButton = $('.menu-button');
  navbarButton.on('click', function () {
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

  function openModal() {
    modalOverlay.addClass('modal__overlay--visible')
    modalDialog.addClass('modal__dialog--visible')
    $(document).on('keydown', function (e) {
      if (e.which === 27) closeModal()
    });
  }

  function closeModal(event) {
    // Проверка на сущестовавание event, потому что вызов данного метода из метода open,
    // когда мы нажимаем esc не передает нам event
    if (event !== undefined) event.preventDefault()
    modalOverlay.removeClass('modal__overlay--visible')
    modalDialog.removeClass('modal__dialog--visible')
  }

  // Закрытие модального окна при клике вне области модального окна
  $(document).mouseup(function (event) { // событие клика по веб-документу
    if (!modalDialog.is(event.target) // если клик был не по нашему блоку
      && modalDialog.has(event.target).length === 0) { // и не по его дочерним элементам
      closeModal(); // скрываем его
    }
  });
  // Конец кода модального окна

  // Начало кода для валидации форм на сайте
  $('.form').each(function () {
    $(this).validate({
      "messages": {
        "name": {
          required: "Please, enter your fullname",

        },
        "phone": {
          required: "Please, enter your phone",
          minlength: "Please enter 10 characters number"
        },
        "email": {
          required: "We need your email address to contact you",
          email: "Email must be a format of name@domain.com"
        },
      },
      "rules": {
        name: {
          minlength: 2,
          maxlength: 20
        },
        phone: {
          minlength: 16,
        },
      },
    })
  })
  AOS.init();
});